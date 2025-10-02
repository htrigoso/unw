<?php
$sidebar = $args['sidebar'] ?? [];
if ($sidebar): ?>
<?php foreach ($sidebar as $i => $item):?>
<a href="<?=$item['id']?>" class="link_item_tab scroll large w-inline-block">
  <div><?=$item['sidebar_title']?></div>
</a>
<?php endforeach; ?>
<?php endif; ?>
