<?php

/**
 * Template Name: Centros de Idiomas
 */
?>

<?php set_query_var('ASSETS_CHUNK_NAME', 'migration'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php
get_header();
$acf_sidebar = get_field('sidebar');
$acf_faq = get_field('faq');
$acf_contact = get_field('contact');
?>

<?php get_template_part(GENERAL_CONTENT_PATH, 'navbar'); ?>
<main>
  <div class="main_container">
    <div class="info_page">
      <?php
      get_template_part('content-parts/components/info-cover', null, [
        'title_extra' => 'Becas Externas'
      ]);
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
                <div class="info_content_tab full-right">
                  <div class="section_tab _2-col">
                    <div class="content_seccion_tab">
                      <div class="info_section full">
                        <div class="content_section pr" id="presentacion">
                          <div class="clase_para_wordpress link_normal richtidiomas w-richtext">
                            <!-- ichtidiomas w-richtext -->

                            <?php
                            the_content();
                            ?>





                          </div>
                        </div>
                        <div class="content_section pr" id="idiomas">
                          <?php
                          get_template_part('content-parts/components/accordion', null, ['accordion' => $acf_faq['accordion_items'], 'class_faq' => 'h4_faq']);
                          ?>


                        </div>
                      </div>
                    </div>
                    <?php if (isset($acf_contact)) { ?>
                      <div class="contact_box servicioswiener">
                        <?php
                        get_template_part('content-parts/components/contact', null, [
                          'contact' => $acf_contact
                        ]);
                        ?>

                      </div>
                    <?php } ?>
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
