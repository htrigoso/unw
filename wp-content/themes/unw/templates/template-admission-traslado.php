<?php
/**
 * Template Name: Admisión Traslado Template
 */
?>

<?php
add_action('wp_head', function () {
    $hero = get_field('Hero');

    if (empty($hero['images'])) { return; }

    $images_to_preload = [
      [
        'url'         => $hero['images']['mobile']['url'] ?? null,
        'url_desktop' => $hero['images']['desktop']['url'] ?? null,
      ]
    ];
    uw_preload_responsive_images($images_to_preload);
});
?>

<?php set_query_var('ASSETS_CHUNK_NAME', 'admission'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php get_header(); ?>

<?php get_template_part(GENERAL_CONTENT_PATH, 'navbar'); ?>
<main>
  <?php get_template_part(ADMISSION_CONTENT_PATH,'shared-admission', [
      'form' => 'contact-form-traslado'
  ]);?>
</main>

<?php get_footer(); ?>
