<?php
$powered = get_field('powered');
if(isset($powered) && is_array($powered)):
?>
<section class="pba-powered">
  <div class="x-container x-container--pad-213 pba-powered__wrapper">
    <div class="pba-powered__header">
      <h3 class="pba-powered__header--title">
        <?php echo wp_kses_post($powered['title']); ?>
      </h3>
      <div class="pba-powered__header--card">
        <?php echo esc_html($powered['subtitle']); ?>
      </div>
    </div>
    <p class="pba-powered__content">
      <?php echo esc_html($powered['description']); ?>
    </p>
  </div>
</section>
<?php
endif;