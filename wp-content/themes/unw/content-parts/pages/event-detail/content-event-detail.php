<?php
$event = get_field('event_content');
 ?>
<?php if(!empty($event)): ?>
<div class="event-detail">
  <div class="x-container x-container--pad-213">
    <section class="event-detail__wrapper">
      <article class="event-detail__content">
        <div class="event-detail__description" data-content="paragraph">
          <?php the_content(); ?>
        </div>


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
                'title' => 'Fecha y lugar',
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
