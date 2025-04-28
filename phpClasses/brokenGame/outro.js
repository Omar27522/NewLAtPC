
import { generateQuizOptions, handleQuizAnswer } from './quiz.js';
// Animated outro: draws a computer and animates the error message
// Usage: drawOutro(ctx, canvas, message, { lastTagSaved, showQuiz, quizOptions, correctAnswerIndex, ... })
export default function drawOutro(ctx, canvas, msg, options = {}) {
    console.log('drawOutro called with:', { msg, canvas, ctx: !!ctx });
    // Destructure all needed state from options
    const {
        lastTagSaved = null,
        showQuiz = false,
        tagClickable = false,
        currentTagHitbox = null,
        score = 0,
        factDisplay = null,
        startBtn = null,
        gameActive = false,
        goodTags = [],
        shuffleArray = null,
        handleQuizAnswer = null,
    } = options;

    // All stateful variables must be local, not global
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
    let localShowQuiz = showQuiz;
    // Initialize with empty array since quizOptions is no longer in destructured options
    let localQuizOptions = [];
    let localCorrectAnswerIndex = 0;
    let localTagClickable = tagClickable;
    let localCurrentTagHitbox = currentTagHitbox;

    // Tag hitbox for click detection
    let tagHitbox = {
        x: 0,
        y: 0,
        width: 0,
        height: 0
    };

    // (Removed all duplicate variable declarations below. Only these exist.)

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

                    // Update hitbox for click detection
                    tagHitbox = {
                            x: canvas.width / 2 - tagWidth / 2,
                            y: tagY - tagHeight / 2,
                            width: tagWidth,
                            height: tagHeight
                    };

                    // Update the global hitbox for the click handler
                    currentTagHitbox = tagHitbox;

                    ctx.save();
                    ctx.globalAlpha = Math.min(opacity, 1);

                    // Highlight tag if clickable
                    if (tagClickable && !showQuiz) {
                            ctx.fillStyle = 'aquamarine';
                            ctx.strokeStyle = '#ff9900'; // Orange highlight
                            ctx.lineWidth = 3;

                            // Add glow effect
                            ctx.shadowColor = '#ff9900';
                            ctx.shadowBlur = 10;
                    } else {
                            ctx.fillStyle = 'aquamarine';
                            ctx.strokeStyle = '#3366ff';
                            ctx.lineWidth = 2;
                    }

                    ctx.beginPath();

                    // Apply bounce effect to scale
                    const scale = 1 + Math.max(0, tagBounce * 0.1);
                    ctx.translate(canvas.width / 2, tagY);
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

                    // Draw a button instead of relying on tag clicks
                    if (opacity >= 0.9) {
                            // Draw button
                            ctx.fillStyle = '#ff9900';
                            ctx.strokeStyle = '#ffffff';
                            ctx.lineWidth = 2;
                            ctx.beginPath();
                            ctx.roundRect(canvas.width / 2 - 100, canvas.height / 2 + 100, 200, 40, 8);
                            ctx.fill();
                            ctx.stroke();

                            // Button text
                            ctx.fillStyle = '#ffffff';
                            ctx.font = 'bold 16px monospace';
                            ctx.textAlign = 'center';
                            ctx.fillText('Take a Quiz for 2nd Chance!', canvas.width / 2, canvas.height / 2 + 125);
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
            if (opacity < maxOpacity || charsToShow < msg.length || tagY < tagTargetY) {
                    requestAnimationFrame(animateOutro);
            }
    }

    // Function to draw the quiz
    function drawQuiz() {
            ctx.save();
            ctx.fillStyle = 'rgba(0, 0, 0, 0.8)';
            ctx.fillRect(0, 0, canvas.width, canvas.height);

            // Draw quiz title
            ctx.fillStyle = '#ffffff';
            ctx.font = 'bold 24px monospace';
            ctx.textAlign = 'center';
            ctx.fillText(`What does ${lastTagSaved} do?`, canvas.width / 2, 100);

            // Draw options
            const optionHeight = 50;
            const optionWidth = 400;
            const startY = 150;
            const padding = 20;

            for (let i = 0; i < quizOptions.length; i++) {
                    const y = startY + i * (optionHeight + padding);

                    // Draw option background
                    ctx.fillStyle = 'rgba(50, 50, 80, 0.9)';
                    ctx.strokeStyle = '#3366ff';
                    ctx.lineWidth = 2;
                    ctx.beginPath();
                    ctx.roundRect(canvas.width / 2 - optionWidth / 2, y, optionWidth, optionHeight, 8);
                    ctx.fill();
                    ctx.stroke();

                    // Draw option text
                    ctx.fillStyle = '#ffffff';
                    ctx.font = '18px monospace';
                    ctx.textAlign = 'left';
                    ctx.fillText(`${i+1}. ${quizOptions[i]}`, canvas.width / 2 - optionWidth / 2 + 20, y + optionHeight / 2 + 6);
            }

            ctx.restore();
    }
    // Function to generate quiz options

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
    // Generate quiz options and correct answer index only here, not globally or at the top
    let quizOptions = generateQuizOptions();
    let correctAnswerIndex = window.correctAnswerIndex || 0;

    function drawQuiz() {
        ctx.save();
        ctx.fillStyle = 'rgba(0, 0, 0, 0.8)';
        ctx.fillRect(0, 0, canvas.width, canvas.height);

        // Draw quiz title
        ctx.fillStyle = '#ffffff';
        ctx.font = 'bold 24px monospace';
        ctx.textAlign = 'center';
        ctx.fillText(`What does ${lastTagSaved} do?`, canvas.width / 2, 100);

        // Draw options
        const optionHeight = 50;
        const optionWidth = 400;
        const startY = 150;
        const padding = 20;

        for (let i = 0; i < quizOptions.length; i++) {
            const y = startY + i * (optionHeight + padding);

            // Draw option background
            ctx.fillStyle = 'rgba(50, 50, 80, 0.9)';
            ctx.strokeStyle = '#3366ff';
            ctx.lineWidth = 2;
            ctx.beginPath();
            ctx.roundRect(canvas.width / 2 - optionWidth / 2, y, optionWidth, optionHeight, 8);
            ctx.fill();
            ctx.stroke();

            // Draw option text
            ctx.fillStyle = '#ffffff';
            ctx.font = '18px monospace';
            ctx.textAlign = 'left';
            ctx.fillText(`${i+1}. ${quizOptions[i]}`, canvas.width / 2 - optionWidth / 2 + 20, y + optionHeight / 2 + 6);
        }

        ctx.restore();
    }

    function animateOutro() {
        console.log('animateOutro running, opacity:', opacity);
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

            // Draw a button instead of relying on tag clicks
            if (opacity >= 0.9) {
                // Draw button
                ctx.fillStyle = '#ff9900';
                ctx.strokeStyle = '#ffffff';
                ctx.lineWidth = 2;
                ctx.beginPath();
                ctx.roundRect(canvas.width / 2 - 100, canvas.height / 2 + 100, 200, 40, 8);
                ctx.fill();
                ctx.stroke();
                // Button text
                ctx.fillStyle = '#ffffff';
                ctx.font = 'bold 16px monospace';
                ctx.textAlign = 'center';
                ctx.fillText('Take a Quiz for 2nd Chance!', canvas.width / 2, canvas.height / 2 + 125);
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

        // Continue the animation loop
        requestAnimationFrame(animateOutro);
    }
    
    // Add explicit call to start the animation
    console.log('Starting outro animation');
    animateOutro();
}