<?php
$events = [
  [
    "title" => "Wiener Sessions",
    "date" => "04/06/2025",
    "hour" => "4:00pm",
    "location" => "Zoom",
    "register_url" => "#",
    "image_url" => UPLOAD_PATH . '/home/featured-events/featured-event-1.jpg',
    "image_alt" => "Wiener Sessions",
  ],
  [
    "title" => "Wiener Fest",
    "date" => "27/05/2025",
    "hour" => "4:00pm",
    "location" => "Norbert Wiener",
    "register_url" => "#",
    "image_url" => UPLOAD_PATH . '/home/featured-events/featured-event-2.jpg',
    "image_alt" => "Wiener Fest",
  ],
  [
    "title" => "Wiener Tours",
    "date" => "29/05/2025",
    "hour" => "4:00pm",
    "location" => "Presencial",
    "register_url" => "#",
    "image_url" => UPLOAD_PATH . '/home/featured-events/featured-event-3.jpg',
    "image_alt" => "Wiener Tours",
  ],
  [
    "title" => "Wiener Fest",
    "date" => "27/05/2025",
    "hour" => "4:00pm",
    "location" => "Norbert Wiener",
    "register_url" => "#",
    "image_url" => UPLOAD_PATH . '/home/featured-events/featured-event-2.jpg',
    "image_alt" => "Wiener Fest",
  ],
  [
    "title" => "Wiener Tours",
    "date" => "29/05/2025",
    "hour" => "4:00pm",
    "location" => "Presencial",
    "register_url" => "#",
    "image_url" => UPLOAD_PATH . '/home/featured-events/featured-event-3.jpg',
    "image_alt" => "Wiener Tours",
  ],
  [
    "title" => "Wiener Sessions",
    "date" => "04/06/2025",
    "hour" => "4:00pm",
    "location" => "Zoom",
    "register_url" => "#",
    "image_url" => UPLOAD_PATH . '/home/featured-events/featured-event-1.jpg',
    "image_alt" => "Wiener Sessions",
  ],
]
?>

<section class="simple-events">
  <h2 class="simple-events__title">Eventos Destacados</h2>
  <div class="simple-events-swiper post-swiper" data-width="compact">
    <div class="simple-events__swiper-container swiper-container">
      <div class="simple-events__swiper-wrapper swiper-wrapper">
        <?php foreach ($events as $event): ?>
          <?php
          $date = DateTime::createFromFormat('d/m/Y', $event['date']);
          $formatted_day = $date->format('d.m');
          ?>
          <div class="simple-events__slide swiper-slide">
            <?php
            get_template_part(COMMON_CONTENT_PATH, 'event-card', [
              'title' => $event['title'],
              'hour' => $event['hour'],
              'location' => $event['location'],
              'date' => $formatted_day,
              'url' => $event['register_url'],
              'image_url' => $event['image_url'],
              'image_alt' => $event['image_alt'],
            ]);
            ?>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
  <div class="simple-events__see-more">
    <a href="#" class="btn btn-sm btn-secondary-one simple-events__see-more-btn">
      Ver todos los eventos
      <i>
        <svg class="icon icon--arrow" width="32" height="32">
          <use xlink:href="#arrow-right"></use>
        </svg>
      </i>
    </a>
  </div>
</section>
