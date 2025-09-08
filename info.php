<?php
// require __DIR__ . '/wp-load.php';
// $args = array(
//   'post_type'      => 'curso',
//   'posts_per_page' => -1,
//   'meta_query'     => array(
//     array(
//       'key'     => '_thumbnail_id',
//       'compare' => 'EXISTS'
//     )
//   )
// );

// $cursos = new WP_Query($args);

// if ($cursos->have_posts()) {
//   while ($cursos->have_posts()) {
//     $cursos->the_post();
//     delete_post_thumbnail(get_the_ID());
//   }
// }
// wp_reset_postdata();