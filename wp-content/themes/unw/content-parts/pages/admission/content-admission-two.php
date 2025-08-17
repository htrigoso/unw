<?php
$modalities = [
  [
    'label' => 'GRADUADO O TITULADO DE UNIVERSIDAD',
    'description' => 'Aplicable a quienes acrediten haberse graduado o titulado en una universidad.',
    'requirements' => [
      'Ficha de inscripción debidamente llenada.',
      'Constancia del Registro Nacional de Grados y Títulos extraído del portal web de SUNEDU o Copia legalizada de grado académico y/o título profesional, sea nacional o extranjero (si es extranjero, deberá ser traducido al español y contar con las exigencias consulares que correspondan).',
      'Certificado de estudios de la Universidad de procedencia (original o copia legalizada) solo para efectos de convalidación.',
      'Sílabos - solo para efectos de convalidación.',
      'Copia simple del DNI, pasaporte o carné de extranjería.'
    ],
  ],
  [
    'label' => 'EGRESADO O TITULADO DE INSTITUTO DE EDUCACIÓN SUPERIOR',
    'description' => 'Los postulantes por esta modalidad tienen que acreditar haber egresado o ser titulados de una carrera técnica no menor a 3 años de duración.',
    'requirements' => [
      'Ficha de inscripción debidamente llenada.',
      'Constancia del Registro de títulos de instituciones tecnológicas y pedagógicas extraída del portal web del MINEDU o Copia legalizada del título o constancia original de egresado.',
      'Certificado de estudios de la Universidad de procedencia (original o copia legalizada) solo para efectos de convalidación.',
      'Sílabos - solo para efectos de convalidación.',
      'Copia simple del DNI, pasaporte o carné de extranjería.'
    ],
  ],
  [
    'label' => 'OFICIALES O TÉCNICOS DE LAS FUERZAS ARMADAS O LA POLICÍA NACIONAL DEL PERÚ',
    'description' => 'Los postulantes de esta modalidad deben haber culminado estudios superiores con un mínimo de tres (3) años de duración en las Escuelas de las Fuerzas Armadas.',
    'requirements' => [
      'Ficha de inscripción debidamente llenada.',
      'Acreditar haber culminado estudios superiores con un mínimo de tres (3) años de duración en las escuelas de las Fuerzas Armadas o la Policía Nacional del Perú.',
      'Certificado de estudios de la Escuela de las Fuerzas Armadas o la Policía Nacional del Perú de procedencia (original o copia legalizada) solo para efectos de convalidación.',
      'Sílabos - solo para efectos de convalidación.',
      'Copia simple del DNI, pasaporte o carné de extranjería.'
    ],
  ],
  [
    'label' => 'EGRESADO O TITULADO CARRIÓN / WIENER',
    'description' => 'Dirigido a Egresados de una carrera profesional técnica Carrión/Inst. Wiener.',
    'requirements' => [
      'Ficha de inscripción debidamente llenada.',
      'Constancia del Registro de títulos de instituciones tecnológicas y pedagógicas extraída del portal web del MINEDU o Copia legalizada del título o constancia original de egresado.',
      'Certificado de estudios de la Universidad de procedencia (original o copia legalizada) solo para efectos de convalidación.',
      'Copia simple del DNI, pasaporte o carné de extranjería.'
    ],
  ],
  [
    'label' => 'GRADUADO O TITULADO UW',
    'description' => 'Dirigido a Graduados de la universidad Wiener.',
    'requirements' => [
      'Ficha de inscripción debidamente llenada.',
      'Constancia del Registro Nacional de Grados y Títulos extraído del portal web de SUNEDU o Copia legalizada de grado académico y/o título profesional.',
      'Certificado de estudios de la Universidad de procedencia (original o copia legalizada) solo para efectos de convalidación.',
      'Copia simple del DNI, pasaporte o carné de extranjería.'
    ],
  ],
];

