<?php

function wpg_files() {
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400&family=League+Spartan:wght@300;400;700&display=swap"');
  wp_enqueue_style('wpg_main_styles', get_theme_file_uri('main.css'));
  wp_enqueue_style('wpg_styles', get_theme_file_uri('style.css'));
  wp_enqueue_script('wpg_script_js', get_stylesheet_directory_uri() . '/dist/script.js', NULL, '1.0', false);
}

add_action('wp_enqueue_scripts', 'wpg_files');


function wpg_features() {
  add_theme_support( 'title-tag' );
  add_theme_support( 'menus' );
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

  if ( ! isset( $content_width ) ) {
    $content_width = 600;
  }

  add_post_type_support( 'page', 'excerpt' );
}

add_action( 'after_setup_theme', 'wpg_features');

function wpg_theme_menus() {

  register_nav_menus(
    array(
      'header-menu'  =>  __( 'Header Menu' ),
    )
  );

}
add_action( 'init', 'wpg_theme_menus' );

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
   add_theme_support( 'woocommerce' );
} 

?>

<?php

function defer_parsing_of_js( $url ) {
  if ( is_user_logged_in() ) return $url; // don't break WP Admin
  if ( FAlSE === strpos( $url, '.js' ) ) return $url;
  if ( strpos( $url, 'jquery.js' ) ) return $url;
  return str_replace( ' src', ' defer src', $url );
}
add_filter( 'script_loader_tag', 'defer_parsing_of_js', 10 );

?>