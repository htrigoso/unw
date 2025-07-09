<?php
$quote = $args['quote'] ?? '';
$author = $args['author'] ?? '';
$position = $args['position'] ?? '';
$img_url = $args['img_url'] ?? '';
?>

<section class="quote">
  <img src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr($author); ?>" class="quote--img">
  <div class="quote__content">
    <p class="quote__content--text"><?php echo $quote; ?></p>
    <h4 class="quote__content--author"><?php echo $author; ?></h4>
    <span class="quote__content--position"><?php echo $position; ?></span>
  </div>
</section>
