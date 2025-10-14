<?php
/**
 * Template Name: Defensoría Universitaria
 */
?>

<?php set_query_var('ASSETS_CHUNK_NAME', 'migration'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php
  get_header();
  $acf_forms = get_field('forms');
  $acf_canal = get_field('canal');
$acf_sidebar = get_field('sidebar');
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
                <div class="info_content_tab full-right">
                  <div class="section_tab _2-col">
                    <div class="content_seccion_tab">
                      <div class="info_section full">

                        <!-- Sección del Post Bienestar Estudiantil y Becas del CPT Bienestar Universitario - Hernán Chira - Parte 3 - INICIO -->
                        <div class="clase_para_wordpress richt_text" id="presentacion">
                          <?php
                              the_content();
                            ?>
                        </div>
                      </div>
                      <!-- Sección del Post Bienestar Estudiantil y Becas del CPT Bienestar Universitario - Hernán Chira - Parte 3 - INICIO -->

                      <div class="content_section pr">
                        <?php foreach ($acf_forms as $section): ?>
                        <div id="<?= sanitize_title($section['title']); ?>" class="seccion_defensoriauni">

                          <!-- Título de sección -->
                          <div class="title_section">
                            <h4 class="h3_interna_title verde _20">
                              <?= esc_html($section['title']); ?><br>
                            </h4>
                          </div>

                          <!-- Grid de ítems -->
                          <div class="w-layout-grid grilla _3-col defensoriauni">
                            <?php foreach ($section['cards'] as $card): ?>
                            <a title="<?= esc_attr($card['title']); ?>" href="<?= esc_url($card['link']['url']); ?>"
                              target="<?= esc_attr($card['link']['target']); ?>"
                              class="item_serv_university w-inline-block">

                              <!-- Título del recurso -->
                              <h4 class="h4_light"><?= esc_html($card['title']); ?></h4>

                              <!-- Botón de descarga/ver -->
                              <div class="box_descargar">
                                <img src="<?= esc_url($card['image']['url']); ?>"
                                  alt="<?= esc_attr($card['image']['alt']); ?>" class="icon paddingright">
                                <div class="btn-legacy text"><?= esc_html($card['link']['title']); ?></div>
                              </div>
                            </a>
                            <?php endforeach; ?>
                          </div>

                        </div>
                        <?php endforeach; ?>
                      </div>
                      <?php


                        if ($acf_canal): ?>
                      <div class="content_section pr">
                        <div id="modalidades" class="seccion_defensoriauni">

                          <!-- Título -->
                          <div class="title_section">
                            <h3 class="h3_interna_title"><?= esc_html($acf_canal['title']); ?><br></h3>
                            <div class="line"></div>
                          </div>

                          <!-- Descripción -->
                          <?php if (!empty($acf_canal['description'])): ?>
                          <div class="richt_text">
                            <?= wp_kses_post($acf_canal['description']); ?>
                          </div>
                          <?php endif; ?>

                          <!-- Lista de canales -->
                          <div class="w-layout-grid grilla margintop defensoriauni">
                            <?php if (!empty($acf_canal['lists'])): ?>
                            <?php foreach ($acf_canal['lists'] as $item): ?>
                            <div class="item_serv_university flextop fondoverde">
                              <?= wp_kses_post($item['content']); ?>
                            </div>
                            <?php endforeach; ?>
                            <?php endif; ?>
                          </div>

                        </div>
                      </div>
                      <?php endif; ?>

                      <!-- Sección del Post Bienestar Estudiantil y Becas del CPT Bienestar Universitario - Hernán Chira - Parte 4 - INICIO -->
                    </div>
                    <!-- Sección del Post Bienestar Estudiantil y Becas del CPT Bienestar Universitario - Hernán Chira - Parte 4 - FIN -->




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
