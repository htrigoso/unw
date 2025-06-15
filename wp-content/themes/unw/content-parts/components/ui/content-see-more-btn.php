<?php
$text = get_query_var('see_more_text', 'Ver más');
$href = get_query_var('see_more_href', '#');
$class = get_query_var('see_more_class', '');
?>
<a href="<?php echo esc_url($href); ?>" class="btn btn-sm btn-secondary-one see-more-btn <?php echo esc_attr($class); ?>">
  <?php echo esc_html($text); ?>
  <i>
    <svg class="icon icon--arrow" width="32" height="32">
      <use xlink:href="#arrow-right"></use>
    </svg>
  </i>
</a>
