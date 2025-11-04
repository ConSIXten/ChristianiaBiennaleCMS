# htdocs Directory Structure Guide

This document explains exactly where to place files in your XAMPP/LAMP htdocs folder for the Christiania Biennale WordPress CMS project.

## Quick Reference: File Placement

```
htdocs/
└── christiania-biennale/                    # ← Your project root (WordPress installation)
    │
    ├── wp-admin/                            # ← WordPress admin (DON'T TOUCH)
    ├── wp-includes/                         # ← WordPress core (DON'T TOUCH)
    │
    ├── wp-content/                          # ← ALL YOUR CUSTOM FILES GO HERE
    │   │
    │   ├── themes/                          # ← Your custom theme
    │   │   └── christiania-biennale/        # ← THIS IS YOUR MAIN WORKING DIRECTORY
    │   │       ├── style.css                # ← Required: Theme metadata
    │   │       ├── functions.php            # ← Theme functions
    │   │       ├── index.php                # ← Required: Main template
    │   │       ├── header.php               # ← Header template
    │   │       ├── footer.php               # ← Footer template
    │   │       ├── single.php               # ← Single post template
    │   │       ├── page.php                 # ← Page template
    │   │       ├── sidebar.php              # ← Sidebar template
    │   │       │
    │   │       ├── assets/                  # ← Your CSS, JS, images
    │   │       │   ├── css/
    │   │       │   │   └── custom.css       # ← Your custom styles
    │   │       │   ├── js/
    │   │       │   │   └── main.js          # ← Your JavaScript
    │   │       │   └── images/
    │   │       │       └── logo.png         # ← Your images
    │   │       │
    │   │       ├── template-parts/          # ← Reusable template pieces
    │   │       │   ├── content.php          # ← Post content template
    │   │       │   ├── content-page.php     # ← Page content template
    │   │       │   └── content-none.php     # ← No content template
    │   │       │
    │   │       └── includes/                # ← PHP helper functions
    │   │           └── helpers.php          # ← Custom helper functions
    │   │
    │   ├── plugins/                         # ← Your custom plugins
    │   │   └── christiania-biennale-functionality/
    │   │       ├── christiania-biennale-functionality.php  # ← Plugin main file
    │   │       ├── includes/
    │   │       │   ├── post-types.php       # ← Custom post types
    │   │       │   └── taxonomies.php       # ← Custom taxonomies
    │   │       └── assets/
    │   │           ├── css/
    │   │           └── js/
    │   │
    │   └── uploads/                         # ← Media uploads (auto-generated)
    │       ├── 2024/
    │       │   ├── 01/
    │       │   ├── 02/
    │       │   └── ...
    │       └── 2025/
    │
    ├── wp-config.php                        # ← WordPress configuration (SENSITIVE!)
    └── index.php                            # ← WordPress entry point (DON'T TOUCH)
```

## Step-by-Step Setup

### Step 1: Create Project Directory

**On Windows (XAMPP):**
```
C:\xampp\htdocs\christiania-biennale\
```

**On Mac (XAMPP):**
```
/Applications/XAMPP/htdocs/christiania-biennale/
```

**On Linux (LAMP):**
```
/var/www/html/christiania-biennale/
```
or
```
/opt/lampp/htdocs/christiania-biennale/
```

### Step 2: Install WordPress Core

1. Download WordPress from https://wordpress.org/download/
2. Extract to `htdocs/christiania-biennale/`
3. The WordPress files will create the base structure

### Step 3: Copy Your Custom Files

From this repository, copy:

```bash
# Copy theme
htdocs/christiania-biennale/wp-content/themes/christiania-biennale/
← Copy from: repo/wp-content/themes/christiania-biennale/

# Copy plugin
htdocs/christiania-biennale/wp-content/plugins/christiania-biennale-functionality/
← Copy from: repo/wp-content/plugins/christiania-biennale-functionality/
```

## What Goes Where - Detailed Breakdown

### Core WordPress (DO NOT MODIFY)

| Directory | Purpose | Modify? |
|-----------|---------|---------|
| `wp-admin/` | WordPress admin dashboard | ❌ Never |
| `wp-includes/` | WordPress core functions | ❌ Never |
| `index.php`, `wp-*.php` | WordPress core files | ❌ Never |

### Your Custom Code (MODIFY THESE)

| Directory/File | Purpose | Modify? |
|----------------|---------|---------|
| `wp-content/themes/christiania-biennale/` | Your theme files | ✅ Always |
| `wp-content/plugins/christiania-biennale-functionality/` | Your plugin | ✅ Always |
| `wp-config.php` | Database & settings | ⚠️ Careful |

