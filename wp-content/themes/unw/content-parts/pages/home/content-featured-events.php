<?php
$featured_events = [
  [
    'image' => 'featured-event-1.jpg',
    'name' => 'Wiener Sessions',
    'day' => '04.06',
    'hour' => '4:00pm',
    'place' => 'Zoom',
    'cta' => [
      'text' => 'Inscribirme',
      'href' => '#',
    ]
  ],
  [
    'image' => 'featured-event-2.jpg',
    'name' => 'Wiener Fest',
    'day' => '27.05',
    'hour' => '4:00pm',
    'place' => 'Norbert Wiener',
    'cta' => [
      'text' => 'Inscribirme',
      'href' => '#',
    ]
  ],
  [
    'image' => 'featured-event-3.jpg',
    'name' => 'Wiener Tours',
    'day' => '29.05',
    'hour' => '4:00pm',
    'place' => 'Presencial',
    'cta' => [
      'text' => 'Inscribirme',
      'href' => '#',
    ]
  ],
  [
    'image' => 'featured-event-1.jpg',
    'name' => 'Wiener Sessions',
    'day' => '04.06',
    'hour' => '4:00pm',
    'place' => 'Zoom',
    'cta' => [
      'text' => 'Inscribirme',
      'href' => '#',
    ]
  ],
  [
    'image' => 'featured-event-2.jpg',
    'name' => 'Wiener Fest',
    'day' => '27.05',
    'hour' => '4:00pm',
    'place' => 'Norbert Wiener',
    'cta' => [
      'text' => 'Inscribirme',
      'href' => '#',
    ]
  ],
  [
    'image' => 'featured-event-3.jpg',
    'name' => 'Wiener Tours',
    'day' => '29.05',
    'hour' => '4:00pm',
    'place' => 'Presencial',
    'cta' => [
      'text' => 'Inscribirme',
      'href' => '#',
    ]
  ]
];
?>

<section class="featured-events">
  <div class="x-container">
    <div class="featured-events__wrapper">
      <h2 class="featured-events__title">Eventos Destacados</h2>
      <div class="post-swiper featured-events__swiper">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <?php foreach ($featured_events as $event): ?>
              <div class="swiper-slide">
                <article class="featured-events__card">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/upload/home/featured-events/<?php echo esc_attr($event['image']); ?>"
                    alt=""
                    class="featured-events__card--img" />
                  <div class="featured-events__card--content">
                    <h3 class="featured-events__card--title"><?php echo esc_html($event['name']); ?></h3>
                    <div class="featured-events__card--row">
                      <div class="featured-events__card--info">
                        <span class="featured-events__card--info--title">Fecha</span>
                        <span class="featured-events__card--info--desc"><?php echo esc_html($event['day']); ?></span>
                      </div>
                      <div class="featured-events__card--info">
                        <span class="featured-events__card--info--title">Hora</span>
                        <span class="featured-events__card--info--desc"><?php echo esc_html($event['hour']); ?></span>
                      </div>
                    </div>
                    <div class="featured-events__card--info">
                      <span class="featured-events__card--info--title">Lugar</span>
                      <span class="featured-events__card--info--desc"><?php echo esc_html($event['place']); ?></span>
                    </div>
                    <a href="<?php echo esc_url($event['cta']['href']); ?>" class="btn btn-sm btn-secondary-one-outline featured-events__card--cta">
                      <?php echo esc_html($event['cta']['text']); ?>
                      <i>
                        <svg class="icon icon--arrow" width="32" height="32">
                          <use xlink:href="#arrow-right"></use>
                        </svg>
                      </i>
                    </a>
                  </div>
                </article>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
      <div class="featured-events__see-more-btn">
        <?php
        set_query_var('see_more_text', 'Ver todos los eventos');
        set_query_var('see_more_href', '#');
        get_template_part('content-parts/components/ui/content', 'see-more-btn');
        ?>
      </div>
    </div>
  </div>
</section>
