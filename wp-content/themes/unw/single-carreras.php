<?php
add_action('wp_head', function () {
    $list = get_field('sliders')['list_of_files'] ?? [];
    if (empty($list)) { return; }

    $image_items = array_filter(
        $list,
        fn($item) => strtolower($item['images']['type'] ?? '') === 'imagen'
    );
    if (empty($image_items)) { return; }

    $images_to_preload = array_map(
        fn($item) => [
            'url'         => $item['images']['mobile']['url'] ?? null,
            'url_desktop' => $item['images']['desktop']['url'] ?? null,
        ],
        $image_items
    );
    uw_preload_responsive_images($images_to_preload);
});
?>

<?php set_query_var('ASSETS_CHUNK_NAME', 'careers'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php get_header(); ?>

<?php get_template_part(GENERAL_CONTENT_PATH, 'navbar');?>
<main>
  <?php get_template_part(CAREERS_CONTENT_PATH, 'hero'); ?>
  <?php get_template_part(CAREERS_TABS_PATH, 'tabs'); ?>
</main>
<?php get_footer(); ?>
