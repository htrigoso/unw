<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Track unique inbound URLs and provide WhatsApp link helpers.
 */
function utms_get_channels() {
	return array( 'pauta', 'organico' );
}

function utms_normalize_channel( $channel ) {
	$channel = strtolower( (string) $channel );
	if ( ! in_array( $channel, utms_get_channels(), true ) ) {
		return 'organico';
	}

	return $channel;
}

function utms_get_channel_label( $channel ) {
	$channel = utms_normalize_channel( $channel );

	return 'pauta' === $channel ? 'PAUTA' : 'ORGANICO';
}

function utms_get_channel_code_prefix( $channel ) {
	$channel = utms_normalize_channel( $channel );
	$default = 'pauta' === $channel ? 'UNWP' : 'UNWO';

	return apply_filters( 'utms_code_prefix', $default, $channel );
}

function utms_get_url_table_name( $channel ) {
	global $wpdb;

	$channel = utms_normalize_channel( $channel );

	return $wpdb->prefix . $channel . '_utm_url_hashes';
}

function utms_get_sequence_table_name( $channel ) {
	global $wpdb;

	$channel = utms_normalize_channel( $channel );

	return $wpdb->prefix . $channel . '_utm_url_sequence';
}

function utms_get_export_table_name( $channel ) {
	global $wpdb;

	$channel = utms_normalize_channel( $channel );

	return $wpdb->prefix . $channel . '_utm_export_jobs';
}

function utms_get_table_version() {
	return '4';
}

function utms_table_exists( $channel ) {
	global $wpdb;

	$table_name = utms_get_url_table_name( $channel );
	$like       = $wpdb->esc_like( $table_name );
	$found      = $wpdb->get_var( $wpdb->prepare( 'SHOW TABLES LIKE %s', $like ) );

	return $found === $table_name;
}

function utms_sequence_table_exists( $channel ) {
	global $wpdb;

	$table_name = utms_get_sequence_table_name( $channel );
	$like       = $wpdb->esc_like( $table_name );
	$found      = $wpdb->get_var( $wpdb->prepare( 'SHOW TABLES LIKE %s', $like ) );

	return $found === $table_name;
}

function utms_export_table_exists( $channel ) {
	global $wpdb;

	$table_name = utms_get_export_table_name( $channel );
	$like       = $wpdb->esc_like( $table_name );
	$found      = $wpdb->get_var( $wpdb->prepare( 'SHOW TABLES LIKE %s', $like ) );

	return $found === $table_name;
}

function utms_legacy_table_exists() {
	global $wpdb;

	$table_name = $wpdb->prefix . 'utm_url_hashes';
	$like       = $wpdb->esc_like( $table_name );
	$found      = $wpdb->get_var( $wpdb->prepare( 'SHOW TABLES LIKE %s', $like ) );

	return $found === $table_name;
}

function utms_maybe_create_url_table() {
	$target_version  = utms_get_table_version();
	$current_version = get_option( 'utms_url_table_version' );

	$all_ready = true;
	foreach ( utms_get_channels() as $channel ) {
		if ( ! utms_table_exists( $channel ) || ! utms_sequence_table_exists( $channel ) || ! utms_export_table_exists( $channel ) ) {
			$all_ready = false;
			break;
		}
	}

	if ( $current_version === $target_version && $all_ready ) {
		return;
	}

	global $wpdb;
	$charset_collate = $wpdb->get_charset_collate();

	require_once ABSPATH . 'wp-admin/includes/upgrade.php';

	foreach ( utms_get_channels() as $channel ) {
		$table_name    = utms_get_url_table_name( $channel );
		$sequence_table = utms_get_sequence_table_name( $channel );
		$export_table   = utms_get_export_table_name( $channel );

		$sql = "CREATE TABLE $table_name (
			id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
			url TEXT NOT NULL,
			url_hash CHAR(64) NOT NULL,
			code_number BIGINT(20) UNSIGNED NULL,
			created_at DATETIME NOT NULL,
			PRIMARY KEY  (id),
			UNIQUE KEY url_hash (url_hash),
			UNIQUE KEY code_number (code_number)
		) $charset_collate;";

		dbDelta( $sql );

		$sequence_sql = "CREATE TABLE $sequence_table (
			id TINYINT(1) UNSIGNED NOT NULL,
			last_number BIGINT(20) UNSIGNED NOT NULL,
			PRIMARY KEY  (id)
		) $charset_collate;";

		dbDelta( $sequence_sql );

		$export_sql = "CREATE TABLE $export_table (
			id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
			status VARCHAR(20) NOT NULL,
			total_rows BIGINT(20) UNSIGNED NOT NULL DEFAULT 0,
			processed_rows BIGINT(20) UNSIGNED NOT NULL DEFAULT 0,
			file_path TEXT NOT NULL,
			file_url TEXT NOT NULL,
			filters LONGTEXT NULL,
			created_at DATETIME NOT NULL,
			updated_at DATETIME NOT NULL,
			PRIMARY KEY  (id),
			KEY status (status)
		) $charset_collate;";

		dbDelta( $export_sql );

		if ( utms_sequence_table_exists( $channel ) ) {
			$wpdb->query( "INSERT IGNORE INTO $sequence_table (id, last_number) VALUES (1, 0)" );
		}

		utms_backfill_code_numbers( $channel );
	}

	if ( $current_version !== $target_version && utms_legacy_table_exists() ) {
		utms_migrate_legacy_table();
	}

	$all_ready = true;
	foreach ( utms_get_channels() as $channel ) {
		if ( ! utms_table_exists( $channel ) || ! utms_sequence_table_exists( $channel ) || ! utms_export_table_exists( $channel ) ) {
			$all_ready = false;
			break;
		}
	}

	if ( $all_ready ) {
		update_option( 'utms_url_table_version', $target_version );
	}
}
add_action( 'after_setup_theme', 'utms_maybe_create_url_table' );

function utms_get_current_url_raw() {
	$scheme = is_ssl() ? 'https' : 'http';
	$host   = isset( $_SERVER['HTTP_HOST'] ) ? $_SERVER['HTTP_HOST'] : wp_parse_url( home_url(), PHP_URL_HOST );
	$uri    = isset( $_SERVER['REQUEST_URI'] ) ? $_SERVER['REQUEST_URI'] : '/';

	return esc_url_raw( $scheme . '://' . $host . $uri );
}

function utms_normalize_url( $url ) {
	$parts = wp_parse_url( $url );
	if ( empty( $parts['host'] ) ) {
		return $url;
	}

	$scheme = isset( $parts['scheme'] ) ? strtolower( $parts['scheme'] ) : 'http';
	$host   = strtolower( $parts['host'] );
	$port   = isset( $parts['port'] ) ? ':' . (int) $parts['port'] : '';
	$path   = isset( $parts['path'] ) ? $parts['path'] : '/';
	$query  = '';

	if ( ! empty( $parts['query'] ) ) {
		parse_str( $parts['query'], $query_args );
		ksort( $query_args );
		$query = http_build_query( $query_args );
	}

	$normalized = $scheme . '://' . $host . $port . $path;
	if ( '' !== $query ) {
		$normalized .= '?' . $query;
	}

	return $normalized;
}

