<?php
/*
* on crée un  post type spécifique
*/

function create_post_type() {
  register_post_type( 'menu_1',
    array(
      'labels' => array(
        'name' => __( 'Menu du jour' ),
        'singular_name' => __( 'le menu du jour' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}
add_action( 'init', 'create_post_type' );
