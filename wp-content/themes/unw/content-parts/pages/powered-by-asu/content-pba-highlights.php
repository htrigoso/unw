<?php
$highlights = get_field('highlights');
?>

<section class="pba-highlights">
  <div class="x-container x-container--pad-213 pba-highlights__wrapper">
    <h2 class="pba-highlights__title"><?= $highlights['title']; ?></h2>

    <div class="highlight-swiper post-swiper-desktop switch-pagination-navigation" data-width="wide">
      <div class="swiper-container">
        <ul class="swiper-wrapper pba-highlights__list">
          <?php foreach ($highlights['list'] as $i => $highlight): ?>
          <li class="swiper-slide pba-highlights__item">
            <article class="pba-highlights__card">
              <div class="pba-highlights__card-left">
                <h3 class="pba-highlights__card-title"><?= $highlight['title']; ?></h3>
                <p class="pba-highlights__card-description"><?= $highlight['description']; ?></p>
              </div>

              <div class="pba-highlights__card-right" data-modal-target="highlight-modal-<?php echo $i; ?>"
                style="cursor: pointer;">
                <img src="<?=placeholder() ?>" data-src="<?= esc_url($highlight['poster']['url']); ?>"
                  alt="<?= esc_attr($highlight['poster']['alt']); ?>" class="pba-highlights__card-image lazyload" />
                <div class="pba-highlights__card-video-btn">
                  <i>
                    <svg width="56" height="56">
                      <use xlink:href="#player"></use>
                    </svg>
                  </i>
                </div>
              </div>
            </article>

            <?php
              ob_start();
              ?>
            <div class="pba-highlights-modal__video">
              <?php if($highlight['video']['type']['value']==='mp4'): ?>
              <div class="pba-highlights-modal__video-mp4">
                <video controls autoplay="false">
                  <source src="<?php echo esc_url($highlight['video']['video']['url']); ?>" type="video/mp4">
                  Your browser does not support the video tag.
                </video>
              </div>
              <?php else:  ?>
              <div class="pba-highlights-modal__video-iframe">
                <?php
                  $iframe = preg_replace('/\s*(width|height)="\d*"/i', '', $highlight['video']['iframe']);
                  echo $iframe;
               ?>
              </div>
              <?php endif  ?>
            </div>
            <?php
              $content = ob_get_clean();
              $id = 'highlight-modal-' . $i;
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
