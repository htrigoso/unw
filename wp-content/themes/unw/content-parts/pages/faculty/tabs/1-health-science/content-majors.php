<?php
$majors = [
  [
    "image" => UPLOAD_PATH . '/home/programs/program-1.jpg',
    "image_alt" => "Medicina Humana",
    "title" => "Medicina Humana",
    "description" => "",
    "link" => "#",
    "link_title" => "Ver carrera",
    "link_target" => "_blank"
  ],
  [
    "image" => UPLOAD_PATH . '/home/programs/program-2.jpg',
    "image_alt" => "Farmacia y Bioquímica",
    "title" => "Farmacia y Bioquímica",
    "description" => "",
    "link" => "#",
    "link_title" => "Ver carrera",
    "link_target" => "_blank"
  ],
  [
    "image" => UPLOAD_PATH . '/home/programs/program-3.jpg',
    "image_alt" => "Tecnología Médica en Terapia Física y Rehabilitación",
    "title" => "Tecnología Médica en Terapia Física y Rehabilitación",
    "description" => "",
    "link" => "#",
    "link_title" => "Ver carrera",
    "link_target" => "_blank"
  ]
]
?>

<section class="majors">
  <h2 class="majors__title">Nuestras Carreras</h2>
  <ul class="majors__list">
    <?php foreach ($majors as $major): ?>
      <li class="majors__item">
        <?php
        get_template_part(COMMON_CONTENT_PATH, 'program-card', array(
          'image' => $major['image'],
          'image_alt' => $major['image_alt'],
          'title' => $major['title'],
          'description' => $major['description'],
          'link' => $major['link'],
          'link_title' => $major['link_title'],
          'link_target' => $major['link_target']
        ));
        ?>
      </li>
    <?php endforeach; ?>
  </ul>
  <div class="majors__cta">
    <a href="#" class="btn btn-sm btn-secondary-one majors__cta-btn">
      Ver todas las carreras
      <i>
        <svg class="icon icon--arrow" width="32" height="32">
          <use xlink:href="#arrow-right"></use>
        </svg>
      </i>
    </a>
  </div>
</section>
