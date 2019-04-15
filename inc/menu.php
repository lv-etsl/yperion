<?php
// need some menu

// Register Navigation Menus
function custom_navigation_menus() {

	$locations = array(
		'primary-menu' => __( 'menu en tete', 'text_domain' ),
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'custom_navigation_menus' );


 ?>
