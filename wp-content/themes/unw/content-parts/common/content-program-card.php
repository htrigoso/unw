<?php
$image = $args['image'];
$alt = $args['image_alt'];
$title_item = $args['title'];
$desc = $args['description'] ?? '';
$link = $args['link'];
$link_target = $args['link_target'];
$link_title = $args['link_title'];
?>

<article class="program-card">
  <?php if ($image): ?>
  <img src="<?=placeholder() ?>" data-src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($alt); ?>"
    class="program-card--img lazyload" />
  <?php endif; ?>
  <div class="program-card--content">
    <h2 class="program-card--content__title"><?php echo esc_html($title_item); ?></h2>
    <?php if (!empty($desc)) : ?>
    <div class="program-card--content__paragraph">
      <p class="program-card--content__description"><?php echo esc_html($desc); ?></p>
    </div>

    <?php endif; ?>
    <?php if (!empty($link)): ?>
    <a href="<?php echo esc_url($link); ?>" class="btn btn-primary program-card--content__cta">
      <?php echo esc_html($link_title); ?>
    </a>
    <?php endif; ?>
  </div>
</article>