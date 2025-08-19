<?php
$modalities = [
  [
    'label' => 'ORDINARIA',
    'description' => 'El ingreso por la modalidad ordinaria se realiza a través de un examen de admisión.',
    'requirements' => [
      'Ficha de inscripción debidamente llenada.',
      'Certificado de estudios visado por el colegio o Constancia de Logros de aprendizaje.',
      'Copia simple del DNI, pasaporte o carné de extranjería.'
    ],
  ],
  [
    'label' => 'PRIMER Y SEGUNDO PUESTO',
    'description' => 'Aplicable a aquellos postulantes que se han ubicado en los (2) primeros puestos del orden de mérito. *No deben haber egresado hace más de 3 (tres) años*.',
    'requirements' => [
      'Ficha de inscripción debidamente llenada.',
      'Constancia de haber ocupado el primer puesto o segundo puesto de orden de mérito.',
      'Certificado de estudios visado por el colegio o Constancia de Logros de aprendizaje.',
      'Copia simple del DNI, pasaporte o carné de extranjería.'
    ],
  ],
  [
    'label' => 'DEPORTISTA DESTACADO',
    'description' => 'Postulantes que pertenezcan a una selección nacional que represente al país, acreditada por el Instituto Peruano del Deporte en las categorías y disciplinas establecidas en la normativa especial.',
    'requirements' => [
      'Ficha de inscripción debidamente llenada.',
      'Constancia vigente expedida por el Instituto Peruano del Deporte (original) que acredite pertenecer a una selección nacional.',
      'Certificado de estudios visado por el colegio o Constancia de Logros de aprendizajes.',
      'Copia simple del DNI, pasaporte o carné de extranjería.'
    ],
  ],
  [
    'label' => 'TERCIO SUPERIOR',
    'description' => 'Orientado a quienes provengan de instituciones educativas de nivel secundario que pertenezcan al tercio superior de su promoción en los 3 (tres) últimos años de estudios.',
    'requirements' => [
      'Ficha de inscripción debidamente llenada.',
      'Certificado de estudios visado por el colegio o Constancia de Logros de aprendizajes.',
      'Constancia de Tercio Superior que acredite que pertenece al tercio superior en 3ro, 4to, o 5to grado de secundaria.',
      'Copia simple del DNI, pasaporte o carné de extranjería.'
    ],
  ],
  [
    'label' => 'RENDIMIENTO SUPERIOR',
    'description' => 'Pensado en alumnos que provengan de instituciones educativas de nivel secundario y que hayan obtenido 14 como nota mínima en el promedio general de los 3 (tres) últimos años de estudios.',
    'requirements' => [
      'Ficha de inscripción debidamente llenada.',
      'Certificado de estudios visado por el colegio o Constancia de Logros de aprendizajes.',
      'Certificado de notas o constancia que acredite que cumple con obtener como nota mínima de 14 promedio en los 3 últimos años de estudios del nivel secundario.',
      'Copia simple del DNI, pasaporte o carné de extranjería.'
    ],
  ],
  [
    'label' => 'PROGRESIÓN UNIVERSITARIA',
    'description' => 'Para los alumnos que se encuentren cursando quinto de secundaria.',
    'requirements' => [
      'Ficha de inscripción debidamente llenada.',
      'Certificado de estudios visado por el colegio o Constancia de Logros de aprendizajes.',
      'Copia simple del DNI, pasaporte o carné de extranjería.',
      'Una (1) fotografías actualizadas tamaño carné en fondo blanco.'
    ],
  ],
];

$faq = [
  [
    'question' => '¿Pregunta 1?',
    'answer' => 'Respuesta'
  ],
  [
    'question' => '¿Pregunta 2?',
    'answer' => 'Respuesta'
  ],
  [
    'question' => '¿Pregunta 3?',
    'answer' => 'Respuesta'
  ],
  [
    'question' => '¿Pregunta 4?',
    'answer' => 'Respuesta'
  ]
]
?>

<?php get_template_part(ADMISSION_CONTENT_PATH, 'admission-hero', [
  'img_desktop' => UPLOAD_PATH . '/admission/hero-one-desktop.jpg',
  'img_mobile' => UPLOAD_PATH . '/admission/hero-one-mobile.jpg'
]); ?>

<section class="admission">
  <div class="x-container x-container--pad-213 admission__wrapper">
    <h1 class="admission__title">¿Vas a terminar o concluiste tus estudios escolares?</h1>
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