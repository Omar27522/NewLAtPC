// Meta Tag Dash - Canvas Game

const canvas = document.getElementById('gameCanvas');
const ctx = canvas.getContext('2d');
const startBtn = document.getElementById('startBtn');
const scoreDisplay = document.getElementById('scoreDisplay');
const speedDisplay = document.getElementById('speedDisplay');
const baseSpeed = 1; // 100% at start
const factDisplay = document.getElementById('factDisplay');

// Track the highest score achieved
let highestScore = 0;

// Player properties
const player = {
        width: 100,
        height: 30,
        x: canvas.width / 2 - 50,
        y: canvas.height - 50,
        speed: 8,
        dx: 0
};

// Draw intro scene before game starts
function drawIntro() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        // Draw bad tags as lava at bottom
        const lavaHeight = 60;
        for (let i = 0; i < badTags.length; i++) {
                ctx.fillStyle = 'rgba(255,99,99,0.85)';
                ctx.strokeStyle = '#b22222';
                ctx.lineWidth = 2;
                const width = 110,
                        height = 32;
                const x = 60 + i * 180;
                const y = canvas.height - lavaHeight + 10;
                ctx.beginPath();
                ctx.roundRect(x, y, width, height, 8);
                ctx.fill();
                ctx.stroke();
                ctx.fillStyle = '#fff';
                ctx.font = 'bold 18px monospace';
                ctx.textAlign = 'center';
                ctx.fillText(badTags[i].tag, x + width / 2, y + 22);
        }
        // Draw meta tag balancing good tags
        // meta tag base
        const metaX = canvas.width / 2 - 50;
        const metaY = canvas.height - lavaHeight - 60;
        ctx.fillStyle = 'aquamarine';
        ctx.strokeStyle = '#3366ff';
        ctx.lineWidth = 3;
        ctx.beginPath();
        ctx.roundRect(metaX, metaY, 100, 30, 10);
        ctx.fill();
        ctx.stroke();
        ctx.fillStyle = '#3366ff';
        ctx.font = 'bold 20px monospace';
        ctx.textAlign = 'center';
        ctx.fillText('</meta>', metaX + 50, metaY + 22);
        // Draw good tags as a pyramid above </meta>
        // Sort by tag length descending
        const sortedTags = goodTags.slice().sort((a, b) => b.tag.length - a.tag.length);
        // Pyramid rows: bottom 3, middle 2, top 1 (if enough tags)
        const rows = [];
        if (sortedTags.length >= 6) {
                rows.push(sortedTags.slice(0, 3)); // bottom
                rows.push(sortedTags.slice(3, 5)); // middle
                rows.push([sortedTags[5]]); // top
        } else if (sortedTags.length === 5) {
                rows.push(sortedTags.slice(0, 3));
                rows.push(sortedTags.slice(3, 5));
        } else if (sortedTags.length === 4) {
                rows.push(sortedTags.slice(0, 2));
                rows.push(sortedTags.slice(2, 4));
        } else {
                rows.push(sortedTags);
        }
        // Draw rows from bottom up
        const tagWidth = 110,
                tagHeight = 32,
                rowSpacing = 40;
        let baseY = metaY - 45;
        for (let r = 0; r < rows.length; r++) {
                const row = rows[r];
                const totalWidth = row.length * tagWidth + (row.length - 1) * 10;
                let startX = canvas.width / 2 - totalWidth / 2;
                for (let t = 0; t < row.length; t++) {
                        const tag = row[t];
                        const x = startX + t * (tagWidth + 10);
                        const y = baseY - r * rowSpacing;
                        ctx.fillStyle = 'aquamarine';
                        ctx.strokeStyle = '#3366ff';
                        ctx.lineWidth = 2;
                        ctx.beginPath();
                        ctx.roundRect(x, y, tagWidth, tagHeight, 8);
                        ctx.fill();
                        ctx.stroke();
                        ctx.fillStyle = '#3366ff';
                        ctx.font = 'bold 18px monospace';
                        ctx.textAlign = 'center';
                        ctx.fillText(tag.tag, x + tagWidth / 2, y + 22);
                }
        }

        // Draw the first good tag separated, up high
        const firstTag = goodTags[0];
        const firstX = canvas.width / 2 - 55;
        const firstY = 60;
        ctx.fillStyle = 'aquamarine';
        ctx.strokeStyle = '#3366ff';
        ctx.lineWidth = 2;
        ctx.beginPath();
        ctx.roundRect(firstX, firstY, 110, 32, 8);
        ctx.fill();
        ctx.stroke();
        ctx.fillStyle = '#3366ff';
        ctx.font = 'bold 18px monospace';
        ctx.textAlign = 'center';
        ctx.fillText(firstTag.tag, firstX + 55, firstY + 22);
        // Draw message
        ctx.fillStyle = '#3366ff';
        ctx.font = 'bold 18px sans-serif';
        ctx.textAlign = 'center';
        ctx.fillText('The <meta> tag must save the good tags', canvas.width / 2, 36);
        ctx.fillText('from the lava of bad tags!', canvas.width / 2, 60);
        ctx.font = 'bold 16px sans-serif';
        ctx.fillText('≽(•__•)≼', canvas.width / 2, canvas.height - 15);
}

