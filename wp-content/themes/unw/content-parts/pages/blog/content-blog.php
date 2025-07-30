<?php
$results = [
  [
    'image' => UPLOAD_PATH . '/blog/cards/card-1.jpg',
    'title' => 'Lorem Ipsum is simply dummy text of the printing',
    'date' => 'Enero 25, 2024',
    'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s...',
    'href' => '/detalle-de-entrada',
  ],
  [
    'image' => UPLOAD_PATH . '/blog/cards/card-2.jpg',
    'title' => 'Lorem Ipsum is simply dummy text of the printing',
    'date' => 'Enero 25, 2024',
    'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s...',
    'href' => '/detalle-de-entrada',
  ],
  [
    'image' => UPLOAD_PATH . '/blog/cards/card-3.jpg',
    'title' => 'Lorem Ipsum is simply dummy text of the printing',
    'date' => 'Enero 25, 2024',
    'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s...',
    'href' => '/detalle-de-entrada',
  ],
  [
    'image' => UPLOAD_PATH . '/blog/cards/card-1.jpg',
    'title' => 'Lorem Ipsum is simply dummy text of the printing',
    'date' => 'Enero 25, 2024',
    'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s...',
    'href' => '/detalle-de-entrada',
  ],
  [
    'image' => UPLOAD_PATH . '/blog/cards/card-1.jpg',
    'title' => 'Lorem Ipsum is simply dummy text of the printing',
    'date' => 'Enero 25, 2024',
    'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s...',
    'href' => '/detalle-de-entrada',
  ],
  [
    'image' => UPLOAD_PATH . '/blog/cards/card-2.jpg',
    'title' => 'Lorem Ipsum is simply dummy text of the printing',
    'date' => 'Enero 25, 2024',
    'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s...',
    'href' => '/detalle-de-entrada',
  ],
  [
    'image' => UPLOAD_PATH . '/blog/cards/card-3.jpg',
    'title' => 'Lorem Ipsum is simply dummy text of the printing',
    'date' => 'Enero 25, 2024',
    'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s...',
    'href' => '/detalle-de-entrada',
  ],
  [
    'image' => UPLOAD_PATH . '/blog/cards/card-1.jpg',
    'title' => 'Lorem Ipsum is simply dummy text of the printing',
    'date' => 'Enero 25, 2024',
    'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s...',
    'href' => '/detalle-de-entrada',
  ],
  [
    'image' => UPLOAD_PATH . '/blog/cards/card-2.jpg',
    'title' => 'Lorem Ipsum is simply dummy text of the printing',
    'date' => 'Enero 25, 2024',
    'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s...',
    'href' => '/detalle-de-entrada',
  ]
]
?>

<section class="blog">
  <div class="x-container x-container--pad-213">
    <div class="blog__wrapper">
      <div class="blog-search">
        <?php get_template_part(BLOG_CONTENT_PATH, 'search-form'); ?>
      </div>
      <div class="blog-content">
        <div class="blog-content__results">
          <?php foreach ($results as $result) : ?>
            <?php get_template_part(COMMON_CONTENT_PATH, 'entry-card', $result); ?>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>
