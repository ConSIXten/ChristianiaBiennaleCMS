<?php
/**
 * Plugin Name: Christiania Biennale Functionality
 * Plugin URI: https://github.com/ConSIXten/ChristianiaBiennaleCMS
 * Description: Custom post types, taxonomies, and functionality for Christiania Biennale website
 * Version: 1.0.0
 * Author: Christiania Biennale Team
 * Author URI: https://github.com/ConSIXten
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: christiania-biennale-functionality
 * Domain Path: /languages
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// Define plugin constants
define('CBF_VERSION', '1.0.0');
define('CBF_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('CBF_PLUGIN_URL', plugin_dir_url(__FILE__));

/**
 * Initialize the plugin
 */
function cbf_init() {
    // Load text domain for translations
    load_plugin_textdomain('christiania-biennale-functionality', false, dirname(plugin_basename(__FILE__)) . '/languages');
    
    // Include custom post types
    require_once CBF_PLUGIN_DIR . 'includes/post-types.php';
    
    // Include custom taxonomies
    require_once CBF_PLUGIN_DIR . 'includes/taxonomies.php';
}
add_action('plugins_loaded', 'cbf_init');

/**
 * Activation hook
 */
function cbf_activate() {
    // Register post types and taxonomies
    cbf_init();
    
    // Flush rewrite rules
    flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'cbf_activate');

/**
 * Deactivation hook
 */
function cbf_deactivate() {
    // Flush rewrite rules
    flush_rewrite_rules();
}
register_deactivation_hook(__FILE__, 'cbf_deactivate');
