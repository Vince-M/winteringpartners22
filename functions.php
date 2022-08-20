<?php

function wpg_files() {
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400&family=League+Spartan:wght@300;400;700&display=swap"');
  wp_enqueue_style('wpg_main_styles', get_theme_file_uri('main.css'));
  wp_enqueue_script('wpg_script_js', get_stylesheet_directory_uri() . '/dist/script.js', NULL, '1.0', false);
}

add_action('wp_enqueue_scripts', 'wpg_files');


function wpg_features() {
  add_theme_support( 'title-tag' );
  add_theme_support( 'menus' );
  add_theme_support( 'post-thumbnails' );
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