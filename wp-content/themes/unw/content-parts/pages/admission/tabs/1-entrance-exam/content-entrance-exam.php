<?php
ob_start();
?>
<h1 class="entrance-exam__title">Examen de Admisión</h1>
<div class="entrance-exam__content">
  <?php
  get_template_part(COMMON_CONTENT_PATH, 'body-w-list', [
    'title' => 'Dirigido a:',
    'blocks' => [
      [
        'list' => [
          'Postulantes que se encuentren cursando 5to secundaria o con secundaria finalizada.',
        ],
      ]
    ]

  ]);
  get_template_part(COMMON_CONTENT_PATH, 'body-w-list', [
    'title' => 'Requisitos:',
    'blocks' => [
      [
        'list' => [
          '2 copias simples del DNI',
          'Certificado de estudios secundarios visado por la UGEL (Original y/o copia legalizada)',
          '2 fotos tamaño carné en fondo blanco.'
        ],
      ]
    ],

  ]);
  get_template_part(COMMON_CONTENT_PATH, 'body-w-list', [
    'title' => 'Resultados admisión del 2024-II',
    'blocks' => [
      [
        'body' => 'El examen de admisión se lleva a cabo en las fechas y horas programadas, publicadas o comunicadas a los postulantes oportunamente.',
      ]
    ],
  ]);
  ?>
  <button class="btn btn-primary entrance-exam__btn">
    Resultados admisión 2024-II
  </button>
</div>
<?php
$left_content = ob_get_clean();
?>

<?php
get_template_part(ADMISSION_TABS_PATH, 'layout', [
  'left_content' => $left_content
])
?>
