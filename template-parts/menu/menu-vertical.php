<?php
wp_nav_menu(array(
    'menu'           => 'the-menu',
    'theme_location' => 'the-menu',
    'depth'          => 3,
    'container'      => false,
    'items_wrap'     => '<ul>%3$s</ul>',
    'before'         => '',
    'link_before'    => '',
    'walker'  => new anchor_links_walker() //use our custom walker,
));
?>
