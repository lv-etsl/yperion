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

// Menu register
include_once 'inc/register-menu.php';            // menu theme
include_once 'inc/custom-menu.php';           // custom menu

// Mettre des Catégories / Etiquettes sur les pages
include_once 'inc/page-with-category.php';    // cat sur page
include_once 'inc/page-with-tag.php';    // tag sur page

// The slug
include_once 'inc/get-slug.php';                    // on a besoin du slug pour le post short code ....

// menus
include_once 'inc/anchor-links-walker-work.php';         // on short le liens
// tests
//include_once 'inc/yperion-vertical-walker.php';  // on adapte le menu pour le truc
include_once 'inc/vertical-menu-test.php';  // on adapte le menu pour le truc

// display shortcode
include_once 'inc/display-posts-shortcode.php';     // on shortecode

// traductions
include_once 'inc/mes-traductions.php';                    // on polylang

// surlignage recherche :
include_once 'inc/search-surlignage.php';       // yep

// breadcrumb pour éviter de se perdre :
include_once 'inc/breadcrumb.php';       // yep

// PRIVATE: privatiser page et articles
include_once 'inc/private-category.php';
include_once 'inc/private-admin-stop.php';

// On teste des wlakers
include_once 'inc/walker-simple-3.php';

// menu walker pour bootstrap horizontal
//include_once 'inc/class-wp-bootstrap-navwalker.php'; // walker
//include_once 'inc/register-post-type.php';               // on poste type on passe à qtranslate -x
//include_once 'inc/menu-boot-vertical.php';          // vertical
//include_once 'inc/anchor-link.php';                 //
//include_once 'inc/cannonical-remove.php';           // on enlève le cannonical
//include_once 'inc/str-replace.php';
//include_once 'inc/quickstart-walker.php'; //
