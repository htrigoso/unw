<?php
/**
 * Template Name: Centros de Análisis Clínicos
 */
?>

<?php set_query_var('ASSETS_CHUNK_NAME', 'backup'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php
  get_header();
  $acf_sidebar = get_field('sidebar');
  $acf_benefits = get_field('benefits');
  $acf_infra = get_field('infra');
  $acf_specialties = get_field('specialties');
  $acf_prices = get_field('prices');
  $acf_staff = get_field('staff');
  $acf_contacts = get_field('contacts');
?>



<?php get_template_part(GENERAL_CONTENT_PATH, 'navbar');?>
<main>
  <div class="main_container">
    <?php
          get_template_part('content-parts/components/info-cover');
        ?>
    <div class="main_page">
      <div class="page_interna">
        <div class="container full">
          <div class="_2-col">
            <div class="col-1 full">
              <div class="tabs_menu notab serv_uni centros">
                <?php
                    get_template_part('content-parts/components/sidebar', null, ['sidebar' => $acf_sidebar['sidebar_items']]);
                  ?>
              </div>
            </div>
            <div class="col-1 full">
              <div class="info_content_tab full-right mbottom">
                <div class="section_tab _2-col nopadding" id="presentacion_centro">
                  <div class="content_seccion_tab full">
                    <div class="info_section full">
                      <?php
                              the_content();
                      ?>
                    </div>
                  </div>
                </div>

                <div class="section_tab _2-col">
                  <div class="content_seccion_tab full" id="beneficios_centros">
                    <div class="info_section full">
                      <div class="content_section">
                        <div class="title_section">
                          <h2 class="h3_interna_title">
                            <?= esc_html($acf_benefits['title']) ?> </h2>
                          <div class="line">
                          </div>
                        </div>
                        <div class="w-layout-grid grilla_centros">
                          <?php
                              $cards = $acf_benefits['cards'];

                              if ($cards && is_array($cards)) :
                                foreach ($cards as $card) :
                                  $icon_url = $card['icon']['url'] ?? '';
                                  $title    = $card['title'] ?? '';
                              ?>
                          <div class="item_grilla mw">
                            <div class="col-item title">
                              <?php if ($icon_url): ?>
                              <img src="<?= esc_url($icon_url) ?>" alt="<?= esc_attr($title) ?>"
                                class="img_grilla_item img_grilla_centros">
                              <?php endif; ?>
                              <div>
                                <?= esc_html($title) ?><br>
                              </div>
                            </div>
                          </div>
                          <?php
                            endforeach;
                          endif;
                          ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="section_tab _2-col" id="infraestructura_centros">
                  <div class="content_seccion_tab full">
                    <div class="info_section full">
                      <div class="content_section">
                        <div class="title_section">
                          <h2 class="h3_interna_title">
                            <?= esc_html($acf_infra['title']) ?>
                          </h2>
                          <div class="line">
                          </div>
                        </div>
                        <?php
                          $accordion_items = $acf_infra['accordion_items'];

                          if ($accordion_items && is_array($accordion_items)) :
                            foreach ($accordion_items as $index => $item) :
                              $title   = $item['accordion_title'] ?? '';
                              $content = $item['accordion_content'] ?? '';
                              // ID único por item (importante si usas JS para abrir/cerrar)
                              $uid = 'accordion_' . $index;
                            ?>
                        <div class="acordeon">
                          <div class="trigger_acordeon" data-w-id="<?= esc_attr($uid) ?>">
                            <h4 class="h4_admin centros">
                              <?= esc_html($title) ?><br>
                            </h4>
                            <div class="icon_box admin">
                              <img alt="" class="arrow_down" src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>">
                            </div>
                          </div>
                          <div class="content_acordeon" style="height:0px;">
                            <div class="content_section">
                              <div class="clase_para_wordpress">
                                <?= wp_kses_post($content) // viene con <p> y HTML desde ACF ?>
                                <br>
                              </div>
                            </div>
                          </div>
                        </div>
                        <?php
                            endforeach;
                          endif;
                          ?>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="section_tab _2-col" id="especialidades_centros">
                  <div class="content_seccion_tab full">
                    <div class="info_section full">
                      <div class="content_section">
                        <div class="title_section">
                          <h2 class="h3_interna_title">
                            <?= esc_html($acf_specialties['title']) ?>
                          </h2>
                          <div class="line">
                          </div>
                        </div>
                        <?php
                          $specialties = $acf_specialties['accordion_items'];

                          if ($specialties && is_array($specialties)) :
                            foreach ($specialties as $index => $item) :
                              $title   = $item['accordion_title'] ?? '';
                              $content = $item['accordion_content'] ?? '';
                              $uid = 'specialty_' . $index; // ID único para cada trigger
                          ?>
                        <div class="acordeon">
                          <div class="trigger_acordeon" data-w-id="<?= esc_attr($uid) ?>">
                            <h4 class="h4_admin centros">
                              <?= esc_html($title) ?><br>
                            </h4>
                            <div class="icon_box admin">
                              <img alt="" class="arrow_down" src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>">
                            </div>
                          </div>
                          <div class="content_acordeon" style="height:0px;">
                            <div class="content_section">
                              <div>
                                <?= wp_kses_post($content) // viene con <p> y HTML desde ACF ?>
                                <br>
                              </div>
                            </div>
                          </div>
                        </div>
                        <?php
                            endforeach;
                          endif;
                          ?>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="section_tab _2-col" id="lista-de-precios_centros">
                  <div class="content_seccion_tab full">
                    <div class="info_section full">
                      <div class="info_section full">
                        <div class="content_section">
                          <div class="title_section">
                            <h2 class="h3_interna_title">
                              <?= esc_html($acf_prices['title']) ?> </h2>
                            <div class="line">
                            </div>
                          </div>
                        </div>
                        <div class="clase_para_wordpress ">
                          <?php
                                echo wp_kses_post($acf_prices['content'])
                          ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="section_tab _2-col" id="staff_centros">
                  <div class="content_seccion_tab full">
                    <div class="info_section full">
                      <div class="content_section">
                        <div class="title_section">
                          <h2 class="h3_interna_title">
                            <?= esc_html($acf_staff['title']) ?>
                          </h2>
                          <div class="line">
                          </div>
                        </div>
                        <div class="director_centro">
                          <?php echo wp_kses_post($acf_staff['content']) ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="section_tab _2-col" id="contacto_centros">
                  <div class="content_seccion_tab full">
                    <div class="info_section full">
                      <div class="content_section">
                        <div class="contact-2col">
                          <?php
                          $contacts = $acf_contacts;
                          foreach ($contacts as $contact):
                          ?>
                          <div class="contact_box">
                            <?php echo wp_kses_post($contact['content']) ?>
                          </div>
                          <?php endforeach ?>
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
<?php get_footer(); ?>
