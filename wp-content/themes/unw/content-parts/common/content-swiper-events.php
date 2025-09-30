<?php
$swiper_name = $args["swiper_class"] ?? [];
$acf_data = $args['acf_data'] ?? [];
$featured_events = $acf_data['events'] ?? [];
?>

<?php
// Return the array with event data
if (!function_exists('unw_get_event_data')) {
  function unw_get_event_data($post)
  {
      $info = get_field('event_info', $post->ID);
      $customStyle = get_field('custom_style', $post->ID);
      if (!is_array($info)) {
        $info = [];
      }
      $date = isset($info['date']) ? DateTime::createFromFormat('d/m/Y', $info['date']) : false;
      $formatted_day = $date ? $date->format('d.m') : '';
      $title    = get_the_title($post->ID);
      $hour     = $info['time'] ?? '';
      $location = $info['location'] ?? '';
      $url      = $info['register_url'] ?? '';
      $image_url = get_the_post_thumbnail_url($post->ID, 'full') ?: get_template_directory_uri() . '/upload/default.jpg';
      $image_alt = $title;
      $status = $info['status'] ?? false;

    return [
      'title' => $title,
      'hour' => $hour,
      'location' => $location,
      'date' => $formatted_day,
      'url' => $url,
      'status' =>  $status,
      'image_url' => $image_url,
      'image_alt' => $image_alt,
      'customStyle'=> $customStyle
    ];
  }
}
?>

<?php if (!empty($acf_data) && is_array($acf_data)): ?>
<div class="swiper-events">
  <h2 class="swiper-events__title"><?php echo esc_html($acf_data['title']); ?></h2>

  <div class="swiper-events__swiper <?php echo esc_attr($swiper_name); ?>" data-width="compact">
    <div class="swiper-container">
      <div class="swiper-wrapper swiper-events__cards">
        <?php foreach ($featured_events as $post): ?>
        <?php $event = unw_get_event_data($post);


        ?>
        <div class="swiper-slide swiper-events__card">
          <?php get_template_part(COMMON_CONTENT_PATH, 'event-card', $event); ?>
        </div>
        <?php endforeach; ?>
      </div>
      <div class="swiper-events__swiper-navigation">
        <div class="swiper-navigation">
          <div class="swiper-primary-button-prev"></div>
          <div class="swiper-primary-button-next"></div>
          <div class="swiper-counter">
            <div class="swiper-pagination"></div>
          </div>
        </div>

        <?php
          $link = $acf_data['link'] ?? null;
          if ($link):

          ?>
        <div class="swiper-events__see-more-btn">
          <?php
              get_template_part(COMMON_CONTENT_PATH, 'see-more-btn', array(
                'text' => $link['title'],
                'href' => $link['url'],
              ));
              ?>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>
