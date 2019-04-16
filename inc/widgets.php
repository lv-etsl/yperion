<?php

// the widgets file: on y liste les divers widgets du thèmes
// source : https://generatewp.com/sidebar/

// Register Sidebars
function custom_sidebars() {

	$args = array(
		'id'            => 'left-sidebar',
		'class'         => 'aside-left',
		'name'          => __( 'Sidebar Gauche', 'yperion' ),
		'description'   => __( 'C est la sidebar qui s affiche à gauche', 'yperion' ),
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
		'before_widget' => '<div class="col-sm-12 card">',
		'after_widget'  => '</div>',
	);
	register_sidebar( $args );

}
add_action( 'widgets_init', 'custom_sidebars' );
