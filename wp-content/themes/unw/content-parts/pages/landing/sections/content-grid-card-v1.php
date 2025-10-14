<?php
$data = get_query_var('section_data', null);
$source_title = $data['title'] ?? '';
$source_cards = $data['cards'] ?? [];

$options_list = [];
if (!empty($source_cards)) {
  foreach ($source_cards as $card) {
    $clean_content = strip_tags($card['content'], '<strong><a><em>');

    $options_list[] = [
      'icon' => $card['icon'],
      'text' => $clean_content,
    ];
  }
}

$component_args = [
  'benefits' => [
    'title'   => $source_title,
    'options' => $options_list,
  ],
];

get_template_part(COMMON_CONTENT_PATH, 'grid-benefits', $component_args);
?>
