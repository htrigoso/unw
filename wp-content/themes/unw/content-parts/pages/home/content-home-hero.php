<?php
$hero = get_field('hero');
$hero_title = $hero['title'] ?? '';
$hero_description = $hero['description'] ?? '';
$link_one = $hero['link_one'] ?? null;
$link_two = $hero['link_two'] ?? null;
$hero_image = $hero['list'][0]['images'] ?? null;

$img_desktop = $hero_image['desktop']['url'];
$img_desktop_alt = $hero_image['desktop']['alt'];
$img_mobile = $hero_image['mobile']['url'];
$img_mobile_alt = $hero_image['mobile']['alt'];
?>

<?php if (!empty($hero) && is_array($hero)):?>


<section class="hero hero-swiper">
  <div class="swiper-container is-draggable">
    <div class="swiper-wrapper swiper-hero__wrapper">
      <div class="swiper-slide swiper-hero__slide">
        <picture class="swiper-hero__picture">
          <source srcset="<?php echo esc_url($img_desktop); ?>" width="1920" height="754" media="(min-width: 768px)" />
          <img alt="<?= $img_mobile_alt ?>" src="<?php echo esc_url($img_mobile); ?>" class="swiper-hero__picture--img"
            width="768" height="500" fetchpriority="high" decoding="async" loading="eager" />
        </picture>
      </div>
      <div class="hero__wrapper">
        <div class="x-container hero__container">
          <article class="hero__content">
            <?php if (!empty($hero_title)): ?>
            <h1 class="hero__content--title"><?php echo esc_html($hero_title); ?></h1>
            <?php endif; ?>

            <?php if (!empty($hero_description)): ?>
            <p class="hero__content--body"><?= $hero_description ?></p>
            <?php endif; ?>

            <div class="hero__content--buttons">
              <a class="btn btn-primary hero__content--cta"
                href="<?php echo !empty($link_one['url']) ? esc_url($link_one['url']) : 'javascript:void(0);'; ?>" <?php if (empty($link_one['url'])) {
                    echo 'data-modal-target="modal-more-info"';
                  } ?> target="<?php echo esc_attr($link_one['target'] ?? '_self'); ?>">
                <?php echo esc_html($link_one['title'] ?? 'Solicitar más información'); ?>
              </a>

              <?php if (!empty($link_two['url'])): ?>
              <a class="btn btn-primary-outline hero__content--cta" href="<?php echo esc_url($link_two['url']); ?>"
                target="<?php echo esc_attr($link_two['target'] ?? '_self'); ?>">
                <?php echo esc_html($link_two['title'] ?? 'Conocer proceso de admisión'); ?>
              </a>
              <?php endif; ?>
            </div>
          </article>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>