function utms_detect_channel_from_request() {
	$raw_url = utms_get_current_url_raw();
	if ( '' === $raw_url ) {
		return 'organico';
	}

	$channel = utms_detect_channel_from_url( $raw_url );

	return apply_filters( 'utms_detect_channel', $channel, $raw_url );
}

function utms_detect_channel_from_url( $url ) {
	$parts = wp_parse_url( $url );

	return empty( $parts['query'] ) ? 'organico' : 'pauta';
}

function utms_get_current_channel() {
	if ( isset( $GLOBALS['utms_current_channel'] ) ) {
		return $GLOBALS['utms_current_channel'];
	}

	$channel = utms_detect_channel_from_request();
	$channel = utms_normalize_channel( $channel );

	$GLOBALS['utms_current_channel'] = $channel;

	return $channel;
}

function utms_get_next_code_number( $channel ) {
	global $wpdb;

	if ( ! utms_sequence_table_exists( $channel ) ) {
		return 0;
	}

	$sequence_table = utms_get_sequence_table_name( $channel );

	utms_sync_sequence_if_empty( $channel );

	$wpdb->query( "INSERT IGNORE INTO $sequence_table (id, last_number) VALUES (1, 0)" );
	$wpdb->query( "UPDATE $sequence_table SET last_number = LAST_INSERT_ID(last_number + 1) WHERE id = 1" );

	return (int) $wpdb->get_var( 'SELECT LAST_INSERT_ID()' );
}

function utms_assign_code_number_for_id( $channel, $id ) {
	global $wpdb;

	$id = (int) $id;
	if ( $id <= 0 ) {
		return 0;
	}

	if ( ! utms_table_exists( $channel ) || ! utms_sequence_table_exists( $channel ) ) {
		return 0;
	}

	$table_name     = utms_get_url_table_name( $channel );
	$sequence_table = utms_get_sequence_table_name( $channel );

	$wpdb->query( "INSERT IGNORE INTO $sequence_table (id, last_number) VALUES (1, 0)" );

	$current_code = (int) $wpdb->get_var(
		$wpdb->prepare(
			"SELECT code_number FROM $table_name WHERE id = %d",
			$id
		)
	);
	if ( $current_code > 0 ) {
		return $current_code;
	}

	$updated = $wpdb->query(
		$wpdb->prepare(
			"UPDATE $sequence_table s
			JOIN $table_name t ON t.id = %d
			SET s.last_number = LAST_INSERT_ID(s.last_number + 1),
				t.code_number = LAST_INSERT_ID()
			WHERE s.id = 1 AND (t.code_number IS NULL OR t.code_number = 0)",
			$id
		)
	);

	if ( false === $updated ) {
		return 0;
	}

	if ( $updated > 0 ) {
		$new_number = (int) $wpdb->get_var( 'SELECT LAST_INSERT_ID()' );
		if ( $new_number > 0 ) {
			return $new_number;
		}
	}

	return (int) $wpdb->get_var(
		$wpdb->prepare(
			"SELECT code_number FROM $table_name WHERE id = %d",
			$id
		)
	);
}

function utms_sync_sequence_if_empty( $channel ) {
	global $wpdb;

	if ( ! utms_table_exists( $channel ) || ! utms_sequence_table_exists( $channel ) ) {
		return;
	}

	$table_name     = utms_get_url_table_name( $channel );
	$sequence_table = utms_get_sequence_table_name( $channel );

	$has_row = $wpdb->get_var( "SELECT 1 FROM $table_name LIMIT 1" );
	if ( $has_row ) {
		return;
	}

	$wpdb->query( "INSERT IGNORE INTO $sequence_table (id, last_number) VALUES (1, 0)" );
	$wpdb->query( "UPDATE $sequence_table SET last_number = 0 WHERE id = 1" );
}

function utms_backfill_code_numbers( $channel ) {
	global $wpdb;

	if ( ! utms_table_exists( $channel ) || ! utms_sequence_table_exists( $channel ) ) {
		return;
	}

	$table_name     = utms_get_url_table_name( $channel );
	$sequence_table = utms_get_sequence_table_name( $channel );

	$max_code = (int) $wpdb->get_var( "SELECT MAX(code_number) FROM $table_name" );
	if ( $max_code > 0 ) {
		$wpdb->query(
			$wpdb->prepare(
				"UPDATE $sequence_table SET last_number = GREATEST(last_number, %d) WHERE id = 1",
				$max_code
			)
		);
	}

	$missing_ids = $wpdb->get_col( "SELECT id FROM $table_name WHERE code_number IS NULL ORDER BY id ASC" );
	if ( empty( $missing_ids ) ) {
		return;
	}

	foreach ( $missing_ids as $id ) {
		$next_number = utms_get_next_code_number( $channel );
		if ( $next_number > 0 ) {
			$wpdb->update(
				$table_name,
				array( 'code_number' => $next_number ),
				array( 'id' => (int) $id ),
				array( '%d' ),
				array( '%d' )
			);
		}
	}
}

function utms_format_code( $number, $channel ) {
	$number = (int) $number;
	if ( $number <= 0 ) {
		return '';
	}

	$prefix  = utms_get_channel_code_prefix( $channel );
	$padding = (int) apply_filters( 'utms_code_padding', 5 );

	return $prefix . str_pad( (string) $number, $padding, '0', STR_PAD_LEFT );
}

function utms_should_track_request() {
	if ( is_admin() || wp_doing_ajax() || wp_doing_cron() ) {
		return false;
	}

	if ( defined( 'REST_REQUEST' ) && REST_REQUEST ) {
		return false;
	}

	if ( function_exists( 'is_customize_preview' ) && is_customize_preview() ) {
		return false;
	}

	if ( isset( $_SERVER['REQUEST_METHOD'] ) && 'GET' !== $_SERVER['REQUEST_METHOD'] ) {
		return false;
	}

	$raw_url = utms_get_current_url_raw();
	if ( '' === $raw_url ) {
		return false;
	}

	$path = wp_parse_url( $raw_url, PHP_URL_PATH );
	if ( $path && preg_match( '/\.(?:css|js|map|jpg|jpeg|png|gif|svg|webp|ico|bmp|tif|tiff|woff|woff2|ttf|eot|otf|mp4|mp3|wav|pdf|zip|rar)$/i', $path ) ) {
		return false;
	}

	if ( 0 === strpos( (string) $path, '/wp-json/' ) ) {
		return false;
	}

	return true;
}

function utms_is_auto_capture_enabled() {
	return (bool) apply_filters( 'utms_enable_auto_capture', false );
}

