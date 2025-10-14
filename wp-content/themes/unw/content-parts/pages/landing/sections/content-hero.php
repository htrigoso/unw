<?php
$data = get_query_var('section_data', []);
$title_hero = $data['title'] ?? '';
$images_hero = $data['images'] ?? [];

$slides_list = [];
if (!empty($images_hero)) {
  $slides_list[] = [
    'title'  => $title_hero,
    'label'  => get_the_title(),
    'images' => $images_hero,
    'type'   => ''
  ];
}

$dynamic_breadcrumbs = [
  ['label' => 'Inicio', 'url' => home_url('/')]
];

$ancestors = get_post_ancestors(get_the_ID());

if (!empty($ancestors)) {
  $ancestors = array_reverse($ancestors);

  foreach ($ancestors as $ancestor_id) {
    $dynamic_breadcrumbs[] = [
      'label' => get_the_title($ancestor_id),
      'url'   => get_permalink($ancestor_id)
    ];
  }
}

$component_args = [
  'sliders' => [
    'title'         => $title_hero,
    'list_of_files' => $slides_list
  ],
  'base_breadcrumbs' => $dynamic_breadcrumbs,
  'extra_class' => 'hero-carrera',
  'variant' => 'standard',
  'title_sec' => ''
];

get_template_part(COMMON_CONTENT_PATH, 'swiper-hero', $component_args);
