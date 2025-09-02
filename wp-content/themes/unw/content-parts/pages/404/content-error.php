<section class="error-page">
  <div class="x-container x-container--pad-213 error-page__wrapper">
    <div class="error-page__content">
      <div class="error-page__header">
        <span class="error-page__code">404</span>
        <h1 class="error-page__title">Oopss...</h1>
        <p class="error-page__subtitle">No hallamos esta página</p>
        <p class="error-page__desc">pero sí podemos ayudarte a encontrar tu camino.</p>
        <a href="<?php echo home_url(); ?>" class="btn btn-primary error-page__button desktop">Regresar al inicio</a>
      </div>
      <div class="error-page__actions">
        <img src="<?php echo UPLOAD_PATH . '/error/owl-illustration.png' ?>" alt="" aria-hidden="true" class="error-page__image" fetchpriority="high" decoding="async" loading="eager" />
        <a href="<?php echo home_url(); ?>" class="btn btn-primary error-page__button mobile">Regresar al inicio</a>
      </div>
    </div>
  </div>
</section>
