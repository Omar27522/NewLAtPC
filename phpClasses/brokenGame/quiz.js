/**
 * Generates quiz options based on the lastTagSaved and goodTags.
 * Returns an array of options and sets window.correctAnswerIndex for answer checking.
 * @returns {string[]} The shuffled quiz options.
 */
export function generateQuizOptions() {
    let correctFact = '';
    let incorrectFacts = [];
    // Search through goodTags to find the matching tag and its fact
    for (let tag of window.goodTags) {
        if (tag.tag === window.lastTagSaved) {
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
        const randomTag = window.goodTags[Math.floor(Math.random() * window.goodTags.length)];
        if (randomTag.tag !== window.lastTagSaved && !incorrectFacts.includes(randomTag.fact)) {
            incorrectFacts.push(randomTag.fact);
        }
    }
    // Combine correct and incorrect facts and shuffle them
    const allOptions = [correctFact, ...incorrectFacts];
    window.shuffleArray(allOptions);
    // Remember which one is correct
    window.correctAnswerIndex = allOptions.indexOf(correctFact);
    return allOptions;
}

/**
 * Handles a quiz answer selection.
 * @param {number} answerIndex - The index of the selected answer.
 */
export function handleQuizAnswer(answerIndex) {
    if (answerIndex === window.correctAnswerIndex) {
        // Correct answer - give player a second chance
        window.gameActive = true;
        window.score = -5; // Start with negative score as penalty
        window.scoreDisplay.textContent = 'Score: ' + window.score;
        window.factDisplay.textContent = 'Correct! You get a second chance!';
        // Clear falling tags and reset speed
        window.fallingTags = [];
        window.tagFallSpeed = window.baseSpeed;
        if (window.speedDisplay) window.speedDisplay.textContent = 'Speed: 100%';
        // Wait 2 seconds before spawning new tags
        setTimeout(() => {
            window.tagInterval = setInterval(window.spawnTag, 900);
            window.animationId = requestAnimationFrame(window.gameLoop);
        }, 2000);
        // Enable start button as a backup
        window.startBtn.disabled = false;
            score = -5; // Start with negative score as penalty
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
            drawIntro(ctx, canvas, goodTags, badTags);
            startBtn.disabled = false;
    }
}