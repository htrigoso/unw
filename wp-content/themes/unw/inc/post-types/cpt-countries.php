<?php
function register_post_type_paises() {
  $labels = array(
    'name' => 'Países',
    'singular_name' => 'País',
    'menu_name' => 'Países',
    'name_admin_bar' => 'País',
    'add_new' => 'Añadir nuevo',
    'add_new_item' => 'Añadir nuevo país',
    'new_item' => 'Nuevo país',
    'edit_item' => 'Editar país',
    'view_item' => 'Ver país',
    'all_items' => 'Todos los países',
    'search_items' => 'Buscar países',
    'not_found' => 'No se encontraron países.',
    'not_found_in_trash' => 'No hay países en la papelera.',
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'menu_icon' => 'dashicons-admin-site',
    'supports' => array('title', 'thumbnail'), // Solo nombre e imagen
    'has_archive' => true,
    'rewrite' => array('slug' => 'paises'),
    'show_in_rest' => true,
  );

  register_post_type('paises', $args);
}
add_action('init', 'register_post_type_paises');


// Añadir columna personalizada
function paises_agregar_columnas($columns) {
    $nuevas_columnas = array();

    // Insertamos la columna de imagen antes del título
    foreach ($columns as $key => $value) {
        if ($key == 'cb') {
            $nuevas_columnas[$key] = $value;
            $nuevas_columnas['imagen'] = 'Imagen';
        } else {
            $nuevas_columnas[$key] = $value;
        }
    }

    return $nuevas_columnas;
}
add_filter('manage_paises_posts_columns', 'paises_agregar_columnas');


function paises_mostrar_imagen_columna($column, $post_id) {
    if ($column === 'imagen') {
        $thumb_id = get_post_thumbnail_id($post_id);
        $thumb_url = wp_get_attachment_url($thumb_id);

        if ($thumb_url) {
            echo '<img src="' . esc_url($thumb_url) . '" alt="" style="height: 40px; width: auto;" />';
        } else {
            echo '—';
        }
    }
}
add_action('manage_paises_posts_custom_column', 'paises_mostrar_imagen_columna', 10, 2);
