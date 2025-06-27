<?php set_query_var('ASSETS_CHUNK_NAME', 'careers'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php get_header(); ?>
<?php get_template_part(GENERAL_CONTENT_PATH, 'top-bar');?>
<?php get_template_part(GENERAL_CONTENT_PATH, 'navbar');?>
<main>
  <?php
   $sliders = get_field('sliders', get_the_ID());
    get_template_part(CAREERS_HERO_CONTENT_PATH, 'hero', ['sliders' => $sliders]); ?>
  <?php get_template_part(CAREERS_TABS_PATH, 'tabs');?>
</main>
<?php get_footer(); ?>
