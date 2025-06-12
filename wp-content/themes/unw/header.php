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
    <meta property="og:type" content= "website"/>
    <meta property="og:url" content="<?php echo home_url() ?>"/>
    <meta property="og:site_name" content="GAM CORP"/>
    <meta property="og:locale" content="es_ES">
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:domain" content="<?php echo home_url() ?>"/>
    <meta name="twitter:title" property="og:title" itemprop="name" content="<?php the_title() ?>"/>
    <meta name="twitter:description" property="og:description" itemprop="description" content="GAM CORP S.A. es una empresa productora de Moluscos Bivalvos, Cefalopodos y Pescados con más de +20 años en el mercado nacional e internacional." />

    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo UPLOAD_PATH; ?>/favicon/favicon.png">
    <!-- <link rel="manifest" href="<?php echo UPLOAD_PATH; ?>/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo UPLOAD_PATH; ?>/favicon/safari-pinned-tab.svg" color="#5bbad5"> -->

      <!-- Css vars-->
    <style type="text/css">
      :root {
        --font: "Nekst", sans-serif;
        --font-poppins: "Poppins", sans-serif;
        --font-size: 20px;
        --base-transition: 0.4s var(--e);
        --thin: 100;
        --extra-light: 200;
        --light: 300;
        --regular: 400;
        --medium: 500;
        --semi-bold: 600;
        --bold: 700;
        --extra-bold: 800;
        --extra-black: 900;
        --black: #232322;
        --white: #ffffff;
        --primary: #03033f;
        --secondary: #92dce5;
        --success: #93dce5;
        --danger: #ee3f28;
        --dark: #7c7c7c;
        --gray: #f2f1ed;
        --alto-gray: #d0d0d0;
        --dove-gray: #666666;
        --wild-sand-gray: #f5f5f5;
        --soft-peach: #eee5e9;
        --polar: #def5f7;
        --midnight: #001829;
        --alabaster: #f9f9f9;
        --mercury: #e8e8e8
      }
    </style>

    <!-- Load fonts-->
    <link href="/wp-content/themes/unw/assets/fonts/Nekst-Light.woff2" rel="preload" as="font" type="font/woff2" crossorigin>
    <link href="/wp-content/themes/unw/assets/fonts/Nekst-Medium.woff2" rel="preload" as="font" type="font/woff2" crossorigin>
    <link href="/wp-content/themes/unw/assets/fonts/Nekst-Regular.woff2" rel="preload" as="font" type="font/woff2" crossorigin>
    <link href="/wp-content/themes/unw/assets/fonts/Nekst-SemiBold.woff2" rel="preload" as="font" type="font/woff2" crossorigin>
    <link href="/wp-content/themes/unw/assets/fonts/Nekst-Bold.woff2" rel="preload" as="font" type="font/woff2" crossorigin>

    <link href="/wp-content/themes/unw/assets/fonts/Poppins-Light.woff2" rel="preload" as="font" type="font/woff2" crossorigin>
    <link href="/wp-content/themes/unw/assets/fonts/Poppins-Medium.woff2" rel="preload" as="font" type="font/woff2" crossorigin>
    <link href="/wp-content/themes/unw/assets/fonts/Poppins-Regular.woff2" rel="preload" as="font" type="font/woff2" crossorigin>

    <script>
      let doc = document.documentElement;
      function calcVh() { doc.style.setProperty('--vh', window.innerHeight + 'px'); }
      window.addEventListener('resize', calcVh);
      calcVh();
    </script>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

