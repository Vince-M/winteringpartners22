<?php

function wpg_files() {
  wp_enqueue_style('wpg_main_styles', get_theme_file_uri('main.css'));
}

add_action('wp_enqueue_scripts', 'wpg_files');