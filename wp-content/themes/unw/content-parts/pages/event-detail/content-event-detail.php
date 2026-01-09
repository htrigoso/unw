<?php
  $event = get_field('event_content');
  $event_info = get_field('event_info');
?>
<?php if(!empty($event)): ?>
<div class="event-detail">
  <div class="x-container x-container--pad-213">
    <section class="event-detail__wrapper">
      <article class="event-detail__content">
        <?php

        if($event_info['status']):?>
        <span class="event-detail__status">Evento finalizado</span>
        <?php endif ?>
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
            if($event_info['status_page']){
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
        $utms_default = get_field('list_utms', 'option');
        $form_crm_categories = get_field('componente_form_category');
        $utm_admission = $form_crm_categories['list_utms'] ?? [];
        $utms_final = merge_utms($utms_default, $utm_admission);

        $formUrl = "https://forms.zohopublic.com/adminzoho11/form/EventosHbridov2/formperma/2j3H_F_LzgaCnNmjSksgBTd3Z0M_D03NvmeOIsRMhwM/htmlRecords/submit";

        $form_crm_option = get_field('form_crm', 'option');


        $validation_dni = $form_crm_categories['validation_dni_pregrado'];
        $hide_dni = $validation_dni['hide'];

        $vertical_modality = $args['vertical_modality'] ?? '';

        $careers = get_carreras();
        $list_departaments = $form_crm_option['list_departaments'];
        $list_campus = get_carreras_campus_modalidad();


        get_template_part(EVENT_DETAIL_CONTENT_PATH, 'more-info-form-event', [
          'form_id' => 'form-event',
          'form_action' => $formUrl,
          'utms' => $utms_final,
          'careers' => $careers,
          'list_departaments' => $list_departaments,
          'hide_dni' => $hide_dni,
          'validation_dni' => $validation_dni,
          'location' => 'is-home',
          'shadow_box' => true,
          'vertical_modality' => $vertical_modality,
          'position_form'=> 'event-detail',
          'event_id'=> $event_info['event_id'] ?? '',
        ]);
      ?>
      </article>
    </section>
  </div>
</div>
<?php endif ?>
