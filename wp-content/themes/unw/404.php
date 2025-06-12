<?php set_query_var('ASSETS_CHUNK_NAME', '404'); ?>

<?php get_header(); ?>

<?php
  $logo = get_field('logo', 'options');
  $error = get_field('error-404', 'options');
?>

<main>
  <section class="error-404">
    <div class="error-404__header">
      <?php
        if(!empty($logo)):
          $white_logo = $logo['white_logo'];
      ?>
      <a href="<?php echo home_url(); ?>" class="error-404__logo pointer">
        <img
          class="lazy"
          data-src="<?php echo $white_logo['url']; ?>"
          alt="<?php echo $white_logo['alt'] ?>"
          width="131"
          height="40"
        />
      </a>
      <?php endif; ?>
    </div>
    <div class="error-404__content">
      <div class="m-b-32 text-center">
        <h1><?php echo $error['title']; ?></h1>
        <p class="text-center"><?php echo $error['paragraph']; ?></p>
      </div>
      <div class="flex-center">
        <a href="<?php echo home_url(); ?>" class="btn-basic-icon pointer">
          <?php echo _e('REGRESAR A INICIO', 'unw') ?>
          <i class="icon suffix-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
              <g id="Grupo_7356" data-name="Grupo 7356" transform="translate(-1714)">
                <g id="Grupo_7353" data-name="Grupo 7353" transform="translate(1724.877 10.877)">
                  <path id="Trazado_53" data-name="Trazado 53" d="M0,0H18V18H0Z" fill="none"/>
                  <path id="Trazado_54" data-name="Trazado 54" d="M13.13,9.306,9.106,5.283l1.061-1.061L16,10.056,10.167,15.89,9.106,14.829l4.023-4.023H4v-1.5Z" transform="translate(-1 -1.055)" fill="#d64935"/>
                </g>
                <g id="Elipse_102" data-name="Elipse 102" transform="translate(1714)" fill="none" stroke="#d64935" stroke-width="2">
                  <circle cx="20" cy="20" r="20" stroke="none"/>
                  <circle cx="20" cy="20" r="19" fill="none"/>
                </g>
              </g>
            </svg>
          </i>
        </a>
      </div>
    </div>
  </section>
</main>


<?php get_footer(); ?>
