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

   $hero = get_field('hero');

   if ($hero && is_array($hero)) :
    get_template_part(
      COMMON_CONTENT_PATH,
      'hero-slide',
      [
        'img_desktop' => $hero['images']['desktop']['url'],
        'img_mobile'  => $hero['images']['mobile']['url'],
        'alt'         => $hero['images']['desktop']['alt'], // puedes cambiar a mobile si prefieres
        'title'       => $hero['title'],
        'breadcrumbs' => $breadcrumbs,
        'variant'     => 'primary'
      ]
    );
  endif;
  ?>
  <?php get_template_part(QUALITY_POLICY_CONTENT_PATH, 'quality-policy'); ?>
</main>
<?php get_footer(); ?>