// Tag properties
const goodTags = [
        // Structure
        {
                tag: '<html>',
                fact: 'Defines the root of an HTML document.'
        },
        {
                tag: '<head>',
                fact: 'Contains metadata and links to stylesheets.'
        },
        {
                tag: '<title>',
                fact: 'Specifies the title of the webpage.'
        },
        {
                tag: '<body>',
                fact: 'Contains all the visible content of the page.'
        },
        // Text Formatting
        {
                tag: '<h1>',
                fact: 'Header tag, largest.'
        },
        {
                tag: '<h2>',
                fact: 'Header tag, second largest.'
        },
        {
                tag: '<h3>',
                fact: 'Header tag, third largest.'
        },
        {
                tag: '<h4>',
                fact: 'Header tag, fourth largest.'
        },
        {
                tag: '<h5>',
                fact: 'Header tag, fifth largest.'
        },
        {
                tag: '<h6>',
                fact: 'Header tag, smallest.'
        },
        {
                tag: '<p>',
                fact: 'Defines a paragraph.'
        },
        {
                tag: '<br>',
                fact: 'Inserts a line break.'
        },
        {
                tag: '<hr>',
                fact: 'Creates a horizontal rule (divider).'
        },
        {
                tag: '<strong>',
                fact: 'Makes text bold.'
        },
        {
                tag: '<em>',
                fact: 'Makes text italic.'
        },
        // Lists
        {
                tag: '<ul>',
                fact: 'Defines an unordered (bulleted) list.'
        },
        {
                tag: '<ol>',
                fact: 'Defines an ordered (numbered) list.'
        },
        {
                tag: '<li>',
                fact: 'Represents an item in a list.'
        },
        // Links and Media
        {
                tag: '<a>',
                fact: 'Creates a hyperlink.'
        },
        {
                tag: '<img>',
                fact: 'Embeds an image.'
        },
        {
                tag: '<video>',
                fact: 'Embeds a video file.'
        },
        {
                tag: '<audio>',
                fact: 'Embeds an audio file.'
        },
        // Tables
        {
                tag: '<table>',
                fact: 'Defines a table.'
        },
        {
                tag: '<tr>',
                fact: 'Represents a table row.'
        },
        {
                tag: '<th>',
                fact: 'Defines a table header cell.'
        },
        {
                tag: '<td>',
                fact: 'Defines a table data cell.'
        },
        // Forms and Input
        {
                tag: '<form>',
                fact: 'Creates a form for user input.'
        },
        {
                tag: '<input>',
                fact: 'Defines an input field.'
        },
        {
                tag: '<button>',
                fact: 'Creates a clickable button.'
        },
        {
                tag: '<label>',
                fact: 'Labels input fields.'
        },
        // Semantic & Structural
        {
                tag: '<nav>',
                fact: 'Defines navigation links.'
        },
        {
                tag: '<main>',
                fact: 'Represents the main content of the document.'
        },
        {
                tag: '<figure>',
                fact: 'Contains media and its caption.'
        },
        {
                tag: '<figcaption>',
                fact: 'Caption for a <figure>.'
        },
        {
                tag: '<mark>',
                fact: 'Highlights text.'
        },
        {
                tag: '<time>',
                fact: 'Represents a specific time or date.'
        },
        {
                tag: '<details>',
                fact: 'Creates a disclosure widget.'
        },
        {
                tag: '<summary>',
                fact: 'Provides a summary for <details>.'
        },
        // Forms & Interactive
        {
                tag: '<select>',
                fact: 'Drop-down list.'
        },
        {
                tag: '<option>',
                fact: 'Option in a drop-down list.'
        },
        {
                tag: '<textarea>',
                fact: 'Multi-line text input.'
        },
        {
                tag: '<fieldset>',
                fact: 'Groups related form elements.'
        },
        {
                tag: '<legend>',
                fact: 'Caption for a <fieldset>.'
        },
        {
                tag: '<datalist>',
                fact: 'Provides autocomplete options.'
        },
        {
                tag: '<output>',
                fact: 'Displays the result of a calculation.'
        },
        // Media & Embeds
        {
                tag: '<iframe>',
                fact: 'Embeds another HTML page.'
        },
        {
                tag: '<canvas>',
                fact: 'Used for drawing graphics.'
        },
        {
                tag: '<svg>',
                fact: 'Scalable Vector Graphics.'
        },
        {
                tag: '<source>',
                fact: 'Specifies media resources.'
        },
        {
                tag: '<track>',
                fact: 'Provides text tracks for media.'
        },
        // Scripting & Metadata
        {
                tag: '<script>',
                fact: 'Embeds or references code.'
        },
        {
                tag: '<noscript>',
                fact: 'Fallback for users with scripts disabled.'
        },
        {
                tag: '<link>',
                fact: 'Links external resources.'
        },
        {
                tag: '<style>',
                fact: 'Embeds CSS styles.'
        },
        // Accessibility & Miscellaneous
        {
                tag: '<abbr>',
                fact: 'Abbreviation or acronym.'
        },
        {
                tag: '<cite>',
                fact: 'Cites a creative work.'
        },
        {
                tag: '<sup>',
                fact: 'Superscript text.'
        },
        {
                tag: '<sub>',
                fact: 'Subscript text.'
        },
        {
                tag: '<progress>',
                fact: 'Displays progress of a task.'
        },
        {
                tag: '<meter>',
                fact: 'Scalar measurement within a range.'
        },
        // Existing tags
        {
                tag: '<meta>',
                fact: 'The <meta> tag provides metadata about the HTML document.'
        },
        {
                tag: '<section>',
                fact: 'The <section> tag defines sections in a document.'
        },
        {
                tag: '<article>',
                fact: 'The <article> tag is for self-contained content.'
        },
        {
                tag: '<aside>',
                fact: 'The <aside> tag is for tangential content like sidebars.'
        },
        {
                tag: '<header>',
                fact: 'The <header> tag represents introductory content.'
        },
        {
                tag: '<footer>',
                fact: 'The <footer> tag represents footer content.'
        },
        {
                tag: '<code>',
                fact: 'The <code> tag displays code snippets.'
        },
];
const badTags = [{
                tag: '<badattr>',
                fact: 'Invalid attributes can break your HTML!'
        },
        {
                tag: '<wrongtag>',
                fact: 'Always use valid HTML tags.'
        },
        {
                tag: '<metaname="">',
                fact: 'Meta tags need proper attributes.'
        },
];

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

        drawIntro();
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

