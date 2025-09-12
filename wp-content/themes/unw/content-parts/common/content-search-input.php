<?php
$placeholder = $args["placeholder"] ?? "";
$aria_label = $args["aria_label"] ?? "Buscar";
$input_name = $args["input_name"] ?? "search";
?>

<div class="search-input">
  <i>
    <svg width="24" height="24">
      <use xlink:href="#search"></use>
    </svg>
  </i>
  <input id="search-input" type="text" placeholder="<?php echo esc_attr($placeholder); ?>"
    name="<?php echo esc_attr($input_name); ?>" value="<?php echo esc_attr(get_search_query()); ?>"
    aria-label="<?php echo esc_attr($aria_label); ?>" class="search-input__field">
  <a href="<?php echo esc_url(home_url('/')); ?>?s=" id="search-clear" class="search-input__clear">Limpiar</a>
</div>