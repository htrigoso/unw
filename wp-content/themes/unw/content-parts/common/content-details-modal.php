<?php
$modal_id = $args['id'] ?? 'details-modal-' . uniqid();
$swiper_id = $args['swiper_id'] ?? 'details-modal-swiper';
$slides = $args['slides'];
// slides = [[ 'image' => '', 'alt' => '', 'title' => '' ], [], ...]
?>

<?php
ob_start();
?>
<div class="details-modal__content">
  <div class="<?= $swiper_id ?> post-swiper">
    <div class="swiper-container">

      <?php if (!empty($slides) && is_array($slides)) : ?>
        <div class="swiper-wrapper details-modal__list">
          <?php foreach ($slides as $slide) : ?>
            <div class="swiper-slide">
              <article class="details-modal__card">
                <?php if (!empty($slide['image'])) : ?>
                  <img src="<?php echo esc_url($slide['image']); ?>"
                    alt="<?php echo esc_attr($slide['alt'] ?? ''); ?>"
                    class="details-modal__card--img" />
                <?php endif; ?>

                <?php if (!empty($slide['title'])) : ?>
                  <p class="details-modal__card--desc">
                    <?php echo esc_html($slide['title']); ?>
                  </p>
                <?php endif; ?>
              </article>
            </div>
          <?php endforeach; ?>
        </div>

        <div class="swiper-navigation" data-size="responsive">
          <div class="swiper-primary-button-prev" data-size="responsive"></div>
          <div class="swiper-primary-button-next" data-size="responsive"></div>
        </div>

      <?php else : ?>
        <div class="details-modal__empty">
          <p>No hay imágenes disponibles en este momento.</p>
        </div>
      <?php endif; ?>

    </div>
  </div>
</div>
<?php
$content = ob_get_clean();
?>
<?php
get_template_part(COMMON_CONTENT_PATH, 'modal', [
  'content' => $content,
  'id' => $modal_id,
  'class' => 'details-modal'
]);
?>
