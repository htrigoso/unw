<?php
$career_field = [
  'title' => 'Campo Laboral',
  'description' => 'Esta carrera profesional cuenta con una formación de clase mundial con acceso a cursos enriquecidos con contenidos de Arizona State University que te ayudarán a desenvolverte con éxito como Químico Farmacéutico.

Si eliges estudiar la carrera profesional de Farmacia y Bioquímica, estarás capacitado para trabajar en:',
  'areas' => [
    [
      'title' => 'Instituciones de Salud',
      'description' => 'Clínicas, hospitales y centros de salud públicos y privados, y de las Fuerzas Armadas.',
    ],
    [
      'title' => 'Servicios Farmacéuticos',
      'description' => 'Farmacia hospitalaria, establecimientos farmacéuticos y laboratorios de bromatología, toxicología y química legal.',
    ],
    [
      'title' => 'Industria Farmacéutica',
      'description' => 'Centros de información de medicamentos, laboratorios de análisis clínicos e industria farmacéutica.',
    ],
    [
      'title' => 'Gestión en Servicios de Salud',
      'description' => 'Gestión y gerencia en empresas de servicios de salud pública y privada.',
    ],
    [
      'title' => 'Docencia e Investigación',
      'description' => 'Docencia universitaria; elaboración y desarrollo de proyectos de investigación científica.',
    ],
    [
      'title' => 'Regulación y Auditoría',
      'description' => 'Asuntos regulatorios de medicamentos y auditoría farmacéutica.',
    ],
    [
      'title' => 'Consultorías',
      'description' => 'Consultoría y asesoría en sistemas de gestión de calidad.',
    ],
    [
      'title' => 'Emprendimientos',
      'description' => 'Emprendimientos profesionales.',
    ],
  ],
];
?>

<section class="career-field">
  <h2 class="career-field__title"><?php echo esc_html($career_field['title']); ?></h2>
  <p class="career-field__description">
    <?php echo nl2br(esc_html($career_field['description'])); ?>
  </p>

  <ul class="career-field__list">
    <?php foreach ($career_field['areas'] as $index => $area): ?>
      <li class="career-field__item">
        <div class="career-field__item-number">
          <?php echo $index + 1; ?>.
        </div>
        <h3 class="career-field__item-title"><?php echo esc_html($area['title']); ?></h3>
        <p class="career-field__item-description"><?php echo esc_html($area['description']); ?></p>
      </li>
    <?php endforeach; ?>
  </ul>
</section>
