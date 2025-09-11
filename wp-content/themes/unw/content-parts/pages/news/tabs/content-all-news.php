<?php
$args = array(
  'post_type'      => 'novedades',
  'posts_per_page' => 4,
  'orderby'        => 'date',
  'order'          => 'DESC',
);

$last_news = new WP_Query($args);
?>

<section class="all-news">
  <h2 class="all-news__title">Todas las noticias</h2>
  <ul class="all-news__list">
    <?php if ($last_news->have_posts()) : ?>
      <?php while ($last_news->have_posts()) : $last_news->the_post(); ?>
        <?php
        $slide = array(
          'image'   => get_the_post_thumbnail_url(get_the_ID(), 'large'),
          'title'   => get_the_title(),
          'content' => get_the_excerpt(),
          'href'    => get_permalink(),
        );
        ?>

        <li class="swiper-slide all-news__item">
          <?php get_template_part(COMMON_CONTENT_PATH, 'entry-card', $slide); ?>
        </li>

      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    <?php else : ?>
      <li class="swiper-slide all-news__item">
        <p>No hay noticias recientes.</p>
      </li>
    <?php endif; ?>
  </ul>
</section>
