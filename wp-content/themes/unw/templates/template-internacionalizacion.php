<?php
/**
 * Template Name: Internacionalizacion
 */
?>

<?php set_query_var('ASSETS_CHUNK_NAME', 'migration'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php
  get_header();
  $acf_sidebar = get_field('sidebar');
  $acf_presentations = get_field('presentations');
  $acf_movilidad = get_field('movilidad');
  $acf_postular = get_field('postular');
  $acf_steps = get_field('steps');
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
                <div class="tabs_menu notab serv_uni inter">
                  <?php
                    get_template_part('content-parts/components/sidebar', null, ['sidebar' => $acf_sidebar['sidebar_items']]);
                  ?>

                </div>
                <a href="#" class="btn icon center hide hide-all w-inline-block"><img
                    src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_download.svg' ?>" alt="" class="btn_descargar">
                  <div>Convenios de <br>la Universidad</div>
                </a>
              </div>
              <div class="col-1 full nopadding">
                <div class="tab_info_carreras">
                  <div class="section_container internas pb-40">
                    <div class="content_section">
                      <div class="clase_para_wordpress">

                        <?php
                              the_content();
                      ?>
                      </div>
                    </div>
                    <div class="content_section mt">
                      <div class="w-layout-grid grid-2 inter">
                        <?php if (!empty($acf_presentations)) : ?>
                        <?php foreach ($acf_presentations as $item) : ?>
                        <div class="item_inter">
                          <?=  wp_kses_post($item['content']);?>
                        </div>
                        <?php endforeach; ?>
                        <?php endif; ?>

                      </div>
                    </div>
                  </div>
                  <div id="sec-2" class="section_container internas">
                    <div class="title_section margintop">
                      <h3 class="h3_interna_title"><?= esc_html($acf_movilidad['title']); ?></h3>
                      <div class="line"></div>
                    </div>
                    <div class="content_section">
                      <div class="w-layout-grid grid-3">
                        <?php if (!empty($acf_movilidad['cards'])) : ?>
                        <?php foreach ($acf_movilidad['cards'] as $card) : ?>
                        <div class="item_inter outline padding20">
                          <?= wp_kses_post($card['content']); ?>
                        </div>
                        <?php endforeach; ?>
                        <?php endif; ?>


                      </div>
                    </div>
                  </div>



                  <div id="sec-4" class="section_container internas">
                    <div class="title_section">
                      <h3 class="h3_interna_title"><?= esc_html($acf_postular['title']); ?></h3>
                      <div class="line"></div>
                    </div>
                    <div class="content_section">
                      <div class="w-layout-grid grid-3 center">
                        <?php if (!empty($acf_postular['cards'])) : ?>
                        <?php foreach ($acf_postular['cards'] as $index => $card) : ?>
                        <div class="item_inter outline padding20 flexhorizontal internacionalizacion-card">
                          <?php if (!empty($card['image']['url'])) : ?>
                          <img src="<?= esc_url($card['image']['url']); ?>"
                            alt="<?= esc_attr($card['image']['alt'] ?? $card['image']['title']); ?>"
                            class="icon paddingright">
                          <?php endif; ?>

                          <?php if (!empty($card['content'])) : ?>
                          <p><?= $card['content']; ?></p>
                          <?php endif; ?>

                          <div class="number_list">
                            <div><?= str_pad($index + 1, 2, '0', STR_PAD_LEFT); ?></div>
                          </div>
                        </div>
                        <?php endforeach; ?>
                        <?php endif; ?>



                      </div>
                    </div>
                  </div>

                  <div id="sec-5" class="section_container internas">
                    <div class="title_section">
                      <h3 class="h3_interna_title"><?= esc_html($acf_steps['title']); ?></h3>
                      <div class="line"></div>
                    </div>
                    <div class="content_section">
                      <div class="w-layout-grid grid-3 center">
                        <?php if (!empty($acf_steps['cards'])) : ?>
                        <?php foreach ($acf_steps['cards'] as $index => $step) : ?>
                        <div class="item_inter outline padding20 flexhorizontal internacionalizacion-card">
                          <?php if (!empty($step['content'])) : ?>
                          <p><?= $step['content']; ?></p>
                          <?php endif; ?>

                          <div class="number_list">
                            <div><?= str_pad($index + 1, 2, '0', STR_PAD_LEFT); ?></div>
                          </div>
                        </div>
                        <?php endforeach; ?>
                        <?php endif; ?>

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