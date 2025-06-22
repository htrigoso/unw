<?php
$dot_colors = ['purple', 'gray', 'blue', 'orange', 'dark-blue'];

$cards = [
  [
    'icon' => get_template_directory_uri() . '/upload/careers/malla/1.svg',
    'courses' => [
      [
        'name' => 'Desarrollo Humano y Social',
        'icon' => get_template_directory_uri() . '/upload/careers/icon.png'
      ],
      [
        'name' => 'Inglés I (virtual)',
        'icon' => get_template_directory_uri() . '/upload/careers/icon.png'
      ],
      [
        'name' => 'Fundamentos Químicos I',
        'icon' => get_template_directory_uri() . '/upload/careers/icon.png'
      ],
      [
        'name' => 'Estructura y Función del Cuerpo Humano',
        'icon' => ''
      ],
      [
        'name' => 'Prácticas en Farmacia y Bioquímica I',
        'icon' => ''
      ]
    ]
  ],
  [
    'icon' => get_template_directory_uri() . '/upload/careers/malla/2.svg',
    'courses' => [
      [
        'name' => 'Estilo de Vida, Salud y Medio Ambiente',
        'icon' => ''
      ],
      [
        'name' => 'Inglés II (virtual)',
        'icon' => get_template_directory_uri() . '/upload/careers/icon.png'
      ],
      [
        'name' => 'Procesos Biológicos',
        'icon' => ''
      ],
      [
        'name' => 'SO I - Circulación, Respiración, Eliminación y Equilibrio Ácido - básico',
        'icon' => get_template_directory_uri() . '/upload/careers/icon.png'
      ],
      [
        'name' => 'Fundamentos Químicos II',
        'icon' => ''
      ],
      [
        'name' => 'Prácticas en Farmacia y Bioquímica I',
        'icon' => ''
      ]
    ]
  ],
  [
    'icon' => get_template_directory_uri() . '/upload/careers/malla/3.svg',
    'courses' => [
      [
        'name' => 'Desarrollo Humano y Social',
        'icon' => get_template_directory_uri() . '/upload/careers/icon.png'
      ],
      [
        'name' => 'Inglés I (virtual)',
        'icon' => get_template_directory_uri() . '/upload/careers/icon.png'
      ],
      [
        'name' => 'Fundamentos Químicos I',
        'icon' => get_template_directory_uri() . '/upload/careers/icon.png'
      ],
      [
        'name' => 'Estructura y Función del Cuerpo Humano',
        'icon' => ''
      ],
      [
        'name' => 'Prácticas en Farmacia y Bioquímica I',
        'icon' => ''
      ]
    ]
  ],
  [
    'icon' => get_template_directory_uri() . '/upload/careers/malla/4.svg',
    'courses' => [
      [
        'name' => 'Desarrollo Humano y Social',
        'icon' => get_template_directory_uri() . '/upload/careers/icon.png'
      ],
      [
        'name' => 'Inglés I (virtual)',
        'icon' => get_template_directory_uri() . '/upload/careers/icon.png'
      ],
      [
        'name' => 'Fundamentos Químicos I',
        'icon' => get_template_directory_uri() . '/upload/careers/icon.png'
      ],
      [
        'name' => 'Estructura y Función del Cuerpo Humano',
        'icon' => ''
      ],
      [
        'name' => 'Prácticas en Farmacia y Bioquímica I',
        'icon' => ''
      ]
    ]
  ]
];
?>

<section class="program-curriculum" aria-labelledby="program-curriculum-title">
  <div class="program-curriculum__wrapper">
    <div class="program-curriculum__header">
      <h1 id="program-curriculum-title" class="program-curriculum__title">Malla Curricular</h1>
      <div class="program-curriculum__description">
        <p>
          La carrera profesional de Farmacia y Bioquímica en la Universidad Norbert Wiener tiene una malla curricular
          enriquecida con cursos y casos prácticos de
          <a href="https://www.asu.edu" rel="noopener noreferrer" target="_blank">Arizona State University</a>.
        </p>
        <p>
          Estudiarás con moderna infraestructura, simuladores y la mejor tecnología para formarte como un químico
          farmacéutico integral de clase mundial. Además aprenderás sobre: química, fármaco-botánica, farmacología y
          más.
        </p>
      </div>
    </div>

    <div class="program-curriculum__content" aria-label="Listado de cursos por ciclo">
      <div class="post-swiper">
        <div class="swiper-container">
          <ul class="swiper-wrapper program-curriculum__cycles-list">
            <?php foreach ($cards as $card): ?>
              <div class="swiper-slide">
                <li class="program-curriculum__cycles-item">
                  <article class="cycle-card">
                    <div class="cycle-card__wrapper">
                      <header class="cycle-card__header">
                        <?php if (!empty($card['icon'])): ?>
                          <img class="cycle-card__header-icon" width="80" height="80" src="<?php echo esc_url($card['icon']); ?>" alt="" />
                        <?php endif; ?>
                      </header>
                      <div class="cycle-card__content">
                        <ul class="cycle-card__list">
                          <?php foreach ($card['courses'] as $i => $course):
                            $dot_color = $dot_colors[$i % count($dot_colors)];
                          ?>
                            <li class="cycle-card__item">
                              <span class="dot dot--<?php echo $dot_color; ?>" aria-hidden="true"></span>
                              <div class="cycle-card__course">
                                <?php if (!empty($course['icon'])): ?>
                                  <img class="cycle-card__course-icon" src="<?php echo esc_url($course['icon']); ?>" alt="" />
                                <?php endif; ?>
                                <p class="cycle-card__course-name"><?php echo esc_html($course['name']); ?></p>
                              </div>
                            </li>
                          <?php endforeach; ?>
                        </ul>
                      </div>
                    </div>
                  </article>
                </li>
              </div>
            <?php endforeach; ?>
          </ul>
          <div class="swiper-pagination"></div>
          <div class="swiper-scrollbar"></div>
        </div>
      </div>
    </div>
    <div class="program-curriculum__footer">
      <a class="btn btn-primary" href="#">
        Descargar Brochure
        <svg width="24" height="24" aria-hidden="true">
          <use xlink:href="#arrow-down"></use>
        </svg>
      </a>
    </div>
  </div>
</section>
