<?php
$photo = $args['photo'];
$title = $args['title'];
$description = $args['description'];
?>

<article class="infra-card">
  <div class="infra-card__image">
    <img width="128" height="128" src="<?=placeholder() ?>" data-src="<?php echo esc_url($photo); ?>"
      alt="Foto de <?php echo esc_attr($title); ?>" class="lazyload" />
  </div>
  <div class="infra-card__body">
    <?php if (!empty($title)): ?>
    <h3 class="infra-card__name"><?php echo esc_html($title); ?></h3>
    <?php endif; ?>
    <?php if (!empty($description)): ?>
    <div class="infra-card__description" data-content="paragraph" >
      <?= wp_kses_post($description)?>
    </div>
    <?php endif; ?>
  </div>
</article>
