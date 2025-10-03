<h1>Section carousel</h1>
<?php
$data = get_query_var('section_data', null);
$description = $data['description'] ?? '';
$cards = $data['cards'] ?? [];
// vdebug($cards);