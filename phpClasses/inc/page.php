<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="main_style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning HTML</title>
    <meta name="description" content="A detailed guide to HTML meta tags.">
    <meta name="keywords" content="HTML, meta tags, web development, coding">
    <meta name="author" content="Omar">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Language" content="en">
    <meta name="theme-color" content="#317EFB">
</head>
<body>

    <h1><span style="font-size: 10rem; font-weight: bold; float: right;">Index.</span>
        <span style="font-size: 3rem; font-weight: bold; animation: bounce 1.5s infinite 0.3s;line-height: 20%;padding-top: 0;">hyperText</span>
        <span style="font-size: 3rem; font-weight: bold; animation: bounce 1.5s infinite 0.6s;line-height: 90%;">Markup</span>
        <span style="font-size: 3rem; font-weight: bold; animation: bounce 1.5s infinite 0.9s;line-height: 50%;">Language</span>
        </h1>
    <h6 >📃</h6>

    <article>
        <p>This is the html file. The <code>&lt;article&gt;</code> tag is used to define independent, self-contained content that makes sense on its own and can be distributed independently from the rest of the webpage. Examples of where the <code>&lt;article&gt;</code> element can be used include:</p>
        <h2>Blog posts</h2>
        <h2>Forum posts</h2>
        <h2>Newspaper articles</h2>
        <h2>User comments</h2>
        <h2>Product cards</h2>
        <p>Each <code>&lt;article&gt;</code> can contain nested articles, and it is ideal for content that includes metadata such as the author, date, and description.</p>
    </article>

    <section class="section">
        <code >&lt;section&gt;</code><b>This is a section outside the Article Tag.</b>
        <h2 >The <code>&lt;section&gt;</code> Tag</h2>
        <p>The <code>&lt;section&gt;</code> tag is used to define sections in a document, typically with a heading. It is used to group related content together and can contain multiple subsections. Examples of where the section element can be used include:</p>
        <h2>Chapters</h2>
        <h2>Introduction</h2>
        <h2>News items</h2>
        <h2>Contact information</h2>
        <p>The <code>&lt;section&gt;</code> tag is useful for dividing a webpage into thematic groups, making it easier to manage and style.</p>
    </section>
    <hr >

    <aside class="callout-box" >
        <p>The <code>&lt;aside&gt;</code> tag in HTML is used to define content that is tangentially related to the content around it. It is often used for sidebars, pull quotes, advertisements, or any additional information that complements the main content but is not essential to its understanding.</p>
        <h2>Formal Definition:</h2>
        <details >
            <summary >💡</summary>
            <p>To display the <code>&lt;HTML_Tag&gt;</code> as plain text, use HTML entities like <code>&amp;lt;</code> for `<` and <code>&amp;gt;</code> for `>`. </p>
        </details>
        <p>The <code>&lt;aside&gt;</code> element represents a portion of the content that is indirectly related to the content around it. It is typically used for content that can be considered as a sidebar or a supplementary section.</p>
        <h3>Key Characteristics:</h3>
        <p>It is a semantic HTML5 element. The content inside <code>&lt;aside&gt;</code> is usually presented as separate or secondary to the main content. Common use cases include sidebars, callout boxes, or related links.</p>
        <section>
        <img src="./inc/MetaTagDash.jpg" alt="Image" style="width: 70%; height: auto; border-radius: 10px; margin-top: 20px;">
        </section>
    </aside>
    
<!--
    <footer>
        <div >
            <h2 >Meta Tag Dash</h2>
            <button id="startBtn" >Start Game</button>
            <div >
                <span id="scoreDisplay">Score: 149</span>
                <span id="speedDisplay" >Speed: 1.00</span>
            </div>
            <div id="factDisplay" ></div>
            <canvas id="gameCanvas" width="600" height="500" ></canvas>
        </div>
    </footer>

     <script src="../JavaScript/canvas.js"></script> -->
</body>
</html>