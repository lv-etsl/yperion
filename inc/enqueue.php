<?php
/*
* on enqueue le style et les script si besoin
*/

function yperion_all() {
  wp_enqueue_style('yperion', get_template_directory_uri() . '/style.css', array(), '', 'all');
  wp_enqueue_style('yperion-test', get_template_directory_uri() . '/css/mon-style.css', array(), '', 'all');
  wp_enqueue_script('yperion', get_template_directory_uri() . '/js/main.min.js', array(), '', 'true' );
  // on enqeue le test pour le sevice worker
  wp_enqueue_script('yperion-sw', get_template_directory_uri() . '/js/sw/main.js', array(), '', 'true' );

  if (is_singular() && comments_open() && (get_option('thread_comments') == 1)) {
    wp_enqueue_script('comment-reply', 'wp-includes/js/comment-reply', array(), false, true);
    }
}
add_action('wp_enqueue_scripts', 'yperion_all', 999);