### Theme Structure Details

```
wp-content/themes/christiania-biennale/
│
├── Required Files (must have)
│   ├── style.css                    # Theme metadata (Required!)
│   └── index.php                    # Fallback template (Required!)
│
├── Common Template Files
│   ├── header.php                   # Site header
│   ├── footer.php                   # Site footer
│   ├── sidebar.php                  # Sidebar
│   ├── functions.php                # Theme functions
│   ├── single.php                   # Single post
│   ├── page.php                     # Pages
│   ├── archive.php                  # Archive pages
│   ├── search.php                   # Search results
│   ├── 404.php                      # 404 error page
│   ├── front-page.php               # Home page
│   └── comments.php                 # Comments template
│
├── Assets
│   └── assets/
│       ├── css/
│       │   ├── style.css            # Additional styles
│       │   └── responsive.css       # Mobile styles
│       ├── js/
│       │   ├── main.js              # Main JavaScript
│       │   └── navigation.js        # Navigation scripts
│       └── images/
│           ├── logo.png             # Site logo
│           └── default-thumb.jpg    # Default thumbnail
│
├── Template Parts (reusable components)
│   └── template-parts/
│       ├── content.php              # Default post content
│       ├── content-single.php       # Single post content
│       ├── content-page.php         # Page content
│       ├── content-none.php         # No content found
│       └── hero.php                 # Hero section
│
└── Custom Page Templates
    ├── page-about.php               # About page template
    ├── page-contact.php             # Contact page template
    └── template-fullwidth.php       # Full width template
```

## Converting React to WordPress

### React Components → WordPress Templates

| React File | → | WordPress File |
|------------|---|----------------|
| `src/App.jsx` | → | `functions.php` (setup) |
| `src/components/Header.jsx` | → | `header.php` |
| `src/components/Footer.jsx` | → | `footer.php` |
| `src/components/Navigation.jsx` | → | `header.php` (nav section) |
| `src/components/Hero.jsx` | → | `template-parts/hero.php` |
| `src/pages/Home.jsx` | → | `front-page.php` |
| `src/pages/About.jsx` | → | `page-about.php` |
| `src/pages/Blog.jsx` | → | `archive.php` |
| `src/pages/BlogPost.jsx` | → | `single.php` |
| `src/components/Card.jsx` | → | `template-parts/content.php` |

### CSS and JavaScript

| React Assets | → | WordPress Assets |
|--------------|---|------------------|
| `src/styles/App.css` | → | `style.css` |
| `src/styles/components/` | → | `assets/css/components.css` |
| `src/scripts/main.js` | → | `assets/js/main.js` |

## Access Your Site

After setup, access your site at:

- **Frontend:** `http://localhost/christiania-biennale/`
- **Admin Dashboard:** `http://localhost/christiania-biennale/wp-admin/`
- **phpMyAdmin:** `http://localhost/phpmyadmin/`

## Version Control

### What to Commit (YES)
✅ `wp-content/themes/christiania-biennale/`
✅ `wp-content/plugins/christiania-biennale-functionality/`
✅ `.gitignore`
✅ `README.md`
✅ Documentation files

### What NOT to Commit (NO)
❌ `wp-admin/`
❌ `wp-includes/`
❌ `wp-config.php` (contains passwords!)
❌ `wp-content/uploads/`
❌ Core WordPress files
❌ `node_modules/`
❌ `.DS_Store`, `Thumbs.db`

## Common Issues & Solutions

### Issue: "Cannot find style.css"
**Solution:** Make sure `style.css` has the required header comment with theme metadata.

### Issue: "Theme not showing up"
**Solution:** Theme must be in `wp-content/themes/your-theme-name/` with both `style.css` and `index.php`.

### Issue: "Broken links/images"
**Solution:** 
- Use `get_template_directory_uri()` for theme files
- Use `wp_upload_dir()` for uploads
- Never use absolute paths like `/xampp/htdocs/...`

### Issue: "Changes not showing"
**Solution:**
- Hard refresh browser (Ctrl+F5)
- Clear WordPress cache
- Check if you're editing the right file location

## Next Steps

1. ✅ Understand this structure
2. ⬜ Install WordPress in htdocs
3. ⬜ Copy theme and plugin files
4. ⬜ Activate theme in WordPress admin
5. ⬜ Activate plugin in WordPress admin
6. ⬜ Start customizing!

## Need Help?

Refer to:
- `WORDPRESS_SETUP.md` - Complete setup guide
- `README.md` - Project overview
- WordPress Codex: https://codex.wordpress.org/
