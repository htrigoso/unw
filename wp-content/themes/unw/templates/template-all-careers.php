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
  $sliders = [
    'list_of_files' => [
      [
        'images' => [
          'desktop' => [
            'url' => UPLOAD_PATH . '/all-careers/all-hero-mobile.jpg',
            'alt' => 'Carreras'
          ],
          'mobile' => [
            'url' => UPLOAD_PATH . '/all-careers/all-hero-mobile.jpg',
            'alt' => 'Carreras'
          ]
        ],
        'title' => 'Todas las carreras',
        'label' => 'Todas',
      ],
      [
        'images' => [
          'desktop' => [
            'url' => UPLOAD_PATH . '/all-careers/health-hero-mobile.jpg',
            'alt' => 'Salud'
          ],
          'mobile' => [
            'url' => UPLOAD_PATH . '/all-careers/health-hero-mobile.jpg',
            'alt' => 'Salud'
          ]
        ],
        'title' => 'Ciencias de la salud',
        'label' => 'Ciencias de la salud',
      ],
      [
        'images' => [
          'desktop' => [
            'url' => UPLOAD_PATH . '/all-careers/architecture-hero-mobile.jpg',
            'alt' => 'Arquitectura'
          ],
          'mobile' => [
            'url' => UPLOAD_PATH . '/all-careers/architecture-hero-mobile.jpg',
            'alt' => 'Arquitectura'
          ]
        ],
        'title' => 'Arquitectura',
        'label' => 'Arquitectura',
      ],
      [
        'images' => [
          'desktop' => [
            'url' => UPLOAD_PATH . '/all-careers/engineering-hero-mobile.jpg',
            'alt' => 'Ingeniería'
          ],
          'mobile' => [
            'url' => UPLOAD_PATH . '/all-careers/engineering-hero-mobile.jpg',
            'alt' => 'Ingeniería'
          ]
        ],
        'title' => 'Ingeniería',
        'label' => 'Ingeniería',
      ],
      [
        'images' => [
          'desktop' => [
            'url' => UPLOAD_PATH . '/all-careers/law-hero-mobile.jpg',
            'alt' => 'Derecho'
          ],
          'mobile' => [
            'url' => UPLOAD_PATH . '/all-careers/law-hero-mobile.jpg',
            'alt' => 'Derecho'
          ]
        ],
        'title' => 'Derecho y Ciencia Política',
        'label' => 'Derecho y Ciencia Política',
      ],
      [
        'images' => [
          'desktop' => [
            'url' => UPLOAD_PATH . '/all-careers/business-hero-mobile.jpg',
            'alt' => 'Negocios'
          ],
          'mobile' => [
            'url' => UPLOAD_PATH . '/all-careers/business-hero-mobile.jpg',
            'alt' => 'Negocios'
          ]
        ],
        'title' => 'Negocios',
        'label' => 'Negocios',
      ],
      [
        'images' => [
          'desktop' => [
            'url' => UPLOAD_PATH . '/all-careers/com-hero-mobile.jpg',
            'alt' => 'Comunicaciones'
          ],
          'mobile' => [
            'url' => UPLOAD_PATH . '/all-careers/com-hero-mobile.jpg',
            'alt' => 'Comunicaciones'
          ]
        ],
        'title' => 'Comunicaciones',
        'label' => 'Comunicaciones',
      ]
    ]
  ];

  $base_breadcrumbs = [
    ['label' => 'Inicio', 'href' => home_url('/')],
    ['label' => 'Carreras', 'href' => '']
  ];

  get_template_part(
    COMMON_CONTENT_PATH,
    'swiper-hero',
    [
      'sliders' => $sliders,
      'base_breadcrumbs' => $base_breadcrumbs,
      'variant' => 'primary',
      'extra_class' => 'all-careers-hero'
    ]
  );
  ?>
  <?php get_template_part(ALL_CAREERS_TABS_PATH, 'tabs'); ?>
</main>
<?php get_footer(); ?>
