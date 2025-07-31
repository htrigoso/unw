<?php
$tags = [
  [
    "label" => "Etiqueta 1",
  ],
  [
    "label" => "Etiqueta 2",
  ],
  [
    "label" => "Etiqueta 3",
  ]
];

$related_posts = [
  [
    "image" => UPLOAD_PATH . "/blog/cards/card-1.jpg",
    "title" => "Laptop vs. Tablet? Qué es mejor para estudiar?",
    "date" => "Enero 25, 2024",
    "content" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lore",
    "href" => "/detalle-de-entrada"
  ],
  [
    "image" => UPLOAD_PATH . "/blog/cards/card-1.jpg",
    "title" => "Laptop vs. Tablet? Qué es mejor para estudiar?",
    "date" => "Enero 25, 2024",
    "content" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lore",
    "href" => "/detalle-de-entrada"
  ],
  [
    "image" => UPLOAD_PATH . "/blog/cards/card-1.jpg",
    "title" => "Laptop vs. Tablet? Qué es mejor para estudiar?",
    "date" => "Enero 25, 2024",
    "content" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lore",
    "href" => "/detalle-de-entrada"
  ]
];
?>

<div class="x-container">
  <section class="blog-detail">
    <article class="blog-detail__article">
      <?php get_template_part(BLOG_DETAIL_CONTENT_PATH, 'entry-meta'); ?>
      <div class="x-container blog-detail__content">
        <div class="blog-detail__text">
          <p>
            La Universidad Norbert Wiener estará representada por 9 estudiantes de alto rendimiento académico en Cade Universitario 2025, el encuentro de jóvenes líderes más importante y diverso del Perú que se realizará del 25 AL 27 de junio en la Escuela Naval del Perú bajo el lema ¡Ciudadanía activa! ¡Democracia viva!
          </p>
          <br />
          <p>
            El evento, organizado por IPAE Acción Empresarial, tiene como objetivo generar un espacio de reflexión e inspiración, con el propósito de promover que los jóvenes tomen acción para aportar al desarrollo del país, mejorando su comprensión de la realidad y conectándolos entre ellos y con líderes de otras generaciones.
          </p>
          <br />
          <p>
            En la trigésima edición del Cade Universitario participarán más de 600 estudiantes de diversas universidades e institutos de todo el país, quienes durante dos días se aislarán en las instalaciones de la ENP para compartir experiencias y reflexionar sobre el poder transformador del voto joven, la importancia del diálogo y los desafíos de la desinformación.
          </p>
          <br />
          <p>
            En representación de la Universidad Norbert Wiener asistirán Alexandra Pérez (Medicina Humana), Jhoel Ordoñez (Tecnología Médica en Terapia Física y Rehabilitación), María Fernanda Villanueva (Tecnología Médica en Laboratorio Clínico y Anatomía Patológica), María Contreras (Contabilidad y Auditoría), Dyan Arboleda (Administración y Negocios Internacionales), Lucía Martínez (Enfermería), Fabio Saldivar (Derecho y Ciencia Política), Jocabeth Olivares (Administración y Negocios Internacionales) y Valeria Guzmán (Psicología).
          </p>
          <br />
          <br />
          <h2>
            Texto a destacar de forma opcional, <strong>puede ser una cita del artículo también</strong>
          </h2>
          <br />
          <br />
          <p>
            Todos ellos fueron seleccionados por su alto rendimiento académico, liderazgo y compromiso. La mayoría forma parte del Grupo de Rendimiento Excepcional (GREX), que reúne a los estudiantes más destacados de todos los programas académicos de nuestra institución.
          </p>
          <br />
          <p>
            Este año, la agenda del Cade Universitario estará centrada en los grandes retos que enfrenta el país, de cara al próximo proceso electoral. En ese sentido, los expositores −reconocidas personalidades del mundo político, económico y empresarial de Perú, México y Costa Rica− abordarán temas como el voto joven, la polarización social, y el liderazgo democrático.
          </p>
          <br />
          <p>
            Antes de internarse en la Escuela Naval del Perú, ubicada en La Punta, Callao, los integrantes de la delegación de estudiantes de la Universidad Norbert Wiener manifestaron su alegría de participar en un evento tan importante que sumará a su experiencia estudiantil, y agradecieron a su alma mater por la oportunidad que les brinda.
          </p>
        </div>
        <div class="blog-detail__actions">
          <div class="blog-detail__tags">
            <?php foreach ($tags as $tag) : ?>
              <span class="blog-detail__tag"><?php echo $tag['label']; ?></span>
            <?php endforeach; ?>
          </div>
          <?php
          get_template_part(BLOG_DETAIL_CONTENT_PATH, 'social-meta');
          ?>
        </div>
      </div>
    </article>
    <aside class="blog-detail__aside">
      <img src="<?php echo UPLOAD_PATH . "/checker-bg.svg"; ?>" alt="Ad" class="blog-detail__aside-ad">
      <div class="blog-detail__aside-related">
        <?php get_template_part(BLOG_DETAIL_CONTENT_PATH, 'related-entries', [
          'title' => 'Te puede interesar',
          'related_posts' => $related_posts
        ]) ?>
        <div class="blog-detail__aside-popular">
          <?php get_template_part(BLOG_DETAIL_CONTENT_PATH, 'related-entries', [
            'title' => 'Los más leídos',
            'related_posts' => $related_posts
          ]) ?>
        </div>
      </div>
    </aside>
  </section>
</div>
