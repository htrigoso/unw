<?php
$slides = [
  [
    'image' => UPLOAD_PATH . '/home/last-news/last-news-1.jpg',
    'title' => 'Titular de la noticia',
    'content' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.",
    'href' => '#'
  ],
  [
    'image' => UPLOAD_PATH . '/home/last-news/last-news-2.jpg',
    'title' => 'Titular de la noticia',
    'content' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.",
    'href' => '#'
  ],
  [
    'image' => UPLOAD_PATH . '/home/last-news/last-news-3.jpg',
    'title' => 'Titular de la noticia',
    'content' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.",
    'href' => '#'
  ],
  [
    'image' => UPLOAD_PATH . '/home/last-news/last-news-1.jpg',
    'title' => 'Titular de la noticia',
    'content' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.",
    'href' => '#'
  ]
]
?>

<section class="last-news">
  <h2 class="last-news__title">Últimas noticias</h2>

  <div class="last-news-swiper post-swiper-desktop">
    <div class="swiper-container">
      <ul class="swiper-wrapper last-news__list">
        <?php foreach ($slides as $slide): ?>
          <li class="swiper-slide last-news__item">
            <?php get_template_part(COMMON_CONTENT_PATH, 'last-news-card', $slide); ?>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>
