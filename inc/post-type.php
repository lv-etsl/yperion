<?php
/*
* on crée un  post type spécifique
*/

function create_post_type() {
  register_post_type( 'de',
    array(
      'labels' => array(
        'name' => __( 'Page en allemand' ),
        'singular_name' => __( 'Page en allemand' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}
add_action( 'init', 'create_post_type' );
