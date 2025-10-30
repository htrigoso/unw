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



// 1️⃣ Agregar columna personalizada
// Añadir columna "Usado en Carreras"
add_filter('manage_infraestructura_posts_columns', function($columns) {
    $columns['used_in_carreras'] = 'Usado en Carreras';
    return $columns;
});

// Mostrar datos en la columna personalizada
add_action('manage_infraestructura_posts_custom_column', function($column, $post_id) {
    if ($column !== 'used_in_carreras') return;

    // Buscar en todas las carreras que referencian esta infraestructura dentro del campo ACF "infrastructure > list"
    $query = new WP_Query([
        'post_type'      => 'carreras',
        'posts_per_page' => -1,
        'meta_query'     => [
            [
                'key'     => 'infrastructure_list',
                'value'   => '"' . $post_id . '"',
                'compare' => 'LIKE'
            ]
        ]
    ]);

    if ($query->have_posts()) {
        $links = [];
        foreach ($query->posts as $carrera) {
            $links[] = sprintf(
                '<a href="%s">%s</a>',
                esc_url(get_edit_post_link($carrera->ID)),
                esc_html(get_the_title($carrera->ID))
            );
        }
        echo implode(', ', $links);
    } else {
        echo '<span style="color:#999;">No usado</span>';
    }

    wp_reset_postdata();
}, 10, 2);