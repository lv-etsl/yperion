<?php
/*
*  supprime bandeau top en cas de connexion
*/

function wpc_show_admin_bar() {
	return false;
}
add_filter('show_admin_bar' , 'wpc_show_admin_bar');
