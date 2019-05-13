<?php

// Register Navigation Menus
function custom_navigation_menus() {

	$locations = array(
		'secondary-menu' => __( 'menu secondaire' ),
		'third-menu' => __( 'menu supplémentaire' ),
		'seven' => __( 'menu test seven' ),
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'custom_navigation_menus' );


 ?>
