<?php
/**
 * Template Name: Direccion de Empleabilidad
 */
?>

<?php set_query_var('ASSETS_CHUNK_NAME', 'migration'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php
  get_header();
  $acf_sidebar = get_field('sidebar');
  $acf_cards = get_field('items');
  $acf_schedule = get_field('schedule');
  $acf_more = get_field('more');

?>



<?php get_template_part(GENERAL_CONTENT_PATH, 'navbar');?>
<main>
  <div class="main_container">
    <div class="info_page">
      <?php
          get_template_part('content-parts/components/info-cover');
        ?>
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
                <div class="info_content_tab full-right" id="presentacion">
                  <div class="section_tab _2-col">
                    <div class="content_seccion_tab">
                      <div class="info_section full">
                        <div class="clase_para_wordpress richt_text">
                          <?php
                              the_content();
                            ?>
                        </div>


                      </div>
                      <!-- Sección del Post Bienestar Estudiantil y Becas del CPT Bienestar Universitario - Hernán Chira - Parte 4 - FIN -->
                      <?php
                        $acf_more = get_field('more');

                        if ( $acf_more ) :
                            $title = $acf_more['title'] ?? '';
                            $icon  = $acf_more['icon'] ?? [];
                            $link  = $acf_more['link'] ?? [];
                        ?>
                      <div id="conocemas" class="content_section pr">
                        <div class="title_section">
                          <?php if ( $title ) : ?>
                          <h3 class="h3_interna_title"><?= esc_html( $title ); ?></h3>
                          <div class="line"></div>
                          <?php endif; ?>
                        </div>

                        <?php if ( !empty($link['url']) ) : ?>
                        <div class="btn-legacy_box">
                          <a href="<?= esc_url( $link['url'] ); ?>" target="<?= $link['target'] ?: '_self'; ?>"
                            class="btn-legacy icon marginright w-inline-block">

                            <?php if ( !empty($icon['url']) ) : ?>
                            <img src="<?= esc_url( $icon['url'] ); ?>"
                              alt="<?= esc_attr( $icon['alt'] ?: $link['title'] ); ?>" class="icon_btn-legacy big">
                            <?php endif; ?>

                            <div><?= esc_html( $link['title'] ); ?></div>
                          </a>
                        </div>
                        <?php endif; ?>
                      </div>
                      <?php endif; ?>



                    </div>
                  </div>
                  <div class="contact_box contact">
                    <?php
                     echo wp_kses_post( $acf_schedule );
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
</main>
<?php
add_filter('show_book_link', '__return_true');
get_footer();
?>
