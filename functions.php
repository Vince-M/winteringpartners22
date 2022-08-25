<?php

function wpg_files() {
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400&family=League+Spartan:wght@300;400;700&display=swap');
  wp_enqueue_style('wpg_main_styles', get_theme_file_uri('main.css'));
  wp_enqueue_style('wpg_styles', get_theme_file_uri('style.css'));
  wp_enqueue_script('wpg_script_js', get_stylesheet_directory_uri() . '/dist/script.js', NULL, '1.0', false);
}

add_action('wp_enqueue_scripts', 'wpg_files');


function wpg_features() {
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails', array(
    'thumbnail_image_width'  =>  255,
    'single_image_width'     =>  255,
    'product_grid'           =>  array(
      'default_rows'     =>  10,
      'min_rows'         =>  5,
      'max_rows'         =>  10,
      'default_columns'  =>  4,
      'min_columns'      =>  4,
      'max_columns'      =>  4,
    )
  ) );

  add_theme_support( 'wc-product-gallery-zoom' );
  add_theme_support( 'wc-product-gallery-lightbox' );
  add_theme_support( 'wc-product-gallery-slider' );
  add_theme_support( "align-wide" );
  add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

  add_theme_support( 'custom-logo', array(
    'height'       =>  85,
    'width'        =>  175,
    'flex_height'  =>  true,
    'flex_width'   =>  true
  ) );

  add_theme_support( 'automatic-feed-links' );
  add_theme_support( "wp-block-styles" );
  add_theme_support( "responsive-embeds" );

  //Default WordPress
the_post_thumbnail( 'thumbnail' );     // Thumbnail (150 x 150 hard cropped)
the_post_thumbnail( 'medium' );        // Medium resolution (300 x 300 max height 300px)
the_post_thumbnail( 'medium_large' );  // Medium Large (added in WP 4.4) resolution (768 x 0 infinite height)
the_post_thumbnail( 'large' );         // Large resolution (1024 x 1024 max height 1024px)
the_post_thumbnail( 'full' );          // Full resolution (original size uploaded)
 
//With WooCommerce
the_post_thumbnail( 'shop_thumbnail' ); // Shop thumbnail (180 x 180 hard cropped)
the_post_thumbnail( 'shop_catalog' );   // Shop catalog (300 x 300 hard cropped)
the_post_thumbnail( 'shop_single' );    // Shop single (600 x 600 hard cropped)

  if ( ! isset( $content_width ) ) {
    $content_width = 600;
  }

  add_post_type_support( 'page', 'excerpt' );
}
add_action( 'after_setup_theme', 'wpg_features', 0);

require get_template_directory() . '/inc/wc-modifications.php';

function wpg_theme_menus() {

  register_nav_menus(
    array(
      'header-menu'  =>  'Header Menu',
    )
  );

}
add_action( 'init', 'wpg_theme_menus' );



add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
   add_theme_support( 'woocommerce' );
} 



function create_copyright() {
  $all_posts = get_posts( 
  'post_status=publish&order=ASC' );
  $first_post = $all_posts[0];
  $first_date = $first_post->post_date_gmt;
  _e( 'Copyright &copy; ' );
  if ( substr( $first_date, 0, 4 ) == date( 'Y' ) ) {
  echo date( 'Y' );
  } else {
  echo substr( $first_date, 0, 4 ) . "-" . date( 'Y' );
  }
  echo ' <strong>' . get_bloginfo( 'name' ) . 
  '</strong> ';
  _e( 'All rights reserved.' );
  }



function defer_parsing_of_js( $url ) {
  if ( is_user_logged_in() ) return $url; // don't break WP Admin
  if ( FAlSE === strpos( $url, '.js' ) ) return $url;
  if ( strpos( $url, 'jquery.js' ) ) return $url;
  return str_replace( ' src', ' defer src', $url );
}
add_filter( 'script_loader_tag', 'defer_parsing_of_js', 10 );

?>