<h1>Section grid 1</h1>
<?php
$data = get_query_var('section_data', null);
$title = $data['title'] ?? '';
$cards = $data['cards'] ?? [];
// vdebug($title);
