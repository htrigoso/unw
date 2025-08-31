<?php

/**
 * Template Name: Facultad Template
 */
?>

<?php set_query_var('ASSETS_CHUNK_NAME', 'faculty'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php get_header(); ?>

<?php get_template_part(GENERAL_CONTENT_PATH, 'navbar'); ?>
<main>
  <?php

  $current_term = get_queried_object();


  $sliders = get_field('hero_slider');
  if ($sliders && is_array($sliders['list_of_files'])) {
    foreach ($sliders['list_of_files'] as $i => $slide):
      if (!isset($sliders['list_of_files'][$i]['title'])) {
        $sliders['list_of_files'][$i]['title'] = $sliders['title'];
      }
      $sliders['list_of_files'][$i]['label'] = $sliders['title'];
    endforeach;
  }


  $base_breadcrumb = [
    ['label' => 'Inicio', 'href' => home_url('/')],
    ['label' => 'Facultad', 'href' => home_url('/facultad/')],
    ['label' => $current_term->post_title, 'href' => '']
  ];

  get_template_part(
    COMMON_CONTENT_PATH,
    'swiper-hero',
    [
      'sliders' => $sliders,
      'base_breadcrumbs' => $base_breadcrumb,
      'extra_class' => 'faculty-hero'
    ]
  ); ?>
  <?php get_template_part(FACULTY_TABS_PATH, 'tabs'); ?>
</main>
<?php get_footer(); ?>