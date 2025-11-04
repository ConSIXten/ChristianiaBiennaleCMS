# Getting Started with Christiania Biennale CMS

Welcome! This repository now contains everything you need to create a WordPress CMS for your Christiania Biennale art exhibition website.

## 🎯 What's Been Created for You

### 📚 Documentation (Start Here!)

1. **[QUICK_START.md](QUICK_START.md)** ⭐ **START HERE!**
   - 5-minute Docker setup
   - 15-minute XAMPP setup
   - Step-by-step instructions

2. **[WORDPRESS_SETUP.md](WORDPRESS_SETUP.md)**
   - Complete WordPress installation guide
   - Database setup
   - Converting React to WordPress
   - Development workflow

3. **[HTDOCS_STRUCTURE.md](HTDOCS_STRUCTURE.md)**
   - Where to place files in htdocs
   - Directory structure explained
   - File placement guide
   - React to WordPress mapping

4. **[DIRECTORY_TREE.txt](DIRECTORY_TREE.txt)**
   - Visual directory tree
   - Complete file listing
   - Template hierarchy explanation

### 🎨 Custom WordPress Theme

**Location:** `wp-content/themes/christiania-biennale/`

A complete, production-ready WordPress theme with:
- ✅ All required files (style.css, index.php)
- ✅ Modern, responsive design
- ✅ Template files (header, footer, single, page, sidebar)
- ✅ Reusable template parts
- ✅ Custom CSS and JavaScript
- ✅ Menu locations (Primary, Footer)
- ✅ Widget areas (Sidebar, Footer)
- ✅ Gutenberg compatible

**Key Files:**
```
wp-content/themes/christiania-biennale/
├── style.css              # Theme metadata (required)
├── index.php              # Main template (required)
├── functions.php          # Theme setup
├── header.php             # Site header
├── footer.php             # Site footer
├── single.php             # Blog posts
├── page.php               # Pages
├── sidebar.php            # Sidebar
├── template-parts/        # Reusable components
└── assets/                # CSS, JS, images
```

### 🔌 Custom Functionality Plugin

**Location:** `wp-content/plugins/christiania-biennale-functionality/`

A complete plugin that adds:

**Custom Post Types:**
- 🎨 **Artists** - Artist profiles and portfolios
- 🖼️ **Exhibitions** - Exhibition information
- 📅 **Events** - Exhibition events and programs
- 🎭 **Artworks** - Individual artwork entries

**Custom Taxonomies:**
- 🏷️ **Art Mediums** - Categorize artworks (painting, sculpture, etc.)
- 📆 **Exhibition Years** - Organize by year

**Key Files:**
```
wp-content/plugins/christiania-biennale-functionality/
├── christiania-biennale-functionality.php  # Main plugin file
└── includes/
    ├── post-types.php       # Custom post types
    └── taxonomies.php       # Custom taxonomies
```

### 🐳 Docker Setup

**File:** `docker-compose.yml`

Complete Docker setup with:
- WordPress container
- MySQL database
- phpMyAdmin

One command to start: `docker-compose up -d`

### ⚙️ Configuration Files

- **`.gitignore`** - Proper WordPress git ignore rules
- **`README.md`** - Project overview (updated)

## 🚀 Next Steps - What YOU Need to Do

### Step 1: Choose Installation Method

**Option A: Docker (Fastest)**
```bash
docker-compose up -d
# Open http://localhost:8080
```

**Option B: XAMPP/LAMP**
1. Download WordPress
2. Extract to htdocs/christiania-biennale/
3. Copy theme and plugin from this repo
4. Follow [QUICK_START.md](QUICK_START.md)

### Step 2: Complete WordPress Installation

1. Open your site URL in browser
2. Complete WordPress installation wizard
3. Create admin account

### Step 3: Activate Theme and Plugin

1. **Activate Theme:**
   - WordPress Admin → Appearance → Themes
   - Find "Christiania Biennale"
   - Click "Activate"

