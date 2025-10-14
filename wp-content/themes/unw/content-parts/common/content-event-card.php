<?php
$image_url      = $args['image_url'] ?? '';
$image_alt      = $args['image_alt'] ?? '';

$title          = $args['title'] ?? '';
$date           = $args['date'] ?? '';
$hour           = $args['hour'] ?? '';
$location       = $args['location'] ?? '';
$url            = $args['url'];
$status         = $args['status'] ?? false;
$customStyle    = $args['customStyle'] ?? '';

?>

<article class="event-card">
  <?php if ($status): ?>
  <div class="event-card-ribbon--wrap">
    <span class="event-card-ribbon--inner"
      style="--ribbon-bg: <?= esc_attr($customStyle['back_color']); ?>; --ribbon-text: <?= esc_attr($customStyle['text_color']); ?>">
      <?= esc_html($customStyle['title']); ?>
    </span>
  </div>
  <?php endif; ?>
  <img src="<?= placeholder() ?>" data-src="<?php echo esc_url($image_url); ?>"
    alt="<?php echo esc_attr($image_alt); ?>" class="event-card--img lazyload" />
  <div class="event-card--content">
    <h3 class="event-card--title"><?php echo esc_html($title); ?></h3>
    <div class="event-card--row">
      <div class="event-card--info">
        <span class="event-card--info--title">Fecha</span>
        <span class="event-card--info--desc"><?php echo esc_html($date); ?></span>
      </div>
      <div class="event-card--info">
        <span class="event-card--info--title">Hora</span>
        <span class="event-card--info--desc"><?php echo esc_html($hour); ?></span>
      </div>
    </div>
    <div class="event-card--info">
      <span class="event-card--info--title">Lugar</span>
      <span class="event-card--info--desc"><?php echo esc_html($location); ?></span>
    </div>

    <?php
    if ($url && is_array($url)):
    ?>
    <a href=" <?= $url['url'] ?>" class="btn btn-sm btn-secondary-one-outline event-card--cta">
      <?= $url['title'] ?>
      <i>
        <svg class="icon icon--arrow" width="32" height="32">
          <use xlink:href="#arrow-right"></use>
        </svg>
      </i>
    </a>
    <?php
    endif;
    ?>
  </div>
</article>