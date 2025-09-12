<?php
$search_term = get_search_query(); // término de búsqueda

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // página actual
$posts_per_page = 20;
$args = [
  'post_type'      => 'any',
  'post_status'    => 'publish',
  'posts_per_page' => $posts_per_page,
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
    <?php get_template_part(GENERAL_CONTENT_PATH, 'pagination', [
      'search_term' => $search_term,
      'wp_query'    => $wp_query,
     ]);?>
  </div>
</section>