<?php
/*
* https://wp-mix.com/replace-all-instances-string-wordpress/
*/

function replace_text($text) {
	$text = str_replace('http://127.0.0.1:8080/www.yperion.ch/', '#', $text);
	return $text;
}
add_filter('the_content', 'replace_text');