function utms_migrate_legacy_table() {
	global $wpdb;

	if ( ! utms_legacy_table_exists() ) {
		return;
	}

	$legacy_table = $wpdb->prefix . 'utm_url_hashes';

	$rows = $wpdb->get_results(
		"SELECT id, url, url_hash, created_at FROM $legacy_table ORDER BY id ASC",
		ARRAY_A
	);

	if ( empty( $rows ) ) {
		return;
	}

	foreach ( $rows as $row ) {
		$channel    = utms_detect_channel_from_url( $row['url'] );
		$table_name = utms_get_url_table_name( $channel );

		if ( ! utms_table_exists( $channel ) || ! utms_sequence_table_exists( $channel ) ) {
			continue;
		}

		$wpdb->query(
			$wpdb->prepare(
				"INSERT IGNORE INTO $table_name (url, url_hash, created_at)
				VALUES (%s, %s, %s)",
				$row['url'],
				$row['url_hash'],
				$row['created_at']
			)
		);

		$inserted_id = (int) $wpdb->insert_id;
		if ( $inserted_id > 0 ) {
			$next_number = utms_get_next_code_number( $channel );
			if ( $next_number > 0 ) {
				$wpdb->update(
					$table_name,
					array( 'code_number' => $next_number ),
					array( 'id' => $inserted_id ),
					array( '%d' ),
					array( '%d' )
				);
			}
		}
	}

	foreach ( utms_get_channels() as $channel ) {
		utms_backfill_code_numbers( $channel );
	}
}

function utms_capture_current_url() {
	if ( ! utms_is_auto_capture_enabled() ) {
		return;
	}

	if ( ! utms_should_track_request() ) {
		return;
	}

	$raw_url = utms_get_current_url_raw();
	if ( '' === $raw_url ) {
		return;
	}

	$normalized_url = utms_normalize_url( $raw_url );
	$hash           = hash( 'sha256', $normalized_url );
	$now            = current_time( 'mysql' );
	$channel        = utms_get_current_channel();

	global $wpdb;
	$table_name = utms_get_url_table_name( $channel );

	if ( ! utms_table_exists( $channel ) || ! utms_sequence_table_exists( $channel ) ) {
		utms_maybe_create_url_table();
		if ( ! utms_table_exists( $channel ) || ! utms_sequence_table_exists( $channel ) ) {
			return;
		}
	}

	utms_sync_sequence_if_empty( $channel );

	$wpdb->query(
		$wpdb->prepare(
			"INSERT IGNORE INTO $table_name (url, url_hash, created_at)
			VALUES (%s, %s, %s)",
			$normalized_url,
			$hash,
			$now
		)
	);

	$id = (int) $wpdb->insert_id;
	$code_number = 0;

	if ( $id <= 0 ) {
		$row = $wpdb->get_row(
			$wpdb->prepare(
				"SELECT id, code_number FROM $table_name WHERE url_hash = %s",
				$hash
			),
			ARRAY_A
		);

		if ( $row ) {
			$id          = (int) $row['id'];
			$code_number = (int) $row['code_number'];
		}
	}

	if ( $id > 0 ) {
		$code_number = utms_assign_code_number_for_id( $channel, $id );
	}

	if ( $id > 0 ) {
		$GLOBALS['utms_current_url_id']   = $id;
		$GLOBALS['utms_current_url_hash'] = $hash;
		$GLOBALS['utms_current_code_number'] = $code_number;
		$GLOBALS['utms_current_channel']     = $channel;
	}
}
add_action( 'init', 'utms_capture_current_url', 1 );

function utms_get_current_url_id() {
	if ( isset( $GLOBALS['utms_current_url_id'] ) ) {
		return (int) $GLOBALS['utms_current_url_id'];
	}

	$raw_url = utms_get_current_url_raw();
	if ( '' === $raw_url ) {
		return 0;
	}

	$normalized_url = utms_normalize_url( $raw_url );
	$hash           = hash( 'sha256', $normalized_url );
	$channel        = utms_get_current_channel();

	global $wpdb;
	$table_name = utms_get_url_table_name( $channel );
	$code_number = 0;

	if ( ! utms_table_exists( $channel ) || ! utms_sequence_table_exists( $channel ) ) {
		utms_maybe_create_url_table();
		if ( ! utms_table_exists( $channel ) || ! utms_sequence_table_exists( $channel ) ) {
			return 0;
		}
	}

	$row = $wpdb->get_row(
		$wpdb->prepare(
			"SELECT id, code_number FROM $table_name WHERE url_hash = %s",
			$hash
		),
		ARRAY_A
	);

	$id = 0;
	if ( $row ) {
		$id          = (int) $row['id'];
		$code_number = (int) $row['code_number'];
	}

	if ( $id > 0 ) {
		$code_number = utms_assign_code_number_for_id( $channel, $id );
	}

	if ( $id > 0 ) {
		$GLOBALS['utms_current_url_id']   = $id;
		$GLOBALS['utms_current_url_hash'] = $hash;
		$GLOBALS['utms_current_code_number'] = $code_number;
		$GLOBALS['utms_current_channel']     = $channel;
	}

	return $id;
}

function utms_get_current_code() {
	if ( isset( $GLOBALS['utms_current_code_number'] ) && $GLOBALS['utms_current_code_number'] ) {
		$channel = utms_get_current_channel();
		return utms_format_code( (int) $GLOBALS['utms_current_code_number'], $channel );
	}

	$id = utms_get_current_url_id();
	if ( $id <= 0 ) {
		return '';
	}

	return utms_get_code_for_id( $id, utms_get_current_channel() );
}

function utms_get_code_for_id( $id, $channel ) {
	global $wpdb;

	if ( ! utms_table_exists( $channel ) ) {
		return '';
	}

	$table_name  = utms_get_url_table_name( $channel );
	$code_number = (int) $wpdb->get_var(
		$wpdb->prepare(
			"SELECT code_number FROM $table_name WHERE id = %d",
			(int) $id
		)
	);

	return utms_format_code( $code_number, $channel );
}

function utms_get_code_for_url( $url ) {
	if ( '' === $url ) {
		return '';
	}

	$normalized_url = utms_normalize_url( $url );
	if ( '' === $normalized_url ) {
		return '';
	}

	$channel = utms_detect_channel_from_url( $normalized_url );
	if ( ! utms_table_exists( $channel ) ) {
		return '';
	}

	global $wpdb;
	$table_name  = utms_get_url_table_name( $channel );
	$hash        = hash( 'sha256', $normalized_url );
	$code_number = (int) $wpdb->get_var(
		$wpdb->prepare(
			"SELECT code_number FROM $table_name WHERE url_hash = %s",
			$hash
		)
	);

	if ( $code_number <= 0 ) {
		return '';
	}

	return utms_format_code( $code_number, $channel );
}

function utms_whatsapp_is_active( $utms_whatsapp ) {
	return ! empty( $utms_whatsapp ) && ! empty( $utms_whatsapp['active'] );
}

function utms_get_whatsapp_rows( $utms_whatsapp ) {
	if ( empty( $utms_whatsapp ) || empty( $utms_whatsapp['utms'] ) || ! is_array( $utms_whatsapp['utms'] ) ) {
		return array();
	}

	return $utms_whatsapp['utms'];
}

function utms_get_whatsapp_page_message_template( $utms_whatsapp, $page_id ) {
	$rows = utms_get_whatsapp_rows( $utms_whatsapp );
	if ( empty( $rows ) ) {
		return '';
	}

	$page_id = (int) $page_id;
	foreach ( $rows as $row ) {
		if ( empty( $row['page'] ) || empty( $row['message'] ) ) {
			continue;
		}

		$row_page_id = is_object( $row['page'] ) ? (int) $row['page']->ID : (int) $row['page'];
		if ( $row_page_id > 0 && $row_page_id === $page_id ) {
			return $row['message'];
		}
	}

	return '';
}

