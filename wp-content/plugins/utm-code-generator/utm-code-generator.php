<?php
/**
 * Plugin Name: UTM Code Generator
 * Description: Automatically generates unique UTM codes for custom post type with ACF integration
 * Version: 1.0.0
 * Author: Seek
 * Author URI: https://seekglobal.co/
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: utm-code-generator
 * Domain Path: /languages
 * Requires at least: 5.8
 * Requires PHP: 7.4
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// Define plugin constants
define('UTM_CODE_GENERATOR_VERSION', '1.0.0');
define('UTM_CODE_GENERATOR_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('UTM_CODE_GENERATOR_PLUGIN_URL', plugin_dir_url(__FILE__));
define('UTM_CODE_GENERATOR_PLUGIN_BASENAME', plugin_basename(__FILE__));

/**
 * Main Plugin Class
 */
class UTM_Code_Generator {
    
    /**
     * Instance of this class
     */
    private static $instance = null;
    
    /**
     * Post type slug
     */
    private $post_type = 'utm';
    
    /**
     * Get instance
     */
    public static function get_instance() {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    
    /**
     * Constructor
     */
    private function __construct() {
        $this->load_dependencies();
        $this->init_hooks();
    }
    
    /**
     * Load required files
     */
    private function load_dependencies() {
        require_once UTM_CODE_GENERATOR_PLUGIN_DIR . 'includes/class-utm-admin.php';
        require_once UTM_CODE_GENERATOR_PLUGIN_DIR . 'includes/class-utm-ajax.php';
    }
    
    /**
     * Initialize hooks
     */
    private function init_hooks() {
        // Activation/Deactivation hooks
        register_activation_hook(__FILE__, [$this, 'activate']);
        register_deactivation_hook(__FILE__, [$this, 'deactivate']);
        
        // Initialize admin functionality
        if (is_admin()) {
            UTM_Admin::get_instance($this->post_type);
        }
        
        // Initialize AJAX handlers
        UTM_Ajax::get_instance($this->post_type);
        
        // Load text domain
        add_action('plugins_loaded', [$this, 'load_textdomain']);
    }
    
    /**
     * Plugin activation
     */
    public function activate() {
        // Check if ACF is installed
        if (!class_exists('ACF')) {
            deactivate_plugins(plugin_basename(__FILE__));
            wp_die(
                __('This plugin requires Advanced Custom Fields (ACF) to be installed and activated.', 'utm-code-generator'),
                __('Plugin Activation Error', 'utm-code-generator'),
                ['back_link' => true]
            );
        }
        
        // Flush rewrite rules
        flush_rewrite_rules();
    }
    
    /**
     * Plugin deactivation
     */
    public function deactivate() {
        flush_rewrite_rules();
    }
    
    /**
     * Load plugin text domain
     */
    public function load_textdomain() {
        load_plugin_textdomain(
            'utm-code-generator',
            false,
            dirname(UTM_CODE_GENERATOR_PLUGIN_BASENAME) . '/languages/'
        );
    }
    
    /**
     * Get post type slug
     */
    public function get_post_type() {
        return $this->post_type;
    }
}

/**
 * Initialize the plugin
 */
function utm_code_generator() {
    return UTM_Code_Generator::get_instance();
}

// Start the plugin
utm_code_generator();