<?php set_query_var('ASSETS_CHUNK_NAME', '404'); ?>
<?php get_header(); ?>

<?php
$logo = get_field('logo', 'options');
$error = get_field('error-404', 'options');
?>

<main>
  <section class="error-404">
    Hola
  </section>
</main>
