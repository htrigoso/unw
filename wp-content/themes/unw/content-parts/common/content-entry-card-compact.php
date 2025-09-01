<?php
$image = $args['image'];
$title = $args['title'];
$content = $args['content'];
$href = $args['href'];
?>

<a href="<?php echo esc_url($href); ?>" class="entry-card-compact">
  <article class="entry-card-compact__wrapper">
    <img src="<?=placeholder() ?>" data-src="<?php echo $image; ?>" alt="<?php echo esc_attr($title); ?>" class="entry-card-compact__image lazyload">
    <div class="entry-card-compact__content">
      <h3 class="entry-card-compact__title line-clamp-2"><?php echo esc_html($title); ?></h3>
      <p class="entry-card-compact__desc line-clamp-2" title="<?php echo esc_attr($content); ?>"><?php echo esc_html($content); ?></p>
    </div>
  </article>
</a>
