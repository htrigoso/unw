<?php

function blog_search_template($template) {
    if (isset($_GET['blog_search'])) {
        $new_template = locate_template(array('search-blog.php'));
        if ('' != $new_template) {
            return $new_template;
        }
    }
    return $template;
}
add_filter('template_include', 'blog_search_template');

function blog_search_filter($query) {
    if ($query->is_search() && !is_admin() && isset($_GET['blog_search'])) {
        $query->set('post_type', 'post'); // solo entradas del blog
    }
}
add_action('pre_get_posts', 'blog_search_filter');


// Cambiar la URL de las entradas para incluir /blog/
function custom_post_permalink($permalink, $post) {
    if ($post->post_type == 'post') {
        $permalink = home_url('/blog/' . $post->post_name . '/');
    }
    return $permalink;
}
add_filter('post_link', 'custom_post_permalink', 10, 2);

// Agregar reglas de reescritura para que funcionen las nuevas URLs
function custom_blog_rewrite_rules() {
    add_rewrite_rule('^blog/([^/]+)/?$', 'index.php?name=$matches[1]', 'top');
}
add_action('init', 'custom_blog_rewrite_rules');

// Limpiar las reglas de reescritura al activar
function flush_custom_rewrite_rules() {
    custom_blog_rewrite_rules();
    flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'flush_custom_rewrite_rules');

function set_post_views($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

// Ensure global post object is set to prevent comment_count errors
function ensure_global_post_set() {
    global $post;
    if (!$post && is_search()) {
        // Create a dummy post object to prevent errors
        $post = new stdClass();
        $post->ID = 0;
        $post->post_type = 'post';
        $post->comment_count = 0;
    }
}
add_action('wp', 'ensure_global_post_set');

// Search
function custom_blog_search_rewrite_rules() {
    add_rewrite_rule(
        '^blog/?$',
        'index.php?is_blog_home=1',
        'top'
    );

    // Regla para búsqueda en blog
    add_rewrite_rule(
        '^blog/\?(.*)$',
        'index.php?is_blog_search=1&$matches[1]',
        'top'
    );
}
add_action('init', 'custom_blog_search_rewrite_rules');

// Agregar query vars personalizadas
function custom_blog_query_vars($vars) {
    $vars[] = 'is_blog_home';
    $vars[] = 'is_blog_search';
    return $vars;
}
add_filter('query_vars', 'custom_blog_query_vars');

// Manejar la búsqueda del blog
function handle_blog_search($wp_query) {
    if (!is_admin() && $wp_query->is_main_query()) {

        // Si es búsqueda del blog
        if (get_query_var('is_blog_search') ||
            (isset($_GET['s']) && strpos($_SERVER['REQUEST_URI'], '/blog') !== false)) {

            $wp_query->set('post_type', 'post');
            $wp_query->is_search = true;
            $wp_query->is_home = false;
        }

        // Si es la página principal del blog
        if (get_query_var('is_blog_home')) {
            $wp_query->set('post_type', 'post');
            $wp_query->is_home = true;
            $wp_query->is_front_page = false;
        }
    }
}
add_action('pre_get_posts', 'handle_blog_search');

function redirect_empty_blog_search() {
    if (
        is_search() &&
        isset($_GET['s']) &&
        trim($_GET['s']) === '' &&
        strpos($_SERVER['REQUEST_URI'], '/blog') !== false
    ) {
        wp_redirect(home_url('/blog/'));
        exit;
    }
}
add_action('template_redirect', 'redirect_empty_blog_search');