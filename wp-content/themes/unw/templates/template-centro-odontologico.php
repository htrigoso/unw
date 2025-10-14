<?php
/**
 * Template Name: Centro Odontológico
 */
?>

<?php set_query_var('ASSETS_CHUNK_NAME', 'backup'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php
  get_header();
  $acf_sidebar = get_field('sidebar');
  $acf_infra = get_field('infra');
  $acf_specialties = get_field('specialties');
  $acf_our_patients = get_field('our_patients');
  $acf_results = get_field('results');
  $acf_services = get_field('services');
  $acf_staff = get_field('staff');
  $acf_gallery = get_field('gallery');
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
                                  get_template_part('content-parts/components/accordion', null, ['accordion' => $acf_specialties['accordion_items'], 'active_index'=>false]);
                        ?>

                      </div>
                    </div>
                  </div>
                </div>

                <div class="section_tab _2-col" id="nuestros-pacientes_centros">
                  <div class="content_seccion_tab full">
                    <div class="info_section full">
                      <div class="info_section full">
                        <?= wp_kses_post($acf_our_patients['content']) ?>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="section_tab _2-col" id="entrega-de-resultados_centros">
                  <div class="content_seccion_tab full">
                    <div class="info_section full">
                      <div class="info_section full">
                        <?= wp_kses_post($acf_results['content']) ?>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="section_tab _2-col" id="servicios_centros">
                  <div class="content_seccion_tab full">
                    <div class="info_section full">
                      <?= wp_kses_post($acf_services['content']) ?>
                    </div>
                  </div>
                </div>


                <div class="section_tab _2-col" id="staff_centros">
                  <div class="content_seccion_tab full">
                    <div class="info_section full">
                      <div class="content_section">
                        <?= wp_kses_post($acf_staff['content']) ?>
                        <a class="btn-legacy w-button" data-ix="openmodalcentros" href="#"
                          style="transition: color 0.15s, background-color 0.2s;">
                          <?= esc_html($acf_staff['modal']['button_text']) ?>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="section_tab _2-col" id="galeria_centros">
                  <div class="content_seccion_tab full">
                    <div class="info_section full">
                      <div class="content_section">
                        <div class="title_section">
                          <h2 class="h3_interna_title">
                            <?= esc_html($acf_gallery['title']) ?>
                          </h2>
                          <div class="line">
                          </div>
                        </div>
                        <div class="w-layout-grid grilla_infra mtop">
                          <?php foreach ($acf_gallery['photos'] as $image): ?>
                          <a class="item_img mobile w-inline-block w-lightbox" href="#">
                            <img alt="" class="img_light_box" src="<?= esc_url($image['image']['url'])  ?>">
                            <script class="w-json" type="application/json">
                            {
                              "items": [{
                                "type": "image",
                                "_id": "5fa5e35ca18867dfad8a8079",
                                "fileName": "enfermeria0.jpg",
                                "origFileName": "enfermeria0.jpg",
                                "width": 284,
                                "height": 173,
                                "fileSize": 70229,
                                "url": "<?= esc_url($image['image']['url'])  ?>"
                              }],
                              "group": "img_centro"
                            }
                            </script>
                          </a>
                          <?php endforeach; ?>
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
                            foreach ($acf_contacts as $key => $value):
                            ?>
                          <div class="contact_box">
                            <?=wp_kses_post($value['content'])?>
                          </div>
                          <?php
                            endforeach;
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
            <?= esc_html($acf_staff['modal']['title_modal'])?>
          </h3>
          <div class="w-layout-grid gridstaff">
            <?php
              $staff = $acf_staff['modal']['staff'];
              foreach ($staff as $key => $staf):
              ?>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_check.svg' ?>">
              <div class="userstaf">
                <div class="nombrestaff">
                  <?= esc_html($staf['title']) ?> </div>
                <div class="cargostaff">
                </div>
              </div>

            </div>
            <?php
             endforeach;

             ?>

          </div>
        </div>
      </div>
    </div>
  </div>


</main>
<?php get_footer(); ?>