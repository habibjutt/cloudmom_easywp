<?php 
$type = 'default';
$categories = get_the_category();

foreach ($categories as $category) {
    if ($category->slug == 'pregnancy-week-by-week' || ($category->parent != '' && get_category($category->parent)->slug == 'pregnancy-week-by-week')) {
        $type = 'pregnancy';
    }
    if ($category->slug == 'baby-month-by-month' || ($category->parent != '' && get_category($category->parent)->slug == 'baby-month-by-month')) {
        $type = 'baby';
    }
} ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    </noscript>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3979720520106977"crossorigin="anonymous"></script>
    <!-- Google tag (gtag.js) -->
    <script defer src="https://www.googletagmanager.com/gtag/js?id=G-061T0BW18H"></script>
    <!-- <script defer src="https://www.googletagmanager.com/gtag/js?id=UA-32552386-1"></script> -->
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      // Google Analytics
      gtag('config', 'G-061T0BW18H');
      //gtag('config', 'UA-32552386-1');
    </script>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <meta name="description" content="--><?php //bloginfo('description'); ?><!--">-->

    <?php wp_head(); ?>
</head>
<body <?php body_class('type-' . $type); ?>>
<!--- <div class="popup">
  <div id="60012-cmeofsxr" class="sw_container popup">
    <script type="text/javascript" src="https://sweepwidget.com/w/j/w_init.js"></script></div>
    <style>
    .popup {
        position: absolute;
        z-index: 9999;
        width: 100%;
        top: 45px;
    
    }
    </style>
    <div id="60012-cmeofsxr" class="sw_container" data-if-widget-popup="1" data-widget-popup-delay="3"><script type="text/javascript" src="https://sweepwidget.com/w/j/w_init.js"></script></div>
</div> ---->
<!-- Page -->
<div id="page" class="site">
    <header id="header" class="header">
        <div class="header__container container">
            <div class="header__toggle col">
                <button id="toggle"	aria-label="open menu" class="toggle" type="button">
                    <i class="toggle__stick"></i>
                </button>
            </div>

            <div class="header__logo col">
                <?php if (!has_custom_logo()) { ?>
                    <a class="logo" href="<?= get_home_url(); ?>">
                        <img class="logo__image" src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt=""/>
                    </a>
                <?php } else { ?>
                    <?php the_custom_logo(); ?>
                <?php } ?>
            </div>

            <div class="header__menu col">
                <?php wp_nav_menu(array(
                    'container' => false,
                    'menu_class' => 'header-menu header-menu--primary',
                    'theme_location' => 'header-primary-menu',
                    'walker' => new cs__Walker_Nav_Menu(),
                )); ?>
            </div>

            <div class="header__search-trigger col">
                <a id="search-trigger" aria-label="search icon" class="search-trigger" href="#searchform"></a>
                <a class="register_login" href="#"></a>
                <a class="register_acc" href="#"></a>
                
            </div>
        </div>

        <div class="header__search">
            <div class="container">
                <div class="col">
                    <?php get_search_form(); ?>
                </div>
            </div>
        </div>
    </header>

    <!-- Container -->
    <main id="main" class="main">