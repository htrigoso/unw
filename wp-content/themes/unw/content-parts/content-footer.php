<?php
function arr_get($arr, $path)
{
  if (!is_array($arr)) return null;
  $ref = $arr;
  foreach ($path as $k) {
    if (!is_array($ref) || !array_key_exists($k, $ref)) return null;
    $ref = $ref[$k];
  }
  return $ref;
}

$footer_acf = get_field('footer', 'options');
$central = get_field('central_numbers', 'options');


// === LIBRO DE RECLAMACIONES ===
$book_url    = arr_get($footer_acf, ['Book', 'link', 'url']);
$book_title  = arr_get($footer_acf, ['Book', 'link', 'title']);
$book_target = arr_get($footer_acf, ['Book', 'link', 'target']);
$book_img    = arr_get($footer_acf, ['Book', 'image', 'url']);

ob_start();
if ($book_url && $book_title) : ?>
<a aria-label="<?= esc_attr($book_title) ?>" href="<?= esc_url($book_url) ?>"
  <?= $book_target ? 'target="' . esc_attr($book_target) . '"' : '' ?> class="footer__book">
  <?php if ($book_img): ?>
  <img class="lazyload" src="<?= placeholder() ?>" data-src="<?= esc_url($book_img) ?>" width="173" height="98"
    alt="<?= esc_attr($book_title) ?>" aria-hidden="true" />
  <?php endif; ?>
</a>
<?php endif;
$libro_reclamaciones_html = ob_get_clean();
?>

<footer class="footer">
  <div class="x-container footer__wrapper">
    <div class="footer__upper">
      <div class="footer__campus">
        <?php
        $campus = $footer_acf['campus'] ?? [];
        ?>
        <h3 class="footer__sub-title"><?= esc_html($campus['title']) ?></h3>
        <?php if (!empty($campus['options'])) : ?>
        <ul class="footer__campus-options">
          <?php
            foreach ($campus['options'] as $option) :
              if ($option['show']):
            ?>
          <li>
            <?php if ($option['active']) : ?>
            <a class="btn btn-xxs footer__campus-link" href="<?= esc_url($option['link']['url']) ?>"
              target="<?= esc_attr($option['link']['target'] ?: '_self') ?>">
              <?= esc_html($option['link']['title']) ?>
            </a>
            <?php else : ?>
            <span class="btn btn-xxs footer__campus-link">
              <?= esc_html($option['link']['title']) ?>
            </span>
            <?php endif; ?>
          </li>
          <?php
              endif;
            endforeach;
            ?>
        </ul>
        <?php
        endif;

        if ($campus['links']) :
        ?>
        <ul class="footer__campus-links">
          <?php
            foreach ($campus['links'] as $link) :
              if ($link['show']):
            ?>
          <li>
            <a class="btn footer__link" href="<?= esc_url($link['link']['url']) ?>"
              target="<?= esc_attr($link['link']['target'] ?: '_self') ?>">
              <?= esc_html($link['link']['title']) ?>
            </a>
          </li>
          <?php
              endif;
            endforeach;
            ?>
        </ul>
        <?php endif; ?>
      </div>
      <div class="footer__contacts">
        <?php
        $contacts = $footer_acf['contacts'] ?? [];
        foreach ($contacts as $contact) :
        ?>
        <div class="footer__contact">
          <h3 class="footer__sub-title"><?= $contact['title'] ?></h3>
          <?php if (!empty($contact['options'])) : ?>
          <ul>
            <?php foreach ($contact['options'] as $option) : ?>
            <li>
              <svg width="24" height="24">
                <use xlink:href="#<?= esc_attr($option['type']) ?>"></use>
              </svg>
              <span><?= wp_kses_post($option['content']) ?></span>
            </li>
            <?php endforeach; ?>
          </ul>
          <?php endif; ?>
        </div>
        <?php endforeach; ?>
      </div>
      <div class="footer__social-menu-claim">
        <?php if (!empty($footer_acf['social']['options'])): ?>
        <ul class="footer__social">
          <?php foreach ($footer_acf['social']['options'] as $social):
              if (!empty($social['status']) && !empty($social['link']['url']) && !empty($social['type']['value'])): ?>
          <li class="footer__social-item">
            <a href="<?= esc_url($social['link']['url']) ?>"
              target="<?= esc_attr($social['link']['target'] ?: '_blank') ?>"
              aria-label="<?= esc_attr($social['type']['label']) ?>">
              <svg width="30" height="32">
                <use xlink:href="#<?= esc_attr($social['type']['value']) ?>"></use>
              </svg>
            </a>
          </li>
          <?php endif;
            endforeach; ?>
        </ul>
        <?php endif; ?>
        <?php
        wp_nav_menu([
          'menu'       => 'navbar_menu_mobile_1',
          'menu_class' => 'footer__menu',
          'container'  => 'nav',
          'container_class' => 'footer__menu-container',
          'walker'     => class_exists('Custom_Menu_Walker') ? new Custom_Menu_Walker() : '',
        ]);
        ?>
        <div class="footer__claim">
          <?php echo $libro_reclamaciones_html; ?>
        </div>
      </div>
    </div>
    <div class="footer__bottom">
      <?php
      if ($copy = arr_get($footer_acf, ['copy', 'Info'])):
        $exploded_copy = !empty($copy) ? explode('|', $copy) : [];
      ?>
      <p class="footer__copy-desktop"><?= wp_kses_post($copy) ?></p>
      <p class="footer__copy-mobile">
        <?php foreach ($exploded_copy as $copy_item): ?>
        <span><?= wp_kses_post($copy_item) ?></span>
        <br />
        <?php endforeach; ?>
      </p>
      <?php endif; ?>
    </div>
  </div>
</footer>


<?php
if (apply_filters('show_book_link', false)) :
?>
<?php get_template_part(HOME_CONTENT_PATH, 'more-info-form'); ?>
<a class="book-link" href="javascript:void(0);" data-modal-target="modal-more-info">
  <span class="sr-only">Solicita informes</span>
  <img src="<?= placeholder() ?>" class="book-link__icon lazyload"
    data-src="<?php echo UPLOAD_MIGRATION_PATH . '/solicitar.png'; ?>" alt="Formulario General">
</a>
<?php endif; ?>