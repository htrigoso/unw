<?php
$data = get_query_var('section_data', null);
$source_title = $data['title'] ?? '';
$source_cards = $data['cards'] ?? [];

$options_list = [];
if (!empty($source_cards)) {
  foreach ($source_cards as $card) {
    $text_content = strip_tags($card['content']);

    $options_list[] = [
      'title'       => $text_content,
      'description' => ''
    ];
  }
}

$component_args = [
  'content' => [
    'title'   => $source_title,
    'options' => $options_list,
  ]
];

get_template_part(COMMON_CONTENT_PATH, 'impact-results', $component_args);