function utms_get_whatsapp_message_template( $utms_whatsapp, $page_id ) {
	$template = utms_get_whatsapp_page_message_template( $utms_whatsapp, $page_id );
	if ( '' !== $template ) {
		return $template;
	}

	if ( ! empty( $utms_whatsapp['code_message_generic'] ) ) {
		return $utms_whatsapp['code_message_generic'];
	}

	return '';
}

function utms_replace_whatsapp_code( $template, $code ) {
	if ( '' === $template || '' === $code ) {
		return '';
	}

	return str_replace( '{utm_code}', $code, $template );
}

function utms_get_url_whatsapp() {
	$current_url   = utms_get_current_url_raw();
	$utms_whatsapp = get_field( 'utms_whatsapp', 'options' );

	if ( ! utms_whatsapp_is_active( $utms_whatsapp ) ) {
		return '';
	}

	$code = utms_get_or_create_code_for_url( $current_url );
	if ( '' === $code ) {
		return '';
	}

	$message_template = utms_get_whatsapp_message_template( $utms_whatsapp, get_queried_object_id() );

	return utms_replace_whatsapp_code( $message_template, $code );
}

function utms_get_or_create_code_for_url( $url ) {
	if ( '' === $url ) {
		return '';
	}

	$normalized_url = utms_normalize_url( $url );
	if ( '' === $normalized_url ) {
		return '';
	}

	$channel = utms_detect_channel_from_url( $normalized_url );

	if ( ! utms_table_exists( $channel ) || ! utms_sequence_table_exists( $channel ) ) {
		utms_maybe_create_url_table();
		if ( ! utms_table_exists( $channel ) || ! utms_sequence_table_exists( $channel ) ) {
			return '';
		}
	}

	utms_sync_sequence_if_empty( $channel );

	global $wpdb;
	$table_name = utms_get_url_table_name( $channel );
	$hash       = hash( 'sha256', $normalized_url );
	$now        = current_time( 'mysql' );

	$wpdb->query(
		$wpdb->prepare(
			"INSERT IGNORE INTO $table_name (url, url_hash, created_at)
			VALUES (%s, %s, %s)",
			$normalized_url,
			$hash,
			$now
		)
	);

	$id          = (int) $wpdb->insert_id;
	$code_number = 0;

	if ( $id <= 0 ) {
		$row = $wpdb->get_row(
			$wpdb->prepare(
				"SELECT id, code_number FROM $table_name WHERE url_hash = %s",
				$hash
			),
			ARRAY_A
		);

		if ( $row ) {
			$id          = (int) $row['id'];
			$code_number = (int) $row['code_number'];
		}
	}

	if ( $id > 0 ) {
		$code_number = utms_assign_code_number_for_id( $channel, $id );
	}

	if ( $code_number <= 0 ) {
		return '';
	}

	return utms_format_code( $code_number, $channel );
}

function utms_build_whatsapp_url( $code, $args = array() ) {
	$defaults = array(
		'phone'            => apply_filters( 'utms_whatsapp_phone', '51997535372' ),
		'message_template' => apply_filters(
			'utms_whatsapp_message_template',
			'Hola, busco informacion sobre carreras. Envio el codigo %s para obtener beneficios exclusivos.'
		),
	);

	$args = wp_parse_args( $args, $defaults );

	if ( '' === $code ) {
		return '';
	}

	$message = sprintf( $args['message_template'], $code );
	$phone   = preg_replace( '/\D+/', '', $args['phone'] );

	if ( '' === $phone ) {
		return '';
	}

	return 'https://api.whatsapp.com/send?phone=' . $phone . '&text=' . rawurlencode( $message );
}

function utms_get_whatsapp_url( $args = array() ) {
	return utms_build_whatsapp_url( utms_get_current_code(), $args );
}

function utms_get_whatsapp_url_for_url( $url, $args = array() ) {
	return utms_build_whatsapp_url( utms_get_or_create_code_for_url( $url ), $args );
}

function utms_whatsapp_url_shortcode( $atts ) {
	$atts = shortcode_atts(
		array(
			'phone'   => '',
			'message' => '',
		),
		$atts,
		'utms_whatsapp_url'
	);

	$args = array();
	if ( '' !== $atts['phone'] ) {
		$args['phone'] = $atts['phone'];
	}
	if ( '' !== $atts['message'] ) {
		$args['message_template'] = $atts['message'];
	}

	$url = utms_get_whatsapp_url( $args );

	return $url ? esc_url( $url ) : '';
}
add_shortcode( 'utms_whatsapp_url', 'utms_whatsapp_url_shortcode' );

function utms_sanitize_date( $value ) {
	$value = sanitize_text_field( wp_unslash( $value ) );
	if ( preg_match( '/^\d{4}-\d{2}-\d{2}$/', $value ) ) {
		return $value;
	}

	return '';
}

function utms_get_filters_from_request() {
	$filters = array(
		'year'   => 0,
		'month'  => 0,
		'from'   => '',
		'to'     => '',
		'search' => '',
		'cutoff' => '',
	);

	if ( isset( $_REQUEST['utms_year'] ) && '' !== $_REQUEST['utms_year'] ) {
		$year = (int) sanitize_text_field( wp_unslash( $_REQUEST['utms_year'] ) );
		$min_year = (int) apply_filters( 'utms_year_start', 2026 );
		$max_year = (int) apply_filters( 'utms_year_end', max( $min_year, (int) current_time( 'Y' ) ) + 5 );
		if ( $year >= $min_year && $year <= $max_year ) {
			$filters['year'] = $year;
		}
	}

	if ( isset( $_REQUEST['utms_month'] ) && '' !== $_REQUEST['utms_month'] ) {
		$month = (int) sanitize_text_field( wp_unslash( $_REQUEST['utms_month'] ) );
		if ( $month >= 1 && $month <= 12 ) {
			$filters['month'] = $month;
		}
	}

	if ( isset( $_REQUEST['utms_from'] ) ) {
		$filters['from'] = utms_sanitize_date( $_REQUEST['utms_from'] );
	}

	if ( isset( $_REQUEST['utms_to'] ) ) {
		$filters['to'] = utms_sanitize_date( $_REQUEST['utms_to'] );
	}

	if ( isset( $_REQUEST['s'] ) ) {
		$filters['search'] = sanitize_text_field( wp_unslash( $_REQUEST['s'] ) );
	}

	return $filters;
}

