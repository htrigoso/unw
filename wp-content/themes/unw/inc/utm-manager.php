<?php
// 1. Crear la tabla personalizada al activar el theme
function utm_manager_create_table() {
    global $wpdb;

    $table_name      = $wpdb->prefix . 'utm_links';
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        titulo VARCHAR(255) NOT NULL,
        utm_url TEXT NOT NULL,
        code_format VARCHAR(50) NOT NULL,
        utm_code VARCHAR(100) NOT NULL,
        location_href TEXT DEFAULT NULL,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once ABSPATH . 'wp-admin/includes/upgrade.php';
    dbDelta($sql);

    // Guardar versión para futuras actualizaciones
    add_option('utm_manager_db_version', '1.0');
}

// Ejecutar al activar el theme
add_action('after_switch_theme', 'utm_manager_create_table');

// IMPORTANTE: Ejecutar también en admin_init para crear/actualizar la tabla
add_action('admin_init', function() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'utm_links';
    $current_version = get_option('utm_manager_db_version', '0');

    // Si la versión es antigua o la tabla no tiene las columnas correctas, recrear
    if ($current_version !== '1.0') {
        // Verificar si existe la columna antigua 'url' en lugar de 'utm_url'
        $column_exists = $wpdb->get_results("SHOW COLUMNS FROM $table_name LIKE 'url'");

        if (!empty($column_exists)) {
            // Eliminar la tabla antigua y recrear con la nueva estructura
            $wpdb->query("DROP TABLE IF EXISTS $table_name");
            utm_manager_create_table();
        }
    }

    // Verificar si la tabla existe, si no, crearla
    if ($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
        utm_manager_create_table();
    }
});// 2. Añadir el menú en el admin con submenús
function utm_manager_admin_menu() {
    // Menú principal
    add_menu_page(
        'UTMs',                     // Título de la página
        'UTMs Links',                     // Texto en el menú
        'manage_options',           // Capacidad requerida
        'utm-manager',              // Slug
        'utm_manager_list_page',    // Callback para listado
        'dashicons-admin-links',    // Icono
        26                          // Posición
    );

    // Submenú: Listado (renombrar el primer item)
    add_submenu_page(
        'utm-manager',              // Padre
        'Todos los UTMs',           // Título de la página
        'Todos los UTMs',           // Texto en el menú
        'manage_options',           // Capacidad
        'utm-manager',              // Mismo slug que el padre
        'utm_manager_list_page'     // Callback
    );

    // Submenú: Añadir nuevo
    add_submenu_page(
        'utm-manager',              // Padre
        'Añadir nuevo UTM',         // Título de la página
        'Añadir nuevo',             // Texto en el menú
        'manage_options',           // Capacidad
        'utm-manager-add',          // Slug
        'utm_manager_add_page'      // Callback
    );
}
add_action('admin_menu', 'utm_manager_admin_menu');

