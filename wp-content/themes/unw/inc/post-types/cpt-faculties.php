<?php
function register_cpt_facultades() {
  $labels = array(
    'name'               => 'Facultades',
    'singular_name'      => 'Facultad',
    'menu_name'          => 'Facultades',
    'name_admin_bar'     => 'Facultad',
    'add_new'            => 'Añadir nueva',
    'add_new_item'       => 'Añadir nueva facultad',
    'new_item'           => 'Nueva facultad',
    'edit_item'          => 'Editar facultad',
    'view_item'          => 'Ver facultad',
    'all_items'          => 'Todas las facultades',
    'search_items'       => 'Buscar facultades',
    'not_found'          => 'No se encontraron facultades.',
    'not_found_in_trash' => 'No hay facultades en la papelera.',
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'menu_icon'          => 'dashicons-welcome-learn-more',
    'show_in_rest'       => true,
    'has_archive'        => false,
    'supports'           => array('title'),
    'show_ui' => true,
  );

  register_post_type('facultad', $args);
}
add_action('init', 'register_cpt_facultades');
