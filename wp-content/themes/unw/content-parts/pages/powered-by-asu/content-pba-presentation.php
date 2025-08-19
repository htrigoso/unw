<?php
$presentation = get_field('presentation');
?>

<section class="pba-presentation">
  <div class="x-container x-container--pad-213">
    <!-- Logos -->
    <div class="pba-presentation__logos">
      <img src="<?php echo esc_url($presentation['images']['logo_unw']['url']); ?>" alt="UNW Logo">
      <img src="<?php echo esc_url($presentation['images']['logo_asu']['url']); ?>" alt="ASU Logo">
    </div>

    <!-- Descripción -->
    <div class="pba-presentation__desc">
      <h2 class="pba-presentation__desc--title"><?php echo $presentation['title']; ?></h2>
      <p class="pba-presentation__desc--text"><?php echo $presentation['description']; ?></p>
    </div>

    <!-- Edificio -->
    <div class="pba-presentation__building">
      <img src="<?php echo esc_url($presentation['building_info']['image']['url']); ?>" alt="Building"
        class="pba-presentation__building--img" />
      <div class="pba-presentation__building--desc">
        <strong><?php echo $presentation['building_info']['title']; ?></strong>
        <span><?php echo $presentation['building_info']['subtitle']; ?></span>
      </div>
    </div>

    <!-- Lista -->
    <div class="pba-presentation__list-container">
      <ul class="list-format pba-presentation__list" data-variant="asu">
        <?php foreach ($presentation['benefits_list'] as $benefit): ?>
          <li><?php echo $benefit['item']; ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>
