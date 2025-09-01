<?php
$img_desktop = $args['img_desktop'];
$img_mobile = $args['img_mobile'];
$alt = $args['alt'] ?? '';
$title = $args['title'] ?? '';
$description = $args['description'] ?? '';
?>

<div class="pba-hero" data-variant="<?php echo esc_attr($variant); ?>">
  <picture class="pba-hero__picture">
    <?php if ($img_desktop): ?>
      <source srcset="<?php echo esc_url($img_desktop); ?>" media="(min-width: 768px)" fetchpriority="high" />
    <?php endif; ?>
    <?php if ($img_mobile): ?>
      <img src="<?php echo esc_url($img_mobile); ?>" alt="<?php echo esc_attr($alt); ?>"
        class="pba-hero__picture--img" fetchpriority="high" decoding="async" loading="eager" />
    <?php endif; ?>
  </picture>
  <div class="pba-hero__wrapper">
    <div class="x-container pba-hero__container">
      <article class="pba-hero__content">
        <h1 class="pba-hero__content--title">
          <?php echo esc_html($title); ?>
        </h1>
        <p class="pba-hero__content--description">
          <?php echo esc_html($description); ?>
        </p>
      </article>
    </div>
  </div>
</div>
