<?php
$array_index_name = get_query_var('array_index_name');

$menu = get_field('menu-of-careers-programs', 'option');
$menu = $menu[$array_index_name];

foreach ($menu as $column_key => $column_data):
?>
<ul class="sub-menu">
  <?php foreach ($column_data as $section): ?>
  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-396">
    <a href="http://unw.loc/ciencias-de-la-salud/"><?= $section['title'] ?></a>

    <?php if (!empty($section['links'])): ?>
    <ul class="sub-menu">
      <?php foreach ($section['links'] as $link_item): ?>
      <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-403">
        <a href="<?= $link_item['link']['url'] ?>"
           target="<?= $link_item['link']['target'] ?>">
           <?= $link_item['link']['title'] ?>
        </a>
      </li>
      <?php endforeach; ?>
    </ul>
    <?php endif; ?>

  </li>
  <?php endforeach; ?>
</ul>
<?php
endforeach;
?>
