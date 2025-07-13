<?php
$image = $args['image'];
$title = $args['title'];
$content = $args['content'];
$href = $args['href'];
?>

<div class="last-news-card">
  <img src="<?php echo $image; ?>" alt="<?php echo esc_attr($title); ?>" class="last-news-card__image">
  <div class="last-news-card__content">
    <h3 class="last-news-card__title"><?php echo esc_html($title); ?></h3>
    <p class="last-news-card__desc" title="<?php echo esc_attr($content); ?>"><?php echo esc_html($content); ?></p>
    <a class="last-news-card__button btn btn-link btn-sm" href="<?php echo esc_url($href); ?>">Leer más
      <i>
        <svg class="icon icon--arrow" width="32" height="32">
          <use xlink:href="#arrow-right"></use>
        </svg>
      </i></a>
  </div>
</div>
