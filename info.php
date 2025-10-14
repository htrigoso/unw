<?php
require __DIR__ . '/wp-load.php';

/**
 * Script optimizado por lotes:
 * Copia el campo ACF 'content' al editor principal (post_content)
 * para todos los posts del CPT 'novedades', en bloques de 100 registros.
 */

// === CONFIGURACIÓN ===
$batch_size = 100; // cantidad de posts por lote
$offset     = isset($_GET['offset']) ? intval($_GET['offset']) : 0; // para ejecutar varios ciclos manualmente

// === CONSULTA ===
$args = array(
    'post_type'      => 'novedades',
    'posts_per_page' => $batch_size,
    'offset'         => $offset,
    'post_status'    => array('publish', 'draft', 'pending'),
    'fields'         => 'ids' // optimiza la memoria: solo trae IDs
);

$posts = get_posts($args);
$total = count($posts);
$count = 0;

if ($total > 0) {
    foreach ($posts as $post_id) {
        $acf_content = get_field('content', $post_id);

        if (!empty($acf_content)) {
            wp_update_post(array(
                'ID'           => $post_id,
                'post_content' => $acf_content
            ));
            $count++;
        }
    }
}

// === SALIDA ===
header('Content-Type: text/plain; charset=utf-8');
echo "✅ Lote procesado correctamente\n";
echo "Desde offset: {$offset}\n";
echo "Posts procesados en este lote: {$total}\n";
echo "Posts actualizados: {$count}\n";

// === PRÓXIMO LOTE (opcional) ===
$next_offset = $offset + $batch_size;
$next_url = strtok($_SERVER["REQUEST_URI"], '?') . '?offset=' . $next_offset;

if ($total === $batch_size) {
    echo "\n➡️  Ejecuta el siguiente lote:\n$next_url\n";
} else {
    echo "\n🎉 Migración completada. No quedan más posts por procesar.\n";
}