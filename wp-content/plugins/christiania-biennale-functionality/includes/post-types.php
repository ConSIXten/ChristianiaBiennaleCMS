<?php
/**
 * Register Custom Post Types
 *
 * @package Christiania_Biennale_Functionality
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register Artist Post Type
 */
function cbf_register_artist_post_type() {
    $labels = array(
        'name'                  => _x('Artists', 'Post Type General Name', 'christiania-biennale-functionality'),
        'singular_name'         => _x('Artist', 'Post Type Singular Name', 'christiania-biennale-functionality'),
        'menu_name'             => __('Artists', 'christiania-biennale-functionality'),
        'name_admin_bar'        => __('Artist', 'christiania-biennale-functionality'),
        'archives'              => __('Artist Archives', 'christiania-biennale-functionality'),
        'attributes'            => __('Artist Attributes', 'christiania-biennale-functionality'),
        'parent_item_colon'     => __('Parent Artist:', 'christiania-biennale-functionality'),
        'all_items'             => __('All Artists', 'christiania-biennale-functionality'),
        'add_new_item'          => __('Add New Artist', 'christiania-biennale-functionality'),
        'add_new'               => __('Add New', 'christiania-biennale-functionality'),
        'new_item'              => __('New Artist', 'christiania-biennale-functionality'),
        'edit_item'             => __('Edit Artist', 'christiania-biennale-functionality'),
        'update_item'           => __('Update Artist', 'christiania-biennale-functionality'),
        'view_item'             => __('View Artist', 'christiania-biennale-functionality'),
        'view_items'            => __('View Artists', 'christiania-biennale-functionality'),
        'search_items'          => __('Search Artist', 'christiania-biennale-functionality'),
        'not_found'             => __('Not found', 'christiania-biennale-functionality'),
        'not_found_in_trash'    => __('Not found in Trash', 'christiania-biennale-functionality'),
    );

    $args = array(
        'label'                 => __('Artist', 'christiania-biennale-functionality'),
        'description'           => __('Artists participating in Christiania Biennale', 'christiania-biennale-functionality'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-admin-users',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true, // Enable Gutenberg editor
    );

    register_post_type('artist', $args);
}
add_action('init', 'cbf_register_artist_post_type');

/**
 * Register Exhibition Post Type
 */
function cbf_register_exhibition_post_type() {
    $labels = array(
        'name'                  => _x('Exhibitions', 'Post Type General Name', 'christiania-biennale-functionality'),
        'singular_name'         => _x('Exhibition', 'Post Type Singular Name', 'christiania-biennale-functionality'),
        'menu_name'             => __('Exhibitions', 'christiania-biennale-functionality'),
        'name_admin_bar'        => __('Exhibition', 'christiania-biennale-functionality'),
        'archives'              => __('Exhibition Archives', 'christiania-biennale-functionality'),
        'attributes'            => __('Exhibition Attributes', 'christiania-biennale-functionality'),
        'all_items'             => __('All Exhibitions', 'christiania-biennale-functionality'),
        'add_new_item'          => __('Add New Exhibition', 'christiania-biennale-functionality'),
        'add_new'               => __('Add New', 'christiania-biennale-functionality'),
        'new_item'              => __('New Exhibition', 'christiania-biennale-functionality'),
        'edit_item'             => __('Edit Exhibition', 'christiania-biennale-functionality'),
        'update_item'           => __('Update Exhibition', 'christiania-biennale-functionality'),
        'view_item'             => __('View Exhibition', 'christiania-biennale-functionality'),
        'view_items'            => __('View Exhibitions', 'christiania-biennale-functionality'),
        'search_items'          => __('Search Exhibition', 'christiania-biennale-functionality'),
        'not_found'             => __('Not found', 'christiania-biennale-functionality'),
        'not_found_in_trash'    => __('Not found in Trash', 'christiania-biennale-functionality'),
    );

    $args = array(
        'label'                 => __('Exhibition', 'christiania-biennale-functionality'),
        'description'           => __('Exhibitions at Christiania Biennale', 'christiania-biennale-functionality'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-images-alt2',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
    );

    register_post_type('exhibition', $args);
}
add_action('init', 'cbf_register_exhibition_post_type');

/**
 * Register Event Post Type
 */
function cbf_register_event_post_type() {
    $labels = array(
        'name'                  => _x('Events', 'Post Type General Name', 'christiania-biennale-functionality'),
        'singular_name'         => _x('Event', 'Post Type Singular Name', 'christiania-biennale-functionality'),
        'menu_name'             => __('Events', 'christiania-biennale-functionality'),
        'name_admin_bar'        => __('Event', 'christiania-biennale-functionality'),
        'archives'              => __('Event Archives', 'christiania-biennale-functionality'),
        'attributes'            => __('Event Attributes', 'christiania-biennale-functionality'),
        'all_items'             => __('All Events', 'christiania-biennale-functionality'),
        'add_new_item'          => __('Add New Event', 'christiania-biennale-functionality'),
        'add_new'               => __('Add New', 'christiania-biennale-functionality'),
        'new_item'              => __('New Event', 'christiania-biennale-functionality'),
        'edit_item'             => __('Edit Event', 'christiania-biennale-functionality'),
        'update_item'           => __('Update Event', 'christiania-biennale-functionality'),
        'view_item'             => __('View Event', 'christiania-biennale-functionality'),
        'view_items'            => __('View Events', 'christiania-biennale-functionality'),
        'search_items'          => __('Search Event', 'christiania-biennale-functionality'),
        'not_found'             => __('Not found', 'christiania-biennale-functionality'),
        'not_found_in_trash'    => __('Not found in Trash', 'christiania-biennale-functionality'),
    );

    $args = array(
        'label'                 => __('Event', 'christiania-biennale-functionality'),
        'description'           => __('Events at Christiania Biennale', 'christiania-biennale-functionality'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 7,
        'menu_icon'             => 'dashicons-calendar',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
    );

    register_post_type('event', $args);
}
add_action('init', 'cbf_register_event_post_type');

/**
 * Register Artwork Post Type
 */
function cbf_register_artwork_post_type() {
    $labels = array(
        'name'                  => _x('Artworks', 'Post Type General Name', 'christiania-biennale-functionality'),
        'singular_name'         => _x('Artwork', 'Post Type Singular Name', 'christiania-biennale-functionality'),
        'menu_name'             => __('Artworks', 'christiania-biennale-functionality'),
        'name_admin_bar'        => __('Artwork', 'christiania-biennale-functionality'),
        'archives'              => __('Artwork Archives', 'christiania-biennale-functionality'),
        'attributes'            => __('Artwork Attributes', 'christiania-biennale-functionality'),
        'all_items'             => __('All Artworks', 'christiania-biennale-functionality'),
        'add_new_item'          => __('Add New Artwork', 'christiania-biennale-functionality'),
        'add_new'               => __('Add New', 'christiania-biennale-functionality'),
        'new_item'              => __('New Artwork', 'christiania-biennale-functionality'),
        'edit_item'             => __('Edit Artwork', 'christiania-biennale-functionality'),
        'update_item'           => __('Update Artwork', 'christiania-biennale-functionality'),
        'view_item'             => __('View Artwork', 'christiania-biennale-functionality'),
        'view_items'            => __('View Artworks', 'christiania-biennale-functionality'),
        'search_items'          => __('Search Artwork', 'christiania-biennale-functionality'),
        'not_found'             => __('Not found', 'christiania-biennale-functionality'),
        'not_found_in_trash'    => __('Not found in Trash', 'christiania-biennale-functionality'),
    );

    $args = array(
        'label'                 => __('Artwork', 'christiania-biennale-functionality'),
        'description'           => __('Artworks displayed at Christiania Biennale', 'christiania-biennale-functionality'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 8,
        'menu_icon'             => 'dashicons-art',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
    );

    register_post_type('artwork', $args);
}
add_action('init', 'cbf_register_artwork_post_type');
