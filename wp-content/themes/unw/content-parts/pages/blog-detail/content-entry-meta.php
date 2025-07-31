<div class="entry-meta">
  <div class="entry-meta__content">
    <h1 class="entry-meta__title">Conoce las rutas profesionales para la especialidad de arquitectura en Perú</h1>
    <div class="entry-meta__info">
      <img src="<?php echo UPLOAD_PATH . '/blog-detail/avatar.png' ?>" class="entry-meta__avatar" alt="Autor Avatar">
      <span class="entry-meta__author">By <strong>Autor</strong></span>
      <span class="entry-meta__date">Julio 12, 2025</span>
    </div>
    <div class="entry-meta__breadcrumbs">
      <?php
      get_template_part(COMMON_CONTENT_PATH, 'breadcrumb', [
        'breadcrumb' => [
          ['label' => 'Inicio', 'href' => '/'],
          ['label' => 'Blog', 'href' => '/blog'],
          ['label' => 'Vocación Estudiantil']
        ]
      ]);
      ?>
    </div>
  </div>
  <img src="<?php echo UPLOAD_PATH . '/blog/hero/hero-mobile.jpg' ?>" class="entry-meta__image" alt="Autor Avatar">
  <div class="entry-meta__social">
    <?php
    get_template_part(BLOG_DETAIL_CONTENT_PATH, 'social-meta');
    ?>
  </div>
</div>
