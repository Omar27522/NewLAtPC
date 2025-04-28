// Meta Tag Dash - Canvas Game

const canvas = document.getElementById('gameCanvas');
const ctx = canvas.getContext('2d');
const startBtn = document.getElementById('startBtn');
const scoreDisplay = document.getElementById('scoreDisplay');
const speedDisplay = document.getElementById('speedDisplay');
const baseSpeed = 1; // 100% at start
const factDisplay = document.getElementById('factDisplay');

// Player properties
const player = {
        width: 100,
        height: 30,
        x: canvas.width / 2 - 50,
        y: canvas.height - 50,
        speed: 8,
        dx: 0
};

// Import the necessary modules
import drawIntro from './intro.js';
import drawOutro from './outro.js';
import { goodTags, badTags } from './tags.js';

// Draw intro scene before game starts
drawIntro(ctx, canvas, goodTags, badTags);


let fallingTags = [];
let score = 149;
let gameActive = false;
let tagFallSpeed = 1;
let tagInterval;
let animationId;

// Level and advanced tag logic
let levelTwo = false;
let advancedTags = goodTags.slice(36); // All tags added after the original set
let advancedTagCounts = {};
let lastTagSaved = null;
let lastTagSavedCount = 0;

function resetGame() {
        player.x = canvas.width / 2 - player.width / 2;
        score = 0;
        fallingTags = [];
        tagFallSpeed = baseSpeed;
        scoreDisplay.textContent = 'Score: 0';
        if (speedDisplay) speedDisplay.textContent = 'Speed: 100%';
        factDisplay.textContent = '';
        levelTwo = false;
        advancedTagCounts = {};
        lastTagSaved = null;
        lastTagSavedCount = 0;

        // Randomize the rainStrings array
        shuffleArray(rainStrings);

        // Reset Matrix Rain canvases to force regeneration with shuffled strings
        matrixCanvases = [];

        // Initialize clouds
        initClouds();

        drawIntro(ctx, canvas, goodTags, badTags);
}

function drawPlayer() {
        ctx.fillStyle = 'aquamarine';
        ctx.strokeStyle = '#3366ff';
        ctx.lineWidth = 3;
        ctx.beginPath();
        ctx.roundRect(player.x, player.y, player.width, player.height, 10);
        ctx.fill();
        ctx.stroke();
        ctx.fillStyle = '#3366ff';
        ctx.font = 'bold 20px monospace';
        ctx.textAlign = 'center';
        ctx.fillText('<meta>', player.x + player.width / 2, player.y + 22);
}

function drawTag(tagObj) {
        ctx.fillStyle = tagObj.good ? 'aquamarine' : 'rgba(255,99,99,0.85)';
        ctx.strokeStyle = tagObj.good ? '#3366ff' : '#b22222';
        ctx.lineWidth = 2;
        ctx.beginPath();
        ctx.roundRect(tagObj.x, tagObj.y, tagObj.width, tagObj.height, 8);
        ctx.fill();
        ctx.stroke();
        ctx.fillStyle = tagObj.good ? '#3366ff' : '#fff';
        ctx.font = 'bold 18px monospace';
        ctx.textAlign = 'center';
        ctx.fillText(tagObj.tag, tagObj.x + tagObj.width / 2, tagObj.y + 22);
}

function spawnTag() {
        let tagObj;
        // 30% chance of bad tag, 70% chance of good/advanced tag
        if (Math.random() < 0.3) {
                tagObj = badTags[Math.floor(Math.random() * badTags.length)];
                tagObj.good = false;
        } else if (score >= 150 && Math.random() < Math.min(0.5, 0.2 + (score - 150) / 500)) {
                // Level two: introduce advanced tags with increasing frequency
                tagObj = advancedTags[Math.floor(Math.random() * advancedTags.length)];
                tagObj.good = true;
        } else {
                tagObj = goodTags[Math.floor(Math.random() * goodTags.length)];
                tagObj.good = true;
        }
        const x = Math.random() * (canvas.width - 110);
        fallingTags.push({
                ...tagObj,
                x: x,
                y: -40,
                width: 110,
                height: 32,
        });
}

