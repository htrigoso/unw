<?php
$search_term = get_search_query();
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // página actual
$posts_per_page = 20;
$args = array(
  'post_type'      => 'novedades',
  'posts_per_page' => $posts_per_page,
  'orderby'        => 'date',
  'order'          => 'DESC',
  'paged'          => $paged,
);
if (!empty($search_term)) {
  $args['s'] = $search_term;
}
$wp_query = new WP_Query($args);
?>

<section class="all-news">
  <h2 class="all-news__title">Todas las noticias</h2>
  <div class="all-news__list">
    <?php if ($wp_query->have_posts()) : ?>
    <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
    <?php
         $slide = array(
          'image'   => uw_get_first_slider_image(get_the_ID() ),
          'title'   => get_the_title(),
          'date'    => get_the_date('j') . ' de ' . ucfirst(get_the_date('F')) . ' del ' . get_the_date('Y'),
          'content' => get_the_excerpt(),
          'href'    => get_permalink(),
          'date_before' => true,
        );

        ?>

    <div class="swiper-slide all-news__item">
      <?php get_template_part(COMMON_CONTENT_PATH, 'entry-card', $slide); ?>
    </div>

    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php else : ?>
    <div class="swiper-slide all-news__item">
      <p>No hay noticias recientes.</p>
    </div>
    <?php endif; ?>
  </div>
</section>
<?php get_template_part(GENERAL_CONTENT_PATH, 'pagination', [
      'search_term' => $search_term,
      'wp_query'    => $wp_query,
     ]);?>
