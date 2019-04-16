<?php
wp_nav_menu(array(
    'menu'           => 'the-menu',
    'theme_location' => 'the-menu',
    'menu_id'        => 'navigation',
    'depth'          => 3,
    'container'      => false,
    'menu_class'     => 'list-group',
    'before'         => '',
    'link_before'    => '',
    'walker'  => new Walker_Quickstart_Menu() //use our custom walker,
));
?>
