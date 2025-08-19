<?php
$tabs = [
  [
    'label' => 'Todas las carreras',
    'target' => 'todas-las-carreras'
  ],
  [
    'label' => 'Ciencias de la salud',
    'target' => 'ciencias-de-la-salud'
  ],
  [
    'label' => 'Arquitectura',
    'target' => 'arquitectura'
  ],
  [
    'label' => 'Ingeniería',
    'target' => 'ingenieria'
  ],
  [
    'label' => 'Derecho y Ciencia Política',
    'target' => 'derecho-y-ciencia-politica'
  ],
  [
    'label' => 'Negocios',
    'target' => 'negocios'
  ],
  [
    'label' => 'Comunicaciones',
    'target' => 'comunicaciones'
  ]
];
?>

<div class="all-careers-tabs">
  <div class="x-container all-careers-tabs__container">
    <?php
    get_template_part(COMMON_CONTENT_PATH, 'nav-tabs', [
      'nav_tabs' => $tabs
    ]);
    ?>
  </div>

  <div class="x-container x-container--pad-213">
    <div class="all-careers-tabs__content">
      <?php foreach ($tabs as $i => $tab): ?>
        <div id="<?php echo esc_attr($tab['target']); ?>" class="tab__content<?php echo $i === 0 ? ' is-active' : ''; ?>"
          role="tabpanel" aria-labelledby="tab-<?php echo esc_attr($tab['target']); ?>">
          <?php
          switch ($tab['target']) {
            case 'todas-las-carreras':
              get_template_part(ALL_CAREERS_TABS_PATH, 'body', [
                'cards' => [
                  [
                    'image' => UPLOAD_PATH . '/all-careers/health/card-1.jpg',
                    'image_alt' => '',
                    'title' => 'Medicina Humana',
                    'link' => '/',
                    'link_title' => 'Ver carrera',
                    'link_target' => '_blank',
                  ],
                  [
                    'image' => UPLOAD_PATH . '/all-careers/health/card-2.jpg',
                    'image_alt' => '',
                    'title' => 'Farmacia y Bioquímica',
                    'link' => '/',
                    'link_title' => 'Ver carrera',
                    'link_target' => '_blank',
                  ],
                  [
                    'image' => UPLOAD_PATH . '/all-careers/health/card-3.jpg',
                    'image_alt' => '',
                    'title' => 'Tecnología Médica en Terapia Física y Rehabilitación',
                    'link' => '/',
                    'link_title' => 'Ver carrera',
                    'link_target' => '_blank',
                  ],
                  [
                    'image' => UPLOAD_PATH . '/all-careers/health/card-4.jpg',
                    'image_alt' => '',
                    'title' => 'Tecnología Médica en Laboratorio Clínico y Anatomía Patológica',
                    'link' => '/',
                    'link_title' => 'Ver carrera',
                    'link_target' => '_blank',
                  ],
                  [
                    'image' => UPLOAD_PATH . '/all-careers/health/card-5.jpg',
                    'image_alt' => '',
                    'title' => 'Psicología',
                    'link' => '/',
                    'link_title' => 'Ver carrera',
                    'link_target' => '_blank',
                  ],
                  [
                    'image' => UPLOAD_PATH . '/all-careers/health/card-6.jpg',
                    'image_alt' => '',
                    'title' => 'Odontología',
                    'link' => '/',
                    'link_title' => 'Ver carrera',
                    'link_target' => '_blank',
                  ],
                  [
                    'image' => UPLOAD_PATH . '/all-careers/health/card-7.jpg',
                    'image_alt' => '',
                    'title' => 'Obstetricia',
                    'link' => '/',
                    'link_title' => 'Ver carrera',
                    'link_target' => '_blank',
                  ],
                  [
                    'image' => UPLOAD_PATH . '/all-careers/health/card-8.jpg',
                    'image_alt' => '',
                    'title' => 'Nutrición y Diétetica',
                    'link' => '/',
                    'link_title' => 'Ver carrera',
                    'link_target' => '_blank',
                  ],
                  [
                    'image' => UPLOAD_PATH . '/all-careers/health/card-9.jpg',
                    'image_alt' => '',
                    'title' => 'Enfermería',
                    'link' => '/',
                    'link_title' => 'Ver carrera',
                    'link_target' => '_blank',
                  ]
                ]
              ]);
              break;
            case 'ciencias-de-la-salud':
              get_template_part(ALL_CAREERS_TABS_PATH, 'body', [
                'cards' => [
                  [
                    'image' => UPLOAD_PATH . '/all-careers/health/card-1.jpg',
                    'image_alt' => '',
                    'title' => 'Medicina Humana',
                    'link' => '/',
                    'link_title' => 'Ver carrera',
                    'link_target' => '_blank',
                  ],
                  [
                    'image' => UPLOAD_PATH . '/all-careers/health/card-2.jpg',
                    'image_alt' => '',
                    'title' => 'Farmacia y Bioquímica',
                    'link' => '/',
                    'link_title' => 'Ver carrera',
                    'link_target' => '_blank',
                  ],
                  [
                    'image' => UPLOAD_PATH . '/all-careers/health/card-3.jpg',
                    'image_alt' => '',
                    'title' => 'Tecnología Médica en Terapia Física y Rehabilitación',
                    'link' => '/',
                    'link_title' => 'Ver carrera',
                    'link_target' => '_blank',
                  ],
                  [
                    'image' => UPLOAD_PATH . '/all-careers/health/card-4.jpg',
                    'image_alt' => '',
                    'title' => 'Tecnología Médica en Laboratorio Clínico y Anatomía Patológica',
                    'link' => '/',
                    'link_title' => 'Ver carrera',
                    'link_target' => '_blank',
                  ],
                  [
                    'image' => UPLOAD_PATH . '/all-careers/health/card-5.jpg',
                    'image_alt' => '',
                    'title' => 'Psicología',
                    'link' => '/',
                    'link_title' => 'Ver carrera',
                    'link_target' => '_blank',
                  ],
                  [
                    'image' => UPLOAD_PATH . '/all-careers/health/card-6.jpg',
                    'image_alt' => '',
                    'title' => 'Odontología',
                    'link' => '/',
                    'link_title' => 'Ver carrera',
                    'link_target' => '_blank',
                  ],
                  [
                    'image' => UPLOAD_PATH . '/all-careers/health/card-7.jpg',
                    'image_alt' => '',
                    'title' => 'Obstetricia',
                    'link' => '/',
                    'link_title' => 'Ver carrera',
                    'link_target' => '_blank',
                  ],
                  [
                    'image' => UPLOAD_PATH . '/all-careers/health/card-8.jpg',
                    'image_alt' => '',
                    'title' => 'Nutrición y Diétetica',
                    'link' => '/',
                    'link_title' => 'Ver carrera',
                    'link_target' => '_blank',
                  ],
                  [
                    'image' => UPLOAD_PATH . '/all-careers/health/card-9.jpg',
                    'image_alt' => '',
                    'title' => 'Enfermería',
                    'link' => '/',
                    'link_title' => 'Ver carrera',
                    'link_target' => '_blank',
                  ]
                ]
              ]);
              break;
            case 'arquitectura':
              get_template_part(ALL_CAREERS_TABS_PATH, 'body', [
                'cards' => [
                  [
                    'image' => UPLOAD_PATH . '/all-careers/architecture/card-1.jpg',
                    'image_alt' => '',
                    'title' => 'Arquitectura',
                    'link' => '/',
                    'link_title' => 'Ver carrera',
                    'link_target' => '_blank',
                  ]
                ]
              ]);
              break;
            case 'ingenieria':
              get_template_part(ALL_CAREERS_TABS_PATH, 'body', [
                'cards' => [
                  [
                    'image' => UPLOAD_PATH . '/all-careers/engineering/card-1.jpg',
                    'image_alt' => '',
                    'title' => 'Ingeniería Civil',
                    'link' => '/',
                    'link_title' => 'Ver carrera',
                    'link_target' => '_blank',
                  ],
                  [
                    'image' => UPLOAD_PATH . '/all-careers/engineering/card-2.jpg',
                    'image_alt' => '',
                    'title' => 'Ingeniería de Sistemas e Informática',
                    'link' => '/',
                    'link_title' => 'Ver carrera',
                    'link_target' => '_blank',
                  ],
                  [
                    'image' => UPLOAD_PATH . '/all-careers/engineering/card-3.jpg',
                    'image_alt' => '',
                    'title' => 'Ingeniería Industrial y de Gestión Empresarial',
                    'link' => '/',
                    'link_title' => 'Ver carrera',
                    'link_target' => '_blank',
                  ]
                ]
              ]);
              break;
            case 'derecho-y-ciencia-politica':
              get_template_part(ALL_CAREERS_TABS_PATH, 'body', [
                'cards' => [
                  [
                    'image' => UPLOAD_PATH . '/all-careers/law/card-1.jpg',
                    'image_alt' => '',
                    'title' => 'Derecho y Ciencia Política',
                    'link' => '/',
                    'link_title' => 'Ver carrera',
                    'link_target' => '_blank',
                  ],
                ]
              ]);
              break;
            case 'negocios':
              get_template_part(ALL_CAREERS_TABS_PATH, 'body', [
                'cards' => [
                  [
                    'image' => UPLOAD_PATH . '/all-careers/business/card-1.jpg',
                    'image_alt' => '',
                    'title' => 'Administración y Marketing',
                    'link' => '/',
                    'link_title' => 'Ver carrera',
                    'link_target' => '_blank',
                  ],
                  [
                    'image' => UPLOAD_PATH . '/all-careers/business/card-2.jpg',
                    'image_alt' => '',
                    'title' => 'Contabilidad y Auditoría',
                    'link' => '/',
                    'link_title' => 'Ver carrera',
                    'link_target' => '_blank',
                  ],
                  [
                    'image' => UPLOAD_PATH . '/all-careers/business/card-3.jpg',
                    'image_alt' => '',
                    'title' => 'Administración y Negocios Internacionales',
                    'link' => '/',
                    'link_title' => 'Ver carrera',
                    'link_target' => '_blank',
                  ],
                  [
                    'image' => UPLOAD_PATH . '/all-careers/business/card-4.jpg',
                    'image_alt' => '',
                    'title' => 'Administración y Dirección de Empresas',
                    'link' => '/',
                    'link_title' => 'Ver carrera',
                    'link_target' => '_blank',
                  ],
                  [
                    'image' => UPLOAD_PATH . '/all-careers/business/card-5.jpg',
                    'image_alt' => '',
                    'title' => 'Administración en Turismo y Hotelería',
                    'link' => '/',
                    'link_title' => 'Ver carrera',
                    'link_target' => '_blank',
                  ]
                ]
              ]);
              break;
            case 'comunicaciones':
              get_template_part(ALL_CAREERS_TABS_PATH, 'body', [
                'cards' => [
                  [
                    'image' => UPLOAD_PATH . '/all-careers/com/card-1.jpg',
                    'image_alt' => '',
                    'title' => 'Comunicaciones en Medios Digitales',
                    'link' => '/',
                    'link_title' => 'Ver carrera',
                    'link_target' => '_blank',
                  ]
                ]
              ]);
              break;
          }
          ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