// 3. Página de LISTADO de UTMs
function utm_manager_list_page() {
    if ( ! current_user_can('manage_options') ) {
        return;
    }

    global $wpdb;
    $table_name = $wpdb->prefix . 'utm_links';

    // --- ELIMINAR ---
    if ( isset($_GET['action'], $_GET['utm_id']) && $_GET['action'] === 'delete' ) {
        $utm_id = intval($_GET['utm_id']);
        check_admin_referer('utm_delete_' . $utm_id);

        $wpdb->delete(
            $table_name,
            ['id' => $utm_id],
            ['%d']
        );

        echo '<div class="notice notice-success is-dismissible"><p>UTM eliminada correctamente.</p></div>';
    }

    // --- EDITAR (inline) ---
    if ( isset($_POST['utm_action']) && $_POST['utm_action'] === 'edit' ) {
        check_admin_referer('utm_edit_form');

        $utm_id       = intval($_POST['utm_id']);
        $titulo       = sanitize_text_field($_POST['titulo'] ?? '');
        $utm_url      = sanitize_textarea_field($_POST['utm_url'] ?? '');
        $code_format  = sanitize_text_field($_POST['code_format'] ?? '');
        $utm_code     = sanitize_text_field($_POST['utm_code'] ?? '');
        $location_href = sanitize_textarea_field($_POST['location_href'] ?? '');

        if ( ! empty($titulo) && ! empty($utm_url) && ! empty($code_format) && ! empty($utm_code) ) {
            $wpdb->update(
                $table_name,
                [
                    'titulo'        => $titulo,
                    'utm_url'       => $utm_url,
                    'code_format'   => $code_format,
                    'utm_code'      => $utm_code,
                    'location_href' => $location_href,
                ],
                ['id' => $utm_id],
                ['%s', '%s', '%s', '%s', '%s'],
                ['%d']
            );

            echo '<div class="notice notice-success is-dismissible"><p>UTM actualizada correctamente.</p></div>';
        }
    }

    // Verificar si estamos editando
    $editing_id = isset($_GET['edit']) ? intval($_GET['edit']) : 0;
    $editing_utm = null;
    if ($editing_id) {
        $editing_utm = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d", $editing_id));
    }

    // Si estamos editando, solo mostrar el formulario
    if ($editing_utm): ?>

<div class="wrap">
  <h1 class="wp-heading-inline">Editar UTM</h1>
  <a href="<?php echo admin_url('admin.php?page=utm-manager'); ?>" class="page-title-action">← Volver al listado</a>
  <hr class="wp-header-end" />
  <!-- FORMULARIO DE EDICIÓN -->
  <div class="card" style="max-width: 800px; margin: 20px 0;">
    <h2>Editar UTM</h2>
    <form method="post">
      <?php wp_nonce_field('utm_edit_form'); ?>
      <input type="hidden" name="utm_action" value="edit" />
      <input type="hidden" name="utm_id" value="<?php echo esc_attr($editing_utm->id); ?>" />

      <table class="form-table" role="presentation">
        <tr>
          <th scope="row"><label for="titulo">Título <span class="description">(requerido)</span></label></th>
          <td><input name="titulo" type="text" id="titulo" value="<?php echo esc_attr($editing_utm->titulo); ?>"
              class="regular-text" required></td>
        </tr>
        <tr>
          <th scope="row"><label for="utm_url">URL con UTM <span class="description">(requerido)</span></label></th>
          <td>
            <textarea name="utm_url" id="utm_url" rows="3" class="large-text"
              required><?php echo esc_textarea($editing_utm->utm_url); ?></textarea>
            <p class="description">URL completa con parámetros UTM</p>
          </td>
        </tr>
        <tr>
          <th scope="row"><label for="code_format">Formato de código <span
                class="description">(requerido)</span></label></th>
          <td>
            <select name="code_format" id="code_format" required>
              <option value="">-- Seleccionar --</option>
              <option value="UNWP" <?php selected($editing_utm->code_format, 'UNWP'); ?>>PAUTA</option>
              <option value="UNWO" <?php selected($editing_utm->code_format, 'UNWO'); ?>>ORGÁNICO</option>
            </select>
          </td>
        </tr>
        <tr>
          <th scope="row"><label for="utm_code">Código UTM <span class="description">(requerido)</span></label></th>
          <td>
            <input name="utm_code" type="text" id="utm_code" value="<?php echo esc_attr($editing_utm->utm_code); ?>"
              class="regular-text" required>
            <p class="description">Código generado automáticamente basado en el formato</p>
          </td>
        </tr>
        <tr>
          <th scope="row"><label for="location_href">Location Href <span class="description">(opcional)</span></label>
          </th>
          <td>
            <textarea name="location_href" id="location_href" rows="2"
              class="large-text"><?php echo esc_textarea($editing_utm->location_href); ?></textarea>
            <p class="description">URL original antes de añadir UTMs</p>
          </td>
        </tr>
      </table>

      <?php submit_button('Actualizar UTM'); ?>
      <a href="<?php echo admin_url('admin.php?page=utm-manager'); ?>" class="button">Cancelar</a>
    </form>
  </div>
</div>

<?php
    else:
        // Si NO estamos editando, mostrar el listado
        $utms = $wpdb->get_results("SELECT * FROM $table_name ORDER BY id DESC");
        ?>

<div class="wrap">
  <h1 class="wp-heading-inline">UTMs</h1>
  <a href="<?php echo admin_url('admin.php?page=utm-manager-add'); ?>" class="page-title-action">Añadir nuevo</a>
  <hr class="wp-header-end" />

  <!-- LISTADO -->
  <table class="wp-list-table widefat fixed striped">
    <thead>
      <tr>
        <th scope="col" style="width: 50px;">ID</th>
        <th scope="col">Título</th>
        <th scope="col">Formato</th>
        <th scope="col">Código UTM</th>
        <th scope="col">URL</th>
        <th scope="col" style="width: 150px;">Creado</th>
        <th scope="col" style="width: 100px;">Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php if ( ! empty($utms) ) : ?>
      <?php foreach ( $utms as $utm ) : ?>
      <tr>
        <td><?php echo esc_html($utm->id); ?></td>
        <td><strong><?php echo esc_html($utm->titulo); ?></strong></td>
        <td>
          <span class="utm-format-badge"
            style="padding: 2px 8px; border-radius: 3px; font-size: 11px; font-weight: 600; <?php echo $utm->code_format === 'UNWP' ? 'background: #d63638; color: white;' : 'background: #00a32a; color: white;'; ?>">
            <?php echo $utm->code_format === 'UNWP' ? 'PAUTA' : 'ORGÁNICO'; ?>
          </span>
        </td>
        <td><code><?php echo esc_html($utm->utm_code); ?></code></td>
        <td>
          <a href="<?php echo esc_url($utm->utm_url); ?>" target="_blank" rel="noopener">
            <?php echo esc_html(wp_trim_words($utm->utm_url, 8, '...')); ?>
          </a>
        </td>
        <td><?php echo esc_html(date('Y-m-d H:i', strtotime($utm->created_at))); ?></td>
        <td>
          <a href="<?php echo admin_url('admin.php?page=utm-manager&edit=' . $utm->id); ?>">Editar</a>
          |
          <?php
                            $delete_url = wp_nonce_url(
                                admin_url('admin.php?page=utm-manager&action=delete&utm_id=' . $utm->id),
                                'utm_delete_' . $utm->id
                            );
                            ?>
          <a href="<?php echo esc_url($delete_url); ?>" style="color: #b32d2e;"
            onclick="return confirm('¿Seguro que deseas eliminar esta UTM?');">
            Eliminar
          </a>
        </td>
      </tr>
      <?php endforeach; ?>
      <?php else : ?>
      <tr>
        <td colspan="7" style="text-align: center; padding: 40px;">
          <p>No hay UTMs guardadas.</p>
          <a href="<?php echo admin_url('admin.php?page=utm-manager-add'); ?>" class="button button-primary">Crear tu
            primera UTM</a>
        </td>
      </tr>
      <?php endif; ?>
    </tbody>
  </table>
</div>

<?php
    endif; // Fin del else del listado
}

