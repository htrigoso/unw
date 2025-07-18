<?php
$data = [
  "title" => "Eventos Destacados",
  "link" => false,
  "events" => [
    (object)[
      "ID" => 1,
      "post_title" => "Wiener Sessions",
      "event_info" => [
        "date" => "04/06/2025",
        "time" => "4:00pm",
        "location" => "Zoom",
        "register_url" => [
          "title" => "Inscribirme",
          "url" => "/detalle-de-evento",
          "target" => "_self"
        ]
      ],
      "thumbnail_url" => UPLOAD_PATH . '/home/featured-events/featured-event-1.jpg',
    ],
    (object)[
      "ID" => 2,
      "post_title" => "Wiener Fest",
      "event_info" => [
        "date" => "27/05/2025",
        "time" => "4:00pm",
        "location" => "Norbert Wiener",
        "register_url" => [
          "title" => "Inscribirme",
          "url" => "/detalle-de-evento",
          "target" => "_self"
        ]
      ],
      "thumbnail_url" => UPLOAD_PATH . '/home/featured-events/featured-event-2.jpg',
    ],
    (object)[
      "ID" => 3,
      "post_title" => "Wiener Tours",
      "event_info" => [
        "date" => "29/05/2025",
        "time" => "4:00pm",
        "location" => "Presencial",
        "register_url" => [
          "title" => "Inscribirme",
          "url" => "/detalle-de-evento",
          "target" => "_self"
        ]
      ],
      "thumbnail_url" => UPLOAD_PATH . '/home/featured-events/featured-event-3.jpg',
    ],
  ]
];

$data_two = [
  "title" => "Todos los eventos",
  "link" => false,
  "events" => [
    (object)[
      "ID" => 6,
      "post_title" => "Wiener Sessions",
      "event_info" => [
        "date" => "04/06/2025",
        "time" => "4:00pm",
        "location" => "Zoom",
        "register_url" => [
          "title" => "Inscribirme",
          "url" => "/detalle-de-evento",
          "target" => "_self"
        ]
      ],
      "thumbnail_url" => UPLOAD_PATH . '/home/featured-events/featured-event-1.jpg',
    ],
    (object)[
      "ID" => 7,
      "post_title" => "Wiener Fest",
      "event_info" => [
        "date" => "27/05/2025",
        "time" => "4:00pm",
        "location" => "Norbert Wiener",
        "register_url" => [
          "title" => "Inscribirme",
          "url" => "/detalle-de-evento",
          "target" => "_self"
        ]
      ],
      "thumbnail_url" => UPLOAD_PATH . '/home/featured-events/featured-event-2.jpg',
    ],
    (object)[
      "ID" => 8,
      "post_title" => "Wiener Tours",
      "event_info" => [
        "date" => "29/05/2025",
        "time" => "4:00pm",
        "location" => "Presencial",
        "register_url" => [
          "title" => "Inscribirme",
          "url" => "/detalle-de-evento",
          "target" => "_self"
        ]
      ],
      "thumbnail_url" => UPLOAD_PATH . '/home/featured-events/featured-event-3.jpg',
    ],
    (object)[
      "ID" => 9,
      "post_title" => "Wiener Sessions",
      "event_info" => [
        "date" => "04/06/2025",
        "time" => "4:00pm",
        "location" => "Zoom",
        "register_url" => [
          "title" => "Inscribirme",
          "url" => "/detalle-de-evento",
          "target" => "_self"
        ]
      ],
      "thumbnail_url" => UPLOAD_PATH . '/home/featured-events/featured-event-1.jpg',
    ],
    (object)[
      "ID" => 10,
      "post_title" => "Wiener Fest",
      "event_info" => [
        "date" => "27/05/2025",
        "time" => "4:00pm",
        "location" => "Norbert Wiener",
        "register_url" => [
          "title" => "Inscribirme",
          "url" => "/detalle-de-evento",
          "target" => "_self"
        ]
      ],
      "thumbnail_url" => UPLOAD_PATH . '/home/featured-events/featured-event-2.jpg',
    ]
  ]
]
?>

<section class="featured-events">
  <div class="x-container x-container--pad-213">
    <div class="featured-events__wrapper">
      <?php
      get_template_part(COMMON_CONTENT_PATH, 'swiper-events', [
        'acf_data' => [
          'title' => $data['title'] ?? 'Eventos Destacados',
          'events' => $data['events'] ?? [],
          'link' => $data['link'] ?? false,
        ],
        "swiper_class" => 'featured-events-swiper post-swiper-desktop',
      ]);
      ?>
    </div>
  </div>
</section>
<section class="all-events">
  <div class="x-container x-container--pad-213">
    <div class="all-events__wrapper">
      <?php
      get_template_part(COMMON_CONTENT_PATH, 'swiper-events', [
        'acf_data' => [
          'title' => $data_two['title'] ?? 'Todos los eventos',
          'events' => $data_two['events'] ?? [],
          'link' => $data_two['link'] ?? false,
        ],
        "swiper_class" => 'all-events-swiper post-swiper',
      ]);
      ?>
    </div>
  </div>
</section>
