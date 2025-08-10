<?php
$image = $args['image'];
$title = $args['title'];
$date = $args['date'];
$content = $args['content'];
$href = $args['href'];
?>

<div class="entry-card">
  <img src="<?php echo $image; ?>" alt="<?php echo esc_attr($title); ?>" class="entry-card__image">
  <div class="entry-card__content">
    <h3 class="entry-card__title"><?php echo esc_html($title); ?></h3>
    <?php if (!empty($date)) : ?>
      <span class="entry-card__date"><?php echo esc_html($date); ?></span>
    <?php endif; ?>
    <p class="entry-card__desc line-clamp-2" title="<?php echo esc_attr($content); ?>"><?php echo esc_html($content); ?></p>
    <a class="entry-card__button btn btn-link btn-sm" href="<?php echo esc_url($href); ?>">Leer más
      <i>
        <svg class="icon icon--arrow" width="32" height="32">
          <use xlink:href="#arrow-right"></use>
        </svg>
      </i>
    </a>
  </div>
</div>
