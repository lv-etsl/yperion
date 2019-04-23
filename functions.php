<?php
/*
* MODIFICATIONS :
* get_slug : permets d'avoir le slug via get_the_slug() utilisé dans > display-posts-shortcode
* display-posts-shortcode : modifier ligne ~ligne 499 : rajout du get_the_slug pour avoir le slug dans l'ancre id="#the-slug"
*
*/

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
//include_once 'inc/quickstart-walker.php'; //
include_once 'inc/anchor-links-walker.php';         // on short le liens
include_once 'inc/get-slug.php';                    // on a besoin du slug pour le post short code ....
include_once 'inc/display-posts-shortcode.php';     // on shortecode

include_once 'inc/mes-traductions.php';                    // on polylang

//include_once 'inc/register-post-type.php';               // on poste type on passe à qtranslate -x
