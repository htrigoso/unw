<?php
/**
 * Template Name: Responsabilidad Social
 */
?>

<?php set_query_var('ASSETS_CHUNK_NAME', 'migration'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php
  get_header();
  global $post;
  $parent_id = wp_get_post_parent_id( $post->ID );
  $acf_sidebar = get_field('sidebar');
  $acf_cards = get_field('items');
?>



<?php get_template_part(GENERAL_CONTENT_PATH, 'navbar');?>
<main>
  <div class="main_container">
    <div class="info_page">
      <div class="cover_img_page center">
        <div class="overlay"></div>
        <?php if ( has_post_thumbnail() ) : ?>
        <?php the_post_thumbnail( 'full', [ 'class' => 'img_cover' ] ); ?>
        <?php endif; ?>
        <div id="presentacion_vf" class="info_cover_page center">
          <div id="presentacion" class="container">
            <h2 class="categoria_page serv_uni">
              <?php
              if ( $parent_id ) {
                  echo get_the_title( $parent_id );
                }
              ?>
            </h2>
            <h2 class="h1_carreras"><?= get_the_title(); ?></h2>
          </div>
        </div>
        <div class="miga_de_pan">
          <div class="container">
            <div class="content_links_miga"><a href="<?= home_url("/") ?>" class="link miga">Inicio /</a><a
                href="<?= home_url("/servicios-universitarios/") ?>" class="link miga">
                <?php
              if ( $parent_id ) {
                  echo get_the_title( $parent_id );
                }
              ?>
                /</a><a href="#" aria-current="page" class="link miga w--current"><?= get_the_title(); ?></a></div>
          </div>
        </div>
      </div>
      <div class="main_page">
        <div class="page_interna">
          <div class="container full">
            <div class="_2-col">
              <div class="col-1 full">
                <div class="tabs_menu notab serv_uni secretaria">
                  <?php
                    get_template_part('content-parts/components/sidebar', null, ['sidebar' => $acf_sidebar['sidebar_items']]);
                  ?>

                </div>
              </div>
              <div class="col-1 full right">
                <div class="info_content_tab full-right">
                  <div class="section_tab _2-col">
                    <div class="content_seccion_tab">
                      <div class="info_section full" id="presentacion">
                        <div class="clase_para_wordpress richt_text">
                          <?php
                              the_content();
                            ?>
                        </div>
                      </div>


                      <div id="servsecretaria" class="content_section">
                        <div class="wrapper_collection mt auto w-dyn-list">
                          <div role="list" class="collection_list gilla _3-col w-dyn-items">
                            <?php
                                get_template_part('content-parts/components/cards', null, ['cards' => $acf_cards['cards']]);
                              ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_template_part(HOME_CONTENT_PATH, 'more-info-form'); ?>
<a class="book-link" href="javascript:void(0);" data-modal-target="modal-more-info">
  <img src="<?= placeholder() ?>" class="book-link__icon lazyload"
    data-src="<?php echo UPLOAD_PATH . '/migration/solicitar.svg'; ?>" alt="Formulario General">
</a>
<?php get_footer(); ?>
