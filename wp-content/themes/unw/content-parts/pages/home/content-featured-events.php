<?php
$acf_data = get_field('featured-events');
$featured_events = $acf_data['events'] ?? [];
?>
<?php if (!empty($acf_data) && is_array($acf_data)): ?>
  <section class="featured-events">
    <div class="x-container x-container--pad-213">
      <div class="featured-events__wrapper">
        <h2 class="featured-events__title"><?php echo esc_html($acf_data['title'] ?? 'Eventos Destacados'); ?></h2>
        <div class="post-swiper featured-events-swiper featured-events__swiper" data-width="compact">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <?php foreach ($featured_events as $post): ?>
                <?php
                $info = get_field('event_info', $post->ID);

                $date = DateTime::createFromFormat('d/m/Y', $info['date']);
                $formatted_day = $date->format('d.m');

                $title    = get_the_title($post->ID);
                $hour     = $info['time'] ?? '';
                $location = $info['location'] ?? '';
                $url      = $info['register_url'] ?? '';

                $image_url = get_the_post_thumbnail_url($post->ID, 'full') ?: get_template_directory_uri() . '/upload/default.jpg';
                $image_alt = get_the_title($post->ID);
                ?>
                <div class="swiper-slide featured-events__card">
                  <?php
                  get_template_part(COMMON_CONTENT_PATH, 'event-card', [
                    'title' => $title,
                    'hour' => $hour,
                    'location' => $location,
                    'date' => $formatted_day,
                    'url' => $url,
                    'image_url' => $image_url,
                    'image_alt' => $image_alt,
                  ]);
                  ?>
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
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
