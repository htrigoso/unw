<?php
$postId = $args['id'] ?? get_the_ID();
$acf_data = get_field('events', $postId);

$featured_events = $acf_data['list'] ?? [];
$link = $acf_data['link'] ?? null;
?>

<?php if (!empty($acf_data) && is_array($acf_data)): ?>
<section class="simple-events">
  <h2 class="simple-events__title"><?php echo esc_html($acf_data['title'] ?? 'Eventos Destacados'); ?></h2>

  <div class="post-swiper simple-events-swiper" data-width="compact">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <?php foreach ($featured_events as $post): ?>
        <?php
              $info = get_field('event_info', $post->ID);

              $date = !empty($info['date']) ? DateTime::createFromFormat('d/m/Y', $info['date']) : null;
              $formatted_day = $date ? $date->format('d.m') : '';

              $title    = get_the_title($post->ID);
              $hour     = $info['time'] ?? '';
              $location = $info['location'] ?? '';
              $url      = $info['register_url'] ?? '';

              $image_url = get_the_post_thumbnail_url($post->ID, 'medium_large') ?: get_template_directory_uri() . '/upload/default-event.jpg';
              $image_alt = $title;
            ?>
        <div class="swiper-slide simple-events__slide">
          <?php
              get_template_part(COMMON_CONTENT_PATH, 'event-card', [
                'title' => $title,
                'hour' => $hour,
                'location' => $location,
                'date' => $formatted_day,
                'url' => $url,
                'image_url' => $image_url,
                'image_alt' => $image_alt,
                'status'=> $info['status'] ?? false,
              ]);
              ?>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

  <?php
 if ($link && !empty($link['url'])): ?>
  <div class="simple-events__see-more">
    <a href="<?php echo esc_url($link['url']); ?>" target="<?php echo esc_attr($link['target'] ?? '_self'); ?>"
      class="btn btn-sm btn-secondary-one simple-events__see-more-btn">
      <?php echo esc_html($link['title'] ?? 'Ver todos los eventos'); ?>
      <i>
        <svg class="icon icon--arrow" width="32" height="32">
          <use xlink:href="#arrow-right"></use>
        </svg>
      </i>
    </a>
  </div>
  <?php endif; ?>
</section>
<?php endif; ?>
