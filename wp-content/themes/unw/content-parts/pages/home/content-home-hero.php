<?php
$hero = get_field('hero');
$slides = $hero['list'] ?? [];
if (!empty($slides)):
?>

<section class="hero hero-swiper">
  <div class="swiper-container is-draggable">
    <div class="swiper-wrapper swiper-hero__wrapper">

      <?php foreach ($slides as $slide):
          $images = $slide['images'] ?? null;
          $img_desktop_url = $images['desktop']['url'] ?? '';
          $img_desktop_alt = $images['desktop']['alt'] ?? '';
          $img_mobile_url = $images['mobile']['url'] ?? '';
          $img_mobile_alt = $images['mobile']['alt'] ?? $img_desktop_alt;

        ?>
      <div class="swiper-slide swiper-hero__slide">
        <?php if (!empty($slide['type'])): ?>
        <?php
              $link_simple = $slide['link'] ?? null;
              $link_simple_url = $link_simple['url'] ?? '';
              $link_simple_target = $link_simple['target'] ?: '_self';

              $final_href = esc_url($link_simple_url);
              $data_attr = '';
              if ($link_simple_url === '#modal-informacion') {
                $final_href = 'javascript:void(0);';
                $data_attr = 'data-modal-target="modal-more-info"';
              }
              ?>
        <a href="<?php echo $final_href; ?>" <?php echo $data_attr; ?>
          target="<?php echo esc_attr($link_simple_target); ?>"
          aria-label="<?php echo esc_attr($link_simple['title'] ?? 'Ver más'); ?>">
          <picture class="swiper-hero__picture">
            <source srcset="<?php echo esc_url($img_desktop_url); ?>" width="1920" height="754"
              media="(min-width: 768px)" />
            <img alt="<?php echo esc_attr($img_mobile_alt); ?>" src="<?php echo esc_url($img_mobile_url); ?>"
              class="swiper-hero__picture--img" width="768" height="500" fetchpriority="high" decoding="async"
              loading="eager" />
          </picture>
        </a>
        <?php else:
            ?>
        <?php
              $hero_title = $slide['title'] ?? '';
              $hero_description = $slide['description'] ?? '';
              $link_one = $slide['link_one'] ?? null;
              $link_two = $slide['link_two'] ?? null;
              ?>
        <picture class="swiper-hero__picture">
          <source srcset="<?php echo esc_url($img_desktop_url); ?>" width="1920" height="754"
            media="(min-width: 768px)" />
          <img alt="<?php echo esc_attr($img_mobile_alt); ?>" src="<?php echo esc_url($img_mobile_url); ?>"
            class="swiper-hero__picture--img" width="768" height="500" fetchpriority="high" decoding="async"
            loading="eager" />
        </picture>

        <div class="hero__wrapper">
          <div class="x-container hero__container">
            <article class="hero__content">
              <?php if (!empty($hero_title)): ?>
              <h1 class="hero__content--title"><?php echo esc_html($hero_title); ?></h1>
              <?php endif; ?>

              <?php if (!empty($hero_description)): ?>
              <p class="hero__content--body"><?php echo wp_kses_post($hero_description); ?></p>
              <?php endif; ?>

              <?php if (!empty($link_one) || !empty($link_two)): ?>
              <div class="hero__content--buttons">
                <?php if (!empty($link_one['title'])):
                          $link_one_url = $link_one['url'] ?? '#';
                          $href_one = esc_url($link_one_url);
                          $data_attr_one = '';
                          if ($link_one_url === '#modal-informacion') {
                            $href_one = 'javascript:void(0);';
                            $data_attr_one = 'data-modal-target="modal-more-info"';
                          }
                        ?>
                <a class="btn btn-primary hero__content--cta" href="<?php echo $href_one; ?>"
                  <?php echo $data_attr_one; ?> target="<?php echo esc_attr($link_one['target'] ?: '_self'); ?>">
                  <?php echo esc_html($link_one['title']); ?>
                </a>
                <?php endif; ?>

                <?php if (!empty($link_two['title']) && !empty($link_two['url'])):
                          $link_two_url = $link_two['url'] ?? '#';
                          $href_two = esc_url($link_two_url);
                          $data_attr_two = '';
                          if ($link_two_url === '#modal-informacion') {
                            $href_two = 'javascript:void(0);';
                            $data_attr_two = 'data-modal-target="modal-more-info"';
                          }
                        ?>
                <a class="btn btn-primary-outline hero__content--cta" href="<?php echo $href_two; ?>"
                  <?php echo $data_attr_two; ?> target="<?php echo esc_attr($link_two['target'] ?: '_self'); ?>">
                  <?php echo esc_html($link_two['title']); ?>
                </a>
                <?php endif; ?>
              </div>
              <?php endif; ?>
            </article>
          </div>
        </div>
        <?php endif; ?>
      </div>
      <?php endforeach; ?>

    </div>
    <div class="swiper-pagination"></div>
  </div>
</section>

<?php endif; ?>