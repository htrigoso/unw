<?php
$postId = $args['id'] ?? 0;

$inter = get_field('Internationalization', 'option');

// Campos principales
$intl_title       = $inter['title'];
$intl_sub_title   = $inter['sub_title'];
$intl_description = $inter['description'];
$image            = $inter['image'];
$agreements_title = $inter['agreements']['title'];
$agreements_desc  = $inter['agreements']['description'];
$paises           = $inter['paises']; // array de WP_Post
?>

<section class="internationalization" id="internationalization-<?= esc_attr($postId) ?>"
  aria-labelledby="internationalization-title">
  <div class="internationalization__wrapper">

    <!-- Header -->
    <header class="internationalization__header">
      <h2 id="internationalization-title" class="internationalization__title">
        <?= esc_html($intl_title) ?>
      </h2>
    </header>

    <!-- Content -->
    <div class="internationalization__content">

      <!-- Universidad destacada -->
      <div class="internationalization__highlight">
        <div class="internationalization__highlight-text">
          <h3 class="internationalization__highlight-subtitle">
            <?= esc_html($intl_sub_title) ?>
          </h3>
          <img class="internationalization__highlight-logo lazyload" src="<?= esc_url($image['url']) ?>"
            alt="<?= esc_attr($image['alt']) ?>" width="<?= esc_attr($image['width']) ?>"
            height="<?= esc_attr($image['height']) ?>" loading="lazy" />
        </div>
        <div class="internationalization__highlight-description">
          <?= wp_kses_post($intl_description) ?>
        </div>
      </div>

      <!-- Separador -->
      <hr class="internationalization__divider" />

      <!-- Convenios internacionales -->
      <div class="internationalization__agreements">
        <div class="internationalization__agreements-header">
          <h3 class="internationalization__agreements-title">
            <?= esc_html($agreements_title) ?>
          </h3>
          <p class="internationalization__agreements-description">
            <?= esc_html($agreements_desc) ?>
          </p>
        </div>

        <!-- Lista de países -->
        <div class="international-agreements">
          <div class="swiper-container internationalization-swiper">
            <div class="swiper-wrapper">
              <?php foreach ($paises as $pais):
                $country = [
                  'name' => $pais->post_title,
                  'file' => get_the_post_thumbnail_url($pais->ID, 'full'),
                ];
              ?>
              <div class="swiper-slide internationalization__country-item">
                <?php get_template_part(COMMON_CONTENT_PATH, 'country-card', ['country' => $country]); ?>
              </div>
              <?php endforeach; ?>
            </div>
            <div class="swiper-navigation">
              <div class="swiper-primary-button-prev" data-color="asu"></div>
              <div class="swiper-primary-button-next" data-color="asu"></div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>