<?php
$image_hero = get_field('banner-image');

$titulo = get_the_title();
$fecha = get_the_date('j') . ' de ' . ucfirst(get_the_date('F')) . ' del ' . get_the_date('Y');
$autor = get_the_author();
$author_id = get_the_author_meta('ID');

$breadcrumbs = [
  ['label' => 'Inicio', 'href' => home_url('/')],
  ['label' => 'Blog', 'href' => home_url('/blog/')],
  ['label' => $titulo]
];
?>

<div class="entry-meta">
  <div class="entry-meta__content">
    <h1 class="entry-meta__title"><?php echo esc_html($titulo); ?></h1>

    <div class="entry-meta__info">
      <?php echo get_avatar($author_id, 24, '', 'Avatar del autor', [
        'class' => 'entry-meta__avatar',
      ]); ?>
      <span class="entry-meta__author">By <strong><?php echo esc_html($autor); ?></strong></span>
      <span class="entry-meta__date"><?php echo esc_html($fecha); ?></span>
    </div>

    <div class="entry-meta__breadcrumbs">
      <?php
      get_template_part(COMMON_CONTENT_PATH, 'breadcrumb', [
        'breadcrumb' => $breadcrumbs
      ]);
      ?>
    </div>
  </div>

  <img src="<?=placeholder() ?>" data-src="<?php echo esc_url($image_hero['imagen']['url']); ?>" class="entry-meta__image lazyload"
    alt="<?php echo esc_attr($image_hero['imagen']['alt'] ?? 'Imagen destacada'); ?>">

  <div class="entry-meta__social">
    <?php get_template_part(BLOG_DETAIL_CONTENT_PATH, 'social-meta'); ?>
  </div>
</div>
