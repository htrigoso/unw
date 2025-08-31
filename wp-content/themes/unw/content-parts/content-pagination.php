<?php

if(!$args['wp_query']):
  return;
endif;
$wp_query = $args['wp_query'] ?? null;
$search_term = $args['search_term'] ?? '';

if (  $wp_query->max_num_pages > 20) : ?>
<div class="blog-pagination">
  <?php
          $big = 999999999;

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
