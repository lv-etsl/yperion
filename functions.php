<?php

// on include , on requiere en production
include_once 'inc/reset.php';                 // reset des trucs
include_once 'inc/enqueue.php';               // !! modif en prod : style.min.css. Rajout d'enqueue dans le head
include_once 'inc/widgets.php';             // WIDGETS

include_once 'inc/register-menu.php';            // menu theme
include_once 'inc/custom-menu.php';           // custom menu

// menus
include_once 'inc/class-wp-bootstrap-navwalker.php'; // walker
//include_once 'inc/menu-boot-vertical.php';          // vertical
//include_once 'inc/anchor-link.php';                 //
//include_once 'inc/cannonical-remove.php';           // on enlève le cannonical
//include_once 'inc/str-replace.php';
include_once 'inc/quickstart-walker.php';

include_once 'inc/display-posts-shortcode.php';  // on shortecode

include_once 'inc/register-post-type.php';               // on poste type
