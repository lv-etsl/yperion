<?php
wp_nav_menu(array(
    'menu'           => 'seven',
    'theme_location' => 'seven',
    'depth'          => 3,
    'container'      => false,
    'items_wrap'     => '<ul>%3$s</ul>',
    'before'         => '',
    'link_before'    => '',
    'walker'  => new sublevel_wrapper() //use our custom walker,
));
?>
