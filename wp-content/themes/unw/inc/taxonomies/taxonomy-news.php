<?php
function register_taxonomy_categoria_novedad() {
  $labels = [
    'name'          => 'Categorías de Noticias',
    'singular_name' => 'Categoría de Noticia',
    'menu_name'     => 'Categorías',
  ];

  $args = [
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => ['slug' => 'categoria-noticia'], // 🔹 URL será /categoria-noticia/
  ];

  register_taxonomy('categoria_novedad', ['novedades'], $args);
}
add_action('init', 'register_taxonomy_categoria_novedad');