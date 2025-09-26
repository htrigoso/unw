<?php
$contact = $args['contact'] ?? null;
if ($contact): ?>
<div class="">
  <h4 class="h4_verde"><?=esc_html($contact['title'])?></h4>
  <div class="item_contact last"><img
      src="https://www.uwiener.edu.pe/wp-content/themes/unw/upload/migration/shared/arroba_black.svg" alt=""
      class="icon_contact">
    <div><?=esc_html($contact['description'])?></div>
  </div>
</div>
<?php endif; ?>