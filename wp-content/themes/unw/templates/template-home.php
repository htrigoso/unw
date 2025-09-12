<?php

/**
 * Template Name: Inicio Template
 */
?>



<?php set_query_var('ASSETS_CHUNK_NAME', 'home'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php get_header();?>

<?php get_template_part(GENERAL_CONTENT_PATH, 'navbar'); ?>
<main id="home-page" class="home-page">
  <?php get_template_part(HOME_CONTENT_PATH, 'more-info-form'); ?>
  <?php get_template_part(HOME_CONTENT_PATH, 'home-hero'); ?>
  <?php get_template_part(HOME_CONTENT_PATH, 'why-wiener'); ?>
  <?php get_template_part(HOME_CONTENT_PATH, 'programs'); ?>
  <?php get_template_part(HOME_CONTENT_PATH, 'impact-results'); ?>
  <?php get_template_part(HOME_CONTENT_PATH, 'testimonial'); ?>
  <?php get_template_part(HOME_CONTENT_PATH, 'guidance-steps'); ?>
  <?php get_template_part(HOME_CONTENT_PATH, 'international-agreements'); ?>
  <?php get_template_part(HOME_CONTENT_PATH, 'last-news'); ?>
  <?php get_template_part(HOME_CONTENT_PATH, 'featured-events'); ?>
</main>
<?php get_footer(); ?>