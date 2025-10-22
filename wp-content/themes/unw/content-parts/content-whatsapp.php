<?php
$wa_general = get_field('wa_general', 'options');
$wg  = $wa_general ?? [];

$wg_img = $wg['image'] ?? [];
$wg_link = $wg['link'] ?? [];

if (!is_whatsapp_blocked($wa_general) && !empty($wg_img) && !empty($wg_link)) {
  $wa_utms = get_field('utms_whatsapp', 'options');

  if (!empty($wa_utms) && $wa_utms['active'] === true) {
    // $current_url = unw_get_current_url(['tab']);
    // $utm = get_utm_by_url($current_url, get_queried_object_id());
?>
    <button
      type="button"
      class="whatsapp-link"
      id="contact-whatsapp"
      data-page-id="<?php echo get_queried_object_id(); ?>"
      data-url="<?php echo admin_url('admin-ajax.php'); ?>"
      data-nonce="<?php echo wp_create_nonce('utm_whatsapp_nonce'); ?>"
    >
      <span class="sr-only"><?= esc_html($wg_link['title']) ?></span>
      <img
        class="whatsapp-link__icon"
        src="<?= esc_url($wg_img['url']) ?>"
        <?= !empty($wg_img['alt']) ? 'alt="' . esc_attr($wg_img['alt']) . '"' : '' ?>
        width="auto"
        height="auto"
        aria-hidden="true" />
    </button>
  <?php
  } else {
  ?>
    <a
      class="whatsapp-link"
      href="<?= esc_url($wg_link['url']) ?>"
      rel="noopener"
      <?= !empty($wg_link['target']) ? 'target="' . esc_attr($wg_link['target']) . '"' : '' ?>
      <?= !empty($wg_link['title']) ? 'aria-title="' . esc_attr($wg_link['title']) . '"' : '' ?>>
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
