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

  vdebug(get_carreras_filter_url('arquitectura'));
  $facultades = get_terms([
    'taxonomy'   => 'facultad',
    'hide_empty' => false,
  ]);
  $tabs = [
    [
      'id' => 0,
      'label' => 'Todas las carreras',
      'target' => 'todas-las-carreras',
      'url'   => get_permalink() // URL de la página actual
    ]
  ];

  if (!is_wp_error($facultades) && !empty($facultades)):
    foreach ($facultades as $facultad):
      $tabs[] = [
        'id' => $facultad->ID,
        'label'  => $facultad->name,
        'target' => $facultad->slug,
        'url'   => esc_url(get_term_link($facultad))
      ];
    endforeach;
  endif;

  $breadcrumb = [
    ['label' => 'Inicio', 'href' => home_url('/')],
    ['label' => 'Carreras', 'href' => ''],
    ['label' => get_the_title(), 'href' => ''],
  ];
  ?>
  <?php get_template_part(COMMON_CONTENT_PATH, 'hero-slide', [
    'img_desktop' => UPLOAD_PATH . '/all-careers/all-hero-mobile.jpg',
    'img_mobile'  => UPLOAD_PATH . '/all-careers/all-hero-mobile.jpg',
    'alt'         => 'Todas las carreras',
    'title'       => 'Todas las carreras',
    'breadcrumbs' => $breadcrumb,
    'variant'     => 'primary'
  ]); ?>
  <?php get_template_part(ALL_CAREERS_TABS_PATH, 'tabs', [
    'tabs' => $tabs
  ]); ?>
</main>
<?php get_footer(); ?>