<?php

/**
 * Template Name: Facultad Template
 */
?>

<?php set_query_var('ASSETS_CHUNK_NAME', 'faculty'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php get_header(); ?>
<?php get_template_part(GENERAL_CONTENT_PATH, 'top-bar'); ?>
<?php get_template_part(GENERAL_CONTENT_PATH, 'navbar'); ?>
<main>
  <?php
  $sliders = [
    'list_of_files' => [
      [
        'images' => [
          'desktop' => [
            'url' => get_template_directory_uri() . '/upload/faculty/hero/hero-1-desktop.jpg',
            'alt' => 'Facultad Hero Desktop'
          ],
          'mobile' => [
            'url' => get_template_directory_uri() . '/upload/faculty/hero/hero-1-mobile.jpg',
            'alt' => 'Facultad Hero Mobile'
          ]
        ]
      ],
      [
        'images' => [
          'desktop' => [
            'url' => get_template_directory_uri() . '/upload/faculty/hero/hero-1-desktop.jpg',
            'alt' => 'Facultad Hero Desktop'
          ],
          'mobile' => [
            'url' => get_template_directory_uri() . '/upload/faculty/hero/hero-1-mobile.jpg',
            'alt' => 'Facultad Hero Mobile'
          ]
        ]
      ]
    ]
  ];
  $breadcrumbs = [
    ['label' => 'Inicio', 'href' => home_url('/')],
    ['label' => 'Facultad', 'href' => '/facultad'],
    ['label' => '']
  ];
  get_template_part(
    COMMON_CONTENT_PATH,
    'swiper-hero',
    [
      'sliders' => $sliders,
      'breadcrumbs' => $breadcrumbs,
      'hero_title' => 'Facultad de Ciencias de la Salud',
      'extra_class' => 'faculty-hero'
    ]
  ); ?>
  <?php get_template_part(ADMISSION_TABS_PATH, 'tabs'); ?>
</main>
<?php get_footer(); ?>
