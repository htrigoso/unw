<?php
function register_cpt_color_facultad() {
  $labels = array(
    'name'               => 'Colores Facultad',
    'singular_name'      => 'Color Facultad',
    'menu_name'          => 'Colores Facultad',
    'name_admin_bar'     => 'Color Facultad',
    'add_new'            => 'Añadir nuevo',
    'add_new_item'       => 'Añadir nuevo color',
    'new_item'           => 'Nuevo color',
    'edit_item'          => 'Editar color',
    'view_item'          => 'Ver color',
    'all_items'          => 'Todos los colores',
    'search_items'       => 'Buscar colores',
    'not_found'          => 'No se encontraron colores.',
    'not_found_in_trash' => 'No hay colores en la papelera.',
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'exclude_from_search'=> true, // 🔎 no aparece en búsquedas
    'menu_icon'          => 'dashicons-art', // 🎨 icono de color
    'has_archive'        => false,
    'show_in_rest'       => true, // Gutenberg + REST API
    'exclude_from_search' => true,
    'rewrite'            => array('slug' => 'color-facultad'),
    'supports'           => array('title', 'excerpt'), // puedes añadir 'custom-fields' si necesitas guardar HEX
  );

  register_post_type('color_facultad', $args);
}
add_action('init', 'register_cpt_color_facultad');
