<?php
$wa_general = get_field('wa_general', 'options');
$wg  = $wa_general ?? [];

$wg_img = $wg['image'] ?? [];
$wg_link = $wg['link'] ?? [];

if (!is_whatsapp_blocked($wa_general) && !empty($wg_img) && !empty($wg_link)) {
  $current_page_id = get_queried_object_id();
  $utms_whatsapp = unw_get_utms_whatsapp($current_page_id);

  if ($utms_whatsapp['active'] === true) {
?>
<a class="whatsapp-link" id="contact-whatsapp" href="#" rel="noopener"
  <?= !empty($wg_link['target']) ? 'target="' . esc_attr($wg_link['target']) . '"' : '' ?>
  data-page="<?= $current_page_id ?>" data-url="<?php echo admin_url('admin-ajax.php'); ?>"
  data-nonce="<?php echo wp_create_nonce('utm_whatsapp_nonce'); ?>">
  <span class="sr-only"><?= esc_html($wg_link['title']) ?></span>
  <img class="whatsapp-link__icon" src="<?= esc_url($wg_img['url']) ?>"
    <?= !empty($wg_img['alt']) ? 'alt="' . esc_attr($wg_img['alt']) . '"' : '' ?> width="auto" height="auto"
    aria-hidden="true" />
</a>
<?php
  } else {
  ?>
<a class="whatsapp-link" href="<?= esc_url($wg_link['url']) ?>" rel="noopener"
  <?= !empty($wg_link['target']) ? 'target="' . esc_attr($wg_link['target']) . '"' : '' ?>
  <?= !empty($wg_link['title']) ? 'aria-title="' . esc_attr($wg_link['title']) . '"' : '' ?>>
  <span class="sr-only"><?= esc_html($wg_link['title']) ?></span>
  <img class="whatsapp-link__icon" src="<?= esc_url($wg_img['url']) ?>"
    <?= !empty($wg_img['alt']) ? 'alt="' . esc_attr($wg_img['alt']) . '"' : '' ?> width="auto" height="auto"
    aria-hidden="true" />
</a>
<?php
  }
}
?>