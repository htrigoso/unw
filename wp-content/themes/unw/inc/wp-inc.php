<?php

// require head
require_once dirname(__FILE__) . '/functions/include-assets.php';


// require actions
// require_once dirname(__FILE__) . '/actions/wp-action-contact.php';

// require functions
require_once dirname(__FILE__) . '/functions/register-option-page.php';
require_once dirname(__FILE__) . '/functions/tpl-functions.php';

// require custom post types
require_once dirname(__FILE__) . '/post-types/cpt-carriers.php';
require_once dirname(__FILE__) . '/post-types/cpt-countries.php';
require_once dirname(__FILE__) . '/post-types/cpt-testimonials.php';
require_once dirname(__FILE__) . '/post-types/cpt-news.php';
require_once dirname(__FILE__) . '/post-types/cpt-events.php';
require_once dirname(__FILE__) . '/post-types/cpt-teachers.php';
require_once dirname(__FILE__) . '/post-types/cpt-courses.php';
require_once dirname(__FILE__) . '/post-types/cpt-infrastructure.php';
require_once dirname(__FILE__) . '/post-types/cpt-admission-process.php';
require_once dirname(__FILE__) . '/post-types/cpt-faculties.php';
require_once dirname(__FILE__) . '/post-types/ctp-colores.php';

// require custom taxonomies
require_once dirname(__FILE__) . '/taxonomies/taxonomy-modalidad.php';
require_once dirname(__FILE__) . '/taxonomies/taxonomy-facultad-carriers.php';
require_once dirname(__FILE__) . '/taxonomies/taxonomy-news.php';
require_once dirname(__FILE__) . '/taxonomies/taxonomy-campus.php';


// require menu walkers
// require head
require_once dirname(__FILE__) . '/functions/include-menu-desktop.php';
require_once dirname(__FILE__) . '/functions/include-menu-footer.php';
require_once dirname(__FILE__) . '/functions/include-menu-mobile.php';

// require globe
require_once dirname(__FILE__) . '/functions/include-globe.php';
