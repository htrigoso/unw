<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'unw' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':2ziCs4%(.!XiL@$,&k;+ C-yv=3`Ph?S?n.IgF?*P5:JLJUYb%d5`$RQ-KP(:6p' );
define( 'SECURE_AUTH_KEY',  '#idT<${m`b)U*QVO`>7bOgC{4SUi94KfNQRn%V9oN0Id+ ^s_q%Du-:K.4Ni3U,(' );
define( 'LOGGED_IN_KEY',    '9TgZ_qY0S{b UB/LMDW5ukQq1$,*JXZtJ6;JBmur&JWfdmDRxINwkUOAHT_zMi#&' );
define( 'NONCE_KEY',        '&iFn(KfoQ,|]}OjN[c,&qs)NG}}4a01: LJylvD%;*m[lU?LXXbIooB=^Afde65G' );
define( 'AUTH_SALT',        'fC}<z0`(>_vF L|jh%[$sQ-v}Gz^%?Mz/Yc!pGArNlWOz7vNRxld1YlxhxSqD]qn' );
define( 'SECURE_AUTH_SALT', 'Ai7x=<!G*LQaqjLj;eKXGixu &ZM>6W0BkSYQ$wK+mDn?xTdL$Sh/DX<h3@?oV6@' );
define( 'LOGGED_IN_SALT',   '}uyI?_^8_fd}kq5_t1^4XSMyfJKq2*PAC>m1Gr>nPnn>xfK0u6mg2FCnP_~~Nynz' );
define( 'NONCE_SALT',       'cTl#JKd5>N&.SpVAYaawAf.?BD@CN1e18u94{*l:?##85>VWv!}Pif$A0h`f%:ZM' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wpunw_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

 define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';