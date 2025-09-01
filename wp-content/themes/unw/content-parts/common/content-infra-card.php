<?php
$photo = $args['photo'];
$title = $args['title'];
$excerpt = $args['excerpt'];
?>

<article class="infra-card">
  <div class="infra-card__image">
    <img width="128" height="128" src="<?=placeholder() ?>" data-src="<?php echo esc_url($photo); ?>"
      alt="Foto de <?php echo esc_attr($title); ?>" class="lazyload" />
  </div>
  <div class="infra-card__body">
    <h3 class="infra-card__name"><?php echo esc_html($title); ?></h3>
    <?php if (!empty($excerpt)): ?>
      <p class="infra-card__description"><?php echo esc_html($excerpt); ?></p>
    <?php endif; ?>
  </div>
</article>
