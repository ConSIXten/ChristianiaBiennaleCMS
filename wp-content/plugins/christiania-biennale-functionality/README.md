# Christiania Biennale Functionality Plugin

Custom WordPress plugin providing post types, taxonomies, and functionality for the Christiania Biennale website.

## Description

This plugin adds custom content types specific to art exhibitions:
- **Artists** - Artist profiles and portfolios
- **Exhibitions** - Exhibition information and details
- **Events** - Exhibition events and programs
- **Artworks** - Individual artwork entries

## Features

- 🎨 Custom Post Types for art-specific content
- 🏷️ Custom Taxonomies (Art Mediums, Exhibition Years)
- 📱 Gutenberg (Block Editor) compatible
- 🔍 Public searchable and queryable
- 📊 Admin columns for easy management
- 🌐 REST API enabled
- 🔄 Archive pages enabled
- ♿ Accessibility ready

## Installation

1. Upload the plugin folder to `/wp-content/plugins/christiania-biennale-functionality/`
2. Activate the plugin through the 'Plugins' menu in WordPress
3. New menu items will appear in your WordPress admin sidebar

## Custom Post Types

### Artists

**Purpose:** Store information about artists participating in the biennale

**Features:**
- Title, content, featured image
- Excerpt support
- Custom fields support
- Archive page at `/artist/`
- Admin icon: 👥 (dashicons-admin-users)

**Usage:**
```php
// Query artists
$artists = new WP_Query(array(
    'post_type' => 'artist',
    'posts_per_page' => 10
));

// Artist permalink
get_permalink($artist_id);
// Example: yoursite.com/artist/artist-name/
```

### Exhibitions

**Purpose:** Display exhibition information

**Features:**
- Title, content, featured image
- Excerpt support
- Custom fields for dates, location, etc.
- Archive page at `/exhibition/`
- Admin icon: 🖼️ (dashicons-images-alt2)

**Usage:**
```php
// Query exhibitions
$exhibitions = new WP_Query(array(
    'post_type' => 'exhibition',
    'posts_per_page' => -1
));
```

### Events

**Purpose:** Manage exhibition-related events

**Features:**
- Title, content, featured image
- Custom fields for date, time, location
- Archive page at `/event/`
- Admin icon: 📅 (dashicons-calendar)

**Usage:**
```php
// Query upcoming events
$events = new WP_Query(array(
    'post_type' => 'event',
    'meta_key' => 'event_date',
    'orderby' => 'meta_value',
    'order' => 'ASC'
));
```

### Artworks

**Purpose:** Catalog individual artworks

**Features:**
- Title, content, featured image
- Excerpt for artwork description
- Custom fields for dimensions, year, etc.
- Archive page at `/artwork/`
- Admin icon: 🎨 (dashicons-art)

**Usage:**
```php
// Query artworks by artist
$artworks = new WP_Query(array(
    'post_type' => 'artwork',
    'meta_query' => array(
        array(
            'key' => 'artist_id',
            'value' => $artist_id
        )
    )
));
```

## Custom Taxonomies

### Art Medium

**Purpose:** Categorize artworks by medium (painting, sculpture, digital, etc.)

**Applied to:** Artworks

**Hierarchical:** Yes (can have parent/child relationships)

**Usage:**
```php
// Get artworks by medium
$paintings = new WP_Query(array(
    'post_type' => 'artwork',
    'tax_query' => array(
        array(
            'taxonomy' => 'art_medium',
            'field' => 'slug',
            'terms' => 'painting'
        )
    )
));

// Display medium terms
$mediums = get_terms('art_medium');
```

**Example mediums:**
- Painting
- Sculpture
- Digital Art
- Photography
- Installation
- Video Art
- Performance
- Mixed Media

### Exhibition Year

**Purpose:** Organize content by exhibition year

**Applied to:** Exhibitions, Events, Artists, Artworks

**Hierarchical:** Yes

**Usage:**
```php
// Get 2024 exhibitions
$exhibitions_2024 = new WP_Query(array(
    'post_type' => 'exhibition',
    'tax_query' => array(
        array(
            'taxonomy' => 'exhibition_year',
            'field' => 'slug',
            'terms' => '2024'
        )
    )
));
```

## Code Examples

### Display Artists on a Page

