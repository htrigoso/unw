<?php
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$search_term = get_query_var('s') ?: '';
$posts_per_page = 20;
$wp_query = new WP_Query([
  'post_type'      => 'post',
  'posts_per_page' => $posts_per_page,
  's'              => $search_term,
  'paged'          => $paged,
]);
?>

<section class="blog">
  <div class="x-container x-container--pad-213">
    <div class="blog__wrapper">
      <div class="blog-search">
        <?php get_template_part(BLOG_CONTENT_PATH, 'search-form'); ?>
      </div>
      <div class="blog-content">
        <div class="blog-content__results">
          <?php if ($wp_query->have_posts()) : ?>
          <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
          <?php
              // Construir array con formato esperado por tu tarjeta
              $result = [
                'image'   => get_the_post_thumbnail_url(get_the_ID(), 'medium_large') ?: UPLOAD_PATH . '/default-image.jpg',
                'title'   => get_the_title(),
                'date'    => get_the_date('F j, Y'),
                'content' => get_the_excerpt(),
                'href'    => get_permalink(),
                'tags'    => ['Proceso de Admisión', 'Vida Universitaria']
              ];
              get_template_part(COMMON_CONTENT_PATH, 'entry-card', $result);
              ?>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
          <?php else : ?>
          <p>No se encontraron resultados para tu búsqueda.</p>
          <?php endif; ?>
        </div>

        <?php get_template_part(GENERAL_CONTENT_PATH, 'pagination', [
          'search_term' => $search_term,
          'wp_query'    => $wp_query,
          '$posts_per_page' => $posts_per_page
        ]);?>

        <div class="blog-newsletter">
          <a class="btn btn-primary-one btn-sm blog-newsletter__btn">
            Suscríbete a nuestro Newsletter
            <i>
              <svg class="icon" width="32" height="32">
                <use xlink:href="#arrow-right"></use>
              </svg>
            </i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