// Mouse tracking for hover effects
let lastMouseX = 0;
let lastMouseY = 0;
let isMouseDown = false;
let frameCount = 0; // For throttling debug logs

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
                                
                                // Update highest score if current score is higher
                                if (score > highestScore) {
                                    highestScore = score;
                                }
                                
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
        gameActive = false;
        clearInterval(tagInterval);
        cancelAnimationFrame(animationId);
        // Keep the start button disabled during the outro sequence
        startBtn.disabled = true;

        // Create a custom message that includes the last tag saved info
        let customMessage = 'Error ➡️ "The code is broken!"';

        // Clear the fact display
        factDisplay.textContent = '';

        drawOutro(customMessage);
}

// Animated outro: draws a computer and animates the error message
function drawOutro(msg) {
        let opacity = 0;
        let charsToShow = 0;
        const maxOpacity = 1;
        const fadeSpeed = 0.04;
        const typeSpeed = 2; // chars per frame

        // Tag animation variables
        let tagY = -50; // Start above the screen
        const tagTargetY = canvas.height / 2 - 150; // Final position above the computer
        const tagSpeed = 2; // Speed of tag falling
        let tagBounce = 0; // For bounce effect
        let tagBounceDir = 1; // Direction of bounce
        let isHovered = false; // Track hover state

        // Reset quiz state at the start
        showQuiz = false;
        quizOptions = [];
        tagClickable = false;
        
        // Tag hitbox for click detection
        let tagHitbox = {
                x: 0,
                y: 0,
                width: 0,
                height: 0
        };
        
        // Reset the global hitbox
        currentTagHitbox = null;
        
        // Make sure the start button stays disabled during the outro
        startBtn.disabled = true;
        
        // Function to check if mouse is hovering over the tag
        function checkHover() {
            if (!tagClickable || showQuiz) return false;
            
            const tagWidth = 110;
            const tagHeight = 32;
            const tagX = canvas.width / 2 - tagWidth / 2;
            const tagY2 = tagY - tagHeight / 2;
            
            return lastMouseX >= tagX && lastMouseX <= tagX + tagWidth &&
                   lastMouseY >= tagY2 && lastMouseY <= tagY2 + tagHeight;
        }

        function drawComputer() {
                ctx.clearRect(0, 0, canvas.width, canvas.height);

                // Draw last saved tag if available (above the computer)
                if (lastTagSaved && opacity > 0.3) {
                        // Update tag position with smooth animation
                        if (tagY < tagTargetY) {
                                tagY += tagSpeed;
                        } else {
                                // Add a small bounce effect when tag reaches target position
                                tagBounce += 0.1 * tagBounceDir;
                                if (Math.abs(tagBounce) > 0.5) tagBounceDir *= -1;

                                // Make tag clickable once it's in position
                                if (!tagClickable && !showQuiz) {
                                        console.log('Making tag clickable!');
                                        tagClickable = true;
                                        
                                        // Force a redraw of the hitbox
                                const tagWidth = 110;
                                const tagHeight = 32;
                                currentTagHitbox = {
                                        x: canvas.width/2 - tagWidth/2,
                                        y: tagY - tagHeight/2,
                                        width: tagWidth,
                                        height: tagHeight
                                };
                                console.log('Updated global hitbox:', currentTagHitbox);
                                }
                        }

                        // Draw tag exactly as it appears in game
                        const tagWidth = 110;
                        const tagHeight = 32;

                        // Only update hitbox if tag has reached its target position
                        if (tagY >= tagTargetY - 5) {
                                // Make tag clickable
                                tagClickable = true;
                                
                                // Update hitbox for click detection
                                const tagX = canvas.width / 2 - tagWidth / 2;
                                const tagY2 = tagY - tagHeight / 2;
                                
                                tagHitbox = {
                                        x: tagX,
                                        y: tagY2,
                                        width: tagWidth,
                                        height: tagHeight
                                };
        
                                // Always update the global hitbox for the click handler
                                // This is critical for click detection
                                currentTagHitbox = {
                                        x: tagX,
                                        y: tagY2,
                                        width: tagWidth,
                                        height: tagHeight
                                };
                                
                                // Check if mouse is over the tag (for hover effect)
                                isHovered = lastMouseX >= tagX && lastMouseX <= tagX + tagWidth &&
                                           lastMouseY >= tagY2 && lastMouseY <= tagY2 + tagHeight;
                                
                                // Debug info
                                if (frameCount % 60 === 0) { // Only log once per second
                                    console.log('Mouse position:', { x: lastMouseX, y: lastMouseY });
                                    console.log('Tag position:', currentTagHitbox);
                                    console.log('Is hovered:', isHovered);
                                    console.log('Is mouse down:', isMouseDown);
                                }
                        }

                        ctx.save();
                        ctx.globalAlpha = Math.min(opacity, 1);

                        // Variables for hover and click effects
                        let isPressed = false;
                        
                        // Check if mouse is hovering over the tag
                        if (tagClickable && !showQuiz) {
                                // Use the current mouse position for hover detection
                                // isHovered is now calculated earlier in the code for better responsiveness
                                
                                // Check if mouse is pressed down on tag
                                isPressed = isHovered && isMouseDown;
                                
                                // For debugging - draw a small dot at the mouse position
                                ctx.save();
                                ctx.fillStyle = isHovered ? 'red' : 'blue';
                                ctx.beginPath();
                                ctx.arc(lastMouseX, lastMouseY, 3, 0, Math.PI * 2);
                                ctx.fill();
                                ctx.restore();
                                
                                // Apply visual styles based on state
                                if (isPressed) {
                                        // Pressed state - darker color, inset shadow
                                        ctx.fillStyle = '#7fffd4'; // Darker aquamarine
                                        ctx.strokeStyle = '#e08800'; // Darker orange
                                        ctx.lineWidth = 3;
                                        ctx.shadowColor = '#e08800';
                                        ctx.shadowBlur = 5;
                                } else if (isHovered) {
                                        // Hover state - brighter glow
                                        ctx.fillStyle = 'aquamarine';
                                        ctx.strokeStyle = '#ffaa00'; // Brighter orange
                                        ctx.lineWidth = 3;
                                        ctx.shadowColor = '#ffaa00';
                                        ctx.shadowBlur = 15;
                                } else {
                                        // Normal clickable state
                                        ctx.fillStyle = 'aquamarine';
                                        ctx.strokeStyle = '#ff9900'; // Orange highlight
                                        ctx.lineWidth = 3;
                                        ctx.shadowColor = '#ff9900';
                                        ctx.shadowBlur = 10;
                                }
                        } else {
                                // Not clickable state
                                ctx.fillStyle = 'aquamarine';
                                ctx.strokeStyle = '#3366ff';
                                ctx.lineWidth = 2;
                        }

                        ctx.beginPath();

                        // Apply bounce effect to scale and add button-like transform when pressed
                        let scale = 1 + Math.max(0, tagBounce * 0.1);
                        
                        // If the tag is pressed, make it look like it's being pushed down
                        if (isPressed) {
                            // Smaller scale and slight y-offset for pressed effect
                            scale = scale * 0.95;
                            ctx.translate(canvas.width / 2, tagY + 2); // Move down slightly
                        } else if (isHovered) {
                            // Slightly larger scale for hover effect
                            scale = scale * 1.05;
                            ctx.translate(canvas.width / 2, tagY);
                        } else {
                            // Normal position
                            ctx.translate(canvas.width / 2, tagY);
                        }
                        
                        ctx.scale(scale, scale);

                        ctx.roundRect(-tagWidth / 2, -tagHeight / 2, tagWidth, tagHeight, 8);
                        ctx.fill();
                        ctx.stroke();

                        ctx.fillStyle = '#3366ff';
                        ctx.font = 'bold 18px monospace';
                        ctx.textAlign = 'center';
                        ctx.fillText(lastTagSaved, 0, 6); // Center text vertically

                        ctx.restore();
                }

                // Monitor
                ctx.save();
                ctx.globalAlpha = Math.min(opacity, 1);
                ctx.fillStyle = '#222';
                ctx.strokeStyle = '#3366ff';
                ctx.lineWidth = 6;
                ctx.beginPath();
                ctx.roundRect(canvas.width / 2 - 140, canvas.height / 2 - 90, 280, 120, 18);
                ctx.fill();
                ctx.stroke();
                // Screen
                ctx.fillStyle = '#111e2e';
                ctx.fillRect(canvas.width / 2 - 120, canvas.height / 2 - 72, 240, 84);
                // Stand
                ctx.fillStyle = '#444';
                ctx.fillRect(canvas.width / 2 - 22, canvas.height / 2 + 30, 44, 18);
                ctx.beginPath();
                ctx.ellipse(canvas.width / 2, canvas.height / 2 + 52, 48, 10, 0, 0, 2 * Math.PI);
                ctx.fillStyle = '#888';
                ctx.fill();
                // Keyboard
                ctx.fillStyle = '#bbb';
                ctx.fillRect(canvas.width / 2 - 70, canvas.height / 2 + 68, 140, 18);
                ctx.restore();
        }

        function animateOutro() {
                // Increment frame counter for debug logging
                frameCount++;
                
                // Check for hover state on each frame
                isHovered = checkHover();
                
                drawComputer();

                // Draw quiz if active
                if (showQuiz) {
                        drawQuiz();
                } else {
                        // Animate error message
                        ctx.save();
                        ctx.globalAlpha = Math.min(opacity, 1);
                        ctx.fillStyle = '#ff4444';
                        ctx.font = 'bold 28px monospace';
                        ctx.textAlign = 'center';
                        ctx.fillText(msg.substring(0, charsToShow), canvas.width / 2, canvas.height / 2 - 18);
                        
                        // Add hint text to click the tag if it's clickable
                        if (opacity >= 0.9 && tagClickable) {
                                // Use different color based on hover state
                                ctx.fillStyle = isHovered ? '#ffaa00' : '#ff9900';
                                ctx.font = 'bold 16px monospace';
                                ctx.textAlign = 'center';
                                ctx.fillText('Click the tag for a second chance!', canvas.width / 2, canvas.height / 2 + 125);
                                
                                // Debug hover state
                                if (frameCount % 30 === 0) {
                                    console.log('Hover state:', isHovered);
                                    console.log('Mouse position:', { x: lastMouseX, y: lastMouseY });
                                }
                        }

                        // Show the score at the bottom
                        if (opacity >= 0.7) {
                                ctx.fillStyle = '#3366ff';
                                ctx.font = 'bold 20px monospace';
                                ctx.fillText(`Score: ${score}`, canvas.width / 2, canvas.height / 2 + 160);
                        }

                        ctx.restore();
                }

                if (opacity < maxOpacity) opacity += fadeSpeed;
                if (charsToShow < msg.length) charsToShow += typeSpeed;
                
                // Always continue the animation loop when quiz is active
                // or when animation is still in progress
                if (showQuiz || opacity < maxOpacity || charsToShow < msg.length || tagY < tagTargetY) {
                        requestAnimationFrame(animateOutro);
                }
        }

        // Function to draw the quiz (inside drawOutro)
        function drawQuiz() {
            // Just draw the quiz directly here
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            
            // Draw a dark overlay
            ctx.save();
            ctx.fillStyle = 'rgba(0, 0, 0, 0.9)';
            ctx.fillRect(0, 0, canvas.width, canvas.height);

            // Draw quiz title with a highlight
            ctx.fillStyle = '#ffffff';
            ctx.font = 'bold 28px monospace';
            ctx.textAlign = 'center';
            ctx.shadowColor = '#3366ff';
            ctx.shadowBlur = 10;
            ctx.fillText(`What does ${lastTagSaved} do?`, canvas.width / 2, 100);
            ctx.shadowBlur = 0;

            // Draw options
            const optionHeight = 60;
            const optionWidth = 450;
            const startY = 150;
            const padding = 25;

            for (let i = 0; i < quizOptions.length; i++) {
                const y = startY + i * (optionHeight + padding);

                // Check if mouse is over this option
                const isOptionHovered = 
                    lastMouseX >= canvas.width/2 - optionWidth/2 && 
                    lastMouseX <= canvas.width/2 + optionWidth/2 &&
                    lastMouseY >= y && 
                    lastMouseY <= y + optionHeight;
                    
                // Draw option background with hover effect
                if (isOptionHovered) {
                    ctx.fillStyle = 'rgba(80, 100, 180, 0.9)';
                    ctx.strokeStyle = '#ffaa00';
                    ctx.shadowColor = '#ffaa00';
                    ctx.shadowBlur = 15;
                } else {
                    ctx.fillStyle = 'rgba(50, 50, 80, 0.9)';
                    ctx.strokeStyle = '#3366ff';
                    ctx.shadowBlur = 0;
                }
                
                ctx.lineWidth = 3;
                ctx.beginPath();
                ctx.roundRect(canvas.width / 2 - optionWidth / 2, y, optionWidth, optionHeight, 12);
                ctx.fill();
                ctx.stroke();
                ctx.shadowBlur = 0;

                // Draw option text
                ctx.fillStyle = '#ffffff';
                ctx.font = '20px monospace';
                ctx.textAlign = 'left';
                
                // Wrap text if needed
                const maxWidth = optionWidth - 40;
                const text = `${i+1}. ${quizOptions[i]}`;
                
                // Simple text wrapping
                if (ctx.measureText(text).width > maxWidth) {
                    const words = text.split(' ');
                    let line = '';
                    let y1 = y + optionHeight / 2 - 10;
                    
                    for (let n = 0; n < words.length; n++) {
                        const testLine = line + words[n] + ' ';
                        if (ctx.measureText(testLine).width > maxWidth) {
                            ctx.fillText(line, canvas.width / 2 - optionWidth / 2 + 20, y1);
                            line = words[n] + ' ';
                            y1 += 25;
                        } else {
                            line = testLine;
                        }
                    }
                    ctx.fillText(line, canvas.width / 2 - optionWidth / 2 + 20, y1);
                } else {
                    ctx.fillText(text, canvas.width / 2 - optionWidth / 2 + 20, y + optionHeight / 2 + 6);
                }
            }

            ctx.restore();
        }
    
    // Draw a dark overlay
    ctx.save();
    ctx.fillStyle = 'rgba(0, 0, 0, 0.9)';
    ctx.fillRect(0, 0, canvas.width, canvas.height);

    // Draw quiz title with a highlight
    ctx.fillStyle = '#ffffff';
    ctx.font = 'bold 28px monospace';
    ctx.textAlign = 'center';
    ctx.shadowColor = '#3366ff';
    ctx.shadowBlur = 10;
    ctx.fillText(`What does ${lastTagSaved} do?`, canvas.width / 2, 100);
    ctx.shadowBlur = 0;

    // Draw options
    const optionHeight = 60;
    const optionWidth = 450;
    const startY = 150;
    const padding = 25;

    for (let i = 0; i < quizOptions.length; i++) {
        const y = startY + i * (optionHeight + padding);

        // Check if mouse is over this option
        const isOptionHovered = 
            lastMouseX >= canvas.width/2 - optionWidth/2 && 
            lastMouseX <= canvas.width/2 + optionWidth/2 &&
            lastMouseY >= y && 
            lastMouseY <= y + optionHeight;
            
        // Draw option background with hover effect
        if (isOptionHovered) {
            ctx.fillStyle = 'rgba(80, 100, 180, 0.9)';
            ctx.strokeStyle = '#ffaa00';
            ctx.shadowColor = '#ffaa00';
            ctx.shadowBlur = 15;
        } else {
            ctx.fillStyle = 'rgba(50, 50, 80, 0.9)';
            ctx.strokeStyle = '#3366ff';
            ctx.shadowBlur = 0;
        }
        
        ctx.lineWidth = 3;
        ctx.beginPath();
        ctx.roundRect(canvas.width / 2 - optionWidth / 2, y, optionWidth, optionHeight, 12);
        ctx.fill();
        ctx.stroke();
        ctx.shadowBlur = 0;

        // Draw option text
        ctx.fillStyle = '#ffffff';
        ctx.font = '20px monospace';
        ctx.textAlign = 'left';
        
        // Wrap text if needed
        const maxWidth = optionWidth - 40;
        const text = `${i+1}. ${quizOptions[i]}`;
        
        // Simple text wrapping
        if (ctx.measureText(text).width > maxWidth) {
            const words = text.split(' ');
            let line = '';
            let y1 = y + optionHeight / 2 - 10;
            
            for (let n = 0; n < words.length; n++) {
                const testLine = line + words[n] + ' ';
                if (ctx.measureText(testLine).width > maxWidth) {
                    ctx.fillText(line, canvas.width / 2 - optionWidth / 2 + 20, y1);
                    line = words[n] + ' ';
                    y1 += 25;
                } else {
                    line = testLine;
                }
            }
            ctx.fillText(line, canvas.width / 2 - optionWidth / 2 + 20, y1);
        } else {
            ctx.fillText(text, canvas.width / 2 - optionWidth / 2 + 20, y + optionHeight / 2 + 6);
        }
    }

    ctx.restore();
    
    // Set up a click handler for quiz options
    canvas.onclick = function(e) {
        const rect = canvas.getBoundingClientRect();
        const clickX = e.clientX - rect.left;
        const clickY = e.clientY - rect.top;
        
        const optionHeight = 60;
        const optionWidth = 450;
        const startY = 150;
        const padding = 25;
        
        for (let i = 0; i < quizOptions.length; i++) {
            const y = startY + i * (optionHeight + padding);
            if (clickX >= canvas.width/2 - optionWidth/2 && 
                clickX <= canvas.width/2 + optionWidth/2 &&
                clickY >= y && 
                clickY <= y + optionHeight) {
                
                console.log('Option clicked:', i);
                handleQuizAnswer(i);
                // Reset the click handler
                canvas.onclick = null;
                break;
            }
        }
    };

// Function to draw the quiz (inside drawOutro)
function drawQuiz() {
    // Just call the global function
    displayQuiz();
}
        // Function to generate quiz options
        function generateQuizOptions() {
                // Find the correct fact for the last tag saved
                let correctFact = '';
                let incorrectFacts = [];

                // Search through goodTags to find the matching tag and its fact
                for (let tag of goodTags) {
                        if (tag.tag === lastTagSaved) {
                                correctFact = tag.fact;
                                break;
                        }
                }

                // If we couldn't find the fact (shouldn't happen), use a default
                if (!correctFact) {
                        correctFact = 'This is an HTML tag used for web development.';
                }

                // Get 2 random incorrect facts from other tags
                while (incorrectFacts.length < 2) {
                        const randomTag = goodTags[Math.floor(Math.random() * goodTags.length)];
                        if (randomTag.tag !== lastTagSaved && !incorrectFacts.includes(randomTag.fact)) {
                                incorrectFacts.push(randomTag.fact);
                        }
                }

                // Combine correct and incorrect facts and shuffle them
                const allOptions = [correctFact, ...incorrectFacts];
                shuffleArray(allOptions);

                // Remember which one is correct
                correctAnswerIndex = allOptions.indexOf(correctFact);

                return allOptions;
        }

        // Function to handle quiz answer
        function handleQuizAnswer(answerIndex) {
                if (answerIndex === correctAnswerIndex) {
                        // Correct answer - give player a second chance
                        gameActive = true;
                        // Set score to highest score minus 5 as a penalty
                        score = Math.max(0, highestScore - 5); // Ensure score doesn't go below 0
                        scoreDisplay.textContent = 'Score: ' + score;
                        factDisplay.textContent = 'Correct! You get a second chance!';

                        // Clear falling tags and reset speed
                        fallingTags = [];
                        tagFallSpeed = baseSpeed;
                        if (speedDisplay) speedDisplay.textContent = 'Speed: 100%';

                        // Wait 2 seconds before spawning new tags
                        setTimeout(() => {
                                tagInterval = setInterval(spawnTag, 900);
                                animationId = requestAnimationFrame(gameLoop);
                        }, 2000);

                        // Enable start button as a backup
                        startBtn.disabled = false;
                } else {
                        // Wrong answer - show intro
                        drawIntro();
                        startBtn.disabled = false;
                }
        }



        animateOutro();
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

// Matrix-style Digital Rain background
// Array of colors for the Matrix Rain
const rainColors = [
        '#00ff55', // Matrix green
        '#ff3300', // Red
        '#00ccff', // Blue
        '#ffcc00', // Yellow
        '#ff00ff', // Magenta
        '#00ffcc', // Cyan
        '#ff6600', // Orange
        '#9900ff', // Purple
        '#66ff00', // Lime
        '#ff0099', // Pink
        '#00A36C', // Deep Green
        '#D72638', // Rich Red
        '#1E90FF', // Bright Blue
        '#FFD700', // Golden Yellow
        '#9400D3', // Deep Magenta
        '#20B2AA', // Teal Cyan
        '#FF8C00', // Warm Orange
        '#8A2BE2', // Royal Purple
        '#32CD32', // Fresh Lime
        '#FF1493', // Bold Pink
        '#00CED1', // Dark Turquoise
        '#FF4500', // Fiery Orange
        '#4682B4', // Steel Blue
        '#C71585', // Vivid Raspberry
        '#708090', // Slate Gray
        '#DAA520', // Goldenrod
        '#6A5ACD', // Slate Blue
        '#3CB371', // Medium Sea Green
        '#DC143C', // Crimson
        '#B0E0E6' // Powder Blue
];

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

const rainStrings = [
        // Hex and binary values
        '0xF3A9', '0x1B', '0xC0DE', '0x7F', '0x404', '101010', '11001100', '01101101', '01010101',
        '0xCAFE', '0xBEEF', '0xC0FFEE', '0b1011',

        // Hello World in different languages
        'Hello, World!', 'こんにちは世界', 'Привет, мир!', 'Hola Mundo', 'Bonjour le monde', 'Hallo Welt',
        '你好，世界', '안녕하세요 세계', 'שלום עולם', 'مرحبا بالعالم',

        // Programming language examples
        'printf("C!");', // C
        'System.out.println("Java!");', // Java
        'console.log("JavaScript!");', // JavaScript
        'print("Python!")', // Python
        'echo "PHP!";', // PHP
        '<?php echo "PHP!"; ?>', // PHP full tag
        '<?= "PHP!" ?>', // PHP short echo
        'puts "Ruby!"', // Ruby
        'fmt.Println("Go!")', // Go
        'cout << "C++!";', // C++
        'Console.WriteLine("C#!");', // C#
        'disp("MATLAB!");', // MATLAB
        'PRINT *, "Fortran!"', // Fortran
        'io:format("Erlang!~n")', // Erlang
        'System.out.print("Java!");', // Java
        'document.write("JavaScript!");', // JavaScript in browser
        'Response.Write("ASP!");', // ASP
        'echo("PHP!");', // PHP
        '<%= "Ruby on Rails!" %>', // JSP/ERB
        'SELECT "SQL!";', // SQL
];
const rainFontSize = 50;
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
        // Allow arrow keys to work regardless of game state
        if (e.key === 'ArrowLeft' || e.key === 'ArrowRight' || e.key === 'ArrowUp' || e.key === 'ArrowDown') {
                // Prevent default browser scrolling behavior
                e.preventDefault();
                
                // Handle player movement
                if (e.key === 'ArrowLeft') player.dx = -player.speed;
                if (e.key === 'ArrowRight') player.dx = player.speed;
        }
}

