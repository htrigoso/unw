<?php
$globe = get_field('globe');
if(!isset($globe )&& !is_array($globe)){
  return;
}
$countries = $globe['countries'];
$controls = $globe['controls'];

?>
<script>
window.pbaCountries = <?php echo wp_json_encode($countries); ?>;
</script>
<section class="pba-network" data-map="<?=$globe['map_default']['url']?>" data-marker="<?=$globe['marker']['url']?>">
  <div class="pba-network__wrapper">
    <h3 class="pba-network__title x-container x-container--pad-213"><?= nl2br(wp_kses_post($globe['title']));?></h3>
    <div class="pba-network__globe">
      <span class="pba-network__water-mark">Red Global</span>
      <div id="globeViz" class="pba-network__globe-container"></div>
      <div id="globeControls" class="pba-network__globe--controls">
        <?php foreach ($controls as $key => $value):?>
        <button data-map="<?=$value['map']['url'] ?>" data-lat="<?=$value['coordinates']['lat']?>"
          data-lng="<?=$value['coordinates']['lng']?>"
          class="<?=$key === 0 ? 'active': ''?>"><?=$value['name']?></button>

        <?php endforeach;?>
      </div>
    </div>

    <div id="tooltip" class="tooltip"></div>
  </div>
</section>

<?php foreach ($globe['countries'] as $country): ?>
<?php
  ob_start();
  ?>
<div class="pba-network-modal__content">
  <div class="pba-network-modal__content--header">
    <img src="<?=placeholder() ?>" data-src="<?php echo esc_url($country['flag']['url']); ?>" alt="" aria-hidden="true" class="lazyload" />
    <h4><?= esc_html($country['name']) ?></h4>
  </div>

  <div class="pba-network-modal__content--body">
    <?php foreach ($country['agreements'] as $agreement): ?>
    <img src="<?php echo esc_url($agreement['image']['url']); ?>" alt="" aria-hidden="true" />
    <?php endforeach; ?>
  </div>
</div>
<?php
  $content = ob_get_clean();
  ?>
<?php
  get_template_part(COMMON_CONTENT_PATH, 'modal', [
    'content' => $content,
    'id' => $country['name'],
    'class' => 'pba-network-modal'
  ]);
  ?>
<?php endforeach; ?>
