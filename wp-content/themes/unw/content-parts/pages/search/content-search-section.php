<section class="search-section">
  <div class="search-section__wrapper x-container x-container--pad-213">
    <form class="search-section__form" onsubmit="return this.querySelector('[name=s]').value.trim() !== ''">
      <h1 class="search-section__title">Resultados de la búsqueda:</h1>
      <?php preserve_url_params();?>
      <?php get_template_part(
        COMMON_CONTENT_PATH,
        'search-input',
        [
          'input_name' => 's',
          'aria_label' => 'Buscar en el sitio',
          'placeholder' => 'Ej: Admisión'
        ]
      ) ?>
      <button class="btn btn-primary-one search-section__button" type="submit">
        Buscar
      </button>
    </form>
  </div>
</section>