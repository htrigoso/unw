<?php
$contact = $args['contact'];
if (isset($contact)): ?>
  <div class="">
    <?php if (!empty($contact['title'])) { ?>
      <h4 class="h4_verde"><?= esc_html($contact['title']) ?></h4>
    <?php } ?>
    <div class="item_contact last">
      <div><?= wp_kses_post($contact['description']); ?></div>
    </div>
  </div>
<?php endif; ?>
