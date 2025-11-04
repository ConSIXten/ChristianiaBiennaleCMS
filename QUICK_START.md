# Quick Start Guide

Get started with your WordPress CMS in 3 simple steps!

## 🚀 Choose Your Method

### Method A: Docker (Fastest - 5 minutes)

```bash
# 1. Start Docker
docker-compose up -d

# 2. Open browser
http://localhost:8080

# 3. Follow WordPress installation wizard
# - Site Title: Christiania Biennale
# - Username: (your choice)
# - Password: (your choice)
# - Email: (your email)
```

**That's it!** WordPress is running with your custom theme and plugin ready to activate.

### Method B: XAMPP/LAMP (15 minutes)

#### Step 1: Install WordPress

1. **Start XAMPP/LAMP**
   - Windows: Open XAMPP Control Panel, start Apache and MySQL
   - Mac: Start XAMPP from Applications
   - Linux: `sudo /opt/lampp/lampp start`

2. **Download WordPress**
   - Visit: https://wordpress.org/download/
   - Download the latest version

3. **Place in htdocs**
   ```
   Windows: C:\xampp\htdocs\christiania-biennale\
   Mac: /Applications/XAMPP/htdocs/christiania-biennale/
   Linux: /var/www/html/christiania-biennale/
   ```

4. **Create Database**
   - Open: http://localhost/phpmyadmin
   - Click "New" → Database name: `christiania_biennale_db`
   - Click "Create"

#### Step 2: Copy Your Files

Copy from this repository:
```bash
# Copy theme
Copy: wp-content/themes/christiania-biennale/
To: htdocs/christiania-biennale/wp-content/themes/christiania-biennale/

# Copy plugin
Copy: wp-content/plugins/christiania-biennale-functionality/
To: htdocs/christiania-biennale/wp-content/plugins/christiania-biennale-functionality/
```

#### Step 3: Install WordPress

1. Open: http://localhost/christiania-biennale
2. Click "Let's go!"
3. Enter database info:
   - Database Name: `christiania_biennale_db`
   - Username: `root`
   - Password: (leave empty for XAMPP)
   - Database Host: `localhost`
4. Click "Submit" → "Run the installation"
5. Fill in site info and create admin account

## ✅ After Installation

### 1. Activate Theme
- Go to: **Appearance → Themes**
- Find "Christiania Biennale"
- Click "Activate"

### 2. Activate Plugin
- Go to: **Plugins**
- Find "Christiania Biennale Functionality"
- Click "Activate"

### 3. Set Permalink Structure
- Go to: **Settings → Permalinks**
- Select "Post name"
- Click "Save Changes"

### 4. Create Your First Content

**Add an Artist:**
1. Go to: **Artists → Add New**
2. Enter artist name and bio
3. Upload featured image (artist photo)
4. Click "Publish"

**Add an Exhibition:**
1. Go to: **Exhibitions → Add New**
2. Enter exhibition details
3. Upload featured image
4. Click "Publish"

**Add an Artwork:**
1. Go to: **Artworks → Add New**
2. Enter artwork title and description
3. Upload artwork image
4. Select art medium
5. Click "Publish"

## 🎨 Customize Your Site

### Set Up Menus
1. Go to: **Appearance → Menus**
2. Create a new menu
3. Add pages: Home, Artists, Exhibitions, Events, Contact
4. Assign to "Primary Menu"
5. Save

### Add Widgets
1. Go to: **Appearance → Widgets**
2. Drag widgets to "Sidebar" or "Footer 1"
3. Configure and save

### Add Your Logo
1. Go to: **Appearance → Customize → Site Identity**
2. Upload logo
3. Click "Publish"

## 📱 View Your Site

- **Frontend:** http://localhost/christiania-biennale/
- **Admin:** http://localhost/christiania-biennale/wp-admin/

## 🆘 Troubleshooting

### "Page Not Found" errors
**Solution:** Go to Settings → Permalinks → Click "Save Changes"

### Theme not showing
**Solution:** Make sure both `style.css` and `index.php` exist in theme folder

### Can't upload images
**Solution:** Check that `wp-content/uploads/` folder has write permissions

### Blank page
**Solution:** 
1. Enable debugging in `wp-config.php`:
   ```php
   define('WP_DEBUG', true);
   define('WP_DEBUG_LOG', true);
   ```
2. Check `wp-content/debug.log` for errors

## 📚 Next Steps

- **Read the full guide:** [WORDPRESS_SETUP.md](WORDPRESS_SETUP.md)
- **Learn file structure:** [HTDOCS_STRUCTURE.md](HTDOCS_STRUCTURE.md)
- **Theme docs:** [wp-content/themes/christiania-biennale/README.md](wp-content/themes/christiania-biennale/README.md)
- **Plugin docs:** [wp-content/plugins/christiania-biennale-functionality/README.md](wp-content/plugins/christiania-biennale-functionality/README.md)

## 🎉 You're Ready!

Your WordPress CMS is now set up and ready for content!

Start adding artists, exhibitions, events, and artworks to build your art exhibition website.

For detailed documentation, see [WORDPRESS_SETUP.md](WORDPRESS_SETUP.md)
