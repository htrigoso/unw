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
  <meta name="apple-mobile-web-app-title" content="GAM CORP">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="theme-color" content="#03033f">
  <meta name="msapplication-TileColor" content="#92dce5">
  <meta name="msapplication-navbutton-color" content="#f7f9fb">
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php echo home_url() ?>" />
  <meta property="og:site_name" content="GAM CORP" />
  <meta property="og:locale" content="es_ES">
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:domain" content="<?php echo home_url() ?>" />
  <meta name="twitter:title" property="og:title" itemprop="name" content="<?php the_title() ?>" />
  <meta name="twitter:description" property="og:description" itemprop="description" content="GAM CORP S.A. es una empresa productora de Moluscos Bivalvos, Cefalopodos y Pescados con más de +20 años en el mercado nacional e internacional." />

  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo UPLOAD_PATH; ?>/favicon/favicon.png">
  <!-- <link rel="manifest" href="<?php echo UPLOAD_PATH; ?>/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo UPLOAD_PATH; ?>/favicon/safari-pinned-tab.svg" color="#5bbad5"> -->

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

      --asu-brown: #8C1D43;
      --asu-gold: #FFC627;
      --asu-grey: #747474;

      --color-black: #000000;
      --color-danger: #ee3f28;
      --color-gray: #f2f1ed;
      --color-mercury: #e8e8e8;
      --color-white: #ffffff;
    }
  </style>

  <!-- Load fonts-->
  <!-- Load Founders Grotesk fonts -->
  <link href="/wp-content/themes/unw/assets/fonts/FoundersGrotesk-Bold.woff2" rel="preload" as="font" type="font/woff2" crossorigin>
  <link href="/wp-content/themes/unw/assets/fonts/FoundersGrotesk-BoldItalic.woff2" rel="preload" as="font" type="font/woff2" crossorigin>
  <link href="/wp-content/themes/unw/assets/fonts/FoundersGrotesk-Semibold.woff2" rel="preload" as="font" type="font/woff2" crossorigin>
  <link href="/wp-content/themes/unw/assets/fonts/FoundersGrotesk-SemiboldItalic.woff2" rel="preload" as="font" type="font/woff2" crossorigin>
  <link href="/wp-content/themes/unw/assets/fonts/FoundersGrotesk-Medium.woff2" rel="preload" as="font" type="font/woff2" crossorigin>
  <link href="/wp-content/themes/unw/assets/fonts/FoundersGrotesk-MediumItalic.woff2" rel="preload" as="font" type="font/woff2" crossorigin>
  <link href="/wp-content/themes/unw/assets/fonts/FoundersGrotesk-Regular.woff2" rel="preload" as="font" type="font/woff2" crossorigin>
  <link href="/wp-content/themes/unw/assets/fonts/FoundersGrotesk-RegularItalic.woff2" rel="preload" as="font" type="font/woff2" crossorigin>
  <link href="/wp-content/themes/unw/assets/fonts/FoundersGrotesk-Light.woff2" rel="preload" as="font" type="font/woff2" crossorigin>
  <link href="/wp-content/themes/unw/assets/fonts/FoundersGrotesk-LightItalic.woff2" rel="preload" as="font" type="font/woff2" crossorigin>
  <script>
    let doc = document.documentElement;

    function calcVh() {
      doc.style.setProperty('--vh', window.innerHeight + 'px');
    }
    window.addEventListener('resize', calcVh);
    calcVh();
  </script>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php include get_template_directory() . '/upload/icons/sprite.svg'; ?>
