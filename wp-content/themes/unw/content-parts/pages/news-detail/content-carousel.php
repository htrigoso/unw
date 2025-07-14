<?php
$slides = [
  [
    'image' => UPLOAD_PATH . '/news-detail/carousel/carousel-1.jpg',
    'alt' => 'Noticia 1',
    'description' => 'Universidad Norbert Wiener organizó <strong>encuentro de docentes de Enfermería y Medicina Humana</strong> en reconocimiento al importante trabajo que realizan.'
  ],
  [
    'image' => UPLOAD_PATH . '/news-detail/carousel/carousel-1.jpg',
    'alt' => 'Noticia 1',
    'description' => 'Universidad Norbert Wiener organizó <strong>encuentro de docentes de Enfermería y Medicina Humana</strong> en reconocimiento al importante trabajo que realizan.'
  ],
  [
    'image' => UPLOAD_PATH . '/news-detail/carousel/carousel-1.jpg',
    'alt' => 'Noticia 1',
    'description' => 'Universidad Norbert Wiener organizó <strong>encuentro de docentes de Enfermería y Medicina Humana</strong> en reconocimiento al importante trabajo que realizan.'
  ],
  [
    'image' => UPLOAD_PATH . '/news-detail/carousel/carousel-1.jpg',
    'alt' => 'Noticia 1',
    'description' => 'Universidad Norbert Wiener organizó <strong>encuentro de docentes de Enfermería y Medicina Humana</strong> en reconocimiento al importante trabajo que realizan.'
  ]
]
?>

<div class="carousel post-swiper">
  <div class="swiper-container">
    <ul class="swiper-wrapper carousel__list">
      <?php foreach ($slides as $slide): ?>
        <li class="swiper-slide carousel__item">
          <div class="carousel__content">
            <img src="<?php echo esc_url($slide['image']); ?>" alt="<?php echo esc_attr($slide['alt']); ?>" class="carousel__content--image" />
            <p class="carousel__content--description"><?php echo $slide['description']; ?></p>
          </div>
        </li>
      <?php endforeach; ?>
    </ul>
    <div class="carousel__swiper-navigation">
      <div class="swiper-navigation">
        <div class="swiper-primary-button-prev"></div>
        <div class="swiper-primary-button-next"></div>
        <div class="swiper-counter">
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
  </div>
</div>
