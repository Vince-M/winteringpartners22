<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />

    <link rel="icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/favicon.ico">

    <meta
      property="og:title"
      content="Wintering Partners Gathering - winteringpartners.ca"
    />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://winteringpartners.ca" />
    <meta property="og:image" content="" />

    <link rel="icon" type="image/x-icon" href="favicon.png" />

    <!-- Google Fonts -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400&family=League+Spartan:wght@300;400;700&display=swap"
      rel="stylesheet"
    /> -->

    <!-- <title>NWC 2022 Wintering Partners Conference</title> -->

    <!-- import scripts and styles -->
    <!-- <link rel="stylesheet" href="dist/style.css" /> -->
    <!-- <script defer src="dist/script.js"></script> -->

    <?php wp_head(); ?>

  </head>
  <body <?php body_class(); ?>>
    <!-- HEADER
    =================================================== -->
    <header class="header">
      <div class="overlay has-fade"></div>
      <!-- overlay has-fade -->
      <div class="container header__section">
        <nav class="nav">
          <!-- <div class="head"> -->
          <div class="header__logo">
            <a href="<?php echo esc_url(site_url() ); ?>">
              <img
                src="<?php echo get_theme_file_uri(); ?>/img/winterPartnersGathering_175x85.svg" width="175px" height="85px"
                alt="NWC Wintering Partners Gathering 2022"/>
            </a>
          </div>
          <!-- header__logo -->

          <!-- hamburger menu -->
          <a
            id="btnHamburger"
            class="hamburger header__toggle hide-for-desktop"
            href="#"
          >
            <span></span>
            <span></span>
            <span></span>
          </a>
          <!-- </div> -->
          <!-- head -->

          <!-- header menu -->
          <div class="header__nav hide-for-mobile">
            <div class="header__media">
              <div class="header__social">
                <a href="#" target="_blank">
                  <img
                    src="<?php echo get_theme_file_uri(); ?>/img/facebook.svg" width="25px" height="25px"
                    alt="Facebook"/>
                </a>
                <a href="#" target="_blank">
                <img
                    src="<?php echo get_theme_file_uri(); ?>/img/twitter.svg" width="25px" height="20px"
                    alt="Facebook"/>
                </a>
              </div>
              <!-- social -->
              <div class="header__search">
                <input
                  class="header__search--placeholder"
                  type="text"
                  placeholder="what are you searching for?"
                />
              </div>
              <!-- search -->
            </div>
            <!-- header__media -->
            <div class="nav navbar header__menu" role="navigation">

                <?php
                  wp_nav_menu( array(
                    'theme_location'  =>  'header-menu',
                    'depth'           =>  3,
                    'container'       =>  false,
                     'menu_class'     =>  'menu nav__list'
                  ))
                  
                ?>

              <!-- nav__list mobile__fade -->
              <div class="btn btn__login nav__link">
                <a class="btn btn__login nav__link" href="#">Log-In</a>
              </div>
            </div>
          </div>
          <!-- header__nav -->
        </nav>
        <!-- nav -->
      </div>
      <!-- container header__section -->
    </header>
    <!-- ============================================== -->

  