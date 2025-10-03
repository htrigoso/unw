<h1>Hero</h1>
<?php
$data = get_query_var('section_data', []); // Si no hay data, retorna []
$title = $data['title'] ?? '';              // Si no hay title, retorna ''
$images = $data['images'] ?? [];
// vdebug($images);