function utms_build_where_clause( $filters, $wpdb, &$params ) {
	$where_sql = '1=1';

	if ( '' !== $filters['search'] ) {
		$like       = '%' . $wpdb->esc_like( $filters['search'] ) . '%';
		$where_sql .= ' AND (url LIKE %s OR url_hash LIKE %s';
		$params[]   = $like;
		$params[]   = $like;

		if ( ctype_digit( $filters['search'] ) ) {
			$where_sql .= ' OR id = %d';
			$params[]   = (int) $filters['search'];
		}

		$where_sql .= ')';
	}

	$use_range = '' !== $filters['from'] || '' !== $filters['to'];
	if ( $use_range ) {
		if ( '' !== $filters['from'] && '' !== $filters['to'] ) {
			$where_sql .= ' AND created_at BETWEEN %s AND %s';
			$params[]   = $filters['from'] . ' 00:00:00';
			$params[]   = $filters['to'] . ' 23:59:59';
		} elseif ( '' !== $filters['from'] ) {
			$where_sql .= ' AND created_at >= %s';
			$params[]   = $filters['from'] . ' 00:00:00';
		} elseif ( '' !== $filters['to'] ) {
			$where_sql .= ' AND created_at <= %s';
			$params[]   = $filters['to'] . ' 23:59:59';
		}
	} else {
		if ( $filters['year'] ) {
			$where_sql .= ' AND YEAR(created_at) = %d';
			$params[]   = $filters['year'];
		}

		if ( $filters['month'] ) {
			$where_sql .= ' AND MONTH(created_at) = %d';
			$params[]   = $filters['month'];
		}
	}

	if ( '' !== $filters['cutoff'] ) {
		$where_sql .= ' AND created_at <= %s';
		$params[]   = $filters['cutoff'];
	}

	return $where_sql;
}

function utms_get_export_csv_delimiter() {
	return apply_filters( 'utms_export_csv_delimiter', ',' );
}

function utms_write_export_csv_header( $handle ) {
	if ( ! $handle ) {
		return;
	}

	// Excel expects a UTF-8 BOM for CSV files with accents.
	fwrite( $handle, "\xEF\xBB\xBF" );
	fputcsv( $handle, array( 'Codigo', 'URL', 'Fecha' ), utms_get_export_csv_delimiter() );
}

function utms_write_export_csv_row( $handle, $code, $url, $date ) {
	if ( ! $handle ) {
		return;
	}

	fputcsv( $handle, array( $code, $url, $date ), utms_get_export_csv_delimiter() );
}

function utms_prepare_export_file( $channel ) {
	$uploads = wp_upload_dir();
	if ( ! empty( $uploads['error'] ) ) {
		return array( '', '' );
	}

	$folder = trailingslashit( $uploads['basedir'] ) . 'utms-exports';
	if ( ! wp_mkdir_p( $folder ) ) {
		return array( '', '' );
	}

	$stamp    = gmdate( 'Ymd-His' );
	$suffix   = strtolower( wp_generate_password( 4, false, false ) );
	$filename = 'utm-urls-' . $channel . '-' . $stamp . '-' . $suffix . '.csv';
	$path     = trailingslashit( $folder ) . $filename;
	$url      = trailingslashit( $uploads['baseurl'] ) . 'utms-exports/' . $filename;

	if ( file_exists( $path ) ) {
		@unlink( $path );
	}

	$handle = fopen( $path, 'w' );
	if ( ! $handle ) {
		return array( '', '' );
	}

	utms_write_export_csv_header( $handle );
	fclose( $handle );

	return array( $path, $url );
}

function utms_finalize_export_csv( $file_path ) {
	return file_exists( $file_path ) && is_readable( $file_path );
}

function utms_create_export_job( $channel, $filters ) {
global $wpdb;

$channel = utms_normalize_channel( $channel );
if ( ! utms_export_table_exists( $channel ) ) {
utms_maybe_create_url_table();
}

if ( ! utms_export_table_exists( $channel ) ) {
return 0;
}

$table_name = utms_get_url_table_name( $channel );
$job_table = utms_get_export_table_name( $channel );

if ( empty( $filters['cutoff'] ) ) {
$filters['cutoff'] = current_time( 'mysql' );
}

$params = array();
$where_sql = utms_build_where_clause( $filters, $wpdb, $params );
$count_sql = "SELECT COUNT(*) FROM $table_name WHERE $where_sql";
if ( $params ) {
$count_sql = $wpdb->prepare( $count_sql, $params );
}
$total_rows = (int) $wpdb->get_var( $count_sql );

list( $file_path, $file_url ) = utms_prepare_export_file( $channel );
if ( '' === $file_path || '' === $file_url ) {
return 0;
}

$now = current_time( 'mysql' );

$inserted = $wpdb->insert(
$job_table,
array(
'status' => 'pending',
'total_rows' => $total_rows,
'processed_rows' => 0,
'file_path' => $file_path,
'file_url' => $file_url,
'filters' => wp_json_encode( $filters ),
'created_at' => $now,
'updated_at' => $now,
),
array( '%s', '%d', '%d', '%s', '%s', '%s', '%s', '%s' )
);

if ( false === $inserted ) {
return 0;
}

return (int) $wpdb->insert_id;
}

