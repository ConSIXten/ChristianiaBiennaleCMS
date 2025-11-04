# WordPress CMS Setup Guide for Christiania Biennale

This guide will help you transition from a React project to a WordPress CMS project.

## Table of Contents
1. [Prerequisites](#prerequisites)
2. [Directory Structure](#directory-structure)
3. [Installation Steps](#installation-steps)
4. [File Placement Guide](#file-placement-guide)
5. [Theme Development](#theme-development)
6. [Plugin Development](#plugin-development)
7. [Development Workflow](#development-workflow)

## Prerequisites

Before starting, ensure you have:
- **XAMPP** (for Windows/Mac) or **LAMP** (for Linux) installed
- **PHP 7.4+** (WordPress 6.0+ requirement)
- **MySQL 5.7+** or **MariaDB 10.3+**
- **Apache** or **Nginx** web server
- Basic knowledge of PHP, HTML, CSS, and JavaScript

### Alternative: Docker Setup
If you prefer Docker (recommended for consistency):
- Docker Desktop installed
- Docker Compose installed

## Directory Structure

### Standard WordPress Installation in htdocs

```
htdocs/
└── christiania-biennale/              # Your project root
    ├── wp-admin/                      # WordPress admin (core files)
    ├── wp-content/                    # Your custom content goes here
    │   ├── themes/                    # Custom themes
    │   │   └── christiania-biennale/  # Your custom theme
    │   │       ├── assets/
    │   │       │   ├── css/
    │   │       │   ├── js/
    │   │       │   └── images/
    │   │       ├── includes/          # PHP includes
    │   │       ├── template-parts/    # Reusable template parts
    │   │       ├── functions.php      # Theme functions
    │   │       ├── style.css          # Main stylesheet (required)
    │   │       ├── index.php          # Main template
    │   │       ├── header.php         # Header template
    │   │       ├── footer.php         # Footer template
    │   │       ├── single.php         # Single post template
    │   │       ├── page.php           # Page template
    │   │       └── screenshot.png     # Theme screenshot
    │   ├── plugins/                   # Custom plugins
    │   │   └── christiania-biennale-functionality/
    │   │       ├── christiania-biennale-functionality.php
    │   │       ├── includes/
    │   │       └── assets/
    │   └── uploads/                   # Media uploads (auto-generated)
    ├── wp-includes/                   # WordPress core (don't modify)
    ├── wp-config.php                  # WordPress configuration
    └── index.php                      # WordPress entry point
```

## Installation Steps

### Method 1: Manual Installation (XAMPP/LAMP)

#### Step 1: Download WordPress
```bash
# Navigate to your htdocs directory
cd /path/to/xampp/htdocs/  # Windows: C:\xampp\htdocs\
                           # Mac: /Applications/XAMPP/htdocs/
                           # Linux: /opt/lampp/htdocs/

# Download WordPress
wget https://wordpress.org/latest.zip
# Or download from https://wordpress.org/download/

# Extract
unzip latest.zip
mv wordpress christiania-biennale
cd christiania-biennale
```

#### Step 2: Create Database
1. Open phpMyAdmin (http://localhost/phpmyadmin)
2. Click "New" to create a database
3. Database name: `christiania_biennale_db`
4. Collation: `utf8mb4_unicode_ci`
5. Click "Create"

#### Step 3: Configure WordPress
1. Copy `wp-config-sample.php` to `wp-config.php`
2. Edit `wp-config.php` with your database credentials:
```php
define( 'DB_NAME', 'christiania_biennale_db' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', '' );  // Empty for XAMPP default
define( 'DB_HOST', 'localhost' );
```

#### Step 4: Run WordPress Installation
1. Open browser: `http://localhost/christiania-biennale`
2. Follow the installation wizard
3. Create admin account
4. Complete installation

### Method 2: Docker Installation (Recommended)

See `docker-compose.yml` in this repository.

```bash
# Start WordPress with Docker
docker-compose up -d

# Access WordPress at http://localhost:8080
# Access phpMyAdmin at http://localhost:8081
```

## File Placement Guide

### What Goes Where?

#### Core WordPress Files (DON'T MODIFY)
- `wp-admin/` - WordPress admin interface
- `wp-includes/` - WordPress core functions
- `index.php`, `wp-*.php` - WordPress core files

#### Your Custom Code (MODIFY THESE)

**1. Custom Theme** - `wp-content/themes/christiania-biennale/`
- All your custom HTML, CSS, JavaScript
- PHP templates for different page types
- This is where most of your React components will be converted

**2. Custom Plugin** - `wp-content/plugins/christiania-biennale-functionality/`
- Custom post types (e.g., Artists, Exhibitions, Events)
- Custom taxonomies (e.g., Categories, Tags)
- Custom functionality that's independent of the theme

**3. Media Files** - `wp-content/uploads/`
- Images, videos, documents uploaded through WordPress
- Auto-organized by year/month

**4. Configuration** - `wp-config.php`
- Database credentials
- Security keys
- WordPress settings

## Theme Development

### Converting React Components to WordPress

Your React project structure will map to WordPress like this:

**React → WordPress Mapping:**
- `src/components/Header.jsx` → `header.php`
- `src/components/Footer.jsx` → `footer.php`
- `src/pages/Home.jsx` → `front-page.php` or `home.php`
- `src/pages/About.jsx` → `page-about.php` (page template)
- `src/components/` → `template-parts/`
- `src/styles/` → `assets/css/`
- `src/scripts/` → `assets/js/`

### Required Theme Files

Minimum files needed:
1. **style.css** - Theme metadata (required)
2. **index.php** - Fallback template (required)
3. **functions.php** - Theme functions
4. **screenshot.png** - Theme preview (1200x900px)

### Theme Template Hierarchy

WordPress looks for templates in this order:
1. `front-page.php` - Home page
2. `home.php` - Blog page
3. `single.php` - Single posts
4. `page.php` - Pages
5. `archive.php` - Archive pages
6. `index.php` - Fallback

## Plugin Development

### Custom Post Types Example

Create custom post types for your content:
- Artists
- Exhibitions
- Events
- Artworks

These will be registered in your custom plugin.

## Development Workflow

### Day-to-Day Development

1. **Start your local server**
   - XAMPP: Start Apache and MySQL from control panel
   - Docker: `docker-compose up -d`

2. **Edit theme files** in `wp-content/themes/christiania-biennale/`

3. **Changes reflect immediately** (no build step needed for PHP)

4. **For CSS/JS changes:**
   - Edit files in `assets/`
   - Hard refresh browser (Ctrl+F5)
   - Consider adding version numbers to avoid caching

5. **Version Control**
   - Only commit files in `wp-content/themes/your-theme/`
   - Only commit files in `wp-content/plugins/your-plugin/`
   - DO NOT commit core WordPress files
   - DO NOT commit `wp-config.php` (contains sensitive data)
   - DO NOT commit `uploads/` directory

### Debugging

Enable debugging in `wp-config.php`:
```php
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );
```

Logs will be saved to `wp-content/debug.log`

## Next Steps

1. ✅ Review this guide
2. ⬜ Set up local WordPress installation
3. ⬜ Create your custom theme structure
4. ⬜ Create your custom plugin
5. ⬜ Start converting React components to PHP templates
6. ⬜ Implement custom post types
7. ⬜ Style your theme
8. ⬜ Test thoroughly

## Resources

- [WordPress Theme Handbook](https://developer.wordpress.org/themes/)
- [WordPress Plugin Handbook](https://developer.wordpress.org/plugins/)
- [WordPress Codex](https://codex.wordpress.org/)
- [WordPress Template Hierarchy](https://developer.wordpress.org/themes/basics/template-hierarchy/)

## Support

For questions or issues, refer to:
- WordPress Support Forums: https://wordpress.org/support/
- WordPress Stack Exchange: https://wordpress.stackexchange.com/
