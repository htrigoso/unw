<div class="event-detail">
  <div class="x-container x-container--pad-213">
    <section class="event-detail__wrapper">
      <article class="event-detail__content">
        <h2 class="event-detail__subtitle">
          Detalle del evento
        </h2>
        <h1 class="event-detail__title">
          📣 ¡Prepárate para estudiar sin límites en la Universidad Norbert Wiener!
        </h1>
        <p class="event-detail__description">
          ¿Te imaginas estudiar una carrera profesional sin salir de casa? 🌐💻 ¡Es posible! Te invitamos a participar en nuestra charla informativa sobre carreras a distancia, donde conocerás todo lo que necesitas saber para comenzar tu futuro profesional con flexibilidad y calidad académica🚀. Descubre nuestras carreras 100% online:
        </p>
        <div class="event-detail__video">
          <?php
          get_template_part(COMMON_CONTENT_PATH, 'video-w-thumbnail', [
            'thumbnail' => UPLOAD_PATH . '/event-detail/video/video-thumbnail.jpg',
          ]);
          ?>
        </div>
        <div class="event-detail__data">
          <?php
          get_template_part(COMMON_CONTENT_PATH, 'body-w-list', [
            'title' => 'Fecha y plataforma',
            'blocks' => [
              [
                'list' => [
                  '24 y 26 de junio',
                  '7:00 PM',
                  'Zoom',
                ],
              ]
            ],
          ]);
          ?>
        </div>
      </article>
      <article class="event-detail__form">FORMULARIO DE REGISTRO</article>
    </section>
  </div>
</div>
