<?php

function uw_register_carreras_post_type() {
  register_post_type('carrera', [
    'labels' => [
      'name' => 'Carreras',
      'singular_name' => 'Carrera',
    ],
    'public' => true,
    'rewrite' => ['slug' => 'carreras'],
    'has_archive' => true,
    'supports' => ['title','thumbnail'],
    'menu_position' => 5,
    'menu_icon' => 'dashicons-welcome-learn-more',
  ]);
}
add_action('init', 'uw_register_carreras_post_type');
