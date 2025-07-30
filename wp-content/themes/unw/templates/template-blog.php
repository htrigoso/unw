<?php

/**
 * Template Name: Blog Template
 */
?>
<?php set_query_var('ASSETS_CHUNK_NAME', 'blog'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php get_header(); ?>

<?php get_template_part(GENERAL_CONTENT_PATH, 'navbar');
?>
<main>
  <?php get_template_part(COMMON_CONTENT_PATH, 'hero-slide', [
    'img_desktop' => UPLOAD_PATH . '/blog/hero/hero-desktop.jpg',
    'img_mobile' => UPLOAD_PATH . '/blog/hero/hero-mobile.jpg',
    'alt' => 'Blog Hero Image',
    'title' => 'Tendencias y novedades',
    'breadcrumbs' => [
      [
        'label' => 'Inicio',
        'href' => '/',
      ],
      [
        'label' => 'Blog',
        'href' => '/blog',
      ],
    ],
    'variant' => 'primary',
  ]); ?>
</main>
<?php get_footer(); ?>