// Track last tag saved and win condition for advanced tags
function handleGoodTagCollected(tagObj) {
        if (score >= 150) {
                // Level two: set lastTagSaved if not set or if player collects a new tag
                if (!levelTwo) {
                        levelTwo = true;
                        lastTagSaved = tagObj.tag;
                        lastTagSavedCount = 1;
                        advancedTagCounts[lastTagSaved] = 1;
                } else if (tagObj.tag === lastTagSaved) {
                        lastTagSavedCount++;
                        advancedTagCounts[lastTagSaved] = lastTagSavedCount;
                } else {
                        // Only update lastTagSaved if this is the first time collecting a different tag after level two
                        lastTagSaved = tagObj.tag;
                        lastTagSavedCount = 1;
                        advancedTagCounts[lastTagSaved] = 1;
                }
                // Show counter in UI
                factDisplay.innerHTML = `Saved <span style='color:aquamarine;'>${lastTagSavedCount}</span> of <b>${lastTagSaved}</b> (collect 100 to win!)`;
                // Win condition
                if (lastTagSavedCount >= 100) {
                        gameActive = false;
                        cancelAnimationFrame(animationId);
                        factDisplay.innerHTML = `<span style='color:aquamarine; font-size:1.3em;'>Victory!</span> You saved 100 <b>${lastTagSaved}</b> tags!`;
                        startBtn.disabled = false;
                        return true;
                }
        }
        return false;
}

function movePlayer() {
        player.x += player.dx;
        // Clamp to canvas
        if (player.x < 0) player.x = 0;
        if (player.x + player.width > canvas.width) player.x = canvas.width - player.width;
}

function moveTags() {
        for (let tag of fallingTags) {
                tag.y += tagFallSpeed;
        }
        // Remove tags that fall off the bottom
        fallingTags = fallingTags.filter(tag => tag.y < canvas.height + 10);
}

// For bounce animation
let bounceAnimations = [];

// Quiz variables
let showQuiz = false;
let quizOptions = [];
let correctAnswerIndex = 0;
let tagClickable = false;
let currentTagHitbox = null;

function checkCollisions() {
        for (let i = 0; i < fallingTags.length; i++) {
                const tag = fallingTags[i];
                if (
                        tag.x < player.x + player.width &&
                        tag.x + tag.width > player.x &&
                        tag.y < player.y + player.height &&
                        tag.y + tag.height > player.y
                ) {
                        if (tag.good) {
                                // Good tag collected
                                score += 1;
                                scoreDisplay.textContent = 'Score: ' + score;

                                // Always update the last tag saved regardless of level
                                lastTagSaved = tag.tag;

                                // Increment scroll offset by 5 for each score increase (faster scrolling)
                                scrollOffset += 5;

                                // Change color every 10 score points
                                if (Math.floor(score / 10) > Math.floor((score - 1) / 10)) {
                                        // We've crossed a multiple of 10 boundary
                                        currentColorIndex = (currentColorIndex + 1) % rainColors.length;

                                        // Regenerate the Matrix Rain canvases with the new color
                                        matrixCanvases = [];
                                }

                                // (Matrix rain speed is now handled by tick-based logic, not here)

                                // Call advanced win logic
                                const win = handleGoodTagCollected(tag);
                                factDisplay.textContent = tag.fact;
                                // Start bounce animation at tag's position
                                bounceAnimations.push({
                                        tag: {
                                                ...tag
                                        },
                                        frame: 0,
                                        maxFrames: 18
                                });
                                fallingTags.splice(i, 1);
                                tagFallSpeed += 0.109; // Increase speed by 0.109 each score
                                if (speedDisplay) speedDisplay.textContent = 'Speed: ' + Math.round((tagFallSpeed / baseSpeed) * 100) + '%';
                                if (win) return;
                                return;
                        } else {
                                // Bad tag hit
                                endGame(tag.fact);
                                return;
                        }
                }
        }
}

function endGame(message) {
        console.log('Game ending with message:', message);
        gameActive = false;
        clearInterval(tagInterval);
        cancelAnimationFrame(animationId);
        startBtn.disabled = false;

        // Use the message from the bad tag
        let customMessage = message || 'Error ➡️ "The code is broken!"';

        // Clear the fact display
        factDisplay.textContent = '';

        console.log('About to call drawOutro with message:', customMessage);
        // Call drawOutro with all required parameters
        drawOutro(ctx, canvas, customMessage, {
            lastTagSaved,
            showQuiz,
            tagClickable,
            currentTagHitbox,
            score,
            factDisplay,
            startBtn,
            gameActive,
            goodTags,
            shuffleArray
        });
}
// Cloud background
const clouds = [];
const numClouds = 10;

