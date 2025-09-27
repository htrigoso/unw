<?php
$event = get_field('event_content');
 ?>
<?php if(!empty($event)): ?>
<div class="event-detail">
  <div class="x-container x-container--pad-213">
    <section class="event-detail__wrapper">
      <article class="event-detail__content">
        <h2 class="event-detail__subtitle">
          Detalle del evento
        </h2>

        <?php if (!empty($event['title'])) : ?>
        <h1 class="event-detail__title">
          <?= esc_html($event['title']); ?>
        </h1>
        <?php endif; ?>

        <?php if (!empty($event['content'])) : ?>
        <div class="event-detail__description" data-content="paragraph">
          <?= wp_kses_post(wpautop($event['content'])); ?>
        </div>
        <?php endif; ?>

        <div class="event-detail__video">
          <?php
          get_template_part(EVENT_DETAIL_CONTENT_PATH, 'video-w-thumbnail', [
            'thumbnail' => $event['image']['url'] ?? '',
            'video_url' => $event['video']['url'] ?? '',
            'is_video' => $event['is_video'],
          ]);
          ?>
        </div>

        <div class="event-detail__data">
          <?php
            $event_info = get_field('event_info');

            if(!$event_info['status']){
              get_template_part(COMMON_CONTENT_PATH, 'body-w-list', [
                'title' => 'Fecha y plataforma',
                'blocks' => [
                  [
                    'list' => [
                      $event_info['date'] ?? '',
                      $event_info['time'] ?? '',
                      $event_info['location'] ?? '',
                    ],
                  ]
                ],
              ]);
            }
            ?>
        </div>
      </article>

      <article class="event-detail__form">
        <?php
          // get_template_part(EVENT_DETAIL_CONTENT_PATH, 'contact-form')
        ?>
      </article>
    </section>
  </div>
</div>
<?php endif ?>