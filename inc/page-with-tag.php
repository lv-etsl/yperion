<?php
/*
* Créez des tag sur les pages
*/

function wpc_tag_pages() {
	register_taxonomy_for_object_type('post_tag', 'page');
}
add_action('init', 'wpc_tag_pages');
