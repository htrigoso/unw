<?php

$items           = $args['items'] ?? [];
$swiper_id       = $args['swiper_id'] ?? 'infra-gallery-swiper';
$modal_id        = $args['modal_id'] ?? 'infra-gallery-modal-' . uniqid();
$modal_swiper_id = $args['modal_swiper_id'] ?? 'modal-' . $swiper_id;

if (empty($items)) {
  return;
}

$modal_slides = [];
foreach ($items as $item) {
  $modal_slides[] = [
    'image' => $item['photo'],
    'alt'   => $item['title'],
    'title' => $item['title'],
  ];
}
?>

<div class="<?= esc_attr($swiper_id) ?> post-swiper" data-width="compact">
  <div class="swiper-container">
    <div class="swiper-wrapper infra-gallery__list">
      <?php foreach ($items as $i => $item) : ?>
        <div class="swiper-slide infra-gallery__item" data-modal-target="<?php echo esc_attr($modal_id); ?>" data-slide-index="<?php echo esc_attr($i); ?>">
          <?php
          // A infra-card le pasamos el item completo, ya que contiene 'title', 'description' y 'photo'.
          get_template_part(COMMON_CONTENT_PATH, 'infra-card', $item);
          ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <div class="swiper-navigation" data-size="absolute">
    <div class="swiper-primary-button-prev" data-size="absolute"></div>
    <div class="swiper-primary-button-next" data-size="absolute"></div>
    <div class="swiper-counter" data-size="absolute">
      <div class="swiper-pagination" data-size="absolute"></div>
    </div>
  </div>
</div>

<?php
get_template_part(COMMON_CONTENT_PATH, 'details-modal', [
  'id'        => $modal_id,
  'slides'    => $modal_slides,
  'swiper_id' => $modal_swiper_id
]);
?>
