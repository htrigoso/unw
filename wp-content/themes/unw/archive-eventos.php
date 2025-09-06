<?php
add_action('wp_head', function () {
  $events_list = get_field('hero-events', 'option');

  if (empty($events_list)) {
    return;
  }

  $images_to_preload = array_map(
    fn($item) => [
      'url'         => $item['images']['mobile']['url'] ?? null,
      'url_desktop' => $item['images']['desktop']['url'] ?? null,
    ],
    $events_list
  );

  uw_preload_responsive_images($images_to_preload);
});
?>
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
