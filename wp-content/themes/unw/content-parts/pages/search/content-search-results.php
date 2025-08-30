<?php
$search_term = get_search_query(); // término de búsqueda

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // página actual

$args = [
  'post_type'      => 'any',
  'post_status'    => 'publish',
  'posts_per_page' => 10,   // usa 10 para paginar mejor
  'paged'          => $paged,
];

if (!empty($search_term)) {
  $args['s'] = $search_term;
}

$wp_query = new WP_Query($args);

$results = [];
if (!empty($search_term) && $wp_query->have_posts()) {
  while ($wp_query->have_posts()) {
    $wp_query->the_post();

    // URL relativa (sin dominio)
    $url = parse_url(get_permalink(), PHP_URL_PATH);

    $results[] = [
      "title" => get_the_title(),
      "href"  => $url,
    ];
  }
  wp_reset_postdata();
}
?>
<section class="search-results">
  <div class="search-results__wrapper x-container x-container--pad-213">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-link search-results__back">
      <i>
        <svg class="icon" width="32" height="32">
          <use xlink:href="#arrow-left"></use>
        </svg>
      </i>
      Volver al Inicio
    </a>
    <div class="search-results__content" data-empty="<?=empty($search_term)? false: true;?>">
      <?php if (!empty($search_term)): ?>
      <?php if (!empty($results)): ?>
      <?php foreach ($results as $result): ?>
      <a href="<?php echo esc_url($result['href']); ?>">
        <div class="search-results__item">
          <h3 class="search-results__item--title"><?php echo esc_html($result['title']); ?></h3>
          <p class="search-results__item--content"><?php echo esc_html($result['href']); ?></p>
          <button class="btn btn-link search-results__item-button">
            <i>
              <svg class="icon" width="32" height="32">
                <use xlink:href="#arrow-right"></use>
              </svg>
            </i>
          </button>
        </div>
      </a>
      <?php endforeach; ?>
      <?php else: ?>
      <p>No se encontraron resultados para <strong><?php echo esc_html($search_term); ?></strong>.</p>
      <?php endif; ?>
      <?php else: ?>
      <p>No hay resultados porque no se ingresó un término de búsqueda.</p>
      <?php endif; ?>
    </div>
    <!-- Paginación -->
    <?php if (!empty($search_term) && $wp_query->max_num_pages > 1) : ?>
    <div class="blog-pagination">
      <?php
          $big = 999999999; // necesario para que funcione str_replace

          $pagination_args = [
            'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format'    => '?paged=%#%',
            'current'   => max(1, $paged),
            'total'     => $wp_query->max_num_pages,
            'prev_text' => '<',
            'next_text' => '>',
            'type'      => 'array',
            'end_size'  => 1,
            'mid_size'  => 2,
          ];

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
  </div>
</section>