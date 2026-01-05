<?php
function register_post_type_testimonios() {
    $labels = array(
        'name' => 'Testimonios',
        'singular_name' => 'Testimonio',
        'menu_name' => 'Testimonios',
        'name_admin_bar' => 'Testimonio',
        'add_new' => 'Añadir nuevo',
        'add_new_item' => 'Añadir nuevo testimonio',
        'new_item' => 'Nuevo testimonio',
        'edit_item' => 'Editar testimonio',
        'view_item' => 'Ver testimonio',
        'all_items' => 'Todos los testimonios',
        'search_items' => 'Buscar testimonios',
        'not_found' => 'No se encontraron testimonios.',
        'not_found_in_trash' => 'No hay testimonios en la papelera.',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_icon' => 'dashicons-format-quote',
        'supports' => array('title', 'thumbnail'), // Solo título e imagen destacada
        'has_archive' => true,
        'rewrite' => array('slug' => 'testimonios'),
        'show_in_rest' => true,
        'exclude_from_search' => true,

    );

    register_post_type('testimonios', $args);
}
add_action('init', 'register_post_type_testimonios');




function testimonios_featured_image_notice($content) {
    global $post;
    if ($post->post_type == 'testimonios') {
        $content .= '<p><em>Recomendación: Sube una imagen de <strong>305x305 píxeles</strong></em></p>';
    }
    return $content;
}
add_filter('admin_post_thumbnail_html', 'testimonios_featured_image_notice');

// Agregar columna "Usado en Carreras"
add_filter('manage_testimonios_posts_columns', function($columns) {
    $columns['used_in_carreras'] = 'Usado en Carreras';
    return $columns;
});

// Mostrar datos en la columna personalizada
add_action('manage_testimonios_posts_custom_column', function($column, $post_id) {
    if ($column !== 'used_in_carreras') return;

    // Obtener todas las carreras
    $carreras = get_posts([
        'post_type'      => ['carreras', 'carreras-a-distancia'],
        'posts_per_page' => -1,
        'post_status'    => 'publish',
        'fields'         => 'ids'
    ]);

    $links = [];

    foreach ($carreras as $carrera_id) {
        // Obtener el grupo presentation
        $presentation = get_field('presentation', $carrera_id);

        // Verificar si existe testimonials_info y testimonials
        if ($presentation && isset($presentation['testimonials_info']['testimonials'])) {
            $testimonios_list = $presentation['testimonials_info']['testimonials'];

            // Si es un array de objetos post
            if (is_array($testimonios_list)) {
                foreach ($testimonios_list as $testimonio) {
                    $testimonio_id = is_object($testimonio) ? $testimonio->ID : $testimonio;

                    if ($testimonio_id == $post_id) {
                        $links[] = sprintf(
                            '<a href="%s">%s</a>',
                            esc_url(get_edit_post_link($carrera_id)),
                            esc_html(get_the_title($carrera_id))
                        );
                        break;
                    }
                }
            }
        }
    }

    if (!empty($links)) {
        echo implode(', ', $links);
    } else {
        echo '<span style="color:#999;">No usado</span>';
    }
}, 10, 2);
