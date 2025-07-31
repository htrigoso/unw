<form class="blog-search-form" role="search" method="get" action="<?php echo esc_url(get_permalink()); ?>">
  <div class="blog-search-form__input">
    <i class="blog-search-form__icon">
      <svg width="24" height="24">
        <use xlink:href="#search-black"></use>
      </svg>
    </i>
    <input type="search" placeholder="Ej: Arquitectura" name="s" value="<?php echo esc_attr(get_search_query()); ?>"
      aria-label="Buscar en el blog">
  </div>
  <button class="btn btn-primary-one blog-search-form__button" type="submit">
    Buscar
  </button>

  <!-- Campo oculto para limitar búsqueda solo al blog -->
  <input type="hidden" name="post_type" value="post">
</form>