<?php
$wa_general = get_field('wa_general', 'options');
$wg  = $wa_general ?? [];

$wg_img = $wg['image'] ?? [];
$wg_link = $wg['link'] ?? [];

if (!is_whatsapp_blocked($wa_general)) {
  if ($wg_img && $wg_link) {
    $current_url = unw_get_current_url(['tab']);
    $utm = get_utm_by_url($current_url, get_queried_object_id());
?>
    <a
      class="whatsapp-link"
      id="contact-whatsapp"
      href="<?= esc_url($utm['whatsapp_link']) ?>"
      rel="noopener"
      <?= !empty($wg_link['target']) ? 'target="' . esc_attr($wg_link['target']) . '"' : '' ?>
      <?= !empty($wg_link['title']) ? 'aria-title="' . esc_attr($wg_link['title']) . '"' : '' ?>
      data-exists="<?php echo $utm['exists'] ? 'true' : 'false'; ?>"
      <?php if (!$utm['exists']) { ?>
      data-url="<?php echo admin_url('admin-ajax.php'); ?>"
      data-nonce="<?php echo wp_create_nonce('utm_whatsapp_nonce'); ?>"
      <?php } ?>
    >
      <span class="sr-only"><?= esc_html($wg_link['title']) ?></span>
      <img
        class="whatsapp-link__icon"
        src="<?= esc_url($wg_img['url']) ?>"
        <?= !empty($wg_img['alt']) ? 'alt="' . esc_attr($wg_img['alt']) . '"' : '' ?>
        width="auto"
        height="auto"
        aria-hidden="true" />
    </a>
<?php
  }
}
?>
