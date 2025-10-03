<h1>Section content</h1>
<?php
$data = get_query_var('section_data', []); // Si no hay data, retorna []
$content = $data['content'] ?? '';              // Si no hay title, retorna ''
vdebug($content);
