# LatinosPC Website Project

A bilingual (English/Spanish) website focused on providing outstanding service through effective marketing, customer retention strategies, and quality control.

## Technology Stack

- **Backend**: PHP 7.4+
- **Frontend**: HTML5, CSS3, JavaScript
- **Design**: Custom CSS framework
  - nav.css: Navigation styles
  - style.css: Core styles
- **Tools**: Simple PHP Contact Form

## Project Structure

```
project/
├── code/                   # Core functionality
│   ├── functions.php       # PHP classes and utilities
│   ├── html_structure/     # Page templates
│   ├── style.css           # Main stylesheet
│   └── terwanpop.css       # Navigation menu styles
├── software/               # Software section (English)
├── spanish/                # Spanish content
│   ├── software/           # Spanish software section
│   ├── servicios/          # Spanish services
│   └── contacto/           # Spanish contact form
├── services/               # Services section
├── contact/                # Contact forms
└── reviews/                # Customer reviews
```

## Installation

1. **Requirements**
   - PHP 7.4 or higher
   - Apache/Nginx web server
   - mod_rewrite enabled

2. **Setup**
   ```bash
   # Clone the repository
   git clone https://github.com/Omar27522/NewLAtPC.git

   # Set permissions
   chmod 755 -R code/
   chmod 644 -R code/*.css
   ```

3. **Configuration**
   - Configure your web server to point to the project root
   - Ensure .htaccess is properly configured for routing

## Key Features

- **Bilingual Support**: Full English and Spanish language support
- **Modular Architecture**: Clean separation of content and presentation
- **Responsive Design**: Mobile-first approach with modern CSS
- **Content Management**: PHP-based content management system
- **Performance Optimized**: Fast loading times and efficient code structure
- **Navigation System**: Custom [TerwanPOP](https://erikterwan.com/) menu for enhanced UX
- **SEO Optimized**: Clean URLs and semantic HTML structure
- **Security**: Input validation and XSS protection
- **Maintainable Code**: OOP approach with atlas directory system

## Development Status

### Completed
- ✅ Basic architecture implementation
- ✅ Content management system
- ✅ Bilingual support
- ✅ Imaging section
- ✅ Service pages

### In Progress
- 🚧 Jesus Christ Section for Menu
  - Adding spiritual content under dedicated navigation items
  - It may include inspirational articles, verses, and community links
- 🚧 Directory Layout Refinement
  - Organizing folders for better scalability and maintenance
  - Standardizing structure between English and Spanish versions
  - breadCrumbs addition
- 🚧 System Documentation
  - Creating developer notes and setup guides
  - Improving inline code comments for maintainability
- 🚧 Gallery System
  - Developing dynamic image galleries for services and software
  - Adding lightbox viewing and category filtering

### Planned
- 📋 Performance optimization
  - Image lazy loading
  - CSS/JS minification
  - <s>Browser caching setup</s>
- 📋 Enhanced mobile responsiveness
  - Touch-friendly navigation
  - Responsive images
- 📋 Asset delivery optimization
  - CDN integration
  - WebP image format support
- 📋 Performance testing
  - Lighthouse audits
  - Load testing
  - Cross-browser testing

## Contact

- **Website**: [LatinosPC](https://latinospc.com/)
- **Phone**: 909-276-7214
- **Email**: help@latinospc.com

## License

This project is licensed under the MIT License.

---
*Last Updated: April 2025*