<?php
$acf_data = get_field('featured-events');
$featured_events = $acf_data['events'] ?? [];
?>
<?php if (!empty($acf_data) && is_array($acf_data)): ?>
<section class="featured-events">
  <div class="x-container x-container--pad-213">
    <div class="featured-events__wrapper">
      <h2 class="featured-events__title"><?php echo esc_html($acf_data['title'] ?? 'Eventos Destacados'); ?></h2>
      <div class="post-swiper featured-events-swiper featured-events__swiper">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <?php foreach ($featured_events as $post): ?>
            <?php
              $info = get_field('event_info', $post->ID);

              $date = DateTime::createFromFormat('d/m/Y', $info['date']);
              $formatted_day = $date->format('d.m');

              $hour     = $info['time'] ?? '';
              $location = $info['location'] ?? '';
              $url      = $info['register_url'] ?? '';

              $image_url = get_the_post_thumbnail_url($post->ID, 'full') ?: get_template_directory_uri() . '/upload/default.jpg';
              ?>
            <div class="swiper-slide">
              <article class="featured-events__card">
                <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr(get_the_title($post->ID)); ?>"
                  class="featured-events__card--img" />
                <div class="featured-events__card--content">
                  <h3 class="featured-events__card--title"><?php echo esc_html(get_the_title($post->ID)); ?></h3>
                  <div class="featured-events__card--row">
                    <div class="featured-events__card--info">
                      <span class="featured-events__card--info--title">Fecha</span>
                      <span class="featured-events__card--info--desc"><?php echo esc_html($formatted_day); ?></span>
                    </div>
                    <div class="featured-events__card--info">
                      <span class="featured-events__card--info--title">Hora</span>
                      <span class="featured-events__card--info--desc"><?php echo esc_html($hour); ?></span>
                    </div>
                  </div>
                  <div class="featured-events__card--info">
                    <span class="featured-events__card--info--title">Lugar</span>
                    <span class="featured-events__card--info--desc"><?php echo esc_html($location); ?></span>
                  </div>
                  <a href="<?php echo esc_url($url); ?>"
                    class="btn btn-sm btn-secondary-one-outline featured-events__card--cta">
                    Inscribirme
                    <i>
                      <svg class="icon icon--arrow" width="32" height="32">
                        <use xlink:href="#arrow-right"></use>
                      </svg>
                    </i>
                  </a>
                </div>
              </article>
            </div>
            <?php endforeach; ?>
          </div>
        </div>

        <div class="featured-events__swiper-navigation">
          <div class="swiper-navigation">
            <div class="post-swiper-button-prev"></div>
            <div class="post-swiper-button-next"></div>
          </div>

          <?php
          $link = $acf_data['link'] ?? null;
           if ($link):
          ?>
          <div class="featured-events__see-more-btn">
            <?php
              get_template_part(COMMON_CONTENT_PATH, 'see-more-btn', array(
                'text' => 'Ver todos los eventos',
                'href' => '#',
              ));
              ?>
          </div>
          <?php  endif;?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
