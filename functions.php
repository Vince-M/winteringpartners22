<?php

function wpg_files() {
  wp_enqueue_script('wpg_script_js', get_stylesheet_directory_uri() . '/dist/script.js', NULL, '', false);
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400&family=League+Spartan:wght@300;400;700&display=swap"');
  wp_enqueue_style('wpg_main_styles', get_theme_file_uri('main.css'));
}

add_action('wp_enqueue_scripts', 'wpg_files');

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