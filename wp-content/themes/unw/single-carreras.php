<?php set_query_var('ASSETS_CHUNK_NAME', 'careers'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php get_header(); ?>

<?php get_template_part(GENERAL_CONTENT_PATH, 'navbar');?>
<main>
  <?php get_template_part(CAREERS_CONTENT_PATH, 'hero', [
    'data-form' => [
        'desktop'=> 'careers-desktop',
        'mobile'=> 'careers-mobile'
      ]
  ]); ?>
  <?php get_template_part(CAREERS_TABS_PATH, 'tabs', [
     'data-form' => [
        'desktop'=> 'careers-desktop',
        'mobile'=> 'careers-mobile'
      ]
  ]); ?>
</main>
<?php get_footer(); ?>