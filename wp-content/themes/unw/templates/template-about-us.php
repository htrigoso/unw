<?php

/**
 * Template Name: Nosotros Template
 */
?>

<?php set_query_var('ASSETS_CHUNK_NAME', 'about-us'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php get_header(); ?>

<?php get_template_part(GENERAL_CONTENT_PATH, 'navbar'); ?>
<main>
  <?php
  $breadcrumbs = [
    ['label' => 'Inicio', 'href' => home_url('/')],
    ['label' => 'Nosotros']
  ];

  get_template_part(
    COMMON_CONTENT_PATH,
    'hero-slide',
    [
      'img_desktop' => UPLOAD_PATH . '/about-us/hero/about-us-hero-desktop.jpg',
      'img_mobile'  => UPLOAD_PATH . '/about-us/hero/about-us-hero-mobile.jpg',
      'alt'         => '',
      'title'       => 'No solo educamos, inspiramos',
      'breadcrumbs' => $breadcrumbs,
      'variant'    => 'primary'
    ]
  );
  ?>
  <?php get_template_part(ABOUT_US_CONTENT_PATH, 'presentation'); ?>
  <?php get_template_part(ABOUT_US_CONTENT_PATH, 'purpose'); ?>
</main>
<?php get_footer(); ?>
