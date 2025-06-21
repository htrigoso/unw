<?php
$infra_list = [
  [
    'name' => 'Laboratorio de Microbiología:',
    'photo' => get_template_directory_uri().'/upload/careers/infra/infra.jpg',
    'description' => 'Interpretación de Análisis Clínicos. ​',
  ],
  [
    'name' => 'Laboratorio de Microbiología:',
    'photo' => get_template_directory_uri().'/upload/careers/infra/infra.jpg',
    'description' => 'Interpretación de Análisis Clínicos.​',
  ],
  [
    'name' => 'Laboratorio de Microbiología:',
    'photo' => get_template_directory_uri().'/upload/careers/infra/infra.jpg',
    'description' => 'Interpretación de Análisis Clínicos.​',
  ],
  [
    'name' => 'Laboratorio de Microbiología:',
    'photo' => get_template_directory_uri().'/upload/careers/infra/infra.jpg',
    'description' => 'Interpretación de Análisis Clínicos.​',
  ],
];
?>
<section class="infrastructure" aria-labelledby="infrastructure-title">
  <div class="infrastructure__wrapper">

    <!-- Header -->
    <header class="infrastructure__header">
      <h2 id="infrastructure-title" class="infrastructure__title">Infraestructura Especializada</h2>
      <p class="infrastructure__description">
        Al estudiar la carrera profesional de Farmacia y Bioquímica, podrás acceder a moderna infraestructura que
        potenciará tu aprendizaje:
      </p>
    </header>

    <!-- Content -->
    <div class="infrastructure__content">
      <ul class="infrastructure__list">
        <?php foreach ($infra_list as $infra): ?>
        <li class="infrastructure__item">
          <article class="infrastructure-card">
            <div class="infrastructure-card__image">
              <img width="128" height="128" src="<?php echo $infra['photo']; ?>"
                alt="Foto de <?php echo esc_attr($infra['name']); ?>" />
            </div>
            <div class="infrastructure-card__body">
              <h3 class="infrastructure-card__name"><?php echo $infra['name']; ?></h3>
              <p class="infrastructure-card__description"><?php echo $infra['description']; ?></p>
            </div>
          </article>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>

  </div>
</section>
