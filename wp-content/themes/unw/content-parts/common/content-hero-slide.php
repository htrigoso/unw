<?php
$img_desktop = $args['img_desktop'];
$img_mobile = $args['img_mobile'];
$alt = $args['alt'] ?? '';
$title = $args['title'] ?? '';
$breadcrumbs = $args['breadcrumbs'] ?? [];
$type = $args['type'] ?? 'Imagen';
$variant = $args['variant'] ?? 'standard'; // "standard" and "primary" are the expected values
?>

<div class="hero-slide" data-variant="<?php echo esc_attr($variant); ?>">
  <?php if ($type === 'Video' && $img_desktop): ?>
    <div class="hero-slide__video">
      <video class="hero-slide__video--desktop" autoplay muted loop playsinline>
        <source src="<?php echo esc_url($img_desktop); ?>" type="video/mp4">
      </video>
    </div>
  <?php else: ?>
    <picture class="hero-slide__picture">
      <?php if ($img_desktop): ?>
        <source srcset="<?php echo esc_url($img_desktop); ?>" media="(min-width: 768px)" />
      <?php endif; ?>
      <?php if ($img_mobile): ?>
        <img src="<?php echo esc_url($img_mobile); ?>" alt="<?php echo esc_attr($alt); ?>"
          class="hero-slide__picture--img" />
      <?php endif; ?>
    </picture>
  <?php endif; ?>
  <div class="hero-slide__wrapper">
    <div class="x-container hero-slide__container">
      <article class="hero-slide__content">
        <h1 class="hero-slide__content--title">
          <?php echo esc_html($title); ?>
        </h1>
        <?php
        get_template_part(COMMON_CONTENT_PATH, 'breadcrumb', [
          'breadcrumb' => $breadcrumbs
        ]);
        ?>
      </article>
    </div>
  </div>
</div>