// Initialize clouds
function initClouds() {
        clouds.length = 0; // Clear existing clouds
        for (let i = 0; i < numClouds; i++) {
                clouds.push({
                        x: Math.random() * canvas.width,
                        y: Math.random() * canvas.height * 0.7, // Keep clouds in upper 70% of screen
                        width: 100 + Math.random() * 150,
                        height: 50 + Math.random() * 50,
                        speed: 0.2 + Math.random() * 0.3, // Slow movement
                        opacity: 0.1 + Math.random() * 0.5 // Very transparent
                });
        }
}

// Draw clouds
function drawClouds() {
        ctx.save();

        // Move clouds
        for (let cloud of clouds) {
                cloud.x += cloud.speed;
                if (cloud.x > canvas.width + cloud.width) {
                        // Reset cloud position when it moves off screen
                        cloud.x = -cloud.width;
                        cloud.y = Math.random() * canvas.height * 0.7;
                }

                // Draw cloud
                ctx.fillStyle = `rgba(255, 255, 255, ${cloud.opacity})`;
                ctx.beginPath();

                // Draw cloud shape (multiple overlapping circles)
                const centerX = cloud.x + cloud.width / 2;
                const centerY = cloud.y + cloud.height / 2;
                const radiusX = cloud.width / 2;
                const radiusY = cloud.height / 2;

                // Main ellipse
                ctx.ellipse(centerX, centerY, radiusX, radiusY, 0, 0, Math.PI * 2);

                // Additional circles to create cloud shape
                ctx.ellipse(centerX - radiusX * 0.5, centerY, radiusX * 0.7, radiusY * 0.8, 0, 0, Math.PI * 2);
                ctx.ellipse(centerX + radiusX * 0.5, centerY, radiusX * 0.7, radiusY * 0.8, 0, 0, Math.PI * 2);
                ctx.ellipse(centerX, centerY - radiusY * 0.3, radiusX * 0.8, radiusY * 0.6, 0, 0, Math.PI * 2);

                ctx.fill();
        }

        ctx.restore();
}

// Import the tags from tags.js
import { rainColors } from './rainColors.js';
// Matrix-style Digital Rain background


// Current color index and last color change score
let currentColorIndex = Math.floor(Math.random() * rainColors.length); // Start with random color
let lastColorChangeScore = 0;

// Function to shuffle an array (Fisher-Yates algorithm)
function shuffleArray(array) {
        for (let i = array.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));
                [array[i], array[j]] = [array[j], array[i]];
        }
        return array;
}

// Import the strings from rainStrings.js
import { rainStrings, rainFontSize } from './rainStrings.js';

let rainColumns, rainDrops;

function initMatrixRain() {
        rainColumns = Math.floor(canvas.width / rainFontSize);
        rainDrops = [];
        for (let i = 0; i < rainColumns; i++) {
                rainDrops[i] = Math.random() * canvas.height / rainFontSize;
        }
}

