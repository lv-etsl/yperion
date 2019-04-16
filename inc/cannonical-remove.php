<?php
/*
* https://www.gsqi.com/marketing-blog/how-to-remove-rel-canonical-from-noindexed-pages/
*/

add_filter('aioseop_canonical_url','remove_canonical_url', 10, 1);
function remove_canonical_url( $url ){
global $post;
if( is_category() ){
return false; // Remove the canonical URL for categories.
} elseif (is_archive() ){
return false; // Remove the canonical URL for archives.
}
return $url;
}
