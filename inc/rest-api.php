<?php
/**
 * REST API customization for Christiania Biennale CMS
 * 
 * @package ChristianiaBiennaleCMS
 * @since 1.0.0
 */

/**
 * Add custom fields to REST API responses
 */
function christiania_biennale_register_rest_fields() {
    // Add featured image URL to posts
    register_rest_field(
        array('post', 'page'),
        'featured_image_url',
        array(
            'get_callback' => 'christiania_biennale_get_featured_image_url',
            'schema'       => array(
                'description' => __('Featured image URL', 'christiania-biennale'),
                'type'        => 'string',
            ),
        )
    );

    // Add author information
    register_rest_field(
        'post',
        'author_info',
        array(
            'get_callback' => 'christiania_biennale_get_author_info',
            'schema'       => array(
                'description' => __('Author information', 'christiania-biennale'),
                'type'        => 'object',
            ),
        )
    );
}
add_action('rest_api_init', 'christiania_biennale_register_rest_fields');

/**
 * Get featured image URL callback
 */
function christiania_biennale_get_featured_image_url($object) {
    if (!has_post_thumbnail($object['id'])) {
        return null;
    }

    $image_id = get_post_thumbnail_id($object['id']);
    return array(
        'thumbnail' => wp_get_attachment_image_url($image_id, 'thumbnail'),
        'medium'    => wp_get_attachment_image_url($image_id, 'medium'),
        'large'     => wp_get_attachment_image_url($image_id, 'large'),
        'full'      => wp_get_attachment_image_url($image_id, 'full'),
    );
}

/**
 * Get author information callback
 */
function christiania_biennale_get_author_info($object) {
    $author_id = $object['author'];
    return array(
        'id'           => $author_id,
        'name'         => get_the_author_meta('display_name', $author_id),
        'description'  => get_the_author_meta('description', $author_id),
        'url'          => get_author_posts_url($author_id),
        'avatar'       => get_avatar_url($author_id),
    );
}

/**
 * Add CORS support for REST API
 */
function christiania_biennale_rest_cors() {
    remove_filter('rest_pre_serve_request', 'rest_send_cors_headers');
    add_filter('rest_pre_serve_request', function($value) {
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Allow-Headers: Authorization, Content-Type, X-WP-Nonce');
        return $value;
    });
}
add_action('rest_api_init', 'christiania_biennale_rest_cors', 15);

/**
 * Register custom REST API endpoints
 */
function christiania_biennale_register_rest_routes() {
    register_rest_route('christiania-biennale/v1', '/settings', array(
        'methods'  => 'GET',
        'callback' => 'christiania_biennale_get_theme_settings',
        'permission_callback' => '__return_true',
    ));
}
add_action('rest_api_init', 'christiania_biennale_register_rest_routes');

/**
 * Get theme settings endpoint callback
 */
function christiania_biennale_get_theme_settings() {
    return array(
        'site_name'        => get_bloginfo('name'),
        'site_description' => get_bloginfo('description'),
        'site_url'         => home_url('/'),
        'theme_url'        => get_template_directory_uri(),
        'logo_url'         => wp_get_attachment_image_url(get_theme_mod('custom_logo'), 'full'),
        'primary_menu'     => wp_get_nav_menu_items('primary'),
    );
}