// Function to draw Matrix Rain on any canvas context as a single column
function drawMatrixRainToCanvas(context, layerIndex = 0) {
        context.save();
        context.globalAlpha = 0.5; // Semi-transparent
        context.font = 'bold ' + (rainFontSize * 0.7) + 'px monospace'; // Smaller font size
        context.fillStyle = rainColors[currentColorIndex]; // Use current color from the array
        context.shadowColor = "red";
        context.shadowBlur = 0;
        // Text alignment will be set randomly for each text element

        // Create a unique seed for this layer
        const layerSeed = layerIndex * 1000;

        // Single column in the center with very tight vertical spacing
        const centerX = canvas.width / 2;
        const rowSpacing = rainFontSize * 0.8; // Much tighter vertical spacing
        const numRows = Math.ceil(canvas.height / rowSpacing) + 30; // Add more rows for seamless scrolling

        for (let row = 0; row < numRows; row++) {
                // Use deterministic randomness based on position and layer
                const randomValue = Math.sin(row * 78.233 + layerSeed) * 43758.5453;
                const randomIndex = Math.abs(randomValue) % rainStrings.length;

                // Use the full rainStrings array with all the code examples
                const text = rainStrings[Math.floor(randomIndex)];

                // Position text in center column
                const y = row * rowSpacing;

                // Skip more positions to eliminate any chance of overlap
                if ((row + layerIndex) % 2 === 0) { // Only show every other row
                        // Randomly choose text alignment: left, center, or right
                        const alignments = ['left', 'right'];
                        const alignIndex = Math.floor(Math.abs(Math.sin(row * 12.34 + layerIndex * 56.78) * 43758.5453) % 2);
                        context.textAlign = alignments[alignIndex];

                        // Adjust x position based on alignment
                        let xPos = centerX;
                        if (context.textAlign === 'left') {
                                xPos = centerX - 150; // Shift left
                        } else if (context.textAlign === 'right') {
                                xPos = centerX + 150; // Shift right
                        }

                        context.fillText(text, xPos, y);
                }
        }
        context.restore();
}

// Original drawMatrixRain function (now only used for the initial draw)
function drawMatrixRain() {
        drawMatrixRainToCanvas(ctx);
}

// Call initMatrixRain on load and resize
window.addEventListener('resize', () => {
        rainColumns = Math.floor(canvas.width / rainFontSize);
        rainDrops = [];
        for (let i = 0; i < rainColumns; i++) {
                rainDrops[i] = Math.random() * canvas.height / rainFontSize;
        }
});

initMatrixRain();

// --- Matrix Rain Control ---
let matrixRainDrawn = false; // Flag to track if Matrix Rain has been drawn
let lastRainUpdate = 0;
const rainFrameInterval = Number.MAX_SAFE_INTEGER; // Effectively never update

// --- Matrix Rain Speed Control (disabled) ---
let rainSpeed = 1; // Completely frozen
let rainLastTickTime = performance.now();
let rainTickAccumulator = 0; // For sub-row increments

// Create multiple off-screen canvases to create scrolling effect
let matrixCanvases = [];
let scrollOffset = 0;
const numMatrixLayers = 3; // Number of layers for seamless scrolling

function draw() {
        // Initialize the matrix canvases if they don't exist
        if (matrixCanvases.length === 0) {
                for (let i = 0; i < numMatrixLayers; i++) {
                        const newCanvas = document.createElement('canvas');
                        newCanvas.width = canvas.width;
                        newCanvas.height = canvas.height;
                        const newCtx = newCanvas.getContext('2d');

                        // Draw a unique Matrix Rain pattern on each canvas
                        drawMatrixRainToCanvas(newCtx, i);
                        matrixCanvases.push(newCanvas);
                }
        }

        // Clear the main canvas
        ctx.clearRect(0, 0, canvas.width, canvas.height);

        // Draw clouds as the background layer
        drawClouds();

        // No automatic scrolling - scrollOffset is only updated when score increases
        // This is handled in the checkCollisions function

        // Draw the matrix layers with scrolling effect
        for (let i = 0; i < numMatrixLayers; i++) {
                // Calculate y position with wrapping for seamless scrolling
                const y = (scrollOffset + i * canvas.height) % (canvas.height * numMatrixLayers);

                // Draw each layer at its calculated position
                ctx.drawImage(matrixCanvases[i], 0, y - canvas.height);
                ctx.drawImage(matrixCanvases[i], 0, y);
                ctx.drawImage(matrixCanvases[i], 0, y + canvas.height);
        }

        // Matrix Rain is now completely static - no need for movement calculations

        // Draw last saved tag in background (if set)
        if (lastTagSaved) {
                ctx.save();
                ctx.globalAlpha = 0.5491;
                ctx.font = 'bold 90px monospace';
                ctx.textAlign = 'center';
                ctx.fillStyle = '#3366ff';
                ctx.shadowColor = 'black';
                ctx.shadowBlur = 8;
                ctx.fillText(lastTagSaved, canvas.width / 2, canvas.height / 2 + 10);
                ctx.restore();
        }
        drawPlayer();
        for (const tag of fallingTags) {
                drawTag(tag);
        }
        // Draw bounce animations
        for (let i = 0; i < bounceAnimations.length; i++) {
                const anim = bounceAnimations[i];
                const t = anim.frame / anim.maxFrames;
                // Bounce scale: up, then down
                const scale = 1 + 0.45 * Math.sin(Math.PI * t);
                ctx.save();
                ctx.translate(anim.tag.x + anim.tag.width / 2, anim.tag.y + anim.tag.height / 2);
                ctx.scale(scale, scale);
                ctx.globalAlpha = 1 - t;
                ctx.font = 'bold 18px monospace';
                ctx.textAlign = 'center';
                ctx.fillStyle = anim.tag.good ? '#3366ff' : '#fff';
                ctx.shadowColor = anim.tag.good ? '#3366ff' : '#b22222';
                ctx.shadowBlur = 10;
                ctx.fillText(anim.tag.tag, 0, 8);
                ctx.restore();
                anim.frame++;
        }
        // Remove finished animations
        bounceAnimations = bounceAnimations.filter(a => a.frame < a.maxFrames);
}


