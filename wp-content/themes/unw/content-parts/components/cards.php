<?php
$cards = $args['cards'] ?? [];
if ($cards): ?>
<?php foreach ($cards as $i => $item):
  $link = $item['cards_link']
  ?>
<div role="listitem" class="collection_item serv_univer w-dyn-item">
  <a title="<?php echo esc_attr( $link['title'] ?? '' ); ?>" href="<?= esc_url($link['url']); ?>"
    target="<?= esc_attr($link['target'] ?? ''); ?>" class="item_serv_university w-inline-block">
    <h4 class="h4_light"><?= esc_html($item['cards_title']); ?></h4>
    <div class="btn-legacy text"><?= esc_html($link['title']); ?></div>
  </a>
</div>
<?php endforeach; ?>
<?php endif; ?>
