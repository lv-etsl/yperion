<?php
/*
* source: https://stackoverflow.com/questions/48430668/changing-urls-in-wp-nav-menu-wordpresssymfony
* autre source intéressante : https://wabeo.fr/hook-nav-menus/
*/
function mmn_main_item_rewrite( $items, $args )
{
    foreach ( $items as $item ) {
        $item->url = str_replace( 'http://127.0.0.1:8080/www.yperion.ch/', '#', $item->url );
    }

    return $items;
}
add_filter( 'wp_nav_menu_objects', 'mmn_main_item_rewrite', 10, 2 );