// 4. Página de AÑADIR nuevo UTM
function utm_manager_add_page() {
    if ( ! current_user_can('manage_options') ) {
        return;
    }

    global $wpdb;
    $table_name = $wpdb->prefix . 'utm_links';

    // --- FORZAR RECREACIÓN DE TABLA (solo para desarrollo) ---
    if ( isset($_GET['recreate_table']) && $_GET['recreate_table'] === '1' ) {
        $wpdb->query("DROP TABLE IF EXISTS $table_name");
        delete_option('utm_manager_db_version');
        utm_manager_create_table();
        echo '<div class="notice notice-success is-dismissible"><p>Tabla recreada correctamente. <a href="' . admin_url('admin.php?page=utm-manager-add') . '">Recargar página</a></p></div>';
    }

    // --- GUARDAR NUEVO ---
    $form_submitted = false;
    if ( isset($_POST['utm_action']) && $_POST['utm_action'] === 'add' ) {
        check_admin_referer('utm_add_form');

        $titulo        = sanitize_text_field($_POST['titulo'] ?? '');
        $utm_url       = sanitize_textarea_field($_POST['utm_url'] ?? '');
        $code_format   = sanitize_text_field($_POST['code_format'] ?? '');
        $utm_code      = sanitize_text_field($_POST['utm_code'] ?? '');
        $location_href = sanitize_textarea_field($_POST['location_href'] ?? '');

        if ( ! empty($titulo) && ! empty($utm_url) && ! empty($code_format) && ! empty($utm_code) ) {
            $result = $wpdb->insert(
                $table_name,
                [
                    'titulo'        => $titulo,
                    'utm_url'       => $utm_url,
                    'code_format'   => $code_format,
                    'utm_code'      => $utm_code,
                    'location_href' => $location_href,
                ],
                ['%s', '%s', '%s', '%s', '%s']
            );

            if ( $result !== false ) {
                echo '<div class="notice notice-success is-dismissible"><p>UTM creada correctamente. <a href="' . admin_url('admin.php?page=utm-manager') . '">Ver listado</a></p></div>';
                $form_submitted = true;
                // Limpiar el formulario después del éxito
                $_POST = [];
            } else {
                echo '<div class="notice notice-error is-dismissible"><p>Error al guardar en la base de datos: ' . esc_html($wpdb->last_error) . '</p></div>';
            }
        } else {
            echo '<div class="notice notice-error is-dismissible"><p>Los campos Título, URL con UTM, Formato de código y Código UTM son obligatorios.</p></div>';
        }
    }
    ?>

<div class="wrap">
  <h1 class="wp-heading-inline">Añadir nuevo UTM</h1>
  <hr class="wp-header-end" />

  <form method="post" style="max-width: 800px;">
    <?php wp_nonce_field('utm_add_form'); ?>
    <input type="hidden" name="utm_action" value="add" />

    <table class="form-table" role="presentation">
      <tr>
        <th scope="row"><label for="titulo">Título <span class="description">(requerido)</span></label></th>
        <td>
          <input name="titulo" type="text" id="titulo" value="<?php echo esc_attr($_POST['titulo'] ?? ''); ?>"
            class="regular-text" required>
          <p class="description">Nombre descriptivo del UTM</p>
        </td>
      </tr>
      <tr>
        <th scope="row"><label for="utm_url">URL con UTM <span class="description">(requerido)</span></label></th>
        <td>
          <textarea name="utm_url" id="utm_url" rows="3" class="large-text"
            required><?php echo esc_textarea($_POST['utm_url'] ?? ''); ?></textarea>
          <p class="description">URL completa con parámetros UTM</p>
        </td>
      </tr>
      <tr>
        <th scope="row"><label for="code_format">Formato de código <span class="description">(requerido)</span></label>
        </th>
        <td>
          <select name="code_format" id="code_format" required>
            <option value="">-- Seleccionar --</option>
            <option value="UNWP" <?php selected($_POST['code_format'] ?? '', 'UNWP'); ?>>PAUTA</option>
            <option value="UNWO" <?php selected($_POST['code_format'] ?? '', 'UNWO'); ?>>ORGÁNICO</option>
          </select>
          <p class="description">UNWP = PAUTA, UNWO = ORGÁNICO</p>
        </td>
      </tr>
      <tr>
        <th scope="row"><label for="utm_code">Código UTM <span class="description">(requerido)</span></label></th>
        <td>
          <input name="utm_code" type="text" id="utm_code" value="<?php echo esc_attr($_POST['utm_code'] ?? ''); ?>"
            class="regular-text" required>
          <p class="description">Código generado automáticamente basado en el formato</p>
        </td>
      </tr>
      <tr>
        <th scope="row"><label for="location_href">Location Href <span class="description">(opcional)</span></label>
        </th>
        <td>
          <textarea name="location_href" id="location_href" rows="2"
            class="large-text"><?php echo esc_textarea($_POST['location_href'] ?? ''); ?></textarea>
          <p class="description">URL original antes de añadir UTMs</p>
        </td>
      </tr>
    </table>

    <?php submit_button('Publicar'); ?>
  </form>
</div>

<?php
}