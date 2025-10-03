<?php

/**
 * Template Name: Examen de Admisión
 */
?>

<?php set_query_var('ASSETS_CHUNK_NAME', 'migration'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php
  $acf_sidebar = get_field('sidebar');
  $acf_examen = get_field('examen');
get_header();
?>

<?php get_template_part(GENERAL_CONTENT_PATH, 'navbar'); ?>
<main>
  <div class="main_container">
    <?php
          get_template_part('content-parts/components/info-cover');
        ?>
    <div class="main_page">
      <div class="page_interna">
        <div class="container full">
          <div class="_2-col">
            <div class="col-1">
              <div class="tabs_menu notab">
                <div class="wrapper_collection w-dyn-list">
                  <div role="list" class="collection_list admin w-dyn-items">
                    <?php
                    get_template_part('content-parts/components/sidebar', null, ['sidebar' => $acf_sidebar['sidebar_items']]);
                  ?>
                  </div>
                </div>
              </div>
              <div class="examen notab">
                <div class="text_18 bold dark"><?=$acf_examen['title']?></div>
                <div class="date_exam notab">
                  <div class="number_date">
                    <h2 class="_24 carrera"><?=$acf_examen['year']?></h2>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-1">
              <div class="info_content_tab full-right">
                <div class="section_tab _2-col">
                  <div class="content_seccion_tab">
                    <div class="info_section nopadding">
                      <?php
                              the_content();
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
</main>
<?php
add_filter('show_book_link', '__return_true');
get_footer();
?>