function gameLoop() {
        if (!gameActive) return;
        movePlayer();
        moveTags();
        checkCollisions();
        draw();
        animationId = requestAnimationFrame(gameLoop);
}

function startGame() {
        resetGame(); // This will draw intro, but we want to clear it right away
        gameActive = true;
        startBtn.disabled = true;
        tagInterval = setInterval(spawnTag, 900);
        animationId = requestAnimationFrame(gameLoop);
}

// Keyboard controls
function keyDown(e) {
        if (!gameActive) return;
        if (e.key === 'ArrowLeft') player.dx = -player.speed;
        if (e.key === 'ArrowRight') player.dx = player.speed;
}

function keyUp(e) {
        if (e.key === 'ArrowLeft' || e.key === 'ArrowRight') player.dx = 0;
}

document.addEventListener('keydown', keyDown);
document.addEventListener('keyup', keyUp);
startBtn.addEventListener('click', startGame);

// Responsive canvas (optional: adjust canvas size on window resize)
// window.addEventListener('resize', () => {
//     canvas.width = Math.min(600, window.innerWidth - 40);
// });

import { generateQuizOptions, handleQuizAnswer } from './quiz.js';


// Remove any existing click listeners
canvas.removeEventListener('click', canvasClickHandler);

// Define a new click handler function
function canvasClickHandler(e) {
    // Only process clicks if the game is not active
    if (gameActive) return;

    // Get click coordinates relative to canvas
    const rect = canvas.getBoundingClientRect();
    const clickX = e.clientX - rect.left;
    const clickY = e.clientY - rect.top;

    console.log('Canvas clicked at:', clickX, clickY);
    console.log('Game state:', { gameActive, showQuiz, tagClickable });

    // Check if we're in quiz mode
    if (showQuiz) {
        // Handle quiz option clicks
        const optionHeight = 50;
        const optionWidth = 400;
        const startY = 150;
        const padding = 20;

        for (let i = 0; i < quizOptions.length; i++) {
            const y = startY + i * (optionHeight + padding);
            // Simple rectangular hitbox for each option
            if (clickX >= canvas.width/2 - optionWidth/2 &&
                clickX <= canvas.width/2 + optionWidth/2 &&
                clickY >= y &&
                clickY <= y + optionHeight) {

                console.log('Option clicked:', i);
                handleQuizAnswer(i);
                break;
            }
        }
    }
    // Check if we're in the end screen (game not active)
    else if (!gameActive) {
        // Check if the quiz button was clicked
        const buttonArea = {
            x: canvas.width/2 - 100,
            y: canvas.height/2 + 100,
            width: 200,
            height: 40
        };

        console.log('Button area:', buttonArea);
        console.log('Click position:', {clickX, clickY});

        if (clickX >= buttonArea.x && clickX <= buttonArea.x + buttonArea.width &&
            clickY >= buttonArea.y && clickY <= buttonArea.y + buttonArea.height) {

            console.log('Quiz button was clicked!');
            showQuiz = true;
            quizOptions = generateQuizOptions();
            console.log('Quiz options:', quizOptions);
            console.log('Correct answer index:', correctAnswerIndex);
        }
    }
}

// Add the new click handler
canvas.addEventListener('click', canvasClickHandler);

drawIntro(ctx, canvas, goodTags, badTags); // Show intro on initial page load