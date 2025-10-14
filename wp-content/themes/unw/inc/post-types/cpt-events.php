<?php
function register_post_type_eventos() {
    $labels = array(
        'name' => 'Eventos',
        'singular_name' => 'Evento',
        'menu_name' => 'Eventos',
        'name_admin_bar' => 'Evento',
        'add_new' => 'Añadir nuevo',
        'add_new_item' => 'Añadir nuevo evento',
        'new_item' => 'Nuevo evento',
        'edit_item' => 'Editar evento',
        'view_item' => 'Ver evento',
        'all_items' => 'Todos los eventos',
        'search_items' => 'Buscar eventos',
        'not_found' => 'No se encontraron eventos.',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'eventos'),
        'menu_icon' => 'dashicons-calendar-alt',
        'supports' => array('title', 'editor', 'thumbnail'),
        'show_in_rest' => true,
    );

    register_post_type('eventos', $args);
}
add_action('init', 'register_post_type_eventos');



function eventos_featured_image_notice($content) {
    global $post;
    if ($post->post_type === 'eventos') {
        $content .= '<p><em>Recomendación: Sube una imagen de <strong>280x150 píxeles</strong></em></p>';
    }
    return $content;
}
add_filter('admin_post_thumbnail_html', 'eventos_featured_image_notice');
