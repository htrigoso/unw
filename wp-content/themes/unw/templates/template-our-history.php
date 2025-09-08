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
    ['label' => 'Nosotros', 'href' => home_url('/nosotros/')],
    ['label' => 'Nuestra historia', 'href' => home_url('/nosotros/nuestra-historia/')],
  ];
  $hero = get_field('hero');
  if ($hero && is_array($hero)) :
    get_template_part(
      COMMON_CONTENT_PATH,
      'hero-slide',
      [
        'img_desktop' => $hero['images']['desktop']['url'],
        'img_mobile'  => $hero['images']['mobile']['url'],
        'alt'         => $hero['images']['desktop']['alt'],
        'title'       => $hero['title'],
        'breadcrumbs' => $breadcrumbs,
        'variant'     => 'primary'
      ]
    );
  endif;
  ?>
  <?php get_template_part(OUR_HISTORY_CONTENT_PATH, 'our-history'); ?>
</main>
<?php get_footer(); ?>