<?php
/**
 * Control de Incubeta Analytics
 * Define INCUBETA_ENABLED como true para habilitar tracking
 * Define como false o comenta la línea para deshabilitar
 */
define('INCUBETA_ENABLED', false);

// require vendor packages autoload
// require_once dirname(__FILE__) . '/vendor/autoload.php';

// require 3th party packages

// require WP updates
require_once dirname(__FILE__) . '/inc/wp-updates.php';

// require theme setting
require_once dirname(__FILE__) . '/inc/wp-settings.php';

// require blog
require_once dirname(__FILE__) . '/inc/wp-blog.php';

// require form
require_once dirname(__FILE__) . '/inc/wp-form.php';

// require Rank Math configuration
require_once dirname(__FILE__) . '/inc/wp-cs.php';
require_once dirname(__FILE__) . '/inc/wp-custom-acf.php';

// require theme functions
require_once dirname(__FILE__) . '/inc/wp-inc.php';


// require SEO functions
require_once dirname(__FILE__) . '/inc/wp-seo.php';

require_once dirname(__FILE__) . '/inc/wp-migratation.php';

require_once dirname(__FILE__) . '/inc/wp-careers.php';

require_once dirname(__FILE__) . '/inc/functions/tpl-noticias.php';

require_once dirname(__FILE__) . '/inc/functions/preserve-url-params.php';
