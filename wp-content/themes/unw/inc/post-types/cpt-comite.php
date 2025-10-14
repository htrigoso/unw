<?php
function register_post_type_comite_consultivo() {
    $labels = array(
        'name'                  => 'Comité Consultivo',
        'singular_name'         => 'Miembro del Comité',
        'menu_name'             => 'Comité Consultivo',
        'name_admin_bar'        => 'Comité Consultivo',
        'add_new'               => 'Añadir nuevo',
        'add_new_item'          => 'Añadir nuevo miembro',
        'new_item'              => 'Nuevo miembro',
        'edit_item'             => 'Editar miembro',
        'view_item'             => 'Ver miembro',
        'all_items'             => 'Todos los miembros',
        'search_items'          => 'Buscar miembros',
        'not_found'             => 'No se encontraron miembros.',
        'not_found_in_trash'    => 'No hay miembros en la papelera.',
    );

    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'menu_icon'             => 'dashicons-groups',
        'supports'              => array('title', 'thumbnail'), // Solo título e imagen destacada
        'has_archive'           => true,
        'rewrite'               => array('slug' => 'comite-consultivo'),
        'show_in_rest'          => true, // Compatible con Gutenberg y ACF
        'exclude_from_search'   => true,
    );

    register_post_type('comite_consultivo', $args);
}
add_action('init', 'register_post_type_comite_consultivo');


// 🔔 Aviso de tamaño recomendado de imagen
function comite_consultivo_featured_image_notice($content) {
    global $post;
    if ($post->post_type == 'comite_consultivo') {
        $content .= '<p><em>Recomendación: Sube una imagen de <strong>305x305 píxeles</strong></em></p>';
    }
    return $content;
}
add_filter('admin_post_thumbnail_html', 'comite_consultivo_featured_image_notice');
