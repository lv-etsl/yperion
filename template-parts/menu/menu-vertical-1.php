<?php
wp_nav_menu(array(
    'menu'           => 'the-menu-yperion',
    'theme_location' => 'the-menu-yperion',
    'menu_id'        => 'navigation',
    'depth'          => 2,
    'container'      => true,
    'menu_class'     => 'list-group',
    'before'         => '',
    'link_before'    => '',
    'walker'  => new vertical_menu_test_walker() //use our custom walker,
));
?>
