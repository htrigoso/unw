<?php
ob_start();
?>
<h1 class="graduate__title">Graduado/Titulado Universidad</h1>
<div class="graduate__content">
  <?php
  get_template_part(COMMON_CONTENT_PATH, 'body-w-list', [
    'title' => 'Dirigido a:',
    'list' => [
      'Postulantes que hayan concluido estudios universitarios.',
    ],
  ]);
  get_template_part(COMMON_CONTENT_PATH, 'body-w-list', [
    'title' => 'Requisitos:',
    'list' => [
      'Certificado original de estudios universitarios.',
      'Syllabus firmado y sellado en cada hoja.',
      'Grado Académico de Bachiller o Título (copia legalizada).',
      '2 fotos tamaño carné en fondo blanco.',
      '2 copias simples de DNI.',
    ]
  ]);
  ?>
  <button class="btn btn-primary btn-sm graduate__btn">
    Ver modificaciones de exoneración
  </button>
</div>
<?php
$left_content = ob_get_clean();
?>

<?php
get_template_part(ADMISSION_TABS_PATH, 'layout', [
  'left_content' => $left_content,
])
?>
