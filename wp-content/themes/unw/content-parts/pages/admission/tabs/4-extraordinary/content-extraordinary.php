<?php
$accordion_items = [
  [
    'title' => 'Egresado de instituto sin convalidación',
    'content' => '
            <p>Los postulantes por esta modalidad son quienes hayan concluido estudios en Centro de Educación Superior No Universitario.</p>
            <h3>Requisitos:</h3>
            <ul>
              <li>Certificado original de estudios del instituto.</li>
              <li>Titulo o Diploma o Constancia de egresado del instituto (original o copia legalizada).</li>
              <li>2 fotos tamaño carné en fondo blanco.</li>
              <li>2 copias simples de DNI.</li>
            </ul>
          ',
  ],
  [
    'title' => 'Oficiales o Técnicos de las fuerzas Armadas o la Policía Nacional del Perú',
    'content' => '',
  ],
  [
    'title' => 'Traslado externo',
    'content' => '',
  ],
  [
    'title' => 'Egresado de instituto con convalidación (No aplica para medicina humana)',
    'content' => '',
  ],
  [
    'title' => 'Primer y segundo puesto',
    'content' => '',
  ],
  [
    'title' => 'Deportistas destacados',
    'content' => '',
  ],
  [
    'title' => 'Pre Wiener',
    'content' => '',
  ],
];
?>

<?php
ob_start();
?>
<div class="extraordinary__content">
  <div class="extraordinary__benefits">
    <h1 class="extraordinary__benefits--title">Extraordinaria</h1>
    <div class="dynamic-accordion">
      <?php
      foreach ($accordion_items as $item) {
        get_template_part(COMMON_CONTENT_PATH, 'accordion-one', [
          'title' => $item['title'],
          'content' => $item['content'],
        ]);
      }
      ?>
    </div>
  </div>
</div>
<?php
$left_content = ob_get_clean();
?>

<?php
get_template_part(ADMISSION_TABS_PATH, 'layout', [
  'left_content' => $left_content,
])
?>
