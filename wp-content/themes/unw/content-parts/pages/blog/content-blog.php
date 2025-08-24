<?php
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$search_term = get_query_var('s') ?: '';

$query = new WP_Query([
  'post_type'      => 'post',
  'posts_per_page' => 5,
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

        <!-- Paginación -->
        <?php if ($query->max_num_pages > 1) : ?>
          <div class="blog-pagination">
            <?php
            $big = 999999999; // necesario para que funcione str_replace

            $pagination_args = [
              'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
              'format'    => '?paged=%#%',
              'current'   => max(1, $paged),
              'total'     => $query->max_num_pages,
              'prev_text' => '<',
              'next_text' => '>',
              'type'      => 'array',
              'end_size'  => 1,
              'mid_size'  => 2,
            ];

            // Si hay búsqueda, agregar el parámetro s a la URL
            if (!empty($search_term)) {
              $pagination_args['add_args'] = ['s' => $search_term];
            }

            $pages = paginate_links($pagination_args);

            if ($pages) :
            ?>
              <nav class="pagination" role="navigation" aria-label="Navegación de entradas">
                <ul class="pagination__list">
                  <?php foreach ($pages as $page) : ?>
                    <li class="pagination__item">
                      <?php echo $page; ?>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </nav>
            <?php endif; ?>
          </div>
        <?php endif; ?>

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
