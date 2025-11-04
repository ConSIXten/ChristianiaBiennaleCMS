# Christiania Biennale CMS

A WordPress CMS project for managing art exhibitions, artists, events, and artworks for Christiania Biennale.

## 📋 Overview

This repository contains a complete WordPress theme and plugin setup designed specifically for art exhibition websites. It includes custom post types for Artists, Exhibitions, Events, and Artworks, along with a clean, modern theme.

## 🚀 Quick Start

**New to WordPress?** Start here: **[WORDPRESS_SETUP.md](WORDPRESS_SETUP.md)** - Complete setup guide

**Need to know where files go?** Read: **[HTDOCS_STRUCTURE.md](HTDOCS_STRUCTURE.md)** - File placement guide

## 📦 What's Included

### Custom WordPress Theme
- **Location:** `wp-content/themes/christiania-biennale/`
- Clean, modern design optimized for art exhibitions
- Fully responsive (mobile, tablet, desktop)
- Gutenberg editor compatible
- Widget areas and menu locations

### Custom Functionality Plugin
- **Location:** `wp-content/plugins/christiania-biennale-functionality/`
- Custom post types: Artists, Exhibitions, Events, Artworks
- Custom taxonomies: Art Mediums, Exhibition Years
- REST API enabled

### Development Tools
- Docker setup for easy local development
- Proper `.gitignore` for WordPress projects

## 📁 Repository Structure

```
ChristianiaBiennaleCMS/
├── wp-content/
│   ├── themes/
│   │   └── christiania-biennale/        # Your custom theme
│   │       ├── style.css                # Theme metadata & styles
│   │       ├── functions.php            # Theme setup
│   │       ├── index.php                # Main template
│   │       ├── header.php               # Header
│   │       ├── footer.php               # Footer
│   │       ├── assets/                  # CSS, JS, images
│   │       └── template-parts/          # Reusable templates
│   │
│   └── plugins/
│       └── christiania-biennale-functionality/  # Custom plugin
│           ├── christiania-biennale-functionality.php
│           └── includes/                # Post types & taxonomies
│
├── docker-compose.yml                   # Docker setup
├── .gitignore                           # Git ignore rules
├── WORDPRESS_SETUP.md                   # Complete setup guide
├── HTDOCS_STRUCTURE.md                  # File placement guide
└── README.md                            # This file
```

## 🎯 Getting Started

### Option 1: Docker (Recommended)

```bash
# Clone the repository
git clone https://github.com/ConSIXten/ChristianiaBiennaleCMS.git
cd ChristianiaBiennaleCMS

# Start Docker containers
docker-compose up -d

# Access WordPress at http://localhost:8080
# Access phpMyAdmin at http://localhost:8081
```

### Option 2: XAMPP/LAMP

1. Install XAMPP or LAMP
2. Download WordPress from https://wordpress.org/
3. Extract WordPress to `htdocs/christiania-biennale/`
4. Copy theme and plugin from this repo to WordPress installation
5. Follow the setup guide in [WORDPRESS_SETUP.md](WORDPRESS_SETUP.md)

## 📖 Documentation

- **[WORDPRESS_SETUP.md](WORDPRESS_SETUP.md)** - Complete WordPress setup guide
  - Prerequisites and installation
  - Database configuration
  - Theme and plugin activation
  - Converting React to WordPress

- **[HTDOCS_STRUCTURE.md](HTDOCS_STRUCTURE.md)** - File placement guide
  - Where to place files in htdocs
  - Directory structure breakdown
  - React to WordPress mapping

- **[Theme README](wp-content/themes/christiania-biennale/README.md)** - Theme documentation
  - Features and customization
  - Template files
  - Hooks and filters

- **[Plugin README](wp-content/plugins/christiania-biennale-functionality/README.md)** - Plugin documentation
  - Custom post types
  - Custom taxonomies
  - Code examples

## 🎨 Features

### Custom Post Types

- **Artists** - Artist profiles and portfolios
- **Exhibitions** - Exhibition information
- **Events** - Exhibition events and programs
- **Artworks** - Individual artwork entries

### Custom Taxonomies

- **Art Mediums** - Categorize artworks (painting, sculpture, etc.)
- **Exhibition Years** - Organize by year

### Theme Features

- Responsive design
- Custom menus (Primary, Footer)
- Widget areas (Sidebar, Footer)
- Featured images
- SEO optimized
- Accessibility ready

## 💻 Development

### Prerequisites

- PHP 7.4+
- MySQL 5.7+ or MariaDB 10.3+
- WordPress 6.0+
- Apache or Nginx

### Local Development Setup

1. Enable debug mode in `wp-config.php`:
```php
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
```

2. Edit theme files in `wp-content/themes/christiania-biennale/`
3. Changes reflect immediately (no build step)
4. Hard refresh browser (Ctrl+F5) for CSS/JS changes

### Version Control

**Only commit these directories:**
- `wp-content/themes/christiania-biennale/`
- `wp-content/plugins/christiania-biennale-functionality/`
- Documentation files
- `docker-compose.yml`
- `.gitignore`

**Never commit:**
- Core WordPress files
- `wp-config.php` (contains database credentials)
- `wp-content/uploads/`
- `node_modules/`

## 🔧 Installation Instructions

### After Cloning This Repository

1. **Set up WordPress:**
   - Install WordPress core files
   - Configure database connection

2. **Copy custom files:**
   - Theme is already in correct location
   - Plugin is already in correct location

3. **Activate in WordPress:**
   - Go to Appearance → Themes → Activate "Christiania Biennale"
   - Go to Plugins → Activate "Christiania Biennale Functionality"

4. **Configure:**
   - Set up navigation menus
   - Add widgets
   - Create sample content

See [WORDPRESS_SETUP.md](WORDPRESS_SETUP.md) for detailed instructions.

## 📝 Converting from React

If you're converting from a React project:

1. **Components** → Template parts in `template-parts/`
2. **Pages** → PHP templates (page.php, single.php, etc.)
3. **Styling** → CSS in `assets/css/`
4. **Scripts** → JavaScript in `assets/js/`

See [WORDPRESS_SETUP.md](WORDPRESS_SETUP.md) for detailed React to WordPress mapping.

## 🤝 Contributing

1. Fork the repository
2. Create your feature branch
3. Commit your changes
4. Push to the branch
5. Open a Pull Request

## 📄 License

This project is licensed under the GPL v2 or later - see the LICENSE file for details.

## 🆘 Support

- Check the documentation files in this repository
- WordPress Codex: https://codex.wordpress.org/
- WordPress Support: https://wordpress.org/support/
- GitHub Issues: https://github.com/ConSIXten/ChristianiaBiennaleCMS/issues

## 👥 Authors

Christiania Biennale Team

## 🙏 Acknowledgments

- WordPress community
- Theme development based on WordPress coding standards
- Built for art exhibition management