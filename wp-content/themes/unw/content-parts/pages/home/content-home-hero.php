<?php
$hero = get_field('hero');
$slides = $hero['list'] ?? [];
$count_slides = count($slides);
if (!empty($slides)):
  $first_slide = $slides[0];
  $first_images = $first_slide['images'] ?? null;
  $img_desktop_url = $first_images['desktop']['url'] ?? '';
  $img_desktop_alt = $first_images['desktop']['alt'] ?? '';
  $img_mobile_url = $first_images['mobile']['url'] ?? '';
  $img_mobile_alt = $first_images['mobile']['alt'] ?? $img_desktop_alt;
?>

<section class="hero hero-swiper">
  <div class="swiper-container is-draggable" data-type-component="swiper">
    <div class="swiper-wrapper swiper-hero__wrapper">
      <?php
        $slide_index = 0;
        foreach ($slides as $slide):
          $images = $slide['images'] ?? null;
          $img_desktop_url = $images['desktop']['url'] ?? '';
          $img_desktop_alt = $images['desktop']['alt'] ?? '';
          $img_mobile_url = $images['mobile']['url'] ?? '';
          $img_mobile_alt = $images['mobile']['alt'] ?? $img_desktop_alt;

          $is_first = $slide_index === 0;
        ?>
      <div class="swiper-slide swiper-hero__slide">
        <?php if (!empty($slide['type'])): ?>
        <?php
          $link_simple = $slide['link'] ?? null;
          if(!empty($link_simple)) {
            $link_simple_url = $link_simple['url'] ?? '';
            $link_simple_target = $link_simple['target'] ?: '_self';

            $final_href = esc_url($link_simple_url);
            $data_attr = '';
            if ($link_simple_url === '#modal-informacion') {
              $final_href = '#modal-more-info';
              $data_attr = 'data-modal-target="modal-more-info"';
            }
          }
          ?>
        <a href="<?php echo $final_href ?? '#'; ?>" <?php echo $data_attr; ?>
          target="<?php echo esc_attr($link_simple_target); ?>" aria-label="Ver más">
          <picture class="swiper-hero__picture">
            <?php if ($is_first): ?>
            <source srcset="<?php echo esc_url($img_desktop_url); ?>" width="1920" height="754"
              media="(min-width: 768px)" />
            <img alt="<?php echo esc_attr($img_mobile_alt); ?>" src="<?php echo esc_url($img_mobile_url); ?>"
              class="swiper-hero__picture--img" width="768" height="500" decoding="sync" fetchpriority="high"
              loading="eager" />
            <?php else: ?>
            <source data-srcset="<?php echo esc_url($img_desktop_url); ?>" width="1920" height="754"
              media="(min-width: 768px)" />
            <img alt="<?php echo esc_attr($img_mobile_alt); ?>" data-src="<?php echo esc_url($img_mobile_url); ?>"
              class="swiper-hero__picture--img swiper-lazy" width="768" height="500" />
            <div class="swiper-lazy-preloader"></div>
            <?php endif; ?>
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
          <?php if ($is_first): ?>
          <source srcset="<?php echo esc_url($img_desktop_url); ?>" width="1920" height="754"
            media="(min-width: 768px)" />
          <img alt="<?php echo esc_attr($img_mobile_alt); ?>" src="<?php echo esc_url($img_mobile_url); ?>"
            class="swiper-hero__picture--img" width="768" height="500" decoding="sync" fetchpriority="high"
            loading="eager" />
          <?php else: ?>
          <source data-srcset="<?php echo esc_url($img_desktop_url); ?>" width="1920" height="754"
            media="(min-width: 768px)" />
          <img alt="<?php echo esc_attr($img_mobile_alt); ?>" data-src="<?php echo esc_url($img_mobile_url); ?>"
            class="swiper-hero__picture--img swiper-lazy" width="768" height="500" />
          <div class="swiper-lazy-preloader"></div>
          <?php endif; ?>
        </picture>

        <div class="hero__wrapper">
          <div class="x-container hero__container">
            <article class="hero__content">
              <?php if (!empty($hero_title)): ?>
              <div class="hero__content--title"><?php echo wp_kses_post($hero_title, [
                                                          'h1' => [],
                                                          'h2' => [],
                                                          'h3' => [],
                                                          'h4' => [],
                                                          'h5' => [],
                                                          'h6' => [],
                                                        ]); ?></div>
              <?php endif; ?>

              <?php if (!empty($hero_description)): ?>
              <div class="hero__content--body"><?php echo wp_kses_post($hero_description); ?></div>
              <?php endif; ?>

              <?php if (!empty($link_one) || !empty($link_two)): ?>
              <div class="hero__content--buttons">
                <?php if (!empty($link_one['title'])):
                          $link_one_url = $link_one['url'] ?? '#';
                          $href_one = esc_url($link_one_url);
                          $data_attr_one = '';
                          if ($link_one_url === '#modal-informacion') {
                            $href_one = '#modal-more-info';
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
                            $href_two = '#modal-more-info';
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
      <?php
          $slide_index++;
        endforeach; ?>
    </div>

    <?php if ($count_slides  > 1) : ?>
    <div class="hero-controls">
      <div class="home-hero-button-prev"></div>
      <div class="home-hero-pagination">
        <?php
        foreach ($slides as $key => $value):
          $active  = $key === 0 ? ' swiper-pagination-bullet-active' : '';
        ?>
        <div class="swiper-pagination-bullet<?php echo esc_attr($active); ?>"></div>
        <?php endforeach; ?>
      </div>
      <div class="home-hero-button-next"></div>
    </div>
    <?php endif ?>
  </div>
</section>

<?php endif; ?>
