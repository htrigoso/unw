<?php
$acf_comite = $args['comite'] ?? null;
if (empty($acf_comite)) return;

$title = $acf_comite['title'] ?? '';
$description = $acf_comite['description'] ?? '';
$lists = $acf_comite['lists'] ?? [];

?>
<section class="program-committee">
  <?php if (!empty($title)): ?>
  <h3 class="program-committee__title"><?= esc_html($title); ?></h3>
  <?php endif; ?>

  <?php if (!empty($description)): ?>
  <div class="program-committee__content" data-content="paragraph">
    <?= wp_kses_post($description); ?>
  </div>
  <?php endif; ?>

  <?php if (!empty($lists)):
    ?>
  <div class="program-committee__slides">
    <div class="program-committee-swiper post-swiper" data-width="compact">
      <div class="swiper-container" data-type-component="swiper">
        <div class="swiper-wrapper">
          <?php foreach ($lists as $member): ?>
          <?php
              $id = $member->ID;
              $info = get_field('info-comite', $id);

              $img = get_the_post_thumbnail_url($id);
              $name = get_the_title($id);
              $position = $info['charge'] ?? '';
              $description = $info['description'] ?? '';

              ?>
          <div class="swiper-slide program-committee-swiper__slide">
            <div class="program-committee__card">
              <img src="<?= esc_url($img); ?>" alt="<?= esc_attr($name); ?>" class="program-committee__card--img" />
              <div class="program-committee__card__content">
                <h4 class="program-committee__card--title"><?= esc_html($name); ?></h4>
                <span class="program-committee__card--position"><?= esc_html($position); ?></span>
                <div class="program-committee__card--extract" data-content="paragraph">
                  <?= wp_kses_post($description); ?>
                </div>
              </div>
            </div>
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
  </div>
  <?php endif; ?>
</section>