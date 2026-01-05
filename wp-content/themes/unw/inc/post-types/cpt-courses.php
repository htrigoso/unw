<?php
function register_cpt_cursos() {
  $labels = array(
    'name'               => 'Cursos',
    'singular_name'      => 'Curso',
    'menu_name'          => 'Cursos',
    'name_admin_bar'     => 'Curso',
    'add_new'            => 'Añadir nuevo',
    'add_new_item'       => 'Añadir nuevo curso',
    'new_item'           => 'Nuevo curso',
    'edit_item'          => 'Editar curso',
    'view_item'          => 'Ver curso',
    'all_items'          => 'Todos los cursos',
    'search_items'       => 'Buscar cursos',
    'not_found'          => 'No se encontraron cursos.',
    'not_found_in_trash' => 'No hay cursos en la papelera.',
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'menu_icon'          => 'dashicons-editor-alignleft',
    'has_archive'        => false,
    'show_in_rest'       => true, // Gutenberg + REST API
    'exclude_from_search' => true,
    'rewrite'            => array('slug' => 'cursos'),
    'supports'           => array('title',  'thumbnail', 'excerpt'),
  );

  register_post_type('curso', $args);
}
add_action('init', 'register_cpt_cursos');

// Agregar columna "Usado en Carreras"
add_filter('manage_curso_posts_columns', function($columns) {
    $columns['used_in_carreras'] = 'Usado en Carreras';
    return $columns;
});

// Mostrar datos en la columna personalizada
add_action('manage_curso_posts_custom_column', function($column, $post_id) {
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
        // Obtener el grupo malla_curricular
        $malla = get_field('malla_curricular', $carrera_id);

        // Verificar si existe lists (ciclos)
        if ($malla && isset($malla['lists']) && is_array($malla['lists'])) {
            foreach ($malla['lists'] as $ciclo) {
                // Verificar si el ciclo tiene courses
                if (isset($ciclo['courses']) && is_array($ciclo['courses'])) {
                    foreach ($ciclo['courses'] as $course_item) {
                        // El curso está en course_name
                        if (isset($course_item['course_name'])) {
                            $curso_obj = $course_item['course_name'];
                            $curso_id = is_object($curso_obj) ? $curso_obj->ID : $curso_obj;

                            if ($curso_id == $post_id) {
                                $links[] = sprintf(
                                    '<a href="%s">%s</a>',
                                    esc_url(get_edit_post_link($carrera_id)),
                                    esc_html(get_the_title($carrera_id))
                                );
                                break 2; // Salir de ambos loops
                            }
                        }
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



// Meta campo para color hexadecimal
function agregar_meta_color_facultad($term) {
    $color = get_term_meta($term->term_id, 'color_hex', true);
    ?>
<tr class="form-field">
  <th scope="row"><label for="color_hex">Color Hexadecimal</label></th>
  <td>
    <input type="text" name="color_hex" id="color_hex" value="<?php echo esc_attr($color); ?>" placeholder="#f0eb30">
    <p class="description">Ingresa el color de la facultad en hexadecimal.</p>
  </td>
</tr>
<?php
}
add_action('color_facultad_edit_form_fields', 'agregar_meta_color_facultad');

// Guardar meta campo color
function guardar_meta_color_facultad($term_id) {
    if (isset($_POST['color_hex'])) {
        update_term_meta($term_id, 'color_hex', sanitize_text_field($_POST['color_hex']));
    }
}
add_action('edited_color_facultad', 'guardar_meta_color_facultad', 10, 2);
add_action('create_color_facultad', 'guardar_meta_color_facultad', 10, 2);