2. **Activate Plugin:**
   - WordPress Admin → Plugins
   - Find "Christiania Biennale Functionality"
   - Click "Activate"

### Step 4: Configure Your Site

1. **Set Permalinks:**
   - Settings → Permalinks
   - Select "Post name"
   - Save

2. **Create Menus:**
   - Appearance → Menus
   - Create "Primary Menu"
   - Add pages and assign to location

3. **Add Widgets:**
   - Appearance → Widgets
   - Add widgets to Sidebar or Footer

### Step 5: Start Adding Content!

You now have these new content types available:

1. **Artists** → Add artist profiles
2. **Exhibitions** → Add exhibitions
3. **Events** → Add events
4. **Artworks** → Add artworks

## 📖 Where to Find What

### Need to...

**Install WordPress?**
→ Read [QUICK_START.md](QUICK_START.md)

**Understand file structure?**
→ Read [HTDOCS_STRUCTURE.md](HTDOCS_STRUCTURE.md)

**Learn WordPress development?**
→ Read [WORDPRESS_SETUP.md](WORDPRESS_SETUP.md)

**Customize the theme?**
→ Read [wp-content/themes/christiania-biennale/README.md](wp-content/themes/christiania-biennale/README.md)

**Work with custom post types?**
→ Read [wp-content/plugins/christiania-biennale-functionality/README.md](wp-content/plugins/christiania-biennale-functionality/README.md)

**See all files?**
→ Read [DIRECTORY_TREE.txt](DIRECTORY_TREE.txt)

## 🎯 Your Development Workflow

```
1. Start local server (Docker or XAMPP)
   ↓
2. Make changes to theme/plugin files
   ↓
3. Refresh browser to see changes
   ↓
4. Commit changes to this repository
   ↓
5. Repeat
```

### What to Commit

✅ Your theme files: `wp-content/themes/christiania-biennale/`
✅ Your plugin files: `wp-content/plugins/christiania-biennale-functionality/`
✅ Documentation updates

❌ Core WordPress files
❌ wp-config.php
❌ Uploads directory
❌ Other themes/plugins

## 🆘 Common Questions

### Q: I'm new to WordPress. Where do I start?
**A:** Start with [QUICK_START.md](QUICK_START.md) for installation, then [WORDPRESS_SETUP.md](WORDPRESS_SETUP.md) for concepts.

### Q: Where do I put my files in htdocs?
**A:** Read [HTDOCS_STRUCTURE.md](HTDOCS_STRUCTURE.md) for complete file placement guide.

### Q: How do I convert my React components to WordPress?
**A:** See the "Converting React to WordPress" section in [WORDPRESS_SETUP.md](WORDPRESS_SETUP.md).

### Q: Can I customize the theme?
**A:** Yes! Edit files in `wp-content/themes/christiania-biennale/`. See theme's README.md for details.

### Q: How do I add custom fields to Artists/Exhibitions?
**A:** Install the "Advanced Custom Fields" plugin or add custom meta boxes. See plugin's README.md for examples.

### Q: The theme/plugin isn't working!
**A:** Make sure:
1. WordPress is installed correctly
2. Theme has both style.css AND index.php
3. Theme and plugin are activated in WordPress admin
4. Permalinks are set to "Post name"

## 🎉 You're All Set!

Everything is ready for you to start building your Christiania Biennale CMS website!

### Summary of What You Have:

✅ Complete WordPress theme (ready to use)
✅ Custom plugin with post types (ready to use)
✅ Docker setup (ready to run)
✅ Comprehensive documentation (ready to read)
✅ Proper .gitignore (ready to commit)
✅ File structure guides (ready to follow)

### Your Next Action:

**Open [QUICK_START.md](QUICK_START.md) and follow the installation steps!**

---

Need help? Check the documentation files or refer to:
- WordPress Codex: https://codex.wordpress.org/
- WordPress Support: https://wordpress.org/support/
- This repository's documentation

Happy coding! 🎨✨
