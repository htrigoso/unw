<?php
require __DIR__ . '/wp-load.php';
print '<pre>';
 
unregister_post_type('facultad');

    // Borrar posts existentes de este CPT
    $posts = get_posts([
        'post_type' => 'facultad',
        'numberposts' => -1,
        'post_status' => 'any',
    ]);

    foreach ($posts as $post) {
        wp_delete_post($post->ID, true); // true = fuerza eliminación permanente
    }