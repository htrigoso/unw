<?php
$countries = [
  ['name' => 'Spain',       'file' => '1.svg'],
  ['name' => 'Mexico',      'file' => '2.svg'],
  ['name' => 'Colombia',    'file' => '3.svg'],
  ['name' => 'Chile',       'file' => '4.svg'],
  ['name' => 'Italy',       'file' => '5.svg'],
  ['name' => 'Brazil',      'file' => '6.svg'],
  ['name' => 'Costa Rica',  'file' => '7.svg'],
  ['name' => 'Ecuador',     'file' => '8.svg'],
  ['name' => 'Spain',       'file' => '1.svg'],
  ['name' => 'Mexico',      'file' => '2.svg'],
  ['name' => 'Colombia',    'file' => '3.svg'],
  ['name' => 'Chile',       'file' => '4.svg'],
  ['name' => 'Italy',       'file' => '5.svg'],
  ['name' => 'Brazil',      'file' => '6.svg'],
  ['name' => 'Costa Rica',  'file' => '7.svg'],
  ['name' => 'Ecuador',     'file' => '8.svg'],
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
          <img class="internationalization__highlight-logo" width="247" height="72"
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
        <h3 class="internationalization__agreements-title">+95 Convenios internacionales</h3>
        <p class="internationalization__agreements-description">
          Contamos con Convenios Universitarios para promover intercambios y posibilidades de un desarrollo académico
          internacional.
        </p>

        <!-- Lista de países -->
        <ul class="internationalization__countries">
          <?php foreach ($countries as $country): ?>
          <li class="internationalization__country-item">
            <article class="internationalization__country-card">
              <img width="80" height="80"
                src="<?php echo get_template_directory_uri(); ?>/upload/home/international-agreements/<?php echo $country['file']; ?>"
                alt="Bandera de <?php echo esc_attr($country['name']); ?>" class="internationalization__country-flag" />
              <p class="internationalization__country-name"><?php echo esc_html($country['name']); ?></p>
            </article>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</section>
