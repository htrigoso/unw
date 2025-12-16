<?php
$events = get_field('hero-events', 'option');

?>

<?php if (!empty($events)) : ?>
  <section class="events-hero hero-swiper">
    <div class="swiper-container is-draggable" data-type-component="swiper">
      <div class="swiper-wrapper swiper-events-hero__wrapper">
        <?php foreach ($events as $event) :
          $desktop_image = $event['images']['desktop']['url'] ?? '';
          $mobile_image = $event['images']['mobile']['url'] ?? '';
          $title = $event['title'] ?? '';
          $day_raw = $event['day'] ?? '';
          $time = $event['time'] ?? '';
          $cta = $event['cta'] ?? [];

          $formatted_day = $day_raw;
          $day_obj = DateTime::createFromFormat('d/m/Y', $day_raw);
          if ($day_obj) {
            $formatted_day = date_i18n('j \d\e F Y', $day_obj->getTimestamp());
          }
        ?>
          <div class="swiper-slide event-slide">
            <picture class="event-slide__picture">
              <source srcset="<?php echo esc_url($desktop_image); ?>" media="(min-width: 768px)" />
              <img src="<?php echo esc_url($mobile_image); ?>" alt="<?php echo esc_attr($title); ?>"
                class="event-slide__picture--img" fetchpriority="high" decoding="async" loading="eager" />
            </picture>
            <div class="event-slide__wrapper">
              <div class="x-container event-slide__container">
                <article class="event-slide__content">
                  <h1 class="event-slide__content--title"><?php echo esc_html($title); ?></h1>
                  <div class="event-slide__content--date">
                    <span>📅 <?php echo esc_html($formatted_day); ?></span>
                    <span>⏰ <?php echo esc_html($time); ?></span>
                  </div>
                  <?php if (!empty($cta['url'])) : ?>
                    <div class="event-slide__content--cta">
                      <a class="btn btn-primary event-slide__content--cta" href="<?php echo esc_url($cta['url']); ?>"
                        target="<?php echo esc_attr($cta['target'] ?? '_self'); ?>">
                        <?php echo esc_html($cta['title'] ?? 'Inscríbete'); ?>
                      </a>
                    </div>
                  <?php endif; ?>
                  <div class="event-slide__content--breadcrumb">
                    <?php
                    get_template_part(COMMON_CONTENT_PATH, 'breadcrumb', [
                      'breadcrumb' => [
                        ['label' => 'Inicio', 'href' => home_url('/')],
                        ['label' => 'Eventos', 'href' => home_url('/noticias')],
                      ],
                    ]);
                    ?>
                  </div>
                </article>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </section>
<?php endif; ?>
