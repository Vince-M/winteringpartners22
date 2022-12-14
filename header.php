<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />

    <link rel="icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/favicon.ico">

    <?php wp_head(); ?>

  </head>
  <body <?php body_class(); ?>>
      <?php wp_body_open(); ?>

    <!-- HEADER
    =================================================== -->
    <header class="header">
      <div class="overlay has-fade"></div>
      <!-- overlay has-fade -->
      <div class="container header__section">
        <nav class="nav">
          <!-- <div class="head"> -->
          <div class="header__logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <?php if( has_custom_logo() ): ?>
                    <?php the_custom_logo(); ?>
                    <?php else: ?>
                        <h3 class="site-title"><?php bloginfo( 'title' ); ?></h3>
                        <span><?php bloginfo( 'description' ); ?></span>
                <?php endif; ?>
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
              <div class="cart">
                <a href="<?php echo wc_get_cart_url(); ?>"><span class="cart-icon"></span></a>
                <span class="items"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
              </div>
              <div class="header__social">
                <a class="facebook" href="#" target="_blank">
                  <img
                    src="<?php echo get_theme_file_uri(); ?>/img/facebook.svg" width="25px" height="25px"
                    alt="Facebook"/>
                </a>
                
              </div>
              <!-- social -->
              <div class="header__search">
                <?php get_search_form(); ?>
                <!-- <input
                  class="header__search--placeholder"
                  type="text"
                  placeholder="what are you searching for?"
                /> -->
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

              <?php if( class_exists( 'WooCommerce' ) ) : ?>
                <div class="account">
                  <?php if( is_user_logged_in() ) : ?>
                    <a class="my_account" href="<?php echo esc_url( get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ) ); ?>">My Account</a>
                    <div class="btn btn__login nav__link">
                      <a class="btn btn__login nav__link" href="<?php echo esc_url( wp_logout_url( get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ) ) ); ?>">Logout</a>
                    </div> <!-- btn btn__login nav__link -->
                  <?php else: ?>
                    <div class="btn btn__login nav__link">
                      <a class="my_account" href="<?php echo esc_url( get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ) ); ?>">Login</a>
                    </div> <!-- btn btn__login nav__link -->
                  <?php endif; ?>
                </div><!-- account -->
              <?php endif; ?>
             
            </div>
          </div>
          <!-- header__nav -->
        </nav>
        <!-- nav -->
      </div>
      <!-- container header__section -->
    </header>
    <!-- ============================================== -->
    

  