<?php
$highlights = get_field('highlights');

$mock_highlights = [
  [
    'title' => $highlights['title'],
    'description' => $highlights['description'],
    'image' => $highlights['imagen']['url'],
    'alt' => $highlights['imagen']['alt']
  ],
  [
    'title' => $highlights['title'],
    'description' => $highlights['description'],
    'image' => $highlights['imagen']['url'],
    'alt' => $highlights['imagen']['alt']
  ]
]
?>

<section class="pba-highlights">
  <div class="x-container x-container--pad-213 pba-highlights__wrapper">
    <h2 class="pba-highlights__title">Vive la experiencia immersiva ASU</h2>

    <div class="highlight-swiper post-swiper-desktop switch-pagination-navigation" data-width="wide">
      <div class="swiper-container">
        <ul class="swiper-wrapper pba-highlights__list">
          <?php foreach ($mock_highlights as $i => $highlight): ?>
            <li class="swiper-slide pba-highlights__item">
              <div class="pba-highlights__card">
                <div class="pba-highlights__card-left">
                  <h3 class="pba-highlights__card-title"><?= $highlight['title'] ?></h3>
                  <p class="pba-highlights__card-description"><?= $highlight['description'] ?></p>
                </div>
                <div class="pba-highlights__card-right" data-modal-target="highlight-modal-<?php echo $i; ?>" style="cursor: pointer;">
                  <img src="<?php echo esc_url($highlight['image']); ?>"
                    alt="<?php echo esc_attr($highlight['alt']); ?>"
                    class="pba-highlights__card-image" />
                  <div class="pba-highlights__card-video-btn">
                    <i>
                      <svg width="56" height="56">
                        <use xlink:href="#player"></use>
                      </svg>
                    </i>
                  </div>
                </div>
              </div>

              <?php
              ob_start();
              ?>
              <div class="pba-highlights-modal__video">
                <img
                  src="<?php echo esc_url($highlights['imagen']['url']); ?>"
                  alt="<?php echo esc_attr($highlights['imagen']['alt']); ?>"
                  class="pba-highlights-modal__video-img" />
                <button class="pba-highlights-modal__video-btn">
                  <i>
                    <svg width="88" height="88">
                      <use xlink:href="#player"></use>
                    </svg>
                  </i>
                </button>
              </div>
              <?php
              $content = ob_get_clean();
              $id = 'highlight-modal-' . $i;
              ?>
              <?php
              get_template_part(COMMON_CONTENT_PATH, 'modal', [
                'content' => $content,
                'id' => $id,
                'class' => 'pba-highlights-modal'
              ]);
              ?>
            </li>
          <?php endforeach; ?>
        </ul>
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
</section>
