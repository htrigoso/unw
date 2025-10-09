<?php
function register_post_type_infraestructura() {
    $labels = array(
        'name' => 'Infraestructura',
        'singular_name' => 'Infraestructura',
        'menu_name' => 'Infraestructura',
        'name_admin_bar' => 'Infraestructura',
        'add_new' => 'Añadir nueva',
        'add_new_item' => 'Añadir nueva infraestructura',
        'new_item' => 'Nueva infraestructura',
        'edit_item' => 'Editar infraestructura',
        'view_item' => 'Ver infraestructura',
        'all_items' => 'Todas las infraestructuras',
        'search_items' => 'Buscar infraestructura',
        'not_found' => 'No se encontró infraestructura.',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => false,
        'rewrite' => array('slug' => 'infraestructura'),
        'menu_icon' => 'dashicons-building',
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
        'show_in_rest' => true,
        'exclude_from_search' => true,

    );

    register_post_type('infraestructura', $args);
}
add_action('init', 'register_post_type_infraestructura');



function infra_featured_image_notice($content) {
    global $post;
    if ($post->post_type === 'infraestructura') {
        $content .= '<p><em>Recomendación: Sube una imagen de <strong>712x445 píxeles</strong></em></p>';
    }
    return $content;
}
add_filter('admin_post_thumbnail_html', 'infra_featured_image_notice');