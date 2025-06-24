<?php
$last_news = [
  [
    'image' => 'last-news-1.jpg',
    'date' => '02/06/2025',
    'description' => 'Universidad Norbert Wiener brindó <strong>atención de salud gratuita</strong> a pobladores del Rímac en el marco del proyecto “Salud y Bienestar en mi barrio”.',
  ],
  [
    'image' => 'last-news-2.jpg',
    'date' => '31/05/2025',
    'description' => 'Universidad Norbert Wiener coorganizó <strong>congreso</strong> sobre legado histórico constitucional de <strong>José Faustino Sánchez Carrión</strong>.',
  ],
  [
    'image' => 'last-news-3.jpg',
    'date' => '28/05/2025',
    'description' => 'Universidad Norbert Wiener organizó <strong>encuentro de docentes de Enfermería y Medicina Humana</strong> en reconocimiento al importante trabajo que realizan.',
  ],
  [
    'image' => 'last-news-1.jpg',
    'date' => '02/06/2025',
    'description' => 'Universidad Norbert Wiener brindó <strong>atención de salud gratuita</strong> a pobladores del Rímac en el marco del proyecto “Salud y Bienestar en mi barrio”.',
  ],
  [
    'image' => 'last-news-2.jpg',
    'date' => '31/05/2025',
    'description' => 'Universidad Norbert Wiener coorganizó <strong>congreso</strong> sobre legado histórico constitucional de <strong>José Faustino Sánchez Carrión</strong>.',
  ],
  [
    'image' => 'last-news-3.jpg',
    'date' => '28/05/2025',
    'description' => 'Universidad Norbert Wiener organizó <strong>encuentro de docentes de Enfermería y Medicina Humana</strong> en reconocimiento al importante trabajo que realizan.',
  ]
];
?>

<section class="last-news">
  <div class="x-container x-container--pad-213">
    <div class="last-news__wrapper">
      <h2 class="last-news__title">Últimas Noticias</h2>
      <div class="post-swiper last-news-swiper last-news__swiper">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <?php foreach ($last_news as $news): ?>
              <?php
              $date_obj = DateTime::createFromFormat('d/m/Y', $news['date']);
              $formatted_date = date_i18n('j \d\e F, Y', $date_obj->getTimestamp());
              ?>
              <div class="swiper-slide">
                <article class="last-news__card">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/upload/home/last-news/<?php echo esc_attr($news['image']); ?>"
                    alt=""
                    class="last-news__card--img" />
                  <div class="last-news__card--content">
                    <h3 class="last-news__card--content__date"><?php echo esc_html($formatted_date); ?></h3>
                    <p class="last-news__card--content__description">
                      <?php echo wp_kses_post($news['description']); ?>
                    </p>
                  </div>
                </article>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="last-news__swiper-navigation">
          <div class="swiper-navigation">
            <div class="post-swiper-button-prev"></div>
            <div class="post-swiper-button-next"></div>
          </div>

          <div class="last-news__see-more-btn">
            <?php
            get_template_part(COMMON_CONTENT_PATH, 'see-more-btn', array(
              'text'  => 'Ver todas las noticias',
              'href'  => '#',
            ));
            ?>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
