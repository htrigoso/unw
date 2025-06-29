<?php
ob_start();
?>
<h1 class="beca18__title">Beca 18</h1>
<div class="beca18__content">
  <p class="beca18__description">Si tu sueño es acceder a una educación de clase mundial, la Universidad Norbert Wiener y PRONABEC están aquí para apoyarte y darte todas las herramientas necesarias que necesitas. <strong>Con Beca 18, podrás acceder a una educación de calidad,</strong> aprender de grandes profesionales y abrirte camino hacia un futuro lleno de posibilidades.</p>
  <?php
  get_template_part(COMMON_CONTENT_PATH, 'body-w-list', [
    'title' => '¿Por qué postular a Wiener con Beca 18 de PRONABEC?',
    'list' => [
      'Somos la única universidad en el Perú potenciada por Arizona State University de EE.UU.',
      'Top 9 de las mejores universidades del Perú.',
      'Calidad educativa reconocida internacionalmente por QS Star.',
      'Empleabilidad: 9 de cada 10 egresados trabajan.',
      '+75 convenios universitarios.',
      'Infraestructura de primer nivel.'
    ],
  ]);
  get_template_part(COMMON_CONTENT_PATH, 'body-w-list', [
    'title' => 'Cronograma de postulación',
    'body' => 'Si estás inscrito, asegúrate de estar pendiente de las fechas y prepararte para este examen clave. ¡Recuerda que la lista la encontrarás en la web de PRONABEC!',
  ]);
  get_template_part(COMMON_CONTENT_PATH, 'body-w-list', [
    'title' => 'Beneficios de la Beca 18',
    'body' => 'Al postularte de la Beca 18 para estudiar en nuestra universidad, tendrás acceso a una educación de excelencia sin preocuparte por los costos asociados. Como beneficiario de esta beca, podrás disfrutar de diversos beneficios, entre los que se incluyen:',
    'list' => [
      'Costo de examen o carpeta de admisión.',
      'Matrícula y pensiones.',
      'Movilidad Local.',
      'Alimentación y Alojamiento.',
      'Materiales de estudio y útiles de escritorio.',
      'Vestimenta y/o uniforme y artículos de seguridad industrial.',
      'Idioma inglés.',
      'Computadora portátil o equipo de similar naturaleza.',
      'Obtención del grado, título y/o equivalente.',
      'Transporte interprovincial.',
      'Acompañamiento integral y nivelación académica.'
    ]
  ]);
  ?>
  <div class="beca18__more-info">
    <?php
    get_template_part(COMMON_CONTENT_PATH, 'body-w-list', [
      'title' => '¿Tienes dudas?',
      'body' => 'Nuestro equipo estará encantado de acompañarte y brindarte toda la información y apoyo que necesitas para alcanzar tus metas académicas.',
      'list' => [
        'Costo de examen o carpeta de admisión.'
      ]
    ]);
    ?>
    <?php
    get_template_part(COMMON_CONTENT_PATH, 'event-card', [
      'title' => 'Charla informativa Beca 18',
      'hour' => '4:00pm',
      'location' => 'Zoom',
      'date' => '04.06',
      'url' => '/',
      'image_url' => get_template_directory_uri() . '/upload/admission/beca18/event-1.jpg',
      'image_alt' => 'UNW',
    ]);
    ?>
  </div>
  <button class="btn btn-primary beca18__btn">
    Resultados admisión 2024-II
  </button>
</div>
<?php
$left_content = ob_get_clean();
?>

<?php
get_template_part(ADMISSION_TABS_PATH, 'layout', [
  'left_content' => $left_content,
  'extra_class' => 'beca18-wrapper'
])
?>
