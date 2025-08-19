<?php

/**
 * Template Name: Nuestra historia Template
 */
?>

<?php set_query_var('ASSETS_CHUNK_NAME', 'our-history'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php get_header(); ?>

<?php get_template_part(GENERAL_CONTENT_PATH, 'navbar'); ?>
<main>
  <?php
  $breadcrumbs = [
    ['label' => 'Inicio', 'href' => home_url('/')],
    ['label' => 'Nosotros', 'href' => home_url('/nosotros')],
    ['label' => 'Nuestra historia', 'href' => home_url('/nuestra-historia')],
  ];

  get_template_part(
    COMMON_CONTENT_PATH,
    'hero-slide',
    [
      'img_desktop' => UPLOAD_PATH . '/our-history/hero/our-history-hero-desktop.jpg',
      'img_mobile'  => UPLOAD_PATH . '/our-history/hero/our-history-hero-mobile.png',
      'alt'         => '',
      'title'       => 'No solo educamos, inspiramos',
      'breadcrumbs' => $breadcrumbs,
      'variant'    => 'primary'
    ]
  );
  ?>
  <?php get_template_part(OUR_HISTORY_CONTENT_PATH, 'our-history'); ?>
</main>
<?php get_footer(); ?>
