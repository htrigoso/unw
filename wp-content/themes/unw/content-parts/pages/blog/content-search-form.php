<form class="blog-search-form" role="search" method="get" action="<?php echo esc_url(get_permalink()); ?>">
  <?php get_template_part(
    COMMON_CONTENT_PATH,
    'search-input',
    [
      'input_name' => 's',
      'aria_label' => 'Buscar en el blog',
      'placeholder' => 'Ej: Arquitectura'
    ]
  ) ?>
  <button class="btn btn-primary-one blog-search-form__button" type="submit">
    Buscar
  </button>

  <input type="hidden" name="post_type" value="post">
</form>
