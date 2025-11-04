# Christiania Biennale CMS

A modern WordPress theme built for the Christiania Biennale project with React integration capabilities.

## Theme Structure

```
ChristianiaBiennaleCMS/
├── css/
│   ├── base.css           # Base styles, reset, variables
│   ├── layout.css         # Layout and grid system
│   └── modules/
│       ├── header.css     # Header styles
│       ├── hero.css       # Hero section styles
│       └── footer.css     # Footer styles
├── inc/
│   ├── template-tags.php  # Custom template functions
│   └── rest-api.php       # REST API customization
├── parts/
│   ├── head.php           # HTML head section
│   ├── header.php         # Site header
│   └── footer.php         # Site footer
├── scripts/
│   └── main.js            # Main JavaScript (React entry point)
├── template-parts/
│   ├── content.php        # Post content template
│   └── content-none.php   # No content found template
├── functions.php          # Theme functions and setup
├── style.css              # Theme stylesheet with header
├── index.php              # Main template fallback
├── front-page.php         # Homepage template (React mounting point)
├── page.php               # Page template
├── single.php             # Single post template
├── header.php             # Header loader
├── footer.php             # Footer loader
├── sidebar.php            # Sidebar widget area
└── README.md              # This file
```

## Features

### WordPress Features
- ✅ Custom logo support
- ✅ Navigation menus (Primary + Footer)
- ✅ Featured images with custom sizes
- ✅ Widget areas (Sidebar + Footer)
- ✅ HTML5 semantic markup
- ✅ Responsive design
- ✅ Custom background support
- ✅ Editor styles
- ✅ Responsive embeds
- ✅ Block editor styles
- ✅ Translation ready

### Modern Development
- **CSS Custom Properties** (CSS Variables)
- **Modular CSS Architecture** (Base + Layout + Modules)
- **REST API Enhanced** with custom endpoints and fields
- **React Ready** with mounting point in front-page.php
- **Mobile-first responsive design**
- **Accessible navigation** with ARIA attributes
- **Performance optimized** with conditional script loading

### REST API Enhancements

Custom REST API endpoints:
- `/wp-json/christiania-biennale/v1/settings` - Theme settings and configuration

Enhanced post/page responses include:
- `featured_image_url` - Multiple image sizes
- `author_info` - Full author details with avatar

## Installation

1. Download or clone this repository
2. Place in `/wp-content/themes/` directory
3. Activate theme in WordPress admin
4. Go to **Appearance > Menus** to set up navigation
5. Go to **Appearance > Customize** to configure logo and colors

## Configuration

### Required Setup
1. **Create Menus:**
   - Primary Menu (main navigation)
   - Footer Menu (footer links)

2. **Set Static Front Page:**
   - Go to Settings > Reading
   - Set "A static page" for front page
   - This enables the React mounting point

3. **Upload Logo:**
   - Go to Appearance > Customize > Site Identity
   - Upload your logo

### Recommended Plugins
- **Advanced Custom Fields (ACF)** - For custom content fields
- **WP REST API Controller** - Enhanced REST API management
- **Yoast SEO** - SEO optimization

## React Integration

The theme is prepared for React integration:

1. **React Root Element:** `<div id="react-root"></div>` in `front-page.php`
2. **WordPress Data Available:** Via `window.christianiaBiennaleData` object
3. **API Helper:** `window.ChristianiaBiennaleAPI` for REST API calls

### Available WordPress Data in JavaScript

```javascript
christianiaBiennaleData = {
    ajaxUrl: string,    // WordPress AJAX URL
    nonce: string,      // Security nonce for authenticated requests
    themeUrl: string,   // Theme directory URL
    siteUrl: string,    // Site home URL
    siteName: string    // Site name
}
```

### Example API Usage

```javascript
// Fetch posts
const posts = await window.ChristianiaBiennaleAPI.fetch('posts');

// Fetch theme settings
const response = await fetch('/wp-json/christiania-biennale/v1/settings');
const settings = await response.json();
```

## CSS Architecture

### CSS Variables (Customize in base.css)
- Colors: `--color-primary`, `--color-accent`, etc.
- Typography: `--font-primary`, `--font-size-base`, etc.
- Spacing: `--spacing-sm`, `--spacing-md`, etc.
- Transitions: `--transition-fast`, `--transition-normal`

### Responsive Breakpoints
- Small: 576px
- Medium: 768px
- Large: 992px
- XLarge: 1200px
- XXLarge: 1400px

## Development

### Adding New CSS Modules
1. Create new CSS file in `css/modules/`
2. Add `@import` in `style.css`
3. Enqueue in `functions.php` using `christiania_biennale_scripts()`

### Adding Custom Post Types
Add in `functions.php` or separate file in `inc/` directory

### Customizing REST API
Edit `inc/rest-api.php` to add custom endpoints or fields

## Browser Support
- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers

## Version
**1.0.0** - Initial release

## License
GPL v2 or later

## Author
ConSIXten

## Next Steps for React Integration

1. Install React dependencies in theme:
   ```bash
   npm init -y
   npm install react react-dom
   npm install --save-dev @vitejs/plugin-react vite
   ```

2. Set up build process (Vite/Webpack)
3. Create React components
4. Mount React app to `#react-root` element
5. Use WordPress REST API for data fetching

---

**Ready for your React project integration!** 🚀