function keyUp(e) {
        if (e.key === 'ArrowLeft' || e.key === 'ArrowRight') player.dx = 0;
}


// Function to generate quiz options
function generateQuizOptions() {
        // Find the correct fact for the last tag saved
        let correctFact = '';
        let incorrectFacts = [];

        // Search through goodTags to find the matching tag and its fact
        for (let tag of goodTags) {
                if (tag.tag === lastTagSaved) {
                        correctFact = tag.fact;
                        break;
                }
        }

        // If we couldn't find the fact (shouldn't happen), use a default
        if (!correctFact) {
                correctFact = 'This is an HTML tag used for web development.';
        }

        // Get 2 random incorrect facts from other tags
        while (incorrectFacts.length < 2) {
                const randomTag = goodTags[Math.floor(Math.random() * goodTags.length)];
                if (randomTag.tag !== lastTagSaved && !incorrectFacts.includes(randomTag.fact)) {
                        incorrectFacts.push(randomTag.fact);
                }
        }

        // Combine correct and incorrect facts and shuffle them
        const allOptions = [correctFact, ...incorrectFacts];
        shuffleArray(allOptions);

        // Remember which one is correct
        correctAnswerIndex = allOptions.indexOf(correctFact);

        return allOptions;
}

// Global function to display the quiz screen
function displayQuiz() {
    console.log('Displaying quiz directly');
    
    // Clear the canvas
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    
    // Draw dark background
    ctx.fillStyle = 'rgba(0, 0, 0, 0.9)';
    ctx.fillRect(0, 0, canvas.width, canvas.height);
    
    // Draw title
    ctx.fillStyle = '#ffffff';
    ctx.font = 'bold 28px monospace';
    ctx.textAlign = 'center';
    ctx.fillText(`What does ${lastTagSaved} do?`, canvas.width / 2, 100);
    
    // Draw options
    const optionHeight = 60;
    const optionWidth = 450;
    const startY = 150;
    const padding = 25;
    
    for (let i = 0; i < quizOptions.length; i++) {
        const y = startY + i * (optionHeight + padding);
        
        // Draw option background
        ctx.fillStyle = 'rgba(50, 50, 80, 0.9)';
        ctx.strokeStyle = '#3366ff';
        ctx.lineWidth = 3;
        ctx.beginPath();
        ctx.roundRect(canvas.width / 2 - optionWidth / 2, y, optionWidth, optionHeight, 12);
        ctx.fill();
        ctx.stroke();
        
        // Draw option text
        ctx.fillStyle = '#ffffff';
        ctx.font = '20px monospace';
        ctx.textAlign = 'left';
        ctx.fillText(`${i+1}. ${quizOptions[i]}`, canvas.width / 2 - optionWidth / 2 + 20, y + 30);
    }
    
    // Set up a temporary click handler for the quiz options
    const quizClickHandler = function(e) {
        const rect = canvas.getBoundingClientRect();
        const clickX = e.clientX - rect.left;
        const clickY = e.clientY - rect.top;
        
        for (let i = 0; i < quizOptions.length; i++) {
            const y = startY + i * (optionHeight + padding);
            if (clickX >= canvas.width/2 - optionWidth/2 && 
                clickX <= canvas.width/2 + optionWidth/2 &&
                clickY >= y && 
                clickY <= y + optionHeight) {
                
                console.log('Quiz option clicked:', i);
                
                // Remove this temporary click handler
                canvas.removeEventListener('click', quizClickHandler);
                
                // Handle the answer
                handleQuizAnswer(i);
                break;
            }
        }
    };
    
    // Add the temporary click handler
    canvas.addEventListener('click', quizClickHandler);
}

