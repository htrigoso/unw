<?php
$countries = [
  ['name' => 'Spain',       'file' => get_template_directory_uri() . '/upload/home/international-agreements/1.svg'],
  ['name' => 'Mexico',      'file' => get_template_directory_uri() . '/upload/home/international-agreements/2.svg'],
  ['name' => 'Colombia',    'file' => get_template_directory_uri() . '/upload/home/international-agreements/3.svg'],
  ['name' => 'Chile',       'file' => get_template_directory_uri() . '/upload/home/international-agreements/4.svg'],
  ['name' => 'Italy',       'file' => get_template_directory_uri() . '/upload/home/international-agreements/5.svg'],
  ['name' => 'Brazil',      'file' => get_template_directory_uri() . '/upload/home/international-agreements/6.svg'],
  ['name' => 'Costa Rica',  'file' => get_template_directory_uri() . '/upload/home/international-agreements/7.svg'],
  ['name' => 'Ecuador',     'file' => get_template_directory_uri() . '/upload/home/international-agreements/8.svg'],
  ['name' => 'Spain',       'file' => get_template_directory_uri() . '/upload/home/international-agreements/1.svg'],
  ['name' => 'Mexico',      'file' => get_template_directory_uri() . '/upload/home/international-agreements/2.svg'],
  ['name' => 'Colombia',    'file' => get_template_directory_uri() . '/upload/home/international-agreements/3.svg'],
  ['name' => 'Chile',       'file' => get_template_directory_uri() . '/upload/home/international-agreements/4.svg'],
  ['name' => 'Italy',       'file' => get_template_directory_uri() . '/upload/home/international-agreements/5.svg'],
  ['name' => 'Brazil',      'file' => get_template_directory_uri() . '/upload/home/international-agreements/6.svg'],
  ['name' => 'Costa Rica',  'file' => get_template_directory_uri() . '/upload/home/international-agreements/7.svg'],
  ['name' => 'Ecuador',     'file' => get_template_directory_uri() . '/upload/home/international-agreements/8.svg'],
];
?>

<section class="internationalization" aria-labelledby="internationalization-title">
  <div class="internationalization__wrapper">

    <!-- Header -->
    <header class="internationalization__header">
      <h2 id="internationalization-title" class="internationalization__title">Internacionalización</h2>
    </header>

    <!-- Content -->
    <div class="internationalization__content">

      <!-- Universidad destacada -->
      <div class="internationalization__highlight">
        <div class="internationalization__highlight-text">
          <h3 class="internationalization__highlight-subtitle">
            Somos la única Universidad Peruana potenciada por
          </h3>
          <img class="internationalization__highlight-logo" height="72"
            src="<?php echo get_template_directory_uri(); ?>/upload/careers/asu.png" alt="">
        </div>
        <div class="internationalization__highlight-description">
          <p><strong>Somos parte de las 19 Universidades en todo el mundo</strong> potenciadas por ASU a través de la
            red Cintana Alliance.</p>
          <p>Forma parte de una comunidad global y comparte experiencias con estudiantes de América, Europa, Asia y
            África.</p>
        </div>
      </div>

      <!-- Separador -->
      <hr class="internationalization__divider" />

      <!-- Convenios internacionales -->
      <div class="internationalization__agreements">
        <div class="internationalization__agreements-header">
          <h3 class="internationalization__agreements-title">+95 Convenios internacionales</h3>
          <p class="internationalization__agreements-description">
            Contamos con Convenios Universitarios para promover intercambios y posibilidades de un desarrollo académico
            internacional.
          </p>
        </div>

        <!-- Lista de países -->
        <div class="international-agreements">
          <div class="swiper-container internationalization-swiper">
            <ul class="swiper-wrapper">
              <?php foreach ($countries as $country): ?>
                <li class="swiper-slide internationalization__country-item">
                  <?php
                  get_template_part(COMMON_CONTENT_PATH, 'country-card', array(
                    'country' => $country
                  ));
                  ?>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
