<?php

/**
 * Template Name: Pensiones y Precios Carreras Universitarias
 */
?>

<?php
// ==================== EXPORTAR DATOS ACF ====================
// URL: ?export_acf=1


// ==================== IMPORTAR DATOS ACF ====================
// URL: ?import_acf=1
if (isset($_GET['import_acf']) && $_GET['import_acf'] === '1' && current_user_can('manage_options')) {
  $post_id = get_the_ID();

  // Buscar archivo JSON en carpeta assets del tema
  $theme_dir = get_template_directory();
  $import_file = $theme_dir . '/assets/precios-carreras-export-2025-12-17.json';

  if (file_exists($import_file)) {
    $json_data = file_get_contents($import_file);
    $import_data = json_decode($json_data, true);

    if ($import_data && isset($import_data['acf_fields'])) {
      // Importar cada campo ACF
      $imported = [];
      foreach ($import_data['acf_fields'] as $field_name => $field_value) {
        if ($field_value) {
          update_field($field_name, $field_value, $post_id);
          $imported[] = $field_name;
        }
      }

      // Actualizar contenido del post si está vacío
      $current_content = get_post_field('post_content', $post_id);
      if (empty($current_content) && !empty($import_data['post_content'])) {
        wp_update_post([
          'ID' => $post_id,
          'post_content' => $import_data['post_content']
        ]);
      }

      echo '<div style="background: #4CAF50; color: white; padding: 30px; margin: 20px; text-align: center; border-radius: 5px; font-family: Arial;">';
      echo '<h2 style="margin: 0 0 20px 0;">✅ Importación Exitosa</h2>';
      echo '<p><strong>Campos importados:</strong></p>';
      echo '<ul style="list-style: none; padding: 0;">';
      foreach ($imported as $field) {
        $data = get_field($field, $post_id);
        $count = is_array($data) && isset($data['cards']) ? count($data['cards']) : 0;
        echo '<li>✓ ' . $field . ' (' . $count . ' items)</li>';
      }
      echo '</ul>';
      echo '<p style="margin-top: 20px;"><strong>Importado desde:</strong> ' . esc_html($import_data['site_url']) . '</p>';
      echo '<p><strong>Fecha de exportación:</strong> ' . esc_html($import_data['exported_date']) . '</p>';
      echo '<br><a href="' . get_permalink($post_id) . '" style="background: white; color: #4CAF50; padding: 10px 20px; text-decoration: none; border-radius: 3px; display: inline-block;">Ver página</a>';
      echo '</div>';
      exit;
    }
  } else {
    echo '<div style="background: #f44336; color: white; padding: 30px; margin: 20px; text-align: center; border-radius: 5px; font-family: Arial;">';
    echo '<h2 style="margin: 0 0 20px 0;">❌ Error: Archivo no encontrado</h2>';
    echo '<p>Sube el archivo <strong>precios-carreras-export-2025-12-17.json</strong> a:</p>';
    echo '<p style="background: rgba(0,0,0,0.2); padding: 15px; border-radius: 3px; font-family: monospace; word-break: break-all;">' . $theme_dir . '/assets/</p>';
    echo '<br><p><strong>Pasos:</strong></p>';
    echo '<ol style="text-align: left; max-width: 600px; margin: 0 auto;">';
    echo '<li>Descarga el JSON desde LOCAL con ?export_acf=1</li>';
    echo '<li>Sube el archivo a: <code>/wp-content/themes/unw/assets/</code></li>';
    echo '<li>Renombra si es necesario a: <code>precios-carreras-export-2025-12-17.json</code></li>';
    echo '<li>Recarga esta página con ?import_acf=1</li>';
    echo '</ol>';
    echo '</div>';
    exit;
  }
}

?>

<?php set_query_var('ASSETS_CHUNK_NAME', 'migration'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php
get_header();
?>

<?php get_template_part(GENERAL_CONTENT_PATH, 'navbar'); ?>

<?php
$regularCycles = get_field('regular_cycle');
$feeAcademic = get_field('fee_academic');
$internshipCycle = get_field('internship_cycle');
$note = get_field('note');
?>
<main>
  <div class="main_container">
    <?php
    get_template_part('content-parts/components/info-cover');
    ?>

    <div class="main_page">
      <div class="page_interna">
        <div class="section_container nopaddingbotttom">
          <div class="container auto">
            <div class="info_universidad">
              <div id="w-node-e5aebbeb63fe-aa88130f" class="item_info privacidad">
                <div class="prccarr">
                  <div class="prccarr-container">
                    <main>
                      <p>
                        <?php  the_content() ?>
                      </p>
                      <div class="header-section">
                        <h2><?= esc_html($regularCycles['titulo']) ?></h2>
                      </div>
                      <div class="career-list-container">
                        <?php foreach ($regularCycles['cards'] as $key => $card):?>
                        <section>
                          <h2><?= esc_html($card['title']) ?></h2>
                          <dl>
                            <dt><?= esc_html($card['fee']) ?></dt>
                            <dd>
                              <ul>
                                <?php foreach ($card['prices'] as $key => $price):?>
                                <li><span class="prclabel"><?= esc_html($price['titulo']) ?></span> <span
                                    class="prrpta"><?= esc_html($price['price']) ?></span></li>
                                <?php endforeach ?>
                              </ul>
                            </dd>
                          </dl>
                        </section>
                        <?php endforeach; ?>
                      </div>
                      <h3><?= esc_html($feeAcademic['titulo']);?></h3>
                      <div class="career-list-container">
                        <?php foreach ($feeAcademic['cards'] as $key => $fee):?>
                        <section>
                          <dl>
                            <dt><?= esc_html($fee['title']) ?></dt>
                            <dd>
                              <ul>
                                <?php foreach ($fee['prices'] as $key => $price):?>
                                <li><span class="prclabel"><?= esc_html($price['titulo']) ?></span> <span
                                    class="prrpta"><?= esc_html($price['price']) ?></span></li>
                                <?php endforeach ?>
                              </ul>
                            </dd>
                          </dl>
                        </section>
                        <?php endforeach; ?>
                      </div>
                      <div class="header-section">
                        <h2><?= esc_html($regularCycles['titulo']) ?></h2>
                      </div>
                      <div class="career-list-container">
                        <?php foreach ($internshipCycle['cards'] as $key => $card):?>
                        <section>
                          <h2><?= esc_html($card['title']) ?></h2>
                          <dl>
                            <dt><?= esc_html($card['fee']) ?></dt>
                            <dd>
                              <ul>
                                <?php foreach ($card['prices'] as $key => $price):?>
                                <li><span class="prclabel"><?= esc_html($price['titulo']) ?></span> <span
                                    class="prrpta"><?= esc_html($price['price']) ?></span></li>
                                <?php endforeach ?>
                              </ul>
                            </dd>
                          </dl>
                        </section>
                        <?php endforeach; ?>
                      </div>
                    </main>
                    <p class="note"><?= esc_html($note); ?></p>
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
