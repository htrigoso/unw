<?php

/**
 * Template Name: Retiro de Cursos
 */
?>

<?php set_query_var('ASSETS_CHUNK_NAME', 'migration'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php
$page_id = get_the_ID();
get_header();
$acf_sidebar = get_field('sidebar');
$acf_services = get_field('services');

?>

<?php get_template_part(GENERAL_CONTENT_PATH, 'navbar'); ?>
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
                <div class="tabs_menu notab serv_uni">
                  <?php
                    get_template_part('content-parts/components/sidebar', null, ['sidebar' => $acf_sidebar['sidebar_items']]);
                  ?>
                </div>
              </div>
              <div class="col-1 full">
                <div class="info_content_tab full-right">
                  <div class="section_tab _2-col">
                    <div class="content_seccion_tab">
                      <div class="info_section">
                        <?php
                              the_content();
                            ?>

                      </div>
                      <div class="content_section">
                        <div class="title_section">
                          <h3 class="h3_interna_title"><?= esc_html($acf_services['title']) ?></h3>
                          <div class="line"></div>
                        </div>
                        <div class="wrapper_collection mt auto w-dyn-list">
                          <div role="list" class="collection_list gilla _3-col registrosacademicos w-dyn-items">
                            <?php
                                  get_template_part('content-parts/components/cards', null, ['cards' => $acf_services['cards']]);
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
<?php
add_filter('show_book_link', '__return_true');
get_footer();
?>
