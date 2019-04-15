<?php
/*
* on enqueue le style et les script si besoin
*/

function yperion_all() {
  wp_enqueue_style('yperion', get_template_directory_uri() . '/style.css', array(), '', 'all');
  wp_enqueue_script('yperion', get_template_directory_uri() . '/js/main.js', array(), '', 'true' );

  if (is_singular() && comments_open() && (get_option('thread_comments') == 1)) {
    wp_enqueue_script('comment-reply', 'wp-includes/js/comment-reply', array(), false, true);
    }
}
add_action('wp_enqueue_scripts', 'yperion_all', 999);
