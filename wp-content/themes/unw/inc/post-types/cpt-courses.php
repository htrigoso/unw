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
    'rewrite'            => array('slug' => 'cursos'),
    'supports'           => array('title',  'thumbnail'),
  );

  register_post_type('curso', $args);
}
add_action('init', 'register_cpt_cursos');