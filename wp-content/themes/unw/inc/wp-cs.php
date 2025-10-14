<?php
// ========================================
// OCULTAR VERSIÓN DE WORDPRESS
// ========================================

// Remover versión de archivos CSS y JS
function remove_version_scripts_styles($src) {
    if (strpos($src, 'ver=')) {
        $src = remove_query_arg('ver', $src);
    }
    return $src;
}
add_filter('style_loader_src', 'remove_version_scripts_styles', 9999);
add_filter('script_loader_src', 'remove_version_scripts_styles', 9999);

// Deshabilitar XML-RPC
add_filter('xmlrpc_enabled', '__return_false');

// Remover enlaces RSD y wlwmanifest
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');

// Remover shortlink
remove_action('wp_head', 'wp_shortlink_wp_head');

// Ocultar versión en feeds RSS
function remove_version_rss() {
    return '';
}
add_filter('the_generator', 'remove_version_rss');

// Deshabilitar feeds si no los necesitas

// Bloquear feeds de WordPress
function uw_disable_feeds() {
    wp_die( 'Acceso denegado.', 'Error', array( 'response' => 403 ) );
}
add_action('do_feed', 'uw_disable_feeds', 1);
add_action('do_feed_rdf', 'uw_disable_feeds', 1);
add_action('do_feed_rss', 'uw_disable_feeds', 1);
add_action('do_feed_rss2', 'uw_disable_feeds', 1);
add_action('do_feed_atom', 'uw_disable_feeds', 1);
add_action('do_feed_rss2_comments', 'uw_disable_feeds', 1);
add_action('do_feed_atom_comments', 'uw_disable_feeds', 1);


/*
Plugin Name: Block WP Users REST Endpoint
Description: Bloquea wp-json/wp/v2/users/ para proteger enumeración de usuarios
*/

add_filter( 'rest_endpoints', function( $endpoints ) {
    if ( isset( $endpoints['/wp/v2/users'] ) ) {
        unset( $endpoints['/wp/v2/users'] );
    }
    return $endpoints;
} );