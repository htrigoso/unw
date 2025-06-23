<?php
$testimonials = [
  [
    'image' => 'testimonial-1.jpg',
    'title' => 'EGRESADO ENFERMERÍA',
    'description' => '"La Universidad Norbert Wiener me apoyó con una beca para mí formación académica. Aquí adquirí conocimientos teóricos y prácticos que me ayudarán a desenvolverme en mi campo de la enfermería".',
    'name' => 'Marlene Rosario Fernández R.',
    'footer' => 'Hospital II de vitarte EsSalud - Clínica San Felipe',
  ],
  [
    'image' => 'testimonial-2.jpg',
    'title' => 'EGRESADO MEDICINA HUMANA',
    'description' => '"Además de contar con una plana docente de primera y con trayectoria en el sector salud, la Universidad cuenta con un Centro de Simulación que me preparó para brindar calidad y seguridad en la atención de los pacientes".',
    'name' => 'Erick Pazos Castillo',
    'footer' => 'Hospital Marino Molina Scippa',
  ],
  [
    'image' => 'testimonial-3.jpg',
    'title' => 'EGRESADO DERECHO',
    'description' => '“La universidad me brindó diversos seminarios y charlas con expertos abogados nacionales e internacionales".',
    'name' => 'Samuel Sánchez Ríos',
    'footer' => 'Consultor Independiente',
  ],
  [
    'image' => 'testimonial-4.jpg',
    'title' => 'EGRESADO FARMACIA',
    'description' => '“La Universidad cuenta con laboratorios y equipos de última tecnología que ayudaron a mi formación en las distintas áreas de conocimiento de la profesión químico farmacéutica. La constante innovación y mejora continua convierte a la Universidad en la mejor opción de estudios universitarios".',
    'name' => 'Edwin Torres Sulca',
    'footer' => 'IBT HEALTH',
  ],
  [
    'image' => 'testimonial-5.jpg',
    'title' => 'EGRESADO ODONTOLOGÍA',
    'description' => '“Me ayudaron con grandes docentes, que más allá de ser buenos profesionales, se convirtieron en grandes amigos de vida, y con los que pude contar, a pesar de ya no estar en las aulas. Además gracias al convenio pude hacer mis prácticas profesionales en el Hospital Sabogal del Callao”',
    'name' => 'Alejandra Liza García',
    'footer' => 'Multident Callao',
  ],
  [
    'image' => 'testimonial-6.jpg',
    'title' => 'EGRESADO PSICOLOGÍA',
    'description' => '“La Universidad Norbert Wiener me brindo dos principales herramientas, la primera es el conocimiento, a través de la malla curricular, la calidad docente y la enseñanza. Y la segunda, es la experiencia práctica, ya que hemos ido a diversos centros y eso nos ha ayudado a poder desenvolvernos”',
    'name' => 'Estefany Chahuayo Chircca',
    'footer' => 'Puesto de Salud Los Incas',
  ],
];
?>

<section class="testimonial">
  <div class="x-container x-container--pad-213">
    <div class="testimonial__wrapper">
      <h2 class="testimonial__title">Experiencias U. Wiener</h2>
      <div class="post-swiper">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <?php foreach ($testimonials as $testimonial): ?>
              <div class="swiper-slide">
                <?php
                get_template_part(COMMON_CONTENT_PATH, 'testimonial-card', array(
                  'testimonial' => $testimonial
                ));
                ?>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
  </div>
</section>
