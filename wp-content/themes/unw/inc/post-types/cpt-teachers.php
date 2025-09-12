<?php
function register_post_type_docentes() {
    $labels = array(
        'name' => 'Docentes',
        'singular_name' => 'Docente',
        'menu_name' => 'Docentes',
        'name_admin_bar' => 'Docente',
        'add_new' => 'Añadir nuevo',
        'add_new_item' => 'Añadir nuevo docente',
        'new_item' => 'Nuevo docente',
        'edit_item' => 'Editar docente',
        'view_item' => 'Ver docente',
        'all_items' => 'Todos los docentes',
        'search_items' => 'Buscar docentes',
        'not_found' => 'No se encontraron docentes.',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'docentes'),
        'menu_icon' => 'dashicons-admin-users',
        'supports' => array('title', 'thumbnail'),
        'show_in_rest' => true, // Gutenberg + API REST
    );

    register_post_type('docentes', $args);
}
add_action('init', 'register_post_type_docentes');



function teacher_featured_image_notice($content) {
    global $post;
    if ($post->post_type === 'docentes') {
        $content .= '<p><em>Recomendación: Sube una imagen de <strong>305x305 píxeles</strong></em></p>';
    }
    return $content;
}
add_filter('admin_post_thumbnail_html', 'teacher_featured_image_notice');