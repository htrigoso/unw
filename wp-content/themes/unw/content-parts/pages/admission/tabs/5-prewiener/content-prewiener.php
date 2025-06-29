<?php
ob_start();
?>
<h1 class="prewiener__title">Pre Wiener</h1>
<div class="prewiener__content">
  <p class="prewiener__description">Te guiamos en tu vida universitaria desde antes de ingresar.  Sumérgete en nuestra educación de clase mundial te formamos con conocimientos humanísticos y científicos, permitiendo la nivelación curricular, para el logro de aprendizajes, implementando metodologías activas centradas en el estudiante, conforme al modelo educativo de la universidad.</p>
  <?php
  get_template_part(COMMON_CONTENT_PATH, 'body-w-list', [
    'title' => 'Modalidades',
    'blocks' => [
      [
        'list' => [
          'Ciclo Escolar (Si estás en 5to de secundaria)',
          'Pre General (Si ya terminaste el colegio)'
        ],
      ]
    ],
  ]);
  ?>
  <?php
  get_template_part(COMMON_CONTENT_PATH, 'body-w-list', [
    'title' => 'Inicio',
    'blocks' => [
      [
        'list' => [
          'Ciclo corto: 05/02/2024',
          'Ciclo intensivo: 19/02/2024',
        ]
      ]
    ],
  ]);
  ?>

  <div class="prewiener__benefits">
    <?php
    get_template_part(COMMON_CONTENT_PATH, 'body-w-list', [
      'title' => 'Beneficios exclusivos',
      'blocks' => [
        [
          'body' => 'Beneficios para los inscritos a la Pre:',
          'list' => [
            'Descuento del 30% en tu inscripción.',
            'Bono de descuento de S/. 50.',
          ]
        ],
        [
          'body' => 'Además, cuando ingreses a la Universidad Norbert Wiener:',
          'list' => [
            'Descuento del 50% en su matrícula, solo primer ciclo.',
            'Descuento del 10% en sus pensiones del primer ciclo (*).',
          ],
          'hint' => '(*) El alumno deberá mantener un promedio ponderado de 14 o más para no perder el descuento. No aplica para la carrera de Medicina Humana.'
        ]
      ],
    ]);
    ?>
  </div>
  <?php
  get_template_part(COMMON_CONTENT_PATH, 'body-w-list', [
    'title' => 'Además, en Pre Weiner tendrás:',
    'blocks' => [
      [
        'list' => [
          'Ingreso directo (**).',
          'Nivelación curricular.',
          'Fomentamos tu desarrollo integral con habilidades claves como: Comunicación efectiva, autoaprendizaje, trabajo en equipo, resolución de problemas y pensamiento crítico.',
          'Talleres de desarrollo de habilidades digitales, habilidades blandas, actividades co-curriculares.',
          'Monitoreo y acompañamiento continuo.',
          'Asesorías gratuitas de los docentes.',
          'Actividades sincrónicas y asincrónicas.',
          'Actividades individuales y grupales.',
          'Docentes de primer nivel con amplia experiencia.',
          'Acceso a las plataformas virtuales de la universidad las 24 horas.',
          'Plataforma LMS-Canvas Free (PC-Celular).',
          'Plataforma G-Suite (Herramientas digitales).',
        ],
        'hint' => '(**) Obteniendo como nota 14 o más en el promedio final durante el ciclo Pre Wiener. Cumpliendo con el mínimo del 70% de asistencia. No aplica para la carrera de Medicina Humana.'
      ]
    ],
  ]);
  ?>
  <?php
  get_template_part(COMMON_CONTENT_PATH, 'body-w-list', [
    'title' => 'Turnos',
    'blocks' => [
      [
        'body' => 'Mañana, tarde y noche (***).',
        'hint' => '(***) Los turnos, horarios e inicios, se aperturán de acuerdo a la disponibilidad de cupos, consultar con su asesor educativo.'
      ]
    ],
  ]);
  ?>
  <?php
  get_template_part(COMMON_CONTENT_PATH, 'body-w-list', [
    'title' => 'Requisitos',
    'blocks' => [
      [
        'list' => [
          'Certificado de estudios (copia legalizada).',
          '2 copias simples de DNI.',
          '2 fotos tamaño carné con fondo blanco.',
        ],
      ]
    ],
  ]);
  ?>
</div>
<?php
$left_content = ob_get_clean();
?>

<?php
get_template_part(ADMISSION_TABS_PATH, 'layout', [
  'left_content' => $left_content,
  'extra_class' => 'prewiener-wrapper'
])
?>