$faq = [
  [
    'question' => '¿Cuántos y cuáles son los cursos que se me van a convalidar?',
    'answer' => 'Depende de la Escuela a la que postules, cuántos cursos llevaste en tu institución de procedencia, créditos, etc. Una vez que el Programa Académico realice la convalidación, el área de Admisión se encargará de entregarte una resolución con la cantidad de cursos convalidados.'
  ],
  [
    'question' => '¿Cuánto tiempo voy a estudiar?',
    'answer' => 'Depende de los cursos que el Programa Académico convalide. Recuerda que los programas se miden por asignaturas y no por ciclos llevados.'
  ],
  [
    'question' => '¿En qué tiempo se me informará sobre los cursos a convalidar?',
    'answer' => 'El tiempo de respuesta es de hasta 7 días hábiles desde que se derive el expediente al Programa Académico al que decidas postular.'
  ],
  [
    'question' => 'Si mi universidad tiene convenio con ustedes, ¿qué beneficios económicos tengo? Así mismo, ¿debo presentar todos los papeles solicitados?',
    'answer' => 'Tu ejecutivo de ventas te brindará la información sobre convenios y beneficios económicos. Para iniciar el proceso de convalidación es importante presentar todos los documentos solicitados.'
  ],
  [
    'question' => '¿Las copias simples de los sílabos deben ser fedateadas?',
    'answer' => 'Sí, deben estar selladas y visadas por la institución de procedencia o un notario público.'
  ],
  [
    'question' => 'Si no cuento con mi Certificado de Estudios completo de las asignaturas que llevé en mi institución de procedencia, ¿qué debo hacer?',
    'answer' => 'Debes solicitar el certificado, ya que sin él no se puede proceder con la convalidación.'
  ],
  [
    'question' => '¿Los documentos de convalidación deben ser presentados de forma virtual o física?',
    'answer' => 'Por el momento se seguirán recibiendo de forma virtual.'
  ],
  [
    'question' => '¿Es necesaria la presentación de la constancia de primera matrícula y cuota, así como la constancia de disciplina para el proceso de convalidación?',
    'answer' => 'Sí, en el caso de querer obtener el grado y provenir de una universidad con licencia denegada.'
  ],
  [
    'question' => 'Si provengo de una institución donde realicé una convalidación y ahora quiero convalidar en la Wiener, ¿qué documentos debo presentar si en mi certificado aparece “convalidado” en algunos cursos?',
    'answer' => 'Debes presentar la resolución de convalidación de la institución donde convalidaste la primera vez.'
  ],
  [
    'question' => '¿Qué disponibilidad de vacantes tiene la universidad para personas con discapacidad?',
    'answer' => 'La Universidad Norbert Wiener reserva el 5% de las vacantes en cualquier modalidad de ingreso para personas con discapacidad, brindándoles acompañamiento y facilidades necesarias para su adecuada formación.'
  ],
];
?>

<?php get_template_part(ADMISSION_CONTENT_PATH, 'admission-hero', [
  'img_desktop' => UPLOAD_PATH . '/admission/hero-two-desktop.jpg',
  'img_mobile' => UPLOAD_PATH . '/admission/hero-two-mobile.jpg'
]); ?>

<section class="admission">
  <div class="x-container x-container--pad-213 admission__wrapper">
    <h1 class="admission__title">¿Has finalizado una carrera universitaria o técnica?</h1>
    <div class="dynamic-accordion admission__modalities">
      <?php foreach ($modalities as $i => $item) {
        get_template_part(ADMISSION_CONTENT_PATH, 'modality-accordion', [
          'label' => $i + 1 . '. ' . $item['label'],
          'description' => $item['description'],
          'requirements' => $item['requirements'],
        ]);
      } ?>
    </div>
  </div>
</section>
<section class="admission__faq">
  <div class="x-container x-container--pad-213 admission__faq__wrapper">
    <h2 class="admission__faq__title">
      <i>
        <svg width="32" height="32">
          <use xlink:href="#question-mark"></use>
        </svg>
      </i>
      <span>Preguntas frecuentes</span>
    </h2>
    <div class="dynamic-accordion">
      <?php foreach ($faq as $item) {
        get_template_part(COMMON_CONTENT_PATH, 'accordion', [
          'label' => $item['question'],
          'content' => $item['answer'],
        ]);
      } ?>
    </div>
  </div>
</section>
<section class="admission__cta">
  <div class="x-container x-container--pad-213 admission__cta__wrapper">
    <?php
    get_template_part(COMMON_CONTENT_PATH, 'cta-card', [
      'title' => '¿Tienes dudas?',
      'description' => 'Un asesor está listo para ayudarte',
      'label' => 'Conversemos',
      'href' => 'https://wa.me/51999999999',
      'target' => '_blank',
    ]);
    ?>
  </div>
</section>
