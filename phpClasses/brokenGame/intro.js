export default function drawIntro(ctx, canvas, goodTags, badTags) {
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