function utms_schedule_export_job( $job_id, $channel ) {
$job_id = (int) $job_id;
$channel = utms_normalize_channel( $channel );

if ( $job_id <= 0 ) { return; } if ( ! wp_next_scheduled( 'utms_process_export_job' , array( $job_id, $channel ) ) ) {
  wp_schedule_single_event( time() + 1, 'utms_process_export_job' , array( $job_id, $channel ) ); } } function
  utms_process_export_job( $job_id, $channel ) { global $wpdb; $job_id=(int) $job_id; $channel=utms_normalize_channel(
  $channel ); if ( $job_id <=0 || ! utms_export_table_exists( $channel ) ) { return; }
  $job_table=utms_get_export_table_name( $channel ); $data_table=utms_get_url_table_name( $channel ); $job=$wpdb->
  get_row(
  $wpdb->prepare( "SELECT * FROM $job_table WHERE id = %d", $job_id ),
  ARRAY_A
  );

  if ( ! $job ) {
  return;
  }

  if ( 'done' === $job['status'] || 'failed' === $job['status'] ) {
  return;
  }

  $updated_at = strtotime( $job['updated_at'] );
  if ( 'processing' === $job['status'] && $updated_at && ( time() - $updated_at ) < 10 ) { return; } $filters=array();
    if ( ! empty( $job['filters'] ) ) { $decoded=json_decode( $job['filters'], true ); if ( is_array( $decoded ) ) {
    $filters=$decoded; } } $params=array(); $where_sql=utms_build_where_clause( $filters, $wpdb, $params ); $limit=(int)
    apply_filters( 'utms_export_batch_size' , 500 ); $offset=(int) $job['processed_rows'];
    $sql="SELECT code_number, url, created_at FROM $data_table WHERE $where_sql ORDER BY code_number DESC, created_at DESC LIMIT %d OFFSET %d"
    ; $params[]=$limit; $params[]=$offset; $sql=$wpdb->prepare( $sql, $params );
    $rows = $wpdb->get_results( $sql, ARRAY_A );

    $now = current_time( 'mysql' );
    $processed = (int) $job['processed_rows'];
    $total_rows = (int) $job['total_rows'];
    $status = 'processing';

    if ( ! empty( $rows ) ) {
    $handle = fopen( $job['file_path'], 'a' );
    if ( $handle ) {
    foreach ( $rows as $row ) {
    $code = utms_format_code( (int) $row['code_number'], $channel );
    utms_write_export_csv_row( $handle, $code, $row['url'], $row['created_at'] );
    }
    fclose( $handle );
    $processed += count( $rows );
    } else {
    $status = 'failed';
    }
    }

    if ( $total_rows <= 0 || $processed>= $total_rows || empty( $rows ) ) {
      $status = 'done';
      }

      if ( 'done' === $status ) {
      if ( ! utms_finalize_export_csv( $job['file_path'] ) ) {
      $status = 'failed';
      }
      }

      $wpdb->update(
      $job_table,
      array(
      'status' => $status,
      'processed_rows' => $processed,
      'updated_at' => $now,
      ),
      array( 'id' => $job_id ),
      array( '%s', '%d', '%s' ),
      array( '%d' )
      );

      if ( 'processing' === $status ) {
      utms_schedule_export_job( $job_id, $channel );
      }
      }
      add_action( 'utms_process_export_job', 'utms_process_export_job', 10, 2 );

      function utms_handle_export_status() {
      if ( ! current_user_can( utms_admin_capability() ) ) {
      wp_send_json_error( array( 'message' => 'Forbidden' ), 403 );
      }

      check_ajax_referer( 'utms_export_status', 'nonce' );

      $job_id = isset( $_GET['job_id'] ) ? (int) $_GET['job_id'] : 0;
      $channel = isset( $_GET['channel'] ) ? sanitize_text_field( wp_unslash( $_GET['channel'] ) ) : '';
      $channel = utms_normalize_channel( $channel );

      if ( $job_id <= 0 || ! utms_export_table_exists( $channel ) ) { wp_send_json_error( array( 'message'=> 'Job not
        found' ), 404 );
        }

        global $wpdb;
        $job_table = utms_get_export_table_name( $channel );
        $job = $wpdb->get_row(
        $wpdb->prepare( "SELECT * FROM $job_table WHERE id = %d", $job_id ),
        ARRAY_A
        );

        if ( ! $job ) {
        wp_send_json_error( array( 'message' => 'Job not found' ), 404 );
        }

        if ( 'pending' === $job['status'] || 'processing' === $job['status'] ) {
        utms_schedule_export_job( $job_id, $channel );
        utms_process_export_job( $job_id, $channel );
        $job = $wpdb->get_row(
        $wpdb->prepare( "SELECT * FROM $job_table WHERE id = %d", $job_id ),
        ARRAY_A
        );
        }

        $total = (int) $job['total_rows'];
        $processed = (int) $job['processed_rows'];
        $percent = $total > 0 ? min( 100, round( ( $processed / $total ) * 100 ) ) : 100;

        wp_send_json_success(
        array(
        'status' => $job['status'],
        'total_rows' => $total,
        'processed_rows' => $processed,
        'percent' => $percent,
        'file_url' => $job['file_url'],
        )
        );
        }
        add_action( 'wp_ajax_utms_export_status', 'utms_handle_export_status' );

        function utms_handle_export_channel() {
        if ( ! current_user_can( utms_admin_capability() ) ) {
        wp_die( esc_html__( 'You do not have permission to access this page.', 'twentytwentyfive' ) );
        }

        check_admin_referer( 'utms_export_channel' );

        $channel = isset( $_REQUEST['channel'] ) ? sanitize_text_field( wp_unslash( $_REQUEST['channel'] ) ) : '';
        $channel = utms_normalize_channel( $channel );

        $filters = utms_get_filters_from_request();
        $filters['cutoff'] = current_time( 'mysql' );

        $job_id = utms_create_export_job( $channel, $filters );
        $page = 'pauta' === $channel ? 'utms-url-hashes-pauta' : 'utms-url-hashes-organico';

        if ( $job_id > 0 ) {
        utms_schedule_export_job( $job_id, $channel );

        $args = array(
        'page' => $page,
        'utms_export_job' => $job_id,
        );

        if ( $filters['year'] ) {
        $args['utms_year'] = $filters['year'];
        }
        if ( $filters['month'] ) {
        $args['utms_month'] = $filters['month'];
        }
        if ( '' !== $filters['from'] ) {
        $args['utms_from'] = $filters['from'];
        }
        if ( '' !== $filters['to'] ) {
        $args['utms_to'] = $filters['to'];
        }
        if ( '' !== $filters['search'] ) {
        $args['s'] = $filters['search'];
        }

        $redirect = add_query_arg( $args, admin_url( 'admin.php' ) );
        wp_safe_redirect( $redirect );
        exit;
        }

        $redirect = add_query_arg(
        array(
        'page' => $page,
        'utms_export_error' => 1,
        ),
        admin_url( 'admin.php' )
        );

        wp_safe_redirect( $redirect );
        exit;
        }
        add_action( 'admin_post_utms_export_channel', 'utms_handle_export_channel' );

        function utms_admin_capability() {
        return apply_filters( 'utms_admin_capability', 'edit_posts' );
        }

        function utms_register_admin_menu() {
        add_menu_page(
        'WA URLs (PAUTA)',
        'WA URLs (PAUTA)',
        utms_admin_capability(),
        'utms-url-hashes-pauta',
        'utms_render_admin_page_pauta',
        'dashicons-admin-links',
        30
        );

        add_submenu_page(
        'utms-url-hashes-pauta',
        'Configuracion (PAUTA)',
        'Configuracion',
        utms_admin_capability(),
        'utms-settings-pauta',
        'utms_render_settings_page_pauta'
        );

        add_menu_page(
        'WA URLs (ORGANICO)',
        'WA URLs (ORGANICO)',
        utms_admin_capability(),
        'utms-url-hashes-organico',
        'utms_render_admin_page_organico',
        'dashicons-admin-links',
        31
        );

        add_submenu_page(
        'utms-url-hashes-organico',
        'Configuracion (ORGANICO)',
        'Configuracion',
        utms_admin_capability(),
        'utms-settings-organico',
        'utms_render_settings_page_organico'
        );
        }
        add_action( 'admin_menu', 'utms_register_admin_menu' );

        function utms_reset_channel_data( $channel ) {
        global $wpdb;

        $channel = utms_normalize_channel( $channel );
        $table = utms_get_url_table_name( $channel );
        $seq = utms_get_sequence_table_name( $channel );

        if ( utms_table_exists( $channel ) ) {
        $wpdb->query( "TRUNCATE TABLE $table" );
        }

        if ( utms_sequence_table_exists( $channel ) ) {
        $wpdb->query( "TRUNCATE TABLE $seq" );
        $wpdb->query( "INSERT INTO $seq (id, last_number) VALUES (1, 0)" );
        }
        }

        function utms_handle_reset_channel() {
        if ( ! current_user_can( utms_admin_capability() ) ) {
        wp_die( esc_html__( 'You do not have permission to access this page.', 'twentytwentyfive' ) );
        }

        check_admin_referer( 'utms_reset_channel' );

        $channel = isset( $_POST['channel'] ) ? sanitize_text_field( wp_unslash( $_POST['channel'] ) ) : '';
        $channel = utms_normalize_channel( $channel );
        $page = 'pauta' === $channel ? 'utms-settings-pauta' : 'utms-settings-organico';

        utms_reset_channel_data( $channel );

        wp_safe_redirect( admin_url( 'admin.php?page=' . $page . '&utms_reset=1' ) );
        exit;
        }
        add_action( 'admin_post_utms_reset_channel', 'utms_handle_reset_channel' );

        function utms_render_admin_page_pauta() {
        utms_render_admin_page( 'pauta', 'utms-url-hashes-pauta' );
        }

        function utms_render_admin_page_organico() {
        utms_render_admin_page( 'organico', 'utms-url-hashes-organico' );
        }

        function utms_render_settings_page_pauta() {
        utms_render_settings_page( 'pauta', 'utms-settings-pauta' );
        }

        function utms_render_settings_page_organico() {
        utms_render_settings_page( 'organico', 'utms-settings-organico' );
        }

        function utms_render_settings_page( $channel, $page_slug ) {
        if ( ! current_user_can( utms_admin_capability() ) ) {
        wp_die( esc_html__( 'You do not have permission to access this page.', 'twentytwentyfive' ) );
        }

        if ( ! utms_table_exists( $channel ) ) {
        utms_maybe_create_url_table();
        }

        $title = 'Configuracion (' . utms_get_channel_label( $channel ) . ')';

        echo '<div class="wrap">';
          echo '<h1 class="wp-heading-inline">' . esc_html( $title ) . '</h1>';
          echo '
          <hr class="wp-header-end">';

          if ( isset( $_GET['utms_reset'] ) ) {
          echo '<div class="notice notice-success">
            <p>' . esc_html__( 'Datos limpiados correctamente.', 'twentytwentyfive' ) . '</p>
          </div>';
          }

          if ( ! utms_table_exists( $channel ) ) {
          echo '<div class="notice notice-error">
            <p>' . esc_html__( 'La tabla no existe. Recarga la pagina para recrearla.', 'twentytwentyfive' ) . '</p>
          </div>';
          echo '
        </div>';
        return;
        }

        echo '<p>Esta accion elimina todos los registros y reinicia la secuencia del canal.</p>';
        echo '<form method="post" action="' . esc_url( admin_url( 'admin-post.php' ) ) . '"
          style="margin: 12px 0 20px;">';
          wp_nonce_field( 'utms_reset_channel' );
          echo '<input type="hidden" name="action" value="utms_reset_channel">';
          echo '<input type="hidden" name="channel" value="' . esc_attr( $channel ) . '">';
          echo '<input type="submit" class="button button-secondary" value="Limpiar datos"
            onclick="return confirm(\'Seguro que deseas eliminar todos los registros y reiniciar la secuencia?\');">';
          echo '</form>';
        echo '</div>';
        }

        function utms_render_admin_page( $channel, $page_slug ) {
        if ( ! current_user_can( utms_admin_capability() ) ) {
        wp_die( esc_html__( 'You do not have permission to access this page.', 'twentytwentyfive' ) );
        }

        if ( ! class_exists( 'UTMS_Url_List_Table' ) ) {
        echo '<div class="notice notice-error">
          <p>' . esc_html__( 'No se pudo cargar la tabla.', 'twentytwentyfive' ) . '</p>
        </div>';
        return;
        }

        if ( ! utms_table_exists( $channel ) ) {
        utms_maybe_create_url_table();
        }

        if ( ! utms_table_exists( $channel ) ) {
        echo '<div class="notice notice-error">
          <p>' . esc_html__( 'La tabla no existe. Recarga la pagina para recrearla.', 'twentytwentyfive' ) . '</p>
        </div>';
        return;
        }

        $screen = function_exists( 'get_current_screen' ) ? get_current_screen() : null;
        $screen_id = $screen ? $screen->id : null;
        $filters = utms_get_filters_from_request();
        $list_table = new UTMS_Url_List_Table(
        array(
        'singular' => 'utm-url',
        'plural' => 'utm-urls',
        'screen' => $screen_id,
        'channel' => $channel,
        )
        );
        $list_table->prepare_items();

        $title = 'UTM URLs (' . utms_get_channel_label( $channel ) . ')';

        echo '<div class="wrap">';
          echo '<h1 class="wp-heading-inline">' . esc_html( $title ) . '</h1>';
          echo '
          <hr class="wp-header-end">';
          if ( isset( $_GET['utms_export_error'] ) ) {
          echo '<div class="notice notice-error">
            <p>' . esc_html__( 'No se pudo iniciar la exportacion.', 'twentytwentyfive' ) . '</p>
          </div>';
          }
          echo '<form method="post" action="' . esc_url( admin_url( 'admin-post.php' ) ) . '" style="margin: 0 0 20px;">
            ';
            wp_nonce_field( 'utms_export_channel' );
            echo '<input type="hidden" name="action" value="utms_export_channel">';
            echo '<input type="hidden" name="channel" value="' . esc_attr( $channel ) . '">';
            echo '<input type="hidden" name="utms_year" value="' . esc_attr( $filters['year'] ) . '">';
            echo '<input type="hidden" name="utms_month" value="' . esc_attr( $filters['month'] ) . '">';
            echo '<input type="hidden" name="utms_from" value="' . esc_attr( $filters['from'] ) . '">';
            echo '<input type="hidden" name="utms_to" value="' . esc_attr( $filters['to'] ) . '">';
            echo '<input type="hidden" name="s" value="' . esc_attr( $filters['search'] ) . '">';
            echo '<input type="submit" class="button button-primary" value="Exportar CSV">';
            echo '</form>';
          if ( isset( $_GET['utms_export_job'] ) ) {
          $job_id = (int) $_GET['utms_export_job'];
          if ( $job_id > 0 ) {
          $nonce = wp_create_nonce( 'utms_export_status' );
          echo '<div id="utms-export-status" data-job-id="' . esc_attr( $job_id ) . '"
            data-channel="' . esc_attr( $channel ) . '" data-nonce="' . esc_attr( $nonce ) . '"
            style="margin: 0 0 20px; max-width: 520px;">';
            echo '<div style="margin-bottom: 6px;">Progreso de exportacion</div>';
            echo '<div id="utms-export-bar-wrap"
              style="background: #e5e7eb; border-radius: 6px; overflow: hidden; height: 12px;">';
              echo '<div id="utms-export-bar" style="background: #2271b1; height: 12px; width: 0%;"></div>';
              echo '</div>';
            echo '<div id="utms-export-text" style="margin-top: 6px; font-size: 12px;"></div>';
            echo '<div id="utms-export-link" style="margin-top: 8px;"></div>';
            echo '</div>';
          echo '<script>
          ';
          echo '(function(){';
          echo 'var box=document.getElementById("utms-export-status");';
          echo 'if(!box){return;}';
          echo 'var jobId=box.getAttribute("data-job-id");';
          echo 'var channel=box.getAttribute("data-channel");';
          echo 'var nonce=box.getAttribute("data-nonce");';
          echo 'var wrap=document.getElementById("utms-export-bar-wrap");';
          echo 'var bar=document.getElementById("utms-export-bar");';
          echo 'var text=document.getElementById("utms-export-text");';
          echo 'var link=document.getElementById("utms-export-link");';
          echo 'var timer=null;';
          echo 'function update(){';
          echo
            'fetch(ajaxurl + "?action=utms_export_status&job_id=" + jobId + "&channel=" + channel + "&nonce=" + nonce)';
          echo '.then(function(r){return r.json();})';
          echo '.then(function(res){';
          echo 'if(!res || !res.success){text.textContent="Error al obtener estado.";return;}';
          echo 'var data=res.data;';
          echo
            'if(data.status === "failed"){text.textContent="Error en la exportacion.";if(timer){clearInterval(timer);}return;}';
          echo 'var percent=data.percent || 0;';
          echo 'bar.style.width = percent + "%";';
          echo 'text.textContent = data.processed_rows + " de " + data.total_rows + " (" + percent + "%)";';
          echo 'if(data.status === "done"){';
          echo 'text.textContent = "Exportacion lista (" + percent + "%)";';
          echo
            'if(data.file_url){link.innerHTML = "<a class=\\"button button-secondary\\" href=\\"" + data.file_url + "\\">Descargar CSV</a>";}';
          echo 'if(wrap){wrap.style.display = "none";}';
          echo 'if(timer){clearInterval(timer);}';
          echo '}';
          echo '});';
          echo '}';
          echo 'update();';
          echo 'timer=setInterval(update, 2000);';
          echo '})();';
          echo '
          </script>';
          }
          }
          echo '<form method="get">';
            echo '<input type="hidden" name="page" value="' . esc_attr( $page_slug ) . '">';
            echo '<div style="margin: 0 0 10px; display: flex; flex-wrap: wrap; gap: 12px; align-items: end;">';
              echo '<div>';
                echo '<label for="utms_year">Año</label><br>';
                echo '<select name="utms_year" id="utms_year">';
                  echo '<option value="">Todos</option>';
                  $min_year = (int) apply_filters( 'utms_year_start', 2026 );
                  $max_year = (int) apply_filters( 'utms_year_end', max( $min_year, (int) current_time( 'Y' ) ) + 5 );
                  for ( $year = $min_year; $year <= $max_year; $year++ ) { $selected=(int) $filters['year']===$year
                    ? ' selected' : '' ; echo '<option value="' . esc_attr( $year ) . '"' . $selected . '>' . esc_html(
                    $year ) . '</option>' ; } echo '</select>' ; echo '</div>' ; echo '<div>' ;
                    echo '<label for="utms_month">Mes</label><br>' ; echo '<select name="utms_month" id="utms_month">' ;
                    echo '<option value="">Todos</option>' ; $month_labels=array( 1=> 'Enero',
                    2 => 'Febrero',
                    3 => 'Marzo',
                    4 => 'Abril',
                    5 => 'Mayo',
                    6 => 'Junio',
                    7 => 'Julio',
                    8 => 'Agosto',
                    9 => 'Septiembre',
                    10 => 'Octubre',
                    11 => 'Noviembre',
                    12 => 'Diciembre',
                    );
                    for ( $month = 1; $month <= 12; $month++ ) { $selected=(int) $filters['month']===$month
                      ? ' selected' : '' ; $label=isset( $month_labels[ $month ] ) ? $month_labels[ $month ] : (string)
                      $month; echo '<option value="' . esc_attr( $month ) . '"' . $selected . '>' . esc_html( $label )
                      . '</option>' ; } echo '</select>' ; echo '</div>' ; echo '<div>' ;
                      echo '<label for="utms_from">Desde</label><br>' ;
                      echo '<input type="date" name="utms_from" id="utms_from" value="' . esc_attr( $filters['from'] )
                      . '">' ; echo '</div>' ; echo '<div>' ; echo '<label for="utms_to">Hasta</label><br>' ;
                      echo '<input type="date" name="utms_to" id="utms_to" value="' . esc_attr( $filters['to'] ) . '">'
                      ; echo '</div>' ; echo '<div>' ; echo '<input type="submit" class="button" value="Filtrar">' ;
                      echo '</div>' ; echo '</div>' ; $list_table->search_box( 'Buscar', 'utms-search' );
                      $list_table->display();
                      echo '</form>';
          echo '
        </div>';
        }

        if ( is_admin() ) {
        if ( ! class_exists( 'WP_List_Table' ) ) {
        require_once ABSPATH . 'wp-admin/includes/class-wp-list-table.php';
        }

        if ( class_exists( 'WP_List_Table' ) && ! class_exists( 'UTMS_Url_List_Table' ) ) {
        class UTMS_Url_List_Table extends WP_List_Table {
        private $channel = 'pauta';

        public function __construct( $args = array() ) {
        if ( isset( $args['channel'] ) ) {
        $this->channel = utms_normalize_channel( $args['channel'] );
        unset( $args['channel'] );
        }

        parent::__construct( $args );
        }

        public function get_columns() {
        return array(
        'code' => 'Codigo',
        'url' => 'URL',
        'created_at' => 'Fecha',
        );
        }

        public function get_sortable_columns() {
        return array(
        'id' => array( 'id', true ),
        'code' => array( 'code_number', false ),
        'created_at' => array( 'created_at', false ),
        );
        }

        public function prepare_items() {
        global $wpdb;

        $table_name = utms_get_url_table_name( $this->channel );
        $per_page = 20;
        $paged = $this->get_pagenum();
        $offset = ( $paged - 1 ) * $per_page;

        $filters = utms_get_filters_from_request();
        $where_sql = '1=1';
        $params = array();

        $where_sql = utms_build_where_clause( $filters, $wpdb, $params );

        $orderby = isset( $_REQUEST['orderby'] ) ? sanitize_key( $_REQUEST['orderby'] ) : 'code_number';
        $order = isset( $_REQUEST['order'] ) ? strtoupper( sanitize_text_field( wp_unslash( $_REQUEST['order'] ) ) ) :
        'DESC';

        $allowed_orderby = array( 'id', 'created_at', 'code_number' );
        if ( ! in_array( $orderby, $allowed_orderby, true ) ) {
        $orderby = 'id';
        }

        if ( 'ASC' !== $order ) {
        $order = 'DESC';
        }

        $count_sql = "SELECT COUNT(*) FROM $table_name WHERE $where_sql";
        if ( $params ) {
        $count_sql = $wpdb->prepare( $count_sql, $params );
        }
        $total_items = (int) $wpdb->get_var( $count_sql );

        $data_sql = "SELECT id, url, url_hash, code_number, created_at FROM $table_name WHERE $where_sql ORDER BY
        $orderby $order LIMIT %d OFFSET %d";
        $data_params = array_merge( $params, array( $per_page, $offset ) );
        $data_sql = $wpdb->prepare( $data_sql, $data_params );
        $rows = $wpdb->get_results( $data_sql, ARRAY_A );

        $this->items = $rows;
        $this->_column_headers = array(
        $this->get_columns(),
        array(),
        $this->get_sortable_columns(),
        $this->get_primary_column_name(),
        );

        $this->set_pagination_args(
        array(
        'total_items' => $total_items,
        'per_page' => $per_page,
        'total_pages' => (int) ceil( $total_items / $per_page ),
        )
        );
        }

        public function no_items() {
        $label = utms_get_channel_label( $this->channel );
        echo esc_html( 'No hay registros para ' . $label . '. Visita una URL con parametros para crear el primero.' );
        }

        public function column_default( $item, $column_name ) {
        switch ( $column_name ) {
        case 'id':
        case 'code':
        $code_number = isset( $item['code_number'] ) ? (int) $item['code_number'] : 0;
        return esc_html( utms_format_code( $code_number, $this->channel ) );
        case 'url':
        $url = esc_url( $item['url'] );
        if ( $url ) {
        return '<a href="' . $url . '" target="_blank" rel="noopener">' . $url . '</a>';
        }
        return esc_html( $item['url'] );
        case 'created_at':
        return esc_html( $item['created_at'] );
        }

        return '';
        }
        }
        }
        }


        // utm-url-tracking.php
