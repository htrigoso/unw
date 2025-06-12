<?php
/**
 * Template Name: Product Detail Template
 */
?>

<?php set_query_var('ASSETS_CHUNK_NAME', 'product-detail'); ?>
<?php set_query_var('NAVBAR_COLOR', 'navbar-fixed'); ?>

<?php get_header(); ?>

<?php get_template_part('content-parts/content', 'navbar'); ?>

<main>

  <!-- Product Detail -->
  <section class="product" id="product">
    <div class="product__wrapper">
      <?php
        $image = get_field('detail_image');
        if (!empty($image)) :
          $mobile_image = $image['mobile_image'];
          $desktop_image = $image['desktop_image'];
      ?>
      <div class="product__image">
        <picture>
          <source media="(min-width: 1024px)" data-srcset="<?php echo $desktop_image['url'] ?>">
          <img
            class="lazy"
            src="<?php placeholder() ?>"
            data-src="<?php echo $mobile_image['url'] ?>"
            alt="<?php echo get_the_title(); ?>"
          >
        </picture>
      </div>
      <?php endif; ?>
      <div class="product__content">
        <div class="product__info">
          <nav class="breadcrumb">
            <ol class="breadcrumb__menu">
              <li class="breadcrumb__item flex items-center">
                <a href="/" class="pointer">
                  <?php echo _e('Inicio', 'unw'); ?>
                </a>
                <i class="icon">
                  <svg id="Grupo_18465" data-name="Grupo 18465" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                    <path id="Trazado_8724" data-name="Trazado 8724" d="M0,0H16V16H0Z" fill="none"/>
                    <path id="Trazado_8725" data-name="Trazado 8725" d="M11.592,9.8,8.222,6.561l.963-.925L13.517,9.8,9.185,13.963l-.963-.925Z" transform="translate(-2.796 -1.799)" fill="#03033f"/>
                  </svg>
                </i>
              </li>
              <li class="breadcrumb__item active" aria-current="page">
                <a href="/products/" class="pointer">
                  <?php echo _e('Productos', 'unw'); ?>
                </a>
              </li>
            </ol>
          </nav>
          <div class="product__title">
            <?php
              $field_title = get_field('title');
              $title = !empty($field_title) ? $field_title : get_the_title();
            ?>
            <h1><?php echo $title; ?></h1>
          </div>
          <div class="product__name">
            <p>(<?php echo get_field('scientific_name'); ?>)</p>
          </div>
          <div class="product__description">
            <p><?php echo get_field('description'); ?></p>
          </div>

          <?php
            $features = get_field('features');
            if (!empty($features)) :
          ?>
          <div class="product__features">
            <div class="product__features-title">
              <h2><?php echo $features['title'] ?></h2>
            </div>
            <ul class="flex flex-col">
              <?php
                $total_others = 0;
                foreach ($features['items'] as $feature):
                  $total_others += $feature['active'] === true ? 1 : 0;
                  if ($feature['active'] === true) :
              ?>
                <li class="product__features-item">
                  <div class="f-40">
                    <p class="name"><?= $feature['name'] ?></p>
                  </div>
                  <div class="f-60">
                    <p><?= $feature['description'] ?></p>
                  </div>
                </li>
              <?php
                  endif;
                endforeach;
              ?>
            </ul>
          </div>
          <?php endif; ?>
        </div>

        <?php if (!empty($features) && $total_others > 1) : ?>
        <div class="other-features">
          <button type="button" class="other-features__title btn-basic-icon">
            <p><?php echo $features['others_title'] ?></p>
            <i class="icon-more">
              <?php echo allinone_icon_svg('plus-icon') ?>
            </i>
          </button>
          <div class="other-features__description">
            <p><?php echo $features['others_description'] ?></p>
          </div>
          <ul class="flex flex-col">
            <?php
              foreach ($features['items'] as $feature):
                if ($feature['active'] !== true):
            ?>
              <li class="other-features__item">
                <div class="other-features__item-wrapper">
                  <div class="other-features__item-name">
                    <h3><?= $feature['name'] ?></h3>
                  </div>
                  <div class="other-features__item-description">
                    <p><?= $feature['description'] ?></p>
                  </div>
                </div>
              </li>
            <?php
                endif;
              endforeach;
            ?>
          </ul>

          <?php
            if (!empty($features['download_link'])) :
              $link = $features['download_link'];
          ?>
          <div class="other-features__actions">
            <a class="btn btn-danger" href="<?php echo $link['url'] ?>" target="<?php echo $link['target'] ?>">
              <?php echo (!empty($link['title']) ? $link['title'] : 'DOWNLOAD') ?>
              <i class="icon suffix-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                  <g id="Grupo_18359" data-name="Grupo 18359" transform="translate(-1099.03 0.354)">
                    <g id="Rectángulo_8778" data-name="Rectángulo 8778" transform="translate(1099.03 -0.354)" fill="#fff" stroke="#707070" stroke-width="1" opacity="0">
                      <rect width="32" height="32" stroke="none"/>
                      <rect x="0.5" y="0.5" width="31" height="31" fill="none"/>
                    </g>
                    <g id="cloud-computing" transform="translate(1103.569 4.094)">
                      <g id="Grupo_18238" data-name="Grupo 18238" transform="translate(0 0)">
                        <g id="Grupo_18237" data-name="Grupo 18237" transform="translate(0 0)">
                          <path id="Trazado_8710" data-name="Trazado 8710" d="M21.782,7.977a6.553,6.553,0,0,0,.111-1.194A6.735,6.735,0,0,0,8.826,4.5a3.368,3.368,0,0,0-4.52,2.343,5.051,5.051,0,0,0,.749,10.047h4.21a.842.842,0,1,0,0-1.684H5.055a3.368,3.368,0,0,1,0-6.735A.842.842,0,0,0,5.9,7.625a1.684,1.684,0,0,1,2.862-1.2.842.842,0,0,0,1.422-.465,5.046,5.046,0,0,1,9.956,1.655q-.041.246-.106.487a.842.842,0,0,0,.348.926A3.368,3.368,0,0,1,18.525,15.2H16a.842.842,0,1,0,0,1.684h2.526a5.051,5.051,0,0,0,3.257-8.909Z" transform="translate(-0.001 -0.056)" fill="#fff"/>
                        </g>
                      </g>
                      <g id="Grupo_18240" data-name="Grupo 18240" transform="translate(7.59 7.569)">
                        <g id="Grupo_18239" data-name="Grupo 18239">
                          <path id="Trazado_8711" data-name="Trazado 8711" d="M163.692,163.841a.842.842,0,0,0-1.17,0l-2.774,2.772v-12.28a.842.842,0,1,0-1.684,0v12.28l-2.772-2.772a.842.842,0,0,0-1.19,1.19l4.21,4.21a.842.842,0,0,0,1.191,0h0l4.21-4.21A.842.842,0,0,0,163.692,163.841Z" transform="translate(-153.865 -153.491)" fill="#fff"/>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </i>
            </a>
          </div>
          <?php endif; ?>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <?php get_template_part('content-parts/content', 'posts'); ?>

  <?php get_template_part('content-parts/content', 'contact'); ?>

</main>

<?php get_template_part('content-parts/content', 'footer'); ?>

<?php get_footer(); ?>
