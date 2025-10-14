<?php
// Registrar taxonomía Campus
add_action('init', 'register_taxonomy_campus');
function register_taxonomy_campus() {
  $labels = [
    'name'              => 'Campus',
    'singular_name'     => 'Campus',
    'search_items'      => 'Buscar campus',
    'all_items'         => 'Todos los campus',
    'edit_item'         => 'Editar campus',
    'update_item'       => 'Actualizar campus',
    'add_new_item'      => 'Agregar nuevo campus',
    'new_item_name'     => 'Nuevo campus',
    'menu_name'         => 'Campus'
  ];

  $args = [
    'labels'            => $labels,
    'hierarchical'      => true, // como categorías, cambia a false si lo quieres como etiquetas
    'public'            => true,
    'show_ui'           => true,
    'show_admin_column' => true,
    'show_in_nav_menus' => true,
    'show_tagcloud'     => false,
    'rewrite'           => false,

  ];

  register_taxonomy('campus', ['carreras', 'carreras-a-distancia'], $args);
}