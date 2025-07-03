<div class="health">
  <div class="health__header">
    <h1 class="health__header--title">Las carreras de Ciencias de la Salud son <span>reconocidas por su formación innovadora</span></h1>
  </div>
  <?php get_template_part(FACULTY_CONTENT_TAB_PATH . '1-health-science/content-quote', null, [
    "quote" => "Lorem ipsum dolor sit amet consectetur adipiscing elit bibendum placerat fusce, habitant justo libero lectus class praesent interdum egestas augue, fames mauris integer neque inceptos porttitor faucibus pulvinar suscipit.",
    "author" => "Dr. Manuel Jesus Mayorga",
    "position" => "Decano (e) de la Facultad Farmacia y Bioquímica",
    "img_url" => UPLOAD_PATH . '/faculty/quote/quote-author.jpg',
  ]); ?>
  <?php get_template_part(FACULTY_CONTENT_TAB_PATH . '1-health-science/content-laboratories'); ?>
</div>
