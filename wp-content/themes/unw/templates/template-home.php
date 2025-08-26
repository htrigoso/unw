<?php
/**
 * Template Name: Inicio Template
 */
?>

<?php set_query_var('ASSETS_CHUNK_NAME', 'home'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php get_header(); ?>

<?php get_template_part(GENERAL_CONTENT_PATH, 'navbar');?>
<main>
  <?php get_template_part(HOME_CONTENT_PATH, 'home-hero');?>
  <?php get_template_part(HOME_CONTENT_PATH, 'why-wiener'); ?>
  <?php get_template_part(HOME_CONTENT_PATH, 'programs'); ?>
  <?php get_template_part(HOME_CONTENT_PATH, 'impact-results'); ?>
  <?php get_template_part(HOME_CONTENT_PATH, 'testimonial'); ?>
  <?php get_template_part(HOME_CONTENT_PATH, 'guidance-steps'); ?>
  <?php get_template_part(HOME_CONTENT_PATH, 'international-agreements'); ?>
  <?php get_template_part(HOME_CONTENT_PATH, 'last-news'); ?>
  <?php get_template_part(HOME_CONTENT_PATH, 'featured-events'); ?>


  <?php
            wp_nav_menu(array(
              'menu' => 'navbar_menu_mobile',
              'menu_class' => 'flex items-center justify-end',
              'container' => 'nav',
              'container_class' => 'navbar__menu flex-auto',

            ));
        ?>
</main>
<?php get_footer(); ?>
