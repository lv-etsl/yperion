<?php
wp_nav_menu(array(
    'menu'           => 'the-menu',
    'theme_location' => 'the-menu',
    'menu_id'        => 'test',
    'depth'          => 3,
    'container'      => false,
    'menu_class'     => 'test',
    'before'         => '',
    'link_before'    => '',
    'walker'  => new anchor_links_walker() //use our custom walker,
));
?>
