<?php
$hero = [
  [
    "image" => [
      'img_desktop' => UPLOAD_PATH . '/home/featured-events/featured-event-1.jpg',
      'img_mobile' => UPLOAD_PATH . '/home/featured-events/featured-event-1.jpg',
    ],
    "title" => "Trasládate a la Wiener",
    "day" => "24 de junio",
    "hour" => "7:00 PM",
    "cta" => [
      'url' => '#',
      'title' => 'Inscríbete',
      'target' => '_blank',
    ],
  ],
  [
    "image" => [
      'img_desktop' => UPLOAD_PATH . '/home/featured-events/featured-event-2.jpg',
      'img_mobile' => UPLOAD_PATH . '/home/featured-events/featured-event-2.jpg',
    ],
    "title" => "Eventos de Admisión",
    "day" => "10 de junio",
    "hour" => "11:00 PM",
    "cta" => [
      'url' => '#',
      'title' => 'Inscríbete',
      'target' => '_blank',
    ],
  ]
]
?>
<section class="events-hero hero-swiper">
  <div class="swiper-container is-draggable">
    <div class="swiper-wrapper swiper-events-hero__wrapper">
      <?php foreach ($hero as $event): ?>
        <div class="swiper-slide event-slide">
          <picture class="event-slide__picture">
            <source srcset="<?php echo esc_url($event['image']['img_desktop']); ?>" media="(min-width: 768px)" />
            <img src="<?php echo esc_url($event['image']['img_mobile']); ?>" alt="<?php echo esc_attr($event['title']); ?>"
              class="event-slide__picture--img" />
          </picture>
          <div class="event-slide__wrapper">
            <div class="x-container event-slide__container">
              <article class="event-slide__content">
                <h1 class="event-slide__content--title"><?php echo esc_html($event['title']); ?></h1>
                <div class="event-slide__content--date">
                  <span>📅 <?php echo esc_html($event['day']); ?></span>
                  <span>⏰ <?php echo esc_html($event['hour']); ?></span>
                </div>
                <div class="event-slide__content--cta">
                  <a class="btn btn-primary event-slide__content--cta" href="<?php echo esc_url($event['cta']['url']); ?>"
                    target="<?php echo esc_attr($event['cta']['target'] ?? '_self'); ?>">
                    <?php echo esc_html($event['cta']['title'] ?? 'Inscríbete'); ?>
                  </a>
                </div>
              </article>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

    </div>
  </div>
</section>
