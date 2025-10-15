<?php
/**
 * Admin functionality for UTM Code Generator
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

class UTM_Admin {
    
    /**
     * Instance of this class
     */
    private static $instance = null;
    
    /**
     * Post type slug
     */
    private $post_type;
    
    /**
     * Get instance
     */
    public static function get_instance($post_type) {
        if (null === self::$instance) {
            self::$instance = new self($post_type);
        }
        return self::$instance;
    }
    
    /**
     * Constructor
     */
    private function __construct($post_type) {
        $this->post_type = $post_type;
        $this->init_hooks();
    }
    
    /**
     * Initialize hooks
     */
    private function init_hooks() {
        // Enqueue admin scripts and styles
        add_action('acf/input/admin_enqueue_scripts', [$this, 'enqueue_admin_assets']);
        
        // ACF validation
        add_filter('acf/validate_value/name=utm_code', [$this, 'validate_unique_code'], 10, 4);
        
        // Save post action
        add_action('acf/save_post', [$this, 'save_automatic_code'], 20);
        
        // Add admin notices
        add_action('admin_notices', [$this, 'check_acf_dependency']);
    }
    
    /**
     * Enqueue admin assets
     */
    public function enqueue_admin_assets() {
        global $post_type;
        
        // Only load on the correct post type
        if ($post_type !== $this->post_type) {
            return;
        }
        
        // Enqueue JavaScript
        wp_enqueue_script(
            'utm-admin-js',
            UTM_CODE_GENERATOR_PLUGIN_URL . 'assets/js/utm-admin.js',
            ['jquery', 'acf-input'],
            UTM_CODE_GENERATOR_VERSION,
            true
        );
        
        // Localize script
        wp_localize_script('utm-admin-js', 'utmAdminData', [
            'nonce' => wp_create_nonce('utm_nonce'),
            'ajaxUrl' => admin_url('admin-ajax.php'),
            'postType' => $this->post_type,
            'messages' => [
                'generating' => __('Generando código...', 'utm-code-generator'),
                'error' => __('Error al generar código. Por favor, inténtelo de nuevo.', 'utm-code-generator'),
                'connectionError' => __('Error de conexión. Por favor, inténtelo de nuevo.', 'utm-code-generator'),
            ]
        ]);
        
        // Enqueue CSS
        wp_enqueue_style(
            'utm-admin-css',
            UTM_CODE_GENERATOR_PLUGIN_URL . 'assets/css/utm-admin.css',
            [],
            UTM_CODE_GENERATOR_VERSION
        );
    }
    
    /**
     * Validate unique UTM code
     */
    public function validate_unique_code($valid, $value, $field, $input) {
        if (!$valid || empty($value)) {
            return $valid;
        }
        
        global $wpdb;
        $post_id = isset($_POST['post_ID']) ? intval($_POST['post_ID']) : 0;
        
        $exists = $wpdb->get_var($wpdb->prepare("
            SELECT post_id 
            FROM {$wpdb->postmeta} 
            WHERE meta_key = 'utm_code' 
            AND meta_value = %s 
            AND post_id != %d
        ", $value, $post_id));
        
        if ($exists) {
            $valid = __('Este código ya existe. Por favor, recarga la página y genere uno nuevo.', 'utm-code-generator');
        }
        
        return $valid;
    }
    
    /**
     * Save automatic UTM code
     */
    public function save_automatic_code($post_id) {
        // Verify it's the correct post type
        if (get_post_type($post_id) !== $this->post_type) {
            return;
        }
        
        // Verify it's not an auto-save
        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
            return;
        }
        
        // Check user permissions
        if (!current_user_can('edit_post', $post_id)) {
            return;
        }
        
        $format = get_field('code_format', $post_id);
        $current_code = get_field('utm_code', $post_id);
        
        // If there's a format but no code, generate one
        if ($format && empty($current_code)) {
            $new_code = $this->generate_code($format);
            update_field('utm_code', $new_code, $post_id);
        }
    }
    
    /**
     * Get next number for UTM code
     */
    private function get_next_number($format) {
        global $wpdb;
        
        $last_code = $wpdb->get_var($wpdb->prepare("
            SELECT meta_value 
            FROM {$wpdb->postmeta} pm
            INNER JOIN {$wpdb->posts} p ON pm.post_id = p.ID
            WHERE pm.meta_key = 'utm_code' 
            AND pm.meta_value LIKE %s 
            AND p.post_type = %s
            ORDER BY pm.meta_value DESC 
            LIMIT 1
        ", $format . '%', $this->post_type));
        
        if ($last_code) {
            $number = intval(substr($last_code, strlen($format)));
            return $number + 1;
        }
        
        return 1;
    }
    
    /**
     * Generate UTM code
     */
    private function generate_code($format) {
        $number = $this->get_next_number($format);
        return $format . str_pad($number, 5, '0', STR_PAD_LEFT);
    }
    
    /**
     * Check ACF dependency
     */
    public function check_acf_dependency() {
        if (!class_exists('ACF')) {
            ?>
            <div class="notice notice-error">
                <p>
                    <?php _e('<strong>UTM Code Generator</strong> requires Advanced Custom Fields (ACF) to be installed and activated.', 'utm-code-generator'); ?>
                </p>
            </div>
            <?php
        }
    }
}