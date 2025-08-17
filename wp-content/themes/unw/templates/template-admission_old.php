<?php

/**
 * Template Name: Admisión Antiguo Template
 */
?>

<?php set_query_var('ASSETS_CHUNK_NAME', 'admission_old'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php get_header(); ?>

<?php get_template_part(GENERAL_CONTENT_PATH, 'navbar'); ?>
<main>
  <?php
  $sliders = [
    'list_of_files' => [
      [
        'images' => [
          'desktop' => [
            'url' => UPLOAD_PATH . '/admission/hero/hero-1-desktop.jpg',
            'alt' => 'Admisión Hero Desktop'
          ],
          'mobile' => [
            'url' => UPLOAD_PATH . '/admission/hero/hero-1-mobile.jpg',
            'alt' => 'Admisión Hero Mobile'
          ]
        ],
        'title' => 'Admisión Wiener',
        'label' => 'Admisión'
      ],
      [
        'images' => [
          'desktop' => [
            'url' => get_template_directory_uri() . '/upload/admission/hero/hero-1-desktop.jpg',
            'alt' => 'Admisión Hero Desktop'
          ],
          'mobile' => [
            'url' => get_template_directory_uri() . '/upload/admission/hero/hero-1-mobile.jpg',
            'alt' => 'Admisión Hero Mobile'
          ],
        ],
        'title' => 'Admisión Wiener',
        'label' => 'Admisión'
      ]
    ]
  ];
  $base_breadcrumbs = [
    ['label' => 'Inicio', 'href' => home_url('/')],
    ['label' => 'Admisión', 'href' => '/admision']
  ];
  get_template_part(
    COMMON_CONTENT_PATH,
    'swiper-hero',
    [
      'sliders' => $sliders,
      'base_breadcrumbs' => $base_breadcrumbs,
      'extra_class' => 'admission-hero'
    ]
  ); ?>
  <?php get_template_part(ADMISSION_TABS_PATH, 'tabs'); ?>
</main>
<?php get_footer(); ?>
