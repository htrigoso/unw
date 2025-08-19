<?php

/**
 * Template Name: Política de calidad Template
 */
?>

<?php set_query_var('ASSETS_CHUNK_NAME', 'quality-policy'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php get_header(); ?>

<?php get_template_part(GENERAL_CONTENT_PATH, 'navbar'); ?>
<main>
  <?php
  $breadcrumbs = [
    ['label' => 'Inicio', 'href' => home_url('/')],
    ['label' => 'Nosotros', 'href' => home_url('/nosotros')],
    ['label' => 'Política de calidad'],
  ];

  get_template_part(
    COMMON_CONTENT_PATH,
    'hero-slide',
    [
      'img_desktop' => UPLOAD_PATH . '/quality-policy/hero/politics-hero-desktop.jpg',
      'img_mobile'  => UPLOAD_PATH . '/quality-policy/hero/politics-hero-mobile.jpg',
      'alt'         => '',
      'title'       => 'No solo educamos, inspiramos',
      'breadcrumbs' => $breadcrumbs,
      'variant'    => 'primary'
    ]
  );
  ?>
  <?php get_template_part(QUALITY_POLICY_CONTENT_PATH, 'quality-policy'); ?>
</main>
<?php get_footer(); ?>
