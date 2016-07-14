<?php
  register_sidebar();
  add_theme_support('post-thumbnails');

  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js');
?>