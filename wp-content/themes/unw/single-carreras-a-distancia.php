<?php set_query_var('ASSETS_CHUNK_NAME', 'careers'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php get_header();?>


<?php get_template_part(GENERAL_CONTENT_PATH, 'navbar');?>
<main>
  <?php
    render_only_careers([
      'mode'         => 'virtual',
        'title_global' => 'Carreras a Distancia',
        'base_url'     => home_url('/carreras-a-distancia/'),
    ])
  ?>
</main>
<?php get_footer(); ?>
