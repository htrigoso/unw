<?php
$contact = $args['contact'] ?? null;
if ($contact): ?>
<div class="">
  <h4 class="h4_verde"><?=esc_html($contact['title'])?></h4>
  <div class="item_contact last">
    <div><?= wp_kses_post($contact['description']); ?></div>
  </div>
</div>
<?php endif; ?>
