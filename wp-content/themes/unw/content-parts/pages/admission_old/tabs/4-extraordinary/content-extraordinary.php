<?php
$extraordinary_items = [
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

$faq_items = [
  [
    "title" => '¿Cuántos y cuáles son los cursos que se me van a validar?',
    'content' => '
            <p>Los postulantes por esta modalidad son quienes hayan concluido estudios en Centro de Educación Superior No Universitario.</p>
            <h3>Requisitos:</h3>
            <ul>
              <li>Certificado original de estudios del instituto.</li>
              <li>Titulo o Diploma o Constancia de egresado del instituto (original o copia legalizada).</li>
              <li>2 fotos tamaño carné en fondo blanco.</li>
              <li>2 copias simples de DNI.</li>
            </ul>
            '
  ],
  [
    "title" => '¿Cuánto tiempo voy a estudiar?',
    'content' => ''
  ],
  [
    "title" => '¿En qué tiempo se me informará sobre los cursos a convalidar?',
    'content' => ''
  ],
  [
    "title" => 'Si mi universidad tiene convenios con ustedes, ¿Qué beneficios económicos tengo?',
    'content' => ''
  ],
  [
    "title" => '¿Qué sucede si no cuento con todos los documentos solicitados al momento de postular?',
    'content' => ''
  ],
  [
    "title" => '¿Cuáles son los requisitos para convalidar?',
    'content' => ''
  ],
  [
    "title" => '¿Las copias simples de los sílabos deben ser fedateadas?',
    'content' => ''
  ],
  [
    "title" => 'Si no cuento con mi certificado de estudios completo de las asignaturas que llevé a mi institución de procedencia, ¿qué debo hacer?',
    'content' => ''
  ],
  [
    "title" => '¿Los documentos de convalidación deben ser presentados de forma virtual o física?',
    'content' => ''
  ],
  [
    "title" => '¿Es necesario la presentación de la constancia de primera matrícula y cuota, así como la constancia de disciplina para el proceso de convalidación?',
    'content' => ''
  ],
  [
    "title" => 'Si vengo de una institución donde realicé una convalidación y ahora quiero convalidar con la Wiener, ¿Qué documentos debo presentar?',
    'content' => ''
  ],
  [
    "title" => '¿Qué disponibilidad de vacantes tiene la universidad para personas con discapacidad?',
    'content' => ''
  ],
]
?>

<?php
ob_start();
?>
<div class="extraordinary__content">
  <div class="extraordinary__benefits">
    <h1 class="extraordinary__benefits--title">Extraordinaria</h1>
    <div class="dynamic-accordion extraordinary__benefits--accordion">
      <?php
      foreach ($extraordinary_items as $item) {
        get_template_part(COMMON_CONTENT_PATH, 'accordion', [
          'title' => $item['title'],
          'content' => $item['content'],
          'variant' => 'filled',
        ]);
      }
      ?>
    </div>
  </div>
  <div class="extraordinary__faq">
    <h2 class="extraordinary__faq--title">Preguntas frecuentes</h2>
    <div class="dynamic-accordion extraordinary__faq--accordion">
      <?php
      foreach ($faq_items as $item) {
        get_template_part(COMMON_CONTENT_PATH, 'accordion', [
          'title' => $item['title'],
          'content' => $item['content'],
          'variant' => 'standard',
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