// Function to handle quiz answer
function handleQuizAnswer(answerIndex) {
        if (answerIndex === correctAnswerIndex) {
                // Correct answer - give player a second chance
                gameActive = true;
                // Subtract 5 from the last score (not the highest score)
                // This is the score the player had when they hit the tag
                score = Math.max(0, score - 5); // Ensure score doesn't go below 0
                scoreDisplay.textContent = 'Score: ' + score;
                factDisplay.textContent = 'Correct! You get a second chance!';

                // Clear falling tags and reset speed
                fallingTags = [];
                tagFallSpeed = baseSpeed;
                if (speedDisplay) speedDisplay.textContent = 'Speed: 100%';

                // Wait 2 seconds before spawning new tags
                setTimeout(() => {
                        tagInterval = setInterval(spawnTag, 900);
                        animationId = requestAnimationFrame(gameLoop);
                }, 2000);

                // Enable start button as a backup
                startBtn.disabled = false;
        } else {
                // Wrong answer - show intro
                drawIntro();
                startBtn.disabled = false;
        }
}

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
    // Check for tag click in the end screen
    else if (!gameActive) {
        console.log('Click position:', {clickX, clickY});
        
        // Create a very generous hitbox for the tag (almost the entire top half of the screen)
        // This ensures the tag is easy to click
        const tagArea = {
            x: canvas.width / 2 - 100,
            y: canvas.height / 2 - 200,
            width: 200,
            height: 100
        };
        
        console.log('Tag area:', tagArea);
        
        // Check if click is within the tag area
        if (clickX >= tagArea.x && clickX <= tagArea.x + tagArea.width &&
            clickY >= tagArea.y && clickY <= tagArea.y + tagArea.height) {
            
            console.log('Tag area was clicked!');
            
            // Clear any existing quiz options
            quizOptions = [];
            
            // Generate new quiz options
            quizOptions = generateQuizOptions();
            console.log('Generated quiz options:', quizOptions);
            console.log('Correct answer index:', correctAnswerIndex);
            
            // Enable quiz mode
            showQuiz = true;
            
            // Generate quiz options and store them
            quizOptions = generateQuizOptions();
            console.log('Quiz options generated:', quizOptions);
            
            // Directly show the quiz screen using our global function
            displayQuiz();
            
            // Set showQuiz flag to true to maintain state
            showQuiz = true;
        }
    }
}

// Add the new click handler
canvas.addEventListener('click', canvasClickHandler);

// Add mouse tracking for hover effects
canvas.addEventListener('mousemove', (e) => {
    const rect = canvas.getBoundingClientRect();
    lastMouseX = e.clientX - rect.left;
    lastMouseY = e.clientY - rect.top;
});

canvas.addEventListener('mousedown', () => {
    isMouseDown = true;
});

canvas.addEventListener('mouseup', () => {
    isMouseDown = false;
});

canvas.addEventListener('mouseleave', () => {
    isMouseDown = false;
});

document.addEventListener('keydown', keyDown);
document.addEventListener('keyup', keyUp);
startBtn.addEventListener('click', startGame);

// Responsive canvas (optional: adjust canvas size on window resize)
// window.addEventListener('resize', () => {
//     canvas.width = Math.min(600, window.innerWidth - 40);
// });


drawIntro(); // Show intro on initial page load
