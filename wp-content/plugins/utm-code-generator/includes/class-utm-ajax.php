<?php
/**
 * AJAX handlers for UTM Code Generator
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

class UTM_Ajax {
    
    /**
     * Instance of this class
     */
    private static $instance = null;
    
    /**
     * Post type slug
     */
    private $post_type;
    
    /**
     * Valid formats
     */
    private $valid_formats = ['UNWP', 'UNWO'];
    
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
        add_action('wp_ajax_generate_utm_code', [$this, 'handle_generate_code']);
    }
    
    /**
     * Handle AJAX request to generate code
     */
    public function handle_generate_code() {
        // Verify nonce
        if (!check_ajax_referer('utm_nonce', 'nonce', false)) {
            wp_send_json_error([
                'message' => __('Verificación de seguridad fallida.', 'utm-code-generator')
            ], 403);
        }
        
        // Check user permissions
        if (!current_user_can('edit_posts')) {
            wp_send_json_error([
                'message' => __('No tienes permiso para realizar esta acción.', 'utm-code-generator')
            ], 403);
        }
        
        // Get and validate format
        $format = isset($_POST['format']) ? sanitize_text_field($_POST['format']) : '';
        
        if (empty($format)) {
            wp_send_json_error([
                'message' => __('El formato es obligatorio.', 'utm-code-generator')
            ], 400);
        }
        
        if (!in_array($format, $this->valid_formats, true)) {
            wp_send_json_error([
                'message' => __('Formato no válido.', 'utm-code-generator')
            ], 400);
        }
        
        // Generate code
        try {
            $code = $this->generate_code($format);
            
            wp_send_json_success([
                'code' => $code,
                'message' => __('Código generado exitosamente.', 'utm-code-generator')
            ]);
            
        } catch (Exception $e) {
            wp_send_json_error([
                'message' => __('Error al generar código. Por favor, inténtelo de nuevo.', 'utm-code-generator')
            ], 500);
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
            AND p.post_status != 'trash'
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
}