<?php
/**
 * Template Name: Todas las Carreras Template
 */
?>
<?php set_query_var('ASSETS_CHUNK_NAME', 'all-careers'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php get_header(); ?>

<?php get_template_part(GENERAL_CONTENT_PATH, 'navbar'); ?>
<main>
  <?php

  $facultad_slug = get_query_var('facultad');

  if ($facultad_slug) {
    $term_obj = get_term_by('slug', $facultad_slug, 'categoria-carrera-distancia');

    $current_faculty_id = ($term_obj && !is_wp_error($term_obj)) ? (int) $term_obj->term_id : 0;
  } else {
    $current_faculty_id = 0;
  }

  $hero_img_desktop = null;
  $hero_img_mobile = null;
  $hero_title = null;
  if ($current_faculty_id == 0) {
    // Hero global (página)
    $hero_data = get_field('hero');
    if (!empty($hero_data)) {
      $hero_title       = $hero_data['title'] ?? $hero_title;
      $hero_img_desktop = $hero_data['images']['desktop']['url'];
      $hero_img_mobile  = $hero_data['images']['mobile']['url'];
    }
  } else {
     $images = get_field('hero_slider', 'categoria-carrera-distancia_' . $current_faculty_id);


    if ( ! empty( $images )
         && is_array( $images )
         && ! empty( $images['list_of_files'] )
         && is_array( $images['list_of_files'] )
    ) {
        $first_file = $images['list_of_files'][0] ?? null;

        if ( $first_file && ! empty( $first_file['images'] ) ) {
            $hero_img_desktop = $first_file['images']['desktop']['url'] ?? '';
            $hero_img_mobile  = $first_file['images']['mobile']['url'] ?? '';
        }

        // Título del hero → usar el nombre del término si aún no se definió
        if ( empty( $hero_title ) && ! empty( $term_obj->name ) ) {
            $hero_title = $term_obj->description;
        }
    }
  }


$tax_query = array();


if ($current_faculty_id !== 0) {
    $tax_query[] = array(
        'taxonomy' => 'categoria-carrera-distancia',
        'field'    => 'term_id',
        'terms'    => $current_faculty_id
    );
}
vdebug($tax_query);


$careers_query = new WP_Query([
    'post_type'           => 'carreras-a-distancia',
    'post_status'         => 'publish',
    'posts_per_page'      => -1,
    'orderby'             => 'title',
    'order'              => 'ASC',
    'ignore_sticky_posts' => true,
    'tax_query'          => $tax_query,
]);



  // Construcción de tabs (Todas + cada facultad)
  $facultades = get_terms([
    'taxonomy' => 'categoria-carrera-distancia',
    'hide_empty' => false,
  ]);

  $tabs = [
    [
      'id'     => 0,
      'label'  => 'Todas las carreras',
      'status' => true,
      'target' => 'todas-las-carreras',
      'url'    => home_url('/carreras-a-distancia/')
    ]
  ];

  if (!is_wp_error($facultades) && !empty($facultades)) :

    foreach ($facultades as $facultad) :
      $tabs[] = [
        'id'     => $facultad->term_id,
        'label'  => $facultad->name,
        'target' => $facultad->slug,
        'status' => true,
        'url'    => home_url('/carreras-a-distancia/'. $facultad->slug)
      ];
    endforeach;
  endif;



  $breadcrumb = [
    ['label' => 'Inicio',   'href' => home_url('/')],
    ['label' => 'Carreras a Distancia', 'href' => '#'],

  ];
  if ($current_faculty_id > 0) {
    $breadcrumb[] = [
      'label' => $term_obj->description,
      'href'  => '',
    ];
  }
  ?>

  <?php get_template_part(COMMON_CONTENT_PATH, 'hero-slide', [
    'img_desktop' => $hero_img_desktop,
    'img_mobile'  => $hero_img_mobile,
    'alt'         => $hero_title,
    'title'       => $hero_title,
    'breadcrumbs' => $breadcrumb,
    'variant'     => 'primary'
  ]); ?>

  <?php

  get_template_part(ALL_CAREERS_TABS_PATH, 'tabs', [
    'tabs' => $tabs,
     'mode' => 'virtual',
     'current_faculty_id'=> $current_faculty_id,
     'careers_posts' => $careers_query->posts
  ]); ?>
</main>
<?php get_footer(); ?>
