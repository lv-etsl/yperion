<?php
/*
* PRIVATE CATEGORY : test
* source: https://wabeo.fr/espace-membre-wordpress/
* site_url(), get_permalink()
*/

add_action( 'template_redirect', 'private_page' );
function private_page() {
	if ( is_category('private, privat') && ! is_user_logged_in() ) {
		wp_redirect( site_url('/page-de-connexion/')  );
		exit();
	}
}
