<?php $acf_data = get_field('featured-events'); ?>

<section class="featured-events">
  <div class="x-container x-container--pad-213">
    <div class="featured-events__wrapper">
      <?php
      get_template_part(COMMON_CONTENT_PATH, 'swiper-events', [
        'acf_data' => [
          'title' => $acf_data['title'] ?? 'Eventos Destacados',
          'events' => $acf_data['events'] ?? [],
          'link' => $acf_data['link'] ?? false,
          'see_more_text' => $acf_data['see_more_text'] ?? 'Ver todos los eventos',
          'see_more_url' => $acf_data['see_more_url'] ?? '#',
        ],
        "swiper_class" => 'featured-events-swiper post-swiper',
      ]);
      ?>
    </div>
  </div>
</section>
