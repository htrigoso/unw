<?php
$hide_see_more = $args['hide_see_more'] ?? false;

// Query dinámico para destacadas
$args = [
  'post_type'      => 'novedades',
  'orderby'        => 'date',
  'order'          => 'DESC',
  'meta_query'     => [
    [
      'key'     => 'featured',
      'value'   => 1,
      'compare' => '='
    ]
  ]
];

$destacadas = new WP_Query($args);
?>

<section class="featured-news">
  <h2 class="featured-news__title">Noticias destacadas</h2>

  <div class="featured-news-swiper post-swiper" data-width="compact">
    <div class="swiper-container">
      <div class="swiper-wrapper featured-news__list">
        <?php if ($destacadas->have_posts()) : ?>
        <?php while ($destacadas->have_posts()) : $destacadas->the_post(); ?>
        <?php
              $slide = [
                'image'   => uw_get_first_slider_image(get_the_ID() ),
                'title'   => get_the_title(),
                'content' => get_the_excerpt(),
                'href'    => get_permalink(),
              ];
            ?>
        <div class="swiper-slide featured-news__item">
          <?php get_template_part(COMMON_CONTENT_PATH, 'entry-card', $slide); ?>
        </div>
        <?php endwhile; wp_reset_postdata(); ?>
        <?php else : ?>
        <div class="swiper-slide featured-news__item">
          <p>No hay noticias destacadas por ahora.</p>
        </div>
        <?php endif; ?>
      </div>

      <div class="featured-news__swiper-navigation">
        <div class="swiper-navigation">
          <div class="swiper-primary-button-prev"></div>
          <div class="swiper-primary-button-next"></div>
          <div class="swiper-counter">
            <div class="swiper-pagination"></div>
          </div>
        </div>

        <?php if (!$hide_see_more): ?>
        <div class="featured-news__see-more-btn">
          <?php
          get_template_part(COMMON_CONTENT_PATH, 'see-more-btn', [
            'text' => 'Ver todas las noticias',
            'href' => home_url('/novedades/')
          ]);
          ?>
        </div>
        <?php endif ?>
      </div>
    </div>
  </div>
</section>