# LAtinosPC Website Documentation

## Overview

LAtinosPC is a bilingual (English/Spanish) PHP-based website with a modular architecture. The website provides computer services, hardware information, software recommendations, and other IT-related content to users in both English and Spanish.

## Table of Contents

1. [Architecture Overview](#architecture-overview)
2. [Directory Structure](#directory-structure)
3. [Core Components](#core-components)
4. [Routing System](#routing-system)
5. [Content Management](#content-management)
6. [Bilingual Support](#bilingual-support)
7. [Template System](#template-system)
8. [Navigation System](#navigation-system)
9. [CSS and Styling](#css-and-styling)
10. [Current Status and Development](#current-status-and-development)

## Architecture Overview

The website uses a simple but effective PHP-based architecture with the following key features:

- **Modular Design**: Content is separated into different directories based on language and section
- **Directory-Based Routing**: URLs are mapped to directories in the file system
- **Separation of Content and Presentation**: Content logic is separate from presentation templates
- **Bilingual Support**: Complete English and Spanish versions with parallel directory structures
- **Template System**: Common page elements are defined once and reused across the site

## Directory Structure

The main directories in the codebase are:

- `/code`: Core PHP functions, templates, and includes
- `/content`: Main content files for English version
- `/español`: Spanish version of the site
- `/parts` and `/partes`: Hardware components section (English and Spanish)
- `/programs` and `/programas`: Software section (English and Spanish)
- `/services` and `/servicios`: Services section (English and Spanish)
- `/reviews` and `/reseñas`: Reviews section (English and Spanish)
- `/images`: Shared image assets
- `/jesusChrist` and `/jesucristo`: Religious content section (English and Spanish)

## Core Components

### Functions Files

- `code/functions.php`: Core functions for English version
- `code/funciones.php`: Core functions for Spanish version

These files define language-specific variables and include necessary components for each language version.

### Page Template

- `code/html_structure/page.php`: Main template file that defines the HTML structure

The page template automatically detects which language function to use (`is_english()` or `is_spanish()`) and builds the page accordingly.

## Routing System

The website uses a directory-based routing system:

1. Each section of the website has its own directory (e.g., `/parts`, `/services`)
2. Within each directory, an `index.php` file handles the routing for that section
3. URL parameters (using query strings) determine which specific content to display
   - Example: `/parts/?cpu` will display CPU content in the parts section

## Content Management

Content is managed through PHP files:

1. Each page defines a `content()` function that outputs the main content
2. The `content()` function is called by the page template
3. Content files are organized by section and language

Example of content structure in a section (parts):
```php
function content() {
    // Define titles, keywords, descriptions
    // Check URL parameters
    // Include appropriate content files based on parameters
}
```

## Bilingual Support

The site implements bilingual support through:

1. Parallel directory structures for English and Spanish
2. Language-specific function files (`functions.php` and `funciones.php`)
3. Language detection in the page template
4. Separate navigation menus for each language

The language functions (`is_english()` and `is_spanish()`) set global variables for:
- Language attribute for HTML tag
- CSS paths
- Navigation breadcrumbs
- Logo text
- Navigation menus and buttons

## Template System

The template system uses:

1. A main page template (`page.php`) that defines the overall HTML structure
2. Global variables set by language functions to populate template elements
3. Output buffering to capture and insert complex elements like navigation menus
4. A `content()` function that must be defined by each page to provide the main content

## Navigation System

Navigation consists of:

1. Breadcrumb links at the top of each page
2. Main navigation menu (with mobile-friendly hamburger menu)
3. Navigation buttons
4. Language-specific navigation components

The navigation elements are defined in:
- `code/includes/en/nav_menu.php` and `code/includes/en/nav_buttons.php` (English)
- `code/includes/es/nav_menu.php` and `code/includes/es/nav_buttons.php` (Spanish)

## CSS and Styling

The site uses three main CSS files:
- `code/style.css`: Main styling
- `code/logo.css`: Logo-specific styling
- `code/terwanpop.css`: Styling for the mobile menu system

## Current Status and Development

### Completed Features
- Basic architecture implementation
- Content management system
- Bilingual support (English/Spanish)
- Imaging section
- Service section

### In Development
- Gallery system
- Backup section
- Menu Jesus Christ pages

### Planned Features
- Performance optimization
- Mobile responsiveness enhancements

## How to Add a New Page

1. Create a new directory for the section if it doesn't exist
2. Create an `index.php` file in the directory
3. Include the functions file: `include_once('../code/functions.php');`
4. Set the page title and directory path: 
   ```php
   $title = "Page Title";
   $dir = '../';
   ```
5. Define the `content()` function with your page content
6. Include the page template: `include ('../code/html_structure/page.php');`

## How to Add Content to an Existing Section

1. Identify the appropriate section directory
2. Modify the `index.php` file to handle new content types
3. Add new case statements for URL parameters
4. Create content files in the appropriate directories
5. Update navigation links to point to the new content

## Troubleshooting Common Issues

### Page Not Loading Correctly
- Check that `functions.php` is included before `page.php`
- Ensure the `content()` function is defined
- Verify that directory paths are correct

### Content Not Displaying
- Check URL parameters
- Verify that content files exist in the specified paths
- Ensure switch statements handle the URL parameter correctly

### Navigation Issues
- Check that language function is being called
- Verify that navigation include files exist
- Ensure global variables are properly set

## Conclusion

This documentation provides an overview of how the LAtinosPC website codebase works. The site uses a straightforward PHP architecture with a focus on modularity, bilingual support, and separation of content and presentation.
