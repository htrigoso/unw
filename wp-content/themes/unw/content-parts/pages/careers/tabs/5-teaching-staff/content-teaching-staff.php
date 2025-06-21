<?php
$staff_list = [
  [
    'name' => 'Dr. Manuel Jesus Mayorga',
    'role' => 'Decano (e) de la Facultad',
    'photo' => get_template_directory_uri().'/upload/careers/staff/staff.jpg',
    'details' => [
      'Médico Cirujano por la Facultad de Medicina (San Fernando) de la UNMSM. Especialista en Medicina Intensiva.',
      'Magíster en Gestión Pública & Privada de la Salud y egresado de la Maestría Internacional en Enfermedades Infecciosas del Instituto de Medicina Tropical “Alexander von Humboldt” de UPCH.',
      'Ex jefe de la Unidad de Cuidados Intensivos, Departamento de Cuidados Críticos y del Departamento de Educación del Hospital Central de la Fuerza Aérea del Perú (FAP).',
      'Past-presidente de la Sociedad Peruana de Medicina Intensiva (SOPEMI), habiendo sido reconocido como “Maestro de la Medicina Intensiva Peruana”.'
    ]
  ],
  [
    'name' => 'Mag. Gina Aliaga',
    'role' => 'Directora (e) de la Carrera',
     'photo' => get_template_directory_uri().'/upload/careers/staff/staff.jpg',
    'details' => [
      'Químico–Farmacéutica por la Universidad Nacional Mayor de San Marcos.',
      'Licenciada en Farmacia por la Universidad Complutense de Madrid.',
      'Máster en Dirección y Administración de empresas por la Universidad Europea Miguel de Cervantes.',
      'Máster en Dirección Comercial y Marketing de Industrias Farmacéuticas.',
      'Más de 17 años de experiencia profesional internacional en el área comercial y marketing farmacéutico, desempeñándose también en control de calidad, investigación y desarrollo de negocios en instituciones farmacéuticas líderes.'
    ]
  ],
  [
    'name' => 'Liliana Soto',
    'role' => 'Coordinadora Administrativa',
     'photo' => get_template_directory_uri().'/upload/careers/staff/staff.jpg',
    'details' => [
      'Licenciada en Administración de la Universidad Norbert Wiener. Egresada de la Maestría en Gestión Pública de la Universidad Norbert Wiener.',
      'Miembro del Comité de Calidad de la Facultad de Farmacia y Bioquímica – UNW.',
      'Cuenta con más de 8 años de experiencia en gestión administrativa educativa en organización educativa de prestigio.'
    ]
  ],
  [
    'name' => 'Robert Cárdenas',
    'role' => 'Docente',
     'photo' => get_template_directory_uri().'/upload/careers/staff/staff.jpg',
    'details' => [
      'Docente a Tiempo Completo de la Facultad de Farmacia y Bioquímica.',
      'Docente investigador Químico Farmacéutico con estudios concluidos de Magíster en Recursos naturales terapéuticos.',
      'Estudios concluidos de Doctorado en Salud Pública.',
      'Maestría en Gestión de medio Ambiente y Desarrollo Social.',
      'Integrante del Comité Interno de Acreditación (Licenciamiento) – Universidad Norbert Wiener.',
      'Actualmente es Secretario de la Facultad de Farmacia y Bioquímica desde el 2014 hasta la actualidad.',
      'Coordinador de la Segunda Especialidad de Asuntos Regulatorios en el Sector Farmacéutico.'
    ]
  ]
];
?>
<section class="teaching-staff" aria-labelledby="teaching-staff-title">
  <div class="teaching-staff__wrapper">

    <!-- Header -->
    <header class="teaching-staff__header">
      <h2 id="teaching-staff-title" class="teaching-staff__title">Plana Docente</h2>
      <p class="teaching-staff__description">
        Durante tu formación en la carrera profesional de Farmacia y Bioquímica, estarás acompañado de una plana docente
        especializada que te guiará en tu formación como un profesional Químico Farmacéutico especializado en la
        investigación científica.
      </p>
    </header>

    <!-- Content -->
    <div class="teaching-staff__content">
      <ul class="teaching-staff__list">
        <?php foreach ($staff_list as $staff): ?>
        <li class="teaching-staff__card">
          <article class="teacher-card">
            <div class="teacher-card__header">
              <img class="teacher-card__photo" width="128" height="128" src="<?php echo $staff['photo']; ?>"
                alt="Foto de <?php echo esc_attr($staff['name']); ?>" />
            </div>
            <div class="teacher-card__content">
              <h3 class="teacher-card__name"><?php echo $staff['name']; ?></h3>
              <p class="teacher-card__role"><?php echo $staff['role']; ?></p>
              <ul class="teacher-card__details">
                <?php foreach ($staff['details'] as $detail): ?>
                <li class="teacher-card__details__item"><?php echo $detail; ?></li>
                <?php endforeach; ?>
              </ul>
            </div>
          </article>
        </li>
        <?php endforeach; ?>

      </ul>
    </div>

  </div>
</section>
