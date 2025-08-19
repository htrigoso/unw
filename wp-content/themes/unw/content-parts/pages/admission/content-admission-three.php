<?php
$modalities = [
  [
    'label' => 'TRASLADO EXTERNO',
    'description' => 'Los postulantes deben haber aprobado por lo menos cuatro periodos lectivos semestrales o dos anuales o sumar setenta y dos (72) créditos en una misma institución de educación superior, y someterse a un proceso de convalidación de asignaturas.',
    'requirements' => [
      'Ficha de inscripción debidamente llenada.',
      'Certificado de haber aprobado por lo menos cuatro periodos lectivos semestrales o dos anuales o sumar setenta y dos (72) créditos en la Universidad de procedencia (original o copia legalizada).',
      'Copia simple del DNI, pasaporte o carné de extranjería.'
    ],
  ],
  [
    'label' => 'EXAMEN ESPECIAL',
    'description' => 'Esta modalidad de admisión está dirigida a aquellos interesados en continuar sus estudios universitarios y que procedan de universidades que no obtuvieron el licenciamiento institucional',
    'requirements' => [
      'Ficha de inscripción debidamente llenada.',
      'Certificados de estudios de las asignaturas aprobadas o Constancia de primera matrícula debidamente firmados y sellados por la institución de origen.',
      'Copia simple del DNI, pasaporte o carné de extranjería.'
    ],
  ],
];

$faq = [
  [
    'question' => '¿Cuántos y cuáles son los cursos que se me van a convalidar?',
    'answer' => 'Depende de la Escuela a la que postulas, cuántos cursos llevaste en la institución de procedencia, créditos, etc. Una vez que tu Programa Académico realice la convalidación, el área de Admisión se encargará de enviarte una resolución con la cantidad de cursos convalidados.'
  ],
  [
    'question' => '¿Cuánto tiempo voy a estudiar?',
    'answer' => 'Depende de los cursos que el Programa Académico convalide. Recuerda que las convalidaciones son por asignaturas y no por ciclos llevados.'
  ],
  [
    'question' => '¿En qué tiempo se me informará sobre los cursos a convalidar?',
    'answer' => 'El tiempo de respuesta es de hasta 7 días hábiles desde que se deriva el expediente al Programa Académico al que decidas postular.'
  ],
  [
    'question' => 'Si mi universidad tiene convenio con ustedes, ¿qué beneficios económicos tengo? Así mismo, ¿debo presentar todos los papeles solicitados?',
    'answer' => 'Tu ejecutivo de ventas te brindará la información sobre convenios y beneficios económicos. Para iniciar el proceso de convalidación es importante presentar todos los documentos solicitados.'
  ],
  [
    'question' => '¿Las copias simples de los sílabos deben ser fedateadas?',
    'answer' => 'Sí — deben estar selladas y visadas por la institución de procedencia o un notario público.'
  ],
  [
    'question' => 'Si no cuento con mi Certificado de Estudios completo de las asignaturas que llevé en mi institución de procedencia, ¿qué debo hacer?',
    'answer' => 'Debes solicitar el certificado, ya que sin él no se puede proceder con la convalidación. '
  ],
  [
    'question' => '¿Los documentos de convalidación deben ser presentados de forma virtual o física?',
    'answer' => 'Por el momento se seguirán recibiendo de forma virtual. '
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
    'answer' => 'La Universidad Norbert Wiener reserva el 5% de las vacantes en cualquier modalidad de ingreso para personas con discapacidad; además brindan acompañamiento y facilidades necesarias previa evaluación.'
  ]
];
?>

<?php get_template_part(ADMISSION_CONTENT_PATH, 'admission-hero', [
  'img_desktop' => UPLOAD_PATH . '/admission/hero-three-desktop.jpg',
  'img_mobile' => UPLOAD_PATH . '/admission/hero-three-mobile.jpg'
]); ?>

<section class="admission">
  <div class="x-container x-container--pad-213 admission__wrapper">
    <h1 class="admission__title">¿Quieres hacer un traslado a otra universidad?</h1>
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
