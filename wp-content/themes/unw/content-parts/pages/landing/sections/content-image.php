<h1>Section image</h1>

<?php

$data = get_query_var('section_data', null);
$image = $data['image'] ?? '';

//vdebug($image);