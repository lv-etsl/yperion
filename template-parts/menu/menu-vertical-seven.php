<?php
wp_nav_menu(array(
    'menu'           => 'seven',
    'theme_location' => 'seven',
    'container'      => false,
    'items_wrap'     => '<ul>%3$s</ul>',
    //'walker'  => new Walker_Simple_Example() //on teste des walkers,
));
?>
