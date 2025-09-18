<?php

function configure_rank_math_for_cpt() {
    // Obtener la configuración actual de Rank Math
    $titles = get_option('rank_math_titles', array());

    // Si no existe la opción, inicializar como array
    if (!is_array($titles)) {
        $titles = array();
    }

    // Configurar meta description para CPT carreras
    $titles['pt_carreras_description'] = '%excerpt%';
    $titles['pt_carreras_title'] = '%title%';
    $titles['pt_carreras_robots'] = '1,1,1,1'; // index, follow, etc.
    $titles['pt_carreras_default_rich_snippet'] = 'article';
    $titles['pt_carreras_add_meta_box'] = 'on';

    // Guardar la configuración actualizada
    update_option('rank_math_titles', $titles);
}

// Ejecutar solo una vez cuando se necesite configurar
add_action('init', 'configure_rank_math_for_cpt', 999);
