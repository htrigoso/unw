<!DOCTYPE html>
<html lang="es">

<head>
  <base href="/">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="Cache-control" content="public">
  <meta name="format-detection" content="telephone=no">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="theme-color" content="#03033f">
  <meta name="msapplication-TileColor" content="#92dce5">
  <meta name="msapplication-navbutton-color" content="#f7f9fb">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo UPLOAD_PATH; ?>/favicon/favicon.png">


  <!-- Css vars-->
  <style type="text/css">
  :root {
    --font: "Hanken Grotesk", sans-serif;
    --font-inter: "Inter", sans-serif;
    --font-size: 16px;
    --font-thin: 100;
    --font-extra-light: 200;
    --font-light: 300;
    --font-regular: 400;
    --font-medium: 500;
    --font-semi-bold: 600;
    --font-bold: 700;
    --font-extra-bold: 800;
    --font-extra-black: 900;
    --color-primary: #07C8CC;
    --color-secondary: #07C8CC26;
    --color-turquoise-one: #08E1E6;
    --color-turquoise-two: #07C8CC;
    --color-turquoise-three: #00877D;
    --color-light-turquoise: #DAF7F7;

    --color-light-grey: #EEEEEE;
    --color-secondary-grey: #D2D3D5;
    --color-engineering: #FAC93D;
    --color-cp: #00669E;

    --color-asu-brown: #8C1D43;
    --color-asu-gold: #FFC627;
    --color-asu-grey: #747474;

    --color-error: #FF5050;
    --color-black: #000000;
    --color-danger: #ee3f28;
    --color-gray: #f2f1ed;
    --color-light-gray: #eeeeee;
    --color-mercury: #e8e8e8;
    --color-white: #ffffff;
    --color-purple: #7458EC;
    --color-dove-gray: #616161;
    --color-dodger-blue: #1C92F4;
    --color-burnt-sienna: #E67E3F;
    --color-tory-blue: #0F56A8;
    --color-olive-green: #5E9440;
    --color-gold: #F6BD23;
    --color-pink: #BB4E8E;

    --color-bg-secondary: #F0EAEE;

    --navbar-height-mobile: 83px;
    --navbar-height-desktop: 132px;
    --navbar-height: var(--navbar-height-mobile);

    --full-hero-height: 100%;
    --full-hero-min-height: 600px;
    --full-hero-max-height: auto;
    --full-hero-aspect-ratio: 2.26;

    --swiper-prev-icon: url('<?php echo get_template_directory_uri(); ?>/upload/icons/arrow-left.svg');
    --swiper-next-icon: url('<?php echo get_template_directory_uri(); ?>/upload/icons/arrow-right.svg');
    --chevron-right-icon: url('<?php echo get_template_directory_uri(); ?>/upload/icons/chevron-right.svg');
    --chevron-left-icon: url('<?php echo get_template_directory_uri(); ?>/upload/icons/chevron-left.svg');
    --chevron-right-two-icon: url('<?php echo get_template_directory_uri(); ?>/upload/icons/chevron-right-two.svg');
    --chevron-left-two-icon: url('<?php echo get_template_directory_uri(); ?>/upload/icons/chevron-left-two.svg');
    --white-check: url('<?php echo get_template_directory_uri(); ?>/upload/icons/white-check.svg');
  }

  @media (min-width: 1200px) {
    :root {
      --navbar-height: var(--navbar-height-desktop);
    }
  }
  </style>

  <!-- Load fonts-->

  <?php
  $preserve_url_params = get_field('preserve_url_params', 'options');
   $form_crm_option = get_field('form_crm', 'option');
  ?>
  <script>
  window.appConfigUnw = {
    themeUrl: "<?php echo esc_url(get_template_directory_uri()); ?>",
    uploadUrl: "<?php echo esc_url(get_template_directory_uri()); ?>/upload",
    preserveUrlParams: <?php echo $preserve_url_params === true ? 'true' : 'false'; ?>,
    isHome: <?php echo is_front_page() ? 'true' : 'false'; ?>,
    careers: <?= json_encode(get_carreras()) ?>,
    departaments: <?= json_encode($form_crm_option['list_departaments']) ?>,
    campus: <?= json_encode(get_carreras_campus_modalidad()) ?>

  };

  let doc = document.documentElement;

  function calcVh() {
    doc.style.setProperty('--vh', window.innerHeight + 'px');
  }
  window.addEventListener('resize', calcVh);
  calcVh();
  </script>

  <!-- Incubeta Control -->
  <script>
  window.INCUBETA_ENABLED = 'false';
  </script>
  <?php get_template_part('content-parts/content', 'fonts'); ?>
  <?php get_template_part('content-parts/content', 'gtm'); ?>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W8DNW8B" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <?php include get_template_directory() . '/upload/icons/sprite.svg'; ?>