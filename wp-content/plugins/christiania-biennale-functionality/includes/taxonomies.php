<?php
/**
 * Register Custom Taxonomies
 *
 * @package Christiania_Biennale_Functionality
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register Art Medium Taxonomy
 */
function cbf_register_art_medium_taxonomy() {
    $labels = array(
        'name'                       => _x('Art Mediums', 'Taxonomy General Name', 'christiania-biennale-functionality'),
        'singular_name'              => _x('Art Medium', 'Taxonomy Singular Name', 'christiania-biennale-functionality'),
        'menu_name'                  => __('Art Mediums', 'christiania-biennale-functionality'),
        'all_items'                  => __('All Art Mediums', 'christiania-biennale-functionality'),
        'parent_item'                => __('Parent Medium', 'christiania-biennale-functionality'),
        'parent_item_colon'          => __('Parent Medium:', 'christiania-biennale-functionality'),
        'new_item_name'              => __('New Medium Name', 'christiania-biennale-functionality'),
        'add_new_item'               => __('Add New Medium', 'christiania-biennale-functionality'),
        'edit_item'                  => __('Edit Medium', 'christiania-biennale-functionality'),
        'update_item'                => __('Update Medium', 'christiania-biennale-functionality'),
        'view_item'                  => __('View Medium', 'christiania-biennale-functionality'),
        'separate_items_with_commas' => __('Separate mediums with commas', 'christiania-biennale-functionality'),
        'add_or_remove_items'        => __('Add or remove mediums', 'christiania-biennale-functionality'),
        'choose_from_most_used'      => __('Choose from the most used', 'christiania-biennale-functionality'),
        'popular_items'              => __('Popular Mediums', 'christiania-biennale-functionality'),
        'search_items'               => __('Search Mediums', 'christiania-biennale-functionality'),
        'not_found'                  => __('Not Found', 'christiania-biennale-functionality'),
    );

    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'show_in_rest'               => true,
    );

    register_taxonomy('art_medium', array('artwork'), $args);
}
add_action('init', 'cbf_register_art_medium_taxonomy');

/**
 * Register Exhibition Year Taxonomy
 */
function cbf_register_exhibition_year_taxonomy() {
    $labels = array(
        'name'                       => _x('Exhibition Years', 'Taxonomy General Name', 'christiania-biennale-functionality'),
        'singular_name'              => _x('Exhibition Year', 'Taxonomy Singular Name', 'christiania-biennale-functionality'),
        'menu_name'                  => __('Exhibition Years', 'christiania-biennale-functionality'),
        'all_items'                  => __('All Years', 'christiania-biennale-functionality'),
        'parent_item'                => __('Parent Year', 'christiania-biennale-functionality'),
        'parent_item_colon'          => __('Parent Year:', 'christiania-biennale-functionality'),
        'new_item_name'              => __('New Year Name', 'christiania-biennale-functionality'),
        'add_new_item'               => __('Add New Year', 'christiania-biennale-functionality'),
        'edit_item'                  => __('Edit Year', 'christiania-biennale-functionality'),
        'update_item'                => __('Update Year', 'christiania-biennale-functionality'),
        'view_item'                  => __('View Year', 'christiania-biennale-functionality'),
        'separate_items_with_commas' => __('Separate years with commas', 'christiania-biennale-functionality'),
        'add_or_remove_items'        => __('Add or remove years', 'christiania-biennale-functionality'),
        'choose_from_most_used'      => __('Choose from the most used', 'christiania-biennale-functionality'),
        'popular_items'              => __('Popular Years', 'christiania-biennale-functionality'),
        'search_items'               => __('Search Years', 'christiania-biennale-functionality'),
        'not_found'                  => __('Not Found', 'christiania-biennale-functionality'),
    );

    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'show_in_rest'               => true,
    );

    register_taxonomy('exhibition_year', array('exhibition', 'event', 'artist', 'artwork'), $args);
}
add_action('init', 'cbf_register_exhibition_year_taxonomy');
