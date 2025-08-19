<?php
$results = [
  [
    "title" => "Examen de Admisión",
    "content" => "admision/examen-de-admision/",
    "href" => "/",
  ],
  [
    "title" => "Admisión Extraordinaria",
    "content" => "admision/exoneracion/",
    "href" => "/",
  ],
  [
    "title" => "Beca 18",
    "content" => "admision/beca18/",
    "href" => "/",
  ],
  [
    "title" => "Graduado / Titulado Universidad",
    "content" => "admision/graduado-titulado-universidad/",
    "href" => "/"
  ],
  [
    "title" => "Primer y Segundo Puesto",
    "content" => "admision/primer-y-segundo-puesto/",
    "href" => "/"
  ],
  [
    "title" => "Examen de Admisión",
    "content" => "admision/examen-de-admision/",
    "href" => "/"
  ],
  [
    "title" => "Admisión Extraordinaria",
    "content" => "admision/exoneracion/",
    "href" => "/",
  ],
  [
    "title" => "Beca 18",
    "content" => "admision/beca18/",
    "href" => "/",
  ]
]
?>

<section class="search-results">
  <div class="search-results__wrapper x-container x-container--pad-213">
    <a href="/" class="btn btn-link search-results__back">
      <i>
        <svg class="icon" width="32" height="32">
          <use xlink:href="#arrow-left"></use>
        </svg>
      </i>
      Volver al Inicio
    </a>
    <div class="search-results__content">
      <?php foreach ($results as $result): ?>
        <a href="<?php echo $result['href']; ?>">
          <div class="search-results__item">
            <h3 class="search-results__item--title"><?php echo $result['title']; ?></h3>
            <p class="search-results__item--content"><?php echo $result['content']; ?></p>
            <button class="btn btn-link search-results__item-button">
              <i>
                <svg class="icon" width="32" height="32">
                  <use xlink:href="#arrow-right"></use>
                </svg>
              </i>
            </button>
          </div>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>