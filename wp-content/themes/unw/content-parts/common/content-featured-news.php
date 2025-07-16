<?php
$slides = [
  [
    'image' => UPLOAD_PATH . '/home/last-news/last-news-1.jpg',
    'title' => 'Titular de la noticia',
    'content' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.",
    'href' => '/detalle-de-noticia'
  ],
  [
    'image' => UPLOAD_PATH . '/home/last-news/last-news-2.jpg',
    'title' => 'Titular de la noticia',
    'content' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.",
    'href' => '/detalle-de-noticia'
  ],
  [
    'image' => UPLOAD_PATH . '/home/last-news/last-news-3.jpg',
    'title' => 'Titular de la noticia',
    'content' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.",
    'href' => '/detalle-de-noticia'
  ],
  [
    'image' => UPLOAD_PATH . '/home/last-news/last-news-1.jpg',
    'title' => 'Titular de la noticia',
    'content' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.",
    'href' => '/detalle-de-noticia'
  ]
]
?>

<section class="featured-news">
  <h2 class="featured-news__title">Noticias destacadas</h2>

  <div class="featured-news-swiper post-swiper" data-width="compact">
    <div class="swiper-container">
      <ul class="swiper-wrapper featured-news__list">
        <?php foreach ($slides as $slide): ?>
          <li class="swiper-slide featured-news__item">
            <?php get_template_part(COMMON_CONTENT_PATH, 'last-news-card', $slide); ?>
          </li>
        <?php endforeach; ?>
      </ul>
      <div class="featured-news__swiper-navigation">
        <div class="swiper-navigation">
          <div class="swiper-primary-button-prev"></div>
          <div class="swiper-primary-button-next"></div>
          <div class="swiper-counter">
            <div class="swiper-pagination"></div>
          </div>
        </div>

        <div class="featured-news__see-more-btn">
          <?php
          get_template_part(COMMON_CONTENT_PATH, 'see-more-btn', array(
            'text' => 'Ver todas las noticias',
            'href' => '/noticias',
          ));
          ?>
        </div>
      </div>
    </div>
  </div>
</section>

