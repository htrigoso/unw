<div class="search-modal__wrapper">
  <div class="search-modal__wrapper__content">
    <div class="x-container sidebar__header">
      <a class="sidebar__logo pointer" href="<?php echo esc_url(home_url('/')); ?>">
        <img width="101" height="40" src="<?= UPLOAD_PATH . '/logo-unw.svg' ?>" alt="Logo UNW">
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
        <form action="<?php echo home_url('/'); ?>">
          <div class="search-field">
            <input type="text" name="s" placeholder="¿Qué estás buscando?" />
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