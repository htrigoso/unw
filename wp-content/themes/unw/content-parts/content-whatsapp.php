<?php
$wa_general = get_field('wa_general', 'options');
$wg  = $wa_general ?? [];

$wg_img = $wg['image'] ?? [];
$wg_link = $wg['link'] ?? [];

if (!is_whatsapp_blocked($wa_general) && !empty($wg_img) && !empty($wg_link)) {
  $current_page_id = get_queried_object_id();
  $current_url = unw_get_current_url();
  $utms_whatsapp = unw_get_utms_whatsapp($current_page_id);

  if ($utms_whatsapp['active'] === true) {
    $whatsapp_link = unw_generate_whatsapp_link($current_url, $utms_whatsapp);
    if ($whatsapp_link) {
?>
    <a
      class="whatsapp-link"
      id="contact-whatsapp"
      href="<?= esc_url($whatsapp_link) ?>"
      rel="noopener"
      <?= !empty($wg_link['target']) ? 'target="' . esc_attr($wg_link['target']) . '"' : '' ?>
    >
      <span class="sr-only"><?= esc_html($wg_link['title']) ?></span>
      <img
        class="whatsapp-link__icon"
        src="<?= esc_url($wg_img['url']) ?>"
        alt="Ícono de Whatsapp"
        <?= !empty($wg_img['alt']) ? 'alt="' . esc_attr($wg_img['alt']) . '"' : '' ?>
        width="auto"
        height="auto"
        aria-hidden="true" />
    </a>
  <?php
    }
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
        alt="Ícono de Whatsapp"
        <?= !empty($wg_img['alt']) ? 'alt="' . esc_attr($wg_img['alt']) . '"' : '' ?>
        width="auto"
        height="auto"
        aria-hidden="true" />
    </a>
<?php
  }
}
?>
