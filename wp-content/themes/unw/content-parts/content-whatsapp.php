<?php
$wa_general = get_field('wa_general', 'options');
$wg  = $wa_general ?? [];
$url = $wg['link']['url']  ?? '';
$img = $wg['image']['url'] ?? '';
$title = $wg['link']['title'] ?? '';

if (!is_whatsapp_blocked($wa_general)) {
  if ($url && $img) {
    $current_post_id = get_queried_object_id();
    $full_url = unw_get_current_url(['tab']);
    $wa_link = get_utm_by_url($full_url, $current_post_id);

    if ($wa_link) {
?>
      <a
        class="whatsapp-link"
        href="<?= esc_url($wa_link) ?>"
        arial-label="<?= esc_attr($title) ?>"
        rel="noopener"
        <?= !empty($wg['link']['target']) ? 'target="' . esc_attr($wg['link']['target']) . '"' : '' ?>
        <?= !empty($wg['link']['title']) ? 'aria-label="' . esc_attr($wg['link']['title']) . '"' : '' ?>>
        <span class="sr-only"><?= esc_html($title) ?></span>
        <img src="<?= esc_url($img) ?>" width="auto" height="auto" aria-hidden="true"
          alt="<?= !empty($wg['image']['alt']) ? esc_attr($wg['image']['alt']) : '' ?>" class="whatsapp-link__icon" />
      </a>
    <?php
    } else {
    ?>
      <button
        type="button"
        id="contact-whatsapp"
        class="whatsapp-link"
        data-id="<?php echo $current_post_id; ?>"
        data-url="<?php echo admin_url('admin-ajax.php'); ?>"
        data-nonce="<?php echo wp_create_nonce('utm_whatsapp_nonce'); ?>">
        <span class="sr-only"><?= esc_html($title) ?></span>
        <img src="<?= esc_url($img) ?>" width="auto" height="auto" aria-hidden="true"
          alt="<?= !empty($wg['image']['alt']) ? esc_attr($wg['image']['alt']) : '' ?>" class="whatsapp-link__icon" />
      </button>
<?php
    }
  }
}
?>
