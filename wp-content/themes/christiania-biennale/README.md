# Christiania Biennale Theme

A custom WordPress theme for the Christiania Biennale art exhibition website.

## Theme Information

- **Theme Name:** Christiania Biennale
- **Version:** 1.0.0
- **Requires WordPress:** 6.0+
- **Requires PHP:** 7.4+
- **License:** GPL v2 or later

## Features

- 🎨 Clean, modern design optimized for art exhibitions
- 📱 Fully responsive (mobile, tablet, desktop)
- ♿ Accessibility ready
- 🎯 SEO optimized
- 🔌 Custom post types support (Artists, Exhibitions, Events, Artworks)
- 🖼️ Featured images support
- 📝 Gutenberg editor compatible
- 🎨 Widget areas (Sidebar, Footer)
- 🔍 Search functionality
- 💬 Comments support
- 🌐 Translation ready

## Installation

1. Download or clone this theme
2. Place in `wp-content/themes/` directory
3. Go to WordPress Admin → Appearance → Themes
4. Activate "Christiania Biennale" theme

## Directory Structure

```
christiania-biennale/
├── assets/
│   ├── css/              # Stylesheets
│   ├── js/               # JavaScript files
│   └── images/           # Theme images
├── includes/             # PHP helper functions
├── template-parts/       # Reusable template parts
├── functions.php         # Theme functions and setup
├── style.css            # Main stylesheet with theme metadata
├── index.php            # Main template file
├── header.php           # Header template
├── footer.php           # Footer template
├── sidebar.php          # Sidebar template
├── single.php           # Single post template
├── page.php             # Page template
└── screenshot.png       # Theme screenshot (add this)
```

## Template Files

- `index.php` - Default template (fallback)
- `header.php` - Site header
- `footer.php` - Site footer
- `sidebar.php` - Sidebar widget area
- `single.php` - Single post display
- `page.php` - Static page display
- `archive.php` - Archive pages (add if needed)
- `search.php` - Search results (add if needed)
- `404.php` - Error page (add if needed)
- `front-page.php` - Home page (add if needed)

## Template Parts

Located in `template-parts/`:
- `content.php` - Default post content
- `content-single.php` - Single post content
- `content-page.php` - Page content
- `content-none.php` - No content found message

## Customization

### Menus

Two menu locations are registered:
- **Primary Menu** - Main navigation in header
- **Footer Menu** - Footer navigation

To set up menus:
1. Go to Appearance → Menus
2. Create a new menu
3. Assign to "Primary Menu" or "Footer Menu" location

### Widgets

Widget areas available:
- **Sidebar** - Main sidebar
- **Footer 1** - Footer widget area

Add widgets at: Appearance → Widgets

### Custom Styles

Add custom CSS in `assets/css/custom.css` or use:
- WordPress Customizer → Additional CSS
- Child theme (recommended for major changes)

### Custom JavaScript

Add custom JS in `assets/js/main.js`

## Hooks & Filters

### Actions

- `christiania_biennale_setup` - Theme setup
- `christiania_biennale_scripts` - Enqueue scripts/styles
- `christiania_biennale_widgets_init` - Register widget areas

### Filters

- `christiania_biennale_excerpt_length` - Modify excerpt length
- `christiania_biennale_excerpt_more` - Modify excerpt "read more"
- `christiania_biennale_body_classes` - Add custom body classes

## Custom Post Types

This theme works with custom post types from the "Christiania Biennale Functionality" plugin:
- Artists
- Exhibitions
- Events
- Artworks

Make sure the plugin is installed and activated!

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers

## Development

### Prerequisites

- Node.js (optional, for build tools)
- PHP 7.4+
- WordPress 6.0+

### Local Development

1. Use XAMPP, MAMP, or Docker
2. Place theme in `wp-content/themes/`
3. Enable WP_DEBUG in `wp-config.php`:
   ```php
   define('WP_DEBUG', true);
   define('WP_DEBUG_LOG', true);
   ```

### File Naming Conventions

- PHP files: `kebab-case.php`
- CSS classes: `.kebab-case`
- Functions: `christiania_biennale_function_name()`

## Support

For issues or questions:
- Check WordPress Codex: https://codex.wordpress.org/
- WordPress Support: https://wordpress.org/support/
- Theme Repository: https://github.com/ConSIXten/ChristianiaBiennaleCMS

## Changelog

### Version 1.0.0
- Initial release
- Basic theme structure
- Custom post types support
- Responsive design
- Widget areas
- Menu locations

## Credits

Developed by Christiania Biennale Team

## License

This theme is licensed under the GPL v2 or later.
http://www.gnu.org/licenses/gpl-2.0.html
