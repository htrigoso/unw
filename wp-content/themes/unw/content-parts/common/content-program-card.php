<?php
$image = $args['image'];
$alt = $args['image_alt'];
$title_item = $args['title'];
$desc = $args['description'];
$link = $args['link'];
$link_target = $args['link_target'];
$link_title = $args['link_title'];
?>

<article class="program-card">
  <?php if ($image): ?>
    <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($alt); ?>"
      class="program-card--img" />
  <?php endif; ?>
  <div class="program-card--content">
    <h3 class="program-card--content__title"><?php echo esc_html($title_item); ?></h3>
    <p class="program-card--content__description"><?php echo esc_html($desc); ?></p>
    <?php if (!empty($link)): ?>
      <a href="<?php echo esc_url($link); ?>" target="<?php echo esc_attr($link_target); ?>"
        class="btn btn-primary program-card--content__cta">
        <?php echo esc_html($link_title); ?>
        <i>
          <svg class="icon icon--arrow" width="24" height="24">
            <use xlink:href="#arrow-right"></use>
          </svg>
        </i>
      </a>
    <?php endif; ?>
  </div>
</article>
