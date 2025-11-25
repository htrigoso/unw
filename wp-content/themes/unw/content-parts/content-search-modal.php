<div class="search-modal__wrapper">
  <div class="search-modal__wrapper__content">
    <div class="x-container sidebar__header">
      <a class="sidebar__logo pointer" href="<?php echo esc_url(home_url('/')); ?>">
        <img width="101" height="40" src="<?= placeholder() ?>" data-src="<?= UPLOAD_PATH . '/logo-unw.svg' ?>"
          class="lazyload" alt="Logo UNW">
      </a>
      <button type="button" aria-label="Abrir modal de búsqueda" class="btn-menu-hamburger pointer"
        data-close-modal="search-modal">
        <i>
          <svg width="40" height="40">
            <use xlink:href="#close"></use>
          </svg>
        </i>
      </button>
    </div>
    <div class="search-modal">
      <div class="search-modal__header">
        <h4 class="search-modal__header--title">Busca aquí</h4>
        <button type="button" class="search-modal__header--close" data-close-modal="search-modal">
          <i>
            <svg width="32" height="32">
              <use xlink:href="#close"></use>
            </svg>
          </i>
        </button>
      </div>
      <div class="search-modal__form">
        <form action="<?php echo esc_url(home_url('/')); ?>" method="get">
          <?php
          // Preservar todos los parámetros de la URL actual excepto 's' (búsqueda)
          foreach ($_GET as $param => $value) {
            if ($param !== 's' && !empty($value)) {
              $sanitized_value = sanitize_text_field(wp_unslash($value));
              echo '<input type="hidden" name="' . esc_attr($param) . '" value="' . esc_attr($sanitized_value) . '" />';
            }
          }
          ?>
          <div class="search-field">
            <input type="text" name="s" placeholder="¿Qué estás buscando?"
              value="<?php echo esc_attr(get_search_query()); ?>" />
            <i>
              <svg width="24" height="24">
                <use xlink:href="#search"></use>
              </svg>
            </i>
          </div>
          <button type="submit" class="btn btn-primary-one search-modal__form--btn">Buscar</button>
        </form>
      </div>
    </div>
  </div>
</div>
