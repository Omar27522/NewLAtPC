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

window.goodTags = goodTags;
window.badTags = badTags;

// Export using CommonJS syntax since you're using require() in your main file
export { goodTags, badTags };