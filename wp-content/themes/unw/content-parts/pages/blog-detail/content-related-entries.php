<?php
$title = $args['title'] ?? '';
$related_posts = $args['related_posts'];
?>

<?php if (empty($related_posts) || !is_array($related_posts)) {
  return;
} ?>
<div class="related-entries">
  <h3 class="related-entries__title"><?php echo esc_html($title); ?></h3>
  <div class="related-entries__list">
    <?php foreach ($related_posts as $post) : ?>
      <?php get_template_part(COMMON_CONTENT_PATH, 'entry-card', $post) ?>
      <?php get_template_part(COMMON_CONTENT_PATH, 'entry-card-compact', $post); ?>
    <?php endforeach; ?>
  </div>
</div>

