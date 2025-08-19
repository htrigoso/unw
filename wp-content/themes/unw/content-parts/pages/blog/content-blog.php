<?php
$query = new WP_Query([
  'post_type'      => 'post',
  'posts_per_page' => 10,
  's' => get_query_var('s') ?: '',
  'paged'          => get_query_var('paged') ?: 1,
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
          <?php if ($query->have_posts()) : ?>
          <?php while ($query->have_posts()) : $query->the_post(); ?>
          <?php
                // Construir array con formato esperado por tu tarjeta
                $result = [
                  'image'   => get_the_post_thumbnail_url(get_the_ID(), 'medium_large') ?: UPLOAD_PATH . '/default-image.jpg',
                  'title'   => get_the_title(),
                  'date'    => get_the_date('F j, Y'),
                  'content' => get_the_excerpt(),
                  'href'    => get_permalink(),
                ];
                get_template_part(COMMON_CONTENT_PATH, 'entry-card', $result);
              ?>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
          <?php else : ?>
          <p>No se encontraron resultados para tu búsqueda.</p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
