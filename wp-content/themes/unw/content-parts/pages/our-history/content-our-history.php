<?php
$milestones = [
  [
    'year' => '1996',
    'image' => '',
    'description' => "El Consejo Nacional para la Autorización de Funcionamiento de Universidades (Conafu) emite la Resolución 177-96, que <strong>autoriza el funcionamiento de la Universidad Privada Norbert Wiener.</strong>"
  ],
  [
    'year' => '2000',
    'image' => UPLOAD_PATH . '/our-history/milestones/iso.png',
    'description' => "<strong>Logramos la Certificación ISO 9001,</strong> que evidencia nuestro compromiso con la calidad. Somos la primera universidad en el Perú y en Latinoamérica que certificó su Sistema de Gestión de Calidad."
  ],
  [
    'year' => '2006',
    'image' => '',
    'description' => "Inauguramos un moderno Centro Odontológico Docente para el soporte del Programa Académico de Odontología, uno de los más grandes complejos educativos de la especialidad en el país."
  ],
  [
    'year' => '2011',
    'image' => '',
    'description' => "Iniciamos la movilidad estudiantil con un curso internacional organizado por la Facultad de Derecho y Ciencia Política de la UNW y la Facultad de Derecho de Santa María de Brasil."
  ],
  [
    'year' => '2015',
    'image' => '',
    'description' => "Logramos la acreditación de los programas académicos de Enfermería, Odontología, Obstetricia, Farmacia y Bioquímica, Laboratorio Clínico y Anatomía Patológica, Terapia Física y Rehabilitación."
  ],
  [
    'year' => '2016',
    'image' => '',
    'description' => "Lanzamos el Programa Académico de Medicina Humana, que en su primera convocatoria selecciona a 170 estudiantes.\nSe acredita el Programa Académico de Derecho y Ciencia Política."
  ],
  [
    'year' => '2018',
    'image' => UPLOAD_PATH . '/our-history/milestones/iso-2015.png',
    'description' => "Certificamos nuestra calidad en la Norma ISO 9001:2015, la última versión de la registradora Lloyd’s Register, luego de superar un exigente proceso de auditoría."
  ],
  [
    'year' => '2019',
    'image' => '',
    'description' => "La Sunedu nos otorga el Licenciamiento Institucional, que reconoce nuestra política de mejora continua y el cumplimiento de las Condiciones Básicas de Calidad."
  ],
  [
    'year' => '2021',
    'image' => '',
    'description' => "Ingresamos al top de las mejores 15 universidades del Perú, según el ranking de la revista América Economía.\nNos ubicamos entre las 25 universidades peruanas con mayor producción científica y crecimiento de calidad."
  ],
  [
    'year' => '2022',
    'image' => '',
    'description' => "Ingresamos en el Top 15 de las mejores Universidades del Perú del ranking Merco, reconocido monitor de reputación empresarial.\n\nLa certificación del Sistema de Gestión de la Calidad bajo la Norma ISO 9001 alcanza a la Escuela de Posgrado, con resultados de excelencia."
  ],
  [
    'year' => '2023',
    'image' => UPLOAD_PATH . '/our-history/milestones/building.jpg',
    'description' => "Norbert Wiener y Arizona State University, número 1 en innovación en Estados Unidos y una de las mejores universidades del mundo, establecen una alianza de calidad e innovación para una educación de clase mundial en el Perú.\n\nNorbert Wiener alcanza 4 estrellas en el Rating QS Stars, prestigioso sistema de evaluación universitario internacional. De manera específica, obtiene 5 estrellas en Docencia, Oportunidades de empleo, Enseñanza en línea y Responsabilidad Social.\n\nPor la labor del Centro Odontológico, Wiener es reconocida como una de las Empresas que Transforman 2023, premio que promueve las iniciativas de valor compartido e impulsan el desarrollo del país."
  ],
  [
    'year' => '2024',
    'image' => '',
    'description' => "Inauguramos la nueva sede de la Universidad Norbert Wiener en el distrito de Lince.\n\nLa Escuela de Enfermería obtuvo por cinco años la Acreditación Internacional CASN, otorgada por la Asociación Canadiense de Escuelas de Enfermería, que certifica nuestra formación de calidad y excelencia internacional.\n\nNos ubicamos en el Top 10 del Ranking SCImago, por un destacado registro de citas de publicaciones en investigación."
  ],
  [
    'year' => '2025',
    'image' => '',
    'description' => "Lanzamos 3 nuevos programas académicos: Arquitectura, Ingeniería Civil y Comunicación en Medios Digitales.\n\nDos estudiantes de Enfermería alcanzan el doble grado internacional en la Universidad Camilo José Cela (España) y obtienen un contrato de trabajo en la red clínica española HM Hospitales.\n\nEl grupo de estudiantes Wiener que participa en el ASU Summer Experience, en Arizona, gana la Global Competition con su proyecto Qnatur, un jabón natural antiacné a base de residuos de quinua."
  ]
];
?>

<section class="our-history">
  <div class="x-container x-container--pad-213 our-history__wrapper">
    <h2 class="our-history__title">Hitos institucionales</h2>
    <ul class="milestone-list">
      <?php foreach ($milestones as $milestone): ?>
        <li class="milestone-item">
          <span class="milestone-year"><?php echo $milestone['year']; ?></span>
          <div class="milestone-content--wrapper">
            <div class="milestone-content">
              <?php if (!empty($milestone['image'])): ?>
                <img src="<?php echo $milestone['image']; ?>" alt="<?php echo $milestone['year']; ?>" class="milestone-image">
              <?php endif; ?>
              <p class="milestone-description"><?php echo $milestone['description']; ?></p>
            </div>
          </div>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
