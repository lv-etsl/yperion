<?php
/*
* source : https://www.johnrussell.dev/blog/2014/09/wordpress-menu-anchor/
*/

function lb_menu_anchors($items, $args) {
$urls = array();
$custom_anchor_links = array();
foreach ($items as $key => $item) {
$urls[$item->ID] = $item->url;
if ($item->object == 'custom' && substr($item->url, 0, 1) == '#') {
$custom_anchor_links[] = $item;
}
}
foreach ($custom_anchor_links as $custom_anchor_link) {
if (strpos($urls[$custom_anchor_link->menu_item_parent], '#') === false) {
$custom_anchor_link->url = $urls[$custom_anchor_link->menu_item_parent] . $custom_anchor_link->url;
} else {
// multiple nested menu items with anchors
$custom_anchor_link->url = explode('#', $urls[$custom_anchor_link->menu_item_parent])[0] . $custom_anchor_link->url;
}
}
return $items;
}
add_filter('wp_nav_menu_objects', 'lb_menu_anchors', 10, 2);
