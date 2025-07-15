<?php

/**
 * Template Name: Detalle de Evento Template
 */
?>

<?php set_query_var('ASSETS_CHUNK_NAME', 'event-detail'); ?>
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
            'url' => UPLOAD_PATH . '/event-detail/hero/hero-desktop.jpg',
            'alt' => 'Admisión Hero Desktop'
          ],
          'mobile' => [
            'url' => UPLOAD_PATH . '/event-detail/hero/hero-mobile.jpg',
            'alt' => 'Admisión Hero Mobile'
          ]
        ],
        'title' => 'Charla informativa a distancia',
        'label' => 'Charla Informativa'
      ]
    ]
  ];
  $base_breadcrumbs = [
    ['label' => 'Inicio', 'href' => home_url('/')],
    ['label' => 'Eventos', 'href' => '/eventos']
  ];
  get_template_part(
    COMMON_CONTENT_PATH,
    'swiper-hero',
    [
      'sliders' => $sliders,
      'base_breadcrumbs' => $base_breadcrumbs,
      'extra_class' => 'event-detail-hero'
    ]
  ); ?>
  <?php get_template_part(EVENT_DETAIL_CONTENT_PATH, 'event-detail'); ?>
</main>
<?php get_footer(); ?>
