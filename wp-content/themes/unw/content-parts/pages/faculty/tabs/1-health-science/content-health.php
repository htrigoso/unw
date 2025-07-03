<?php
$testimonials = [
  [
    'name' => 'Marlene Rosario Fernández R.',
    'title' => 'EGRESADO ENFERMERÍA',
    'description' => '“La Universidad Norbert Wiener me apoyó con una beca para mí formación académica. Aquí adquirí conocimientos teóricos y prácticos que me ayudarán a desenvolverme en mi campo de la enfermería”',
    'footer' => 'Hospital II de vitarte EsSalud - Clínica San Felipe',
    'image' => UPLOAD_PATH . '/faculty/testimonials/testimonial-1.jpg'
  ],
  [
    'name' => 'Erick Pazos Castillo',
    'title' => 'EGRESADO MEDICINA HUMANA',
    'description' => '“Además de contar con una plana docente de primera y con trayectoria en el sector salud, la Universidad cuenta con un Centro de Simulación que me preparó para brindar calidad y seguridad en la atención de los pacientes".',
    'footer' => 'Hospital Marino Molina Scippa',
    'image' => UPLOAD_PATH . '/faculty/testimonials/testimonial-2.jpg'
  ],
  [
    'name' => 'Sandra Sánchez Ríos',
    'title' => 'EGRESADO DERECHO',
    'description' => '“La universidad me brindó diversos seminarios y charlas con expertos abogados nacionales e internacionales".',
    'footer' => 'Consultor Independiente',
    'image' => UPLOAD_PATH . '/faculty/testimonials/testimonial-3.jpg'
  ],
  [
    'name' => 'Maria Torres Sulca',
    'title' => 'EGRESADO FARMACIA',
    'description' => '“La Universidad cuenta con laboratorios y equipos de última tecnología que ayudaron a mi formación en las distintas áreas de conocimiento de la profesión químico farmacéutica. La constante innovación y mejora continua convierte a la Universidad en la mejor opción de estudios universitarios".',
    'footer' => 'IBT HEALTH',
    'image' => UPLOAD_PATH . '/faculty/testimonials/testimonial-4.jpg'
  ]
];
?>

<div class="health">
  <div class="health__header">
    <h1 class="health__header--title">Las carreras de Ciencias de la Salud son <span>reconocidas por su formación innovadora</span></h1>
  </div>
  <?php get_template_part(FACULTY_CONTENT_TAB_PATH . '1-health-science/content-quote', null, [
    "quote" => "Lorem ipsum dolor sit amet consectetur adipiscing elit bibendum placerat fusce, habitant justo libero lectus class praesent interdum egestas augue, fames mauris integer neque inceptos porttitor faucibus pulvinar suscipit.",
    "author" => "Dr. Manuel Jesus Mayorga",
    "position" => "Decano (e) de la Facultad Farmacia y Bioquímica",
    "img_url" => UPLOAD_PATH . '/faculty/quote/quote-author.jpg',
  ]); ?>
  <?php get_template_part(FACULTY_CONTENT_TAB_PATH . '1-health-science/content-laboratories'); ?>
  <?php get_template_part(FACULTY_CONTENT_TAB_PATH . '1-health-science/content-graduate-testimonials'); ?>
  <div class="health__testimonials">
    <?php
    get_template_part(COMMON_CONTENT_PATH, 'testimonials', [
      'title' => 'Egresados destacados',
      'testimonials' => $testimonials
    ]);
    ?>
  </div>
  <?php get_template_part(FACULTY_CONTENT_TAB_PATH . '1-health-science/content-recognitions'); ?>
</div>
