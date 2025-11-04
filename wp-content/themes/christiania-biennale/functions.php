<?php
/**
 * Christiania Biennale Theme Functions
 *
 * @package Christiania_Biennale
 * @since 1.0.0
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function christiania_biennale_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails
    add_theme_support('post-thumbnails');
    
    // Set default thumbnail size
    set_post_thumbnail_size(1200, 630, true);
    
    // Add custom image sizes
    add_image_size('christiania-featured', 800, 450, true);
    add_image_size('christiania-thumbnail', 300, 300, true);

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'christiania-biennale'),
        'footer' => __('Footer Menu', 'christiania-biennale'),
    ));

    // Switch default core markup to output valid HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    // Add theme support for selective refresh for widgets
    add_theme_support('customize-selective-refresh-widgets');

    // Add support for editor styles
    add_theme_support('editor-styles');
    
    // Add support for full and wide align images
    add_theme_support('align-wide');
    
    // Add support for responsive embeds
    add_theme_support('responsive-embeds');
}
add_action('after_setup_theme', 'christiania_biennale_setup');

/**
 * Enqueue Scripts and Styles
 */
function christiania_biennale_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style(
        'christiania-biennale-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );

    // Enqueue custom CSS if it exists
    if (file_exists(get_template_directory() . '/assets/css/custom.css')) {
        wp_enqueue_style(
            'christiania-biennale-custom',
            get_template_directory_uri() . '/assets/css/custom.css',
            array('christiania-biennale-style'),
            wp_get_theme()->get('Version')
        );
    }

    // Enqueue main JavaScript file
    if (file_exists(get_template_directory() . '/assets/js/main.js')) {
        wp_enqueue_script(
            'christiania-biennale-main',
            get_template_directory_uri() . '/assets/js/main.js',
            array('jquery'),
            wp_get_theme()->get('Version'),
            true
        );
    }

    // Add comment reply script
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'christiania_biennale_scripts');

/**
 * Register Widget Areas
 */
function christiania_biennale_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'christiania-biennale'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here to appear in your sidebar.', 'christiania-biennale'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));

    register_sidebar(array(
        'name'          => __('Footer 1', 'christiania-biennale'),
        'id'            => 'footer-1',
        'description'   => __('Add widgets here to appear in your footer.', 'christiania-biennale'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'christiania_biennale_widgets_init');

/**
 * Custom Excerpt Length
 */
function christiania_biennale_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'christiania_biennale_excerpt_length');

/**
 * Custom Excerpt More
 */
function christiania_biennale_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'christiania_biennale_excerpt_more');

/**
 * Add custom body classes
 */
function christiania_biennale_body_classes($classes) {
    // Add class if sidebar is active
    if (is_active_sidebar('sidebar-1')) {
        $classes[] = 'has-sidebar';
    }
    
    return $classes;
}
add_filter('body_class', 'christiania_biennale_body_classes');

/**
 * Include Custom Functions
 */
// Uncomment these as you create the files
// require_once get_template_directory() . '/includes/custom-post-types.php';
// require_once get_template_directory() . '/includes/custom-taxonomies.php';
// require_once get_template_directory() . '/includes/template-functions.php';
