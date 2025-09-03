<!DOCTYPE html>
<html lang="es_PE">

<head>
  <title><?php the_title() ?></title>
  <base href="/">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="Cache-control" content="public">
  <meta name="keywords" content="unw">
  <meta name="format-detection" content="telephone=no">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-title" content="Universidad Norbert Wiener: Educación de Clase Mundial
">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="theme-color" content="#03033f">
  <meta name="msapplication-TileColor" content="#92dce5">
  <meta name="msapplication-navbutton-color" content="#f7f9fb">
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php echo home_url() ?>" />
  <meta property="og:site_name" content="Universidad Norbert Wiener: Educación de Clase Mundial
" />
  <meta property="og:locale" content="es_ES">
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:domain" content="<?php echo home_url() ?>" />
  <meta name="twitter:title" property="og:title" itemprop="name" content="<?php the_title() ?>" />
  <meta name="twitter:description" property="og:description" itemprop="description"
    content="Universidad Norbert Wiener, AVANZA+ en tu carrera profesional. Educación de calidad internacional, en alianza con Arizona State University. ¡Postula ya!" />

  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo UPLOAD_PATH; ?>/favicon/favicon.png">
  <!-- <link rel="manifest" href="<?php echo UPLOAD_PATH; ?>/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo UPLOAD_PATH; ?>/favicon/safari-pinned-tab.svg" color="#5bbad5"> -->

  <?php get_template_part('content-parts/content', 'fonts'); ?>

  <!-- Css vars-->
  <style type="text/css">
  :root {
    --font: "Founders Grotesk", sans-serif;
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

    --swiper-prev-icon: url('<?php echo get_template_directory_uri(); ?>/upload/icons/arrow-left.svg');
    --swiper-next-icon: url('<?php echo get_template_directory_uri(); ?>/upload/icons/arrow-right.svg');
    --white-check: url('<?php echo get_template_directory_uri(); ?>/upload/icons/white-check.svg');
  }
  </style>

  <!-- Load fonts-->



  <script>
  window.appConfigUnw = {
    themeUrl: "<?= get_template_directory_uri(); ?>",
    uploadUrl: "<?= get_template_directory_uri(); ?>/upload"
  };

  let doc = document.documentElement;

  function calcVh() {
    doc.style.setProperty('--vh', window.innerHeight + 'px');
  }
  window.addEventListener('resize', calcVh);
  calcVh();
  </script>
  <!-- Google Tag Manager -->

  <!-- End Google Tag Manager -->
  <?php wp_head(); ?>
  <link rel="stylesheet" href="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/css/style.css?v3" type="text/css" media="all">
</head>

<body <?php body_class(); ?>>

  <?php include get_template_directory() . '/upload/icons/sprite.svg'; ?>
