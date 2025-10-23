<?php
$image = $args['image'];
$title = $args['title'];
$content = $args['content'];
$href = $args['href'];
$date = $args['date'];
?>

<a href="<?php echo esc_url($href); ?>" class="entry-card-compact">
  <article class="entry-card-compact__wrapper">
    <img src="<?=placeholder() ?>" data-src="<?php echo $image; ?>" alt="<?php echo esc_attr($title); ?>"
      class="entry-card-compact__image lazyload">
    <div class="entry-card-compact__content">
      <h4 class="entry-card-compact__title"><?php echo esc_html($title); ?></h4>
      <span class="entry-card-compact__date"><?php echo esc_html($date); ?></span>
      <p class="entry-card-compact__desc" title="<?php echo esc_attr($content); ?>"><?php echo esc_html($content); ?>
      </p>
    </div>
  </article>
</a>
