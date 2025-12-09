<?php
/**
 * Create UNIQUE index to prevent duplicate UTMs
 *
 * This creates a composite unique index on (utm_url + code_format)
 * to prevent duplicate UTMs at database level
 */

if (!defined('ABSPATH')) {
  exit;
}

/**
 * Create unique index for UTM prevention
 * Run this once to create the index
 */
function unw_create_utm_unique_index() {
  global $wpdb;

  $table_name = $wpdb->postmeta;

  // Check if index already exists
  $index_exists = $wpdb->get_var("
    SELECT COUNT(1)
    FROM INFORMATION_SCHEMA.STATISTICS
    WHERE table_schema = DATABASE()
    AND table_name = '{$table_name}'
    AND index_name = 'idx_utm_unique_url_format'
  ");

  if ($index_exists) {
    return ['success' => false, 'message' => 'El índice único ya existe.'];
  }

  // Create a temporary table to store unique combinations
  $temp_table = $wpdb->prefix . 'utm_unique_temp';

  $wpdb->query("DROP TABLE IF EXISTS {$temp_table}");

  $wpdb->query("
    CREATE TABLE {$temp_table} (
      post_id BIGINT(20) UNSIGNED NOT NULL,
      utm_url TEXT NOT NULL,
      code_format VARCHAR(10) NOT NULL,
      PRIMARY KEY (post_id),
      UNIQUE KEY idx_utm_combo (utm_url(255), code_format)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
  ");

  // Insert unique UTM combinations
  $wpdb->query("
    INSERT IGNORE INTO {$temp_table} (post_id, utm_url, code_format)
    SELECT
      p.ID,
      pm_url.meta_value,
      pm_format.meta_value
    FROM {$wpdb->posts} p
    INNER JOIN {$wpdb->postmeta} pm_url
      ON p.ID = pm_url.post_id AND pm_url.meta_key = 'utm_url'
    INNER JOIN {$wpdb->postmeta} pm_format
      ON p.ID = pm_format.post_id AND pm_format.meta_key = 'code_format'
    WHERE p.post_type = 'utm'
    AND p.post_status = 'publish'
    ORDER BY p.post_date ASC
  ");

  return [
    'success' => true,
    'message' => 'Índice único creado. Ahora usa la tabla auxiliar para verificar duplicados.'
  ];
}

// Register admin action to create index
add_action('admin_post_create_utm_unique_index', function() {
  if (!current_user_can('manage_options')) {
    wp_die('No tienes permisos.');
  }

  check_admin_referer('create_utm_unique_index');

  $result = unw_create_utm_unique_index();

  wp_redirect(add_query_arg([
    'page' => 'utm-settings',
    'utm_index_created' => $result['success'] ? '1' : '0',
    'message' => urlencode($result['message'])
  ], admin_url('admin.php')));

  exit;
});

/**
 * Sync UTM unique table with current UTMs
 */
add_action('admin_post_sync_utm_unique_table', function() {
  if (!current_user_can('manage_options')) {
    wp_die('No tienes permisos.');
  }

  check_admin_referer('sync_utm_unique_table');

  global $wpdb;
  $temp_table = $wpdb->prefix . 'utm_unique_temp';

  // Truncar tabla
  $wpdb->query("TRUNCATE TABLE {$temp_table}");

  // Reinsertar solo UTMs publicados actuales
  $wpdb->query("
    INSERT IGNORE INTO {$temp_table} (post_id, utm_url, code_format)
    SELECT
      p.ID,
      pm_url.meta_value,
      pm_format.meta_value
    FROM {$wpdb->posts} p
    INNER JOIN {$wpdb->postmeta} pm_url
      ON p.ID = pm_url.post_id AND pm_url.meta_key = 'utm_url'
    INNER JOIN {$wpdb->postmeta} pm_format
      ON p.ID = pm_format.post_id AND pm_format.meta_key = 'code_format'
    WHERE p.post_type = 'utm'
    AND p.post_status = 'publish'
    ORDER BY p.post_date ASC
  ");

  $count = $wpdb->get_var("SELECT COUNT(*) FROM {$temp_table}");

  wp_redirect(add_query_arg([
    'page' => 'utm-settings',
    'utm_index_created' => '1',
    'message' => urlencode("Tabla sincronizada. {$count} registros actualizados.")
  ], admin_url('admin.php')));

  exit;
});

/**
 * Clear UTM unique table
 */
add_action('admin_post_clear_utm_unique_table', function() {
  if (!current_user_can('manage_options')) {
    wp_die('No tienes permisos.');
  }

  check_admin_referer('clear_utm_unique_table');

  global $wpdb;
  $temp_table = $wpdb->prefix . 'utm_unique_temp';

  $wpdb->query("TRUNCATE TABLE {$temp_table}");

  wp_redirect(add_query_arg([
    'page' => 'utm-settings',
    'utm_index_created' => '1',
    'message' => urlencode('Tabla auxiliar vaciada correctamente.')
  ], admin_url('admin.php')));

  exit;
});

/**
 * Add admin menu for UTM settings
 */
add_action('admin_menu', function() {
  add_submenu_page(
    'edit.php?post_type=utm',
    'Configuración UTM',
    'Configuración',
    'manage_options',
    'utm-settings',
    'unw_utm_settings_page'
  );
});

function unw_utm_settings_page() {
  global $wpdb;
  $temp_table = $wpdb->prefix . 'utm_unique_temp';

  $table_exists = $wpdb->get_var("SHOW TABLES LIKE '{$temp_table}'") === $temp_table;

  ?>
<div class="wrap">
  <h1>Configuración UTM - Prevención de Duplicados</h1>

  <?php if (isset($_GET['utm_index_created'])): ?>
  <div class="notice notice-<?php echo $_GET['utm_index_created'] === '1' ? 'success' : 'error'; ?> is-dismissible">
    <p><?php echo esc_html(urldecode($_GET['message'])); ?></p>
  </div>
  <?php endif; ?>

  <div class="card">
    <h2>Estado del Sistema</h2>
    <table class="form-table">
      <tr>
        <th>Tabla auxiliar:</th>
        <td>
          <?php if ($table_exists): ?>
          <span class="dashicons dashicons-yes-alt" style="color: green;"></span>
          <strong>Creada</strong>
          <?php else: ?>
          <span class="dashicons dashicons-warning" style="color: orange;"></span>
          <strong>No creada</strong>
          <?php endif; ?>
        </td>
      </tr>
      <?php if ($table_exists): ?>
      <tr>
        <th>Registros únicos:</th>
        <td>
          <?php
            $count = $wpdb->get_var("SELECT COUNT(*) FROM {$temp_table}");
            echo number_format($count);
            ?>
        </td>
      </tr>
      <?php endif; ?>
    </table>
  </div>

  <div class="card">
    <h2>Acciones</h2>
    <p>
      <strong>¿Qué hace esto?</strong><br>
      Crea una tabla auxiliar con índice único para prevenir duplicados de UTMs con la misma URL y formato.
    </p>

    <?php if (!$table_exists): ?>
    <form method="post" action="<?php echo admin_url('admin-post.php'); ?>">
      <input type="hidden" name="action" value="create_utm_unique_index">
      <?php wp_nonce_field('create_utm_unique_index'); ?>
      <button type="submit" class="button button-primary">
        Crear Tabla de Prevención
      </button>
    </form>
    <?php else: ?>
    <p style="color: green;">
      <span class="dashicons dashicons-yes-alt"></span>
      La tabla de prevención está activa.
    </p>

    <hr style="margin: 20px 0;">

    <h3>Sincronizar Tabla</h3>
    <p>
      Si borraste UTMs manualmente, usa este botón para sincronizar la tabla auxiliar.
    </p>
    <form method="post" action="<?php echo admin_url('admin-post.php'); ?>" style="display: inline-block;">
      <input type="hidden" name="action" value="sync_utm_unique_table">
      <?php wp_nonce_field('sync_utm_unique_table'); ?>
      <button type="submit" class="button button-secondary">
        🔄 Sincronizar Tabla Auxiliar
      </button>
    </form>

    <form method="post" action="<?php echo admin_url('admin-post.php'); ?>"
      style="display: inline-block; margin-left: 10px;"
      onsubmit="return confirm('¿Estás seguro de vaciar completamente la tabla auxiliar?');">
      <input type="hidden" name="action" value="clear_utm_unique_table">
      <?php wp_nonce_field('clear_utm_unique_table'); ?>
      <button type="submit" class="button button-secondary">
        🗑️ Vaciar Tabla Auxiliar
      </button>
    </form>
    <?php endif; ?>
  </div>
</div>
<?php
}