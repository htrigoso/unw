<?php set_query_var('ASSETS_CHUNK_NAME', 'events'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php get_header(); ?>

<?php get_template_part(GENERAL_CONTENT_PATH, 'navbar'); ?>
<main>

  <?php get_template_part(EVENTS_CONTENT_PATH, 'events-hero'); ?>
  <?php get_template_part(EVENTS_CONTENT_PATH, 'events'); ?>
</main>
<?php get_footer(); ?>

<?php set_query_var('ASSETS_CHUNK_NAME', 'events'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php get_header(); ?>

<?php get_template_part(GENERAL_CONTENT_PATH, 'navbar'); ?>
<main>

  <?php get_template_part(EVENTS_CONTENT_PATH, 'events-hero'); ?>
  <?php get_template_part(EVENTS_CONTENT_PATH, 'events'); ?>
</main>
<?php get_footer(); ?>
