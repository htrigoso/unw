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
        'show_in_rest' => true,
        'exclude_from_search' => true,

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

// Agregar columna "Usado en Carreras"
add_filter('manage_docentes_posts_columns', function($columns) {
    $columns['used_in_carreras'] = 'Usado en Carreras';
    return $columns;
});

// Mostrar datos en la columna personalizada
add_action('manage_docentes_posts_custom_column', function($column, $post_id) {
    if ($column !== 'used_in_carreras') return;

    // Buscar en todas las carreras que referencian este docente dentro del campo ACF "teaching_staff > staff"
    $query = new WP_Query([
        'post_type'      => ['carreras', 'carreras-a-distancia'],
        'posts_per_page' => -1,
        'meta_query'     => [
            [
                'key'     => 'teaching_staff_staff',
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