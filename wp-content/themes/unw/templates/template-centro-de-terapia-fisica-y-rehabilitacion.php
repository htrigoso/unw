<?php
/**
 * Template Name: Centro de Terapia Física y Rehabilitación
 */
?>

<?php set_query_var('ASSETS_CHUNK_NAME', 'backup'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php
  get_header();
  $acf_sidebar = get_field('sidebar');
  $acf_benefits = get_field('benefits');
  $acf_infra = get_field('infra');
  $acf_services = get_field('services');
  $acf_promotions = get_field('promotions');
  $acf_staff = get_field('staff');
  $acf_schedule = get_field('schedule');

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
                            <?= esc_html($acf_benefits['title']) ?>
                          </h2>
                          <div class="line">
                          </div>
                        </div>
                        <div class="w-layout-grid grilla_centros">


                          <?php if (!empty($acf_benefits['cards'])):
                          foreach ($acf_benefits['cards'] as $benefit) : ?>
                          <div class="item_grilla mw">
                            <div class="col-item title">
                              <?php if (!empty($benefit['icon']['url'])): ?>
                              <img src="<?= esc_url($benefit['icon']['url']) ?>"
                                alt="<?= esc_attr($benefit['icon']['alt'] ?? $benefit['icon']['title']) ?>"
                                class="img_grilla_item img_grilla_centros">
                              <?php endif; ?>
                              <div>
                                <?= wp_kses_post($benefit['description']) ?>

                              </div>

                            </div>
                          </div>
                          <?php endforeach;
                          endif
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
                                  get_template_part('content-parts/components/accordion', null, ['accordion' => $acf_infra['accordion_items'], 'active_index'=>false]);
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="section_tab _2-col" id="servicios_centros">
                  <div class="content_seccion_tab full">
                    <div class="info_section full">
                      <div class="content_section">
                        <div class="title_section">
                          <h2 class="h3_interna_title">
                            <?= esc_html($acf_infra['title']) ?> </h2>
                          <div class="line">
                          </div>
                        </div>
                        <?php
                          get_template_part('content-parts/components/accordion', null, ['accordion' => $acf_services['accordion_items'], 'active_index'=>false]);
                        ?>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="section_tab _2-col" id="promociones_centros">
                  <div class="content_seccion_tab full">
                    <div class="info_section full">
                      <div class="info_section full">
                        <div class="content_section">
                          <div class="title_section">
                            <h2 class="h3_interna_title">
                              <?= esc_html($acf_promotions['title']) ?> </h2>
                            <div class="line">
                            </div>
                          </div>
                        </div>
                        <div class="clase_para_wordpress ">
                          <?= wp_kses_post($acf_promotions['content']) ?>
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
                        <div class="centro_coordinadores-new">
                          <div class="item_coordinador">
                            <ul class="list margintop" role="list">
                              <?php
                              foreach ($acf_staff['lists'] as $key => $staff):
                              ?>
                              <li class="item_list">
                                <div class="coordinador_name">
                                  <?= esc_html($staff['title']) ?>
                                </div>

                                <?= wp_kses_post($staff['description']) ?>

                              </li>
                              <?php endforeach ?>
                            </ul>
                          </div>

                        </div>
                        <a class="btn-legacy w-button" data-ix="openmodalcentros" href="#"
                          style="transition: color 0.15s, background-color 0.2s;">
                          <?= esc_html($acf_staff['modal']['button']) ?>
                        </a>
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
                          if(!empty($acf_schedule)):
                          foreach ($acf_schedule as $key => $schedule):
                          ?>
                          <div class="contact_box">
                            <?=wp_kses_post($schedule['content']) ?>
                          </div>
                          <?php
                           endforeach;
                           endif
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
      <div class="modal-centros">
        <div class="cerrar-modal" data-ix="closemodalcentros"
          style="transition: transform 0.2s, -webkit-transform 0.2s;">
          <div class="p-16 blanco">
            Cerrar
          </div>
          <img alt="" class="icon-cerrar" src="<?= UPLOAD_MIGRATION_PATH . '/shared/cerrar-blanco.svg' ?>">

        </div>
        <div class="contenido_gridstaff">
          <h3 class="h3_verde">
            <?= esc_html($acf_staff['title_modal']) ?>
          </h3>
          <div class="w-layout-grid gridstaff">
            <?php
            foreach ($acf_staff['modal']['staff'] as  $staff):
            ?>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_check.svg' ?>">
              <div class="userstaf">
                <div class="nombrestaff">
                  <?= esc_html($staff['title']) ?>
                </div>
                <div class="cargostaff">
                  <?= esc_html($staff['description']) ?>
                </div>
              </div>
            </div>
            <?php  endforeach?>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>
<?php get_footer(); ?>