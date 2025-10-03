<?php

/**
 * Template Name: Trasparencia
 */
?>

<?php set_query_var('ASSETS_CHUNK_NAME', 'migration'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php
get_header();
?>

<?php get_template_part(GENERAL_CONTENT_PATH, 'navbar'); ?>
<main>
  <div class="main_container">
    <div class="cover_img_page center fijo">
      <div class="overlay"></div>

      <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('full', ['class' => 'img_cover']); ?>
      <?php endif; ?>

      <div class="info_cover_page center">
        <div class="container">
          <h2 class="categoria_page hide">Regresar</h2>
          <h1 class="h1_carreras"><strong><?= get_the_title(); ?></strong><br></h1>
        </div>
      </div>
      <div class="miga_de_pan">
        <div class="container">
          <div class="content_links_miga"><a href="<?= home_url('/') ?>" class="link miga">Inicio /</a><a
              href="<?= home_url('/transparencia/') ?>" aria-current="page" class="link miga"><?= get_the_title(); ?></a>
          </div>
        </div>
      </div>
    </div>
    <div class="main_page">
      <div class="page_interna">
        <div class="section_container nopaddingbotttom">
          <div class="container auto">
            <div class="section">
              <div class="clase_para_wordpress transparencia">
                <?php
                the_content();
                ?>
              </div>
            </div>
            <div class="section">
              <div class="content_section">
                <?php
                $accordion_items = get_field('accordionItems');
                get_template_part('content-parts/components/accordion', null, ['accordion' => $accordion_items['accordion_items']]);
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php
add_filter('show_book_link', '__return_true');

get_footer();
?>
