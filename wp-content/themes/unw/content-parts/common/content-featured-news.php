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
            $categories = wp_get_post_terms(get_the_ID(), 'categoria_novedad');
            $first_category = !empty($categories) && !is_wp_error($categories) ? $categories[0]->name : '';

            $slide = [
              'image'   => uw_get_first_slider_image(get_the_ID()),
              'title'   => get_the_title(),
              'date'    => get_the_date('j') . ' de ' . ucfirst(get_the_date('F')) . ' del ' . get_the_date('Y'),
              'content' => get_the_excerpt(),
              'href'    => get_permalink(),
              'date_before' => true,
              'content_type' => 'Noticia',
              'content_id' => get_the_ID(),
              'category_tag' => $first_category,
            ];
            ?>
        <div class="swiper-slide featured-news__item">
          <?php get_template_part(COMMON_CONTENT_PATH, 'entry-card', $slide); ?>
        </div>
        <?php endwhile;
          wp_reset_postdata(); ?>
        <?php else : ?>
        <div class="swiper-slide">
          <p>No hay noticias destacadas por ahora.</p>
        </div>
        <?php endif; ?>
      </div>
    </div>
    <div class="featured-news__swiper-navigation">
      <div class="swiper-navigation" data-size="absolute">
        <div class="swiper-primary-button-prev" data-size="absolute"></div>
        <div class="swiper-primary-button-next" data-size="absolute"></div>
        <div class="swiper-counter" data-size="absolute">
          <div class="swiper-pagination" data-size="absolute"></div>
        </div>
      </div>

      <?php if (!$hide_see_more): ?>
      <div class="featured-news__see-more-btn">
        <?php
          get_template_part(COMMON_CONTENT_PATH, 'see-more-btn', [
            'text' => 'Ver todas las noticias',
            'href' => home_url('/noticias/')
          ]);
          ?>
      </div>
      <?php endif ?>
    </div>
  </div>
</section>
