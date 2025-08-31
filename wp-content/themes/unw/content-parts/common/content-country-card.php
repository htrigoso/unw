<?php
$country = $args['country'];
?>
<article class="country__card">
  <img width="80" height="80" src="<?=placeholder() ?>" data-src="<?php echo esc_url($country['file']); ?>"
    alt="País <?php echo esc_attr($country['name']); ?>" class="country__flag lazyload">
  <p class="country__country"><?php echo esc_html($country['name']); ?></p>
</article>
