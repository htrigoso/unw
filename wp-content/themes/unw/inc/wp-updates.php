<?php

/**
 * WP Updates
 */
// define('WP_AUTO_UPDATE_CORE', false);
// define( 'AUTOMATIC_UPDATER_DISABLED', true );
// add_filter( 'auto_update_plugin', '__return_false' );

// remove_action('load-update-core.php','wp_update_plugins');

// add_filter('pre_site_transient_update_plugins','__return_null');
// add_filter('pre_site_transient_update_core','remove_core_updates');
// add_filter('pre_site_transient_update_plugins','remove_core_updates');
// add_filter('pre_site_transient_update_themes','remove_core_updates');

// function remove_core_updates() {
//     global $wp_version;
//     return(object) array('last_checked'=> time(),'version_checked'=> $wp_version);
// }