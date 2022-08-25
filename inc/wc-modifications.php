<?php

add_action( 'woocommerce_before_main_content', 'wpg_open_content_container_row', 5 );
function wpg_open_content_container_row() {
  echo '<section class="main__content"> <div class="container container__content row">';
}

add_action( 'woocommerce_after_main_content', 'wpg_close_content_container_row', 5 );
function wpg_close_content_container_row() {
  echo '</div></div>';
}

// add_filter( 'woocommerce_show_page_title', 'wpg_remove_shop_title' );
// function wpg_remove_shop_title() {
//   return false;
// }

remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar' );