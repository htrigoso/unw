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

  $hero = get_field('hero');

if ( $hero && is_array($hero) ) {
    get_template_part(
        COMMON_CONTENT_PATH,
        'hero-slide',
        [
            'title'       => $hero['title'],
            'img_desktop' => $hero['images']['desktop']['url'],
            'img_mobile'  => $hero['images']['mobile']['url'],
            'alt'         => $hero['images']['desktop']['alt'] ?? '',
            'breadcrumbs' => $breadcrumbs ?? [],
            'variant'     => 'primary',
        ]
    );
}
  ?>
  <?php get_template_part(ABOUT_US_CONTENT_PATH, 'presentation'); ?>
  <?php get_template_part(ABOUT_US_CONTENT_PATH, 'purpose'); ?>
  <?php get_template_part(ABOUT_US_CONTENT_PATH, 'quote'); ?>
  <?php get_template_part(ABOUT_US_CONTENT_PATH, 'authorities'); ?>
  <?php get_template_part(ABOUT_US_CONTENT_PATH, 'certifications'); ?>
  <?php get_template_part(ABOUT_US_CONTENT_PATH, 'more'); ?>
</main>
<?php get_footer(); ?>