```php
<?php
$artists = new WP_Query(array(
    'post_type' => 'artist',
    'posts_per_page' => -1,
    'orderby' => 'title',
    'order' => 'ASC'
));

if ($artists->have_posts()) :
    while ($artists->have_posts()) : $artists->the_post();
        ?>
        <div class="artist-card">
            <?php if (has_post_thumbnail()) : ?>
                <div class="artist-image">
                    <?php the_post_thumbnail('medium'); ?>
                </div>
            <?php endif; ?>
            <h3><?php the_title(); ?></h3>
            <div class="artist-excerpt">
                <?php the_excerpt(); ?>
            </div>
            <a href="<?php the_permalink(); ?>">View Profile</a>
        </div>
        <?php
    endwhile;
    wp_reset_postdata();
endif;
?>
```

### Display Exhibitions by Year

```php
<?php
$current_year = date('Y');
$exhibitions = new WP_Query(array(
    'post_type' => 'exhibition',
    'tax_query' => array(
        array(
            'taxonomy' => 'exhibition_year',
            'field' => 'slug',
            'terms' => $current_year
        )
    )
));
?>
```

### Display Artworks with Medium Filter

```php
<?php
// Get selected medium from URL parameter
$selected_medium = isset($_GET['medium']) ? sanitize_text_field($_GET['medium']) : '';

$args = array('post_type' => 'artwork', 'posts_per_page' => -1);

if ($selected_medium) {
    $args['tax_query'] = array(
        array(
            'taxonomy' => 'art_medium',
            'field' => 'slug',
            'terms' => $selected_medium
        )
    );
}

$artworks = new WP_Query($args);
?>

<!-- Medium filter -->
<select onchange="window.location.href='?medium='+this.value">
    <option value="">All Mediums</option>
    <?php
    $mediums = get_terms('art_medium');
    foreach ($mediums as $medium) :
        $selected = ($selected_medium == $medium->slug) ? 'selected' : '';
        ?>
        <option value="<?php echo $medium->slug; ?>" <?php echo $selected; ?>>
            <?php echo $medium->name; ?>
        </option>
    <?php endforeach; ?>
</select>
```

## Template Files

Create these templates in your theme to customize display:

- `single-artist.php` - Single artist page
- `archive-artist.php` - Artists archive
- `single-exhibition.php` - Single exhibition page
- `archive-exhibition.php` - Exhibitions archive
- `single-event.php` - Single event page
- `archive-event.php` - Events archive
- `single-artwork.php` - Single artwork page
- `archive-artwork.php` - Artworks archive
- `taxonomy-art_medium.php` - Art medium taxonomy archive
- `taxonomy-exhibition_year.php` - Exhibition year taxonomy archive

## Hooks & Filters

### Actions

```php
// After post types are registered
do_action('cbf_post_types_registered');

// After taxonomies are registered
do_action('cbf_taxonomies_registered');
```

### Filters

```php
// Modify artist post type args
add_filter('cbf_artist_post_type_args', function($args) {
    $args['menu_position'] = 25;
    return $args;
});
```

## Plugin Structure

```
christiania-biennale-functionality/
├── includes/
│   ├── post-types.php      # Custom post type definitions
│   └── taxonomies.php      # Custom taxonomy definitions
├── assets/
│   ├── css/
│   └── js/
├── christiania-biennale-functionality.php  # Main plugin file
└── README.md
```

## Development

### Adding Custom Fields

Use Advanced Custom Fields (ACF) plugin or add custom meta boxes:

```php
// Example: Add event date field
function cbf_add_event_meta_boxes() {
    add_meta_box(
        'event_details',
        'Event Details',
        'cbf_event_details_callback',
        'event',
        'side'
    );
}
add_action('add_meta_boxes', 'cbf_add_event_meta_boxes');
```

### Extending the Plugin

Create additional files in `/includes/` directory and require them in the main plugin file.

## Compatibility

- WordPress 6.0+
- PHP 7.4+
- Compatible with Gutenberg editor
- Works with any WordPress theme
- REST API enabled

## Changelog

### Version 1.0.0
- Initial release
- Added Artists post type
- Added Exhibitions post type
- Added Events post type
- Added Artworks post type
- Added Art Medium taxonomy
- Added Exhibition Year taxonomy

## Support

For issues or questions:
- GitHub: https://github.com/ConSIXten/ChristianiaBiennaleCMS
- WordPress Support: https://wordpress.org/support/

## License

GPL v2 or later
