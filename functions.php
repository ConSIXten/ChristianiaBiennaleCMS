<?php
/**
 * Christiania Biennale CMS Theme Functions
 * 
 * @package ChristianiaBiennaleCMS
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

    // Enable support for Post Thumbnails on posts and pages
    add_theme_support('post-thumbnails');

    // Add custom image sizes
    add_image_size('christiania-hero', 1920, 1080, true);
    add_image_size('christiania-thumbnail', 600, 400, true);

    // Register navigation menus
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'christiania-biennale'),
        'footer' => esc_html__('Footer Menu', 'christiania-biennale'),
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

    // Add theme support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Add theme support for selective refresh for widgets
    add_theme_support('customize-selective-refresh-widgets');

    // Add support for custom backgrounds
    add_theme_support('custom-background', array(
        'default-color' => 'ffffff',
    ));

    // Add support for editor styles
    add_theme_support('editor-styles');
    add_editor_style('css/editor-style.css');

    // Add support for responsive embeds
    add_theme_support('responsive-embeds');

    // Add support for Block Styles
    add_theme_support('wp-block-styles');

    // Add support for full and wide align images
    add_theme_support('align-wide');
}
add_action('after_setup_theme', 'christiania_biennale_setup');

/**
 * Set the content width in pixels
 */
function christiania_biennale_content_width() {
    $GLOBALS['content_width'] = apply_filters('christiania_biennale_content_width', 1200);
}
add_action('after_setup_theme', 'christiania_biennale_content_width', 0);

/**
 * Enqueue scripts and styles
 */
function christiania_biennale_scripts() {
    // Main stylesheet
    wp_enqueue_style(
        'christiania-biennale-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );

    // Base CSS
    wp_enqueue_style(
        'christiania-biennale-base',
        get_template_directory_uri() . '/css/base.css',
        array(),
        wp_get_theme()->get('Version')
    );

    // Layout CSS
    wp_enqueue_style(
        'christiania-biennale-layout',
        get_template_directory_uri() . '/css/layout.css',
        array('christiania-biennale-base'),
        wp_get_theme()->get('Version')
    );

    // Module CSS files
    $modules = array('utilities', 'landingpage', 'section', 'map', 'poster', 'header', 'hero', 'footer');
    foreach ($modules as $module) {
        wp_enqueue_style(
            'christiania-biennale-' . $module,
            get_template_directory_uri() . '/css/modules/' . $module . '.css',
            array('christiania-biennale-layout'),
            wp_get_theme()->get('Version')
        );
    }

    // Main JavaScript file (for React integration)
    wp_enqueue_script(
        'christiania-biennale-main',
        get_template_directory_uri() . '/scripts/main.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    // Localize script for AJAX and theme data
    wp_localize_script('christiania-biennale-main', 'christianiaBiennaleData', array(
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('christiania_biennale_nonce'),
        'themeUrl' => get_template_directory_uri(),
        'siteUrl' => home_url('/'),
        'siteName' => get_bloginfo('name'),
    ));

    // Comment reply script
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'christiania_biennale_scripts');

/**
 * Register widget areas
 */
function christiania_biennale_widgets_init() {
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'christiania-biennale'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here.', 'christiania-biennale'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));

    // Footer Left Widget Area
    register_sidebar(array(
        'name'          => esc_html__('Footer Left', 'christiania-biennale'),
        'id'            => 'footer-left',
        'description'   => esc_html__('Add widgets for the left footer section.', 'christiania-biennale'),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer-widget-title">',
        'after_title'   => '</h3>',
    ));

    // Footer Center Widget Area
    register_sidebar(array(
        'name'          => esc_html__('Footer Center', 'christiania-biennale'),
        'id'            => 'footer-center',
        'description'   => esc_html__('Add widgets for the center footer section.', 'christiania-biennale'),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer-widget-title">',
        'after_title'   => '</h3>',
    ));

    // Footer Right Widget Area
    register_sidebar(array(
        'name'          => esc_html__('Footer Right', 'christiania-biennale'),
        'id'            => 'footer-right',
        'description'   => esc_html__('Add widgets for the right footer section.', 'christiania-biennale'),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer-widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'christiania_biennale_widgets_init');

/**
 * Fallback menu if no menu is set (Header)
 */
function christiania_biennale_default_menu() {
    echo '<ul id="primary-menu" class="menu">';
    echo '<li><a href="' . esc_url(home_url('/about')) . '">About</a></li>';
    echo '<li><a href="' . esc_url(home_url('/events')) . '">Events</a></li>';
    echo '<li><a href="' . esc_url(home_url('/programme')) . '">Programme</a></li>';
    echo '</ul>';
}

/**
 * Fallback menu for Landing Page if no menu is set
 */
function christiania_biennale_landing_menu_fallback() {
    echo '<a class="landing-link" href="' . esc_url(home_url('/events/')) . '">Events</a>';
    echo '<a class="landing-link" href="' . esc_url(home_url('/programme/')) . '">Programme</a>';
    echo '<a class="landing-link" href="' . esc_url(home_url('/about/')) . '">About</a>';
}

/**
 * Custom template tags for this theme
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * REST API customization
 */
require get_template_directory() . '/inc/rest-api.php';

/**
 * Theme Customizer
 */
require get_template_directory() . '/inc/customizer.php';
