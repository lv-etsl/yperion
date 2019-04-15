<?php

// on include , on requiere en production
include_once 'inc/reset.php';                 // reset des trucs
include_once 'inc/enqueue.php';               // !! modif en prod : style.min.css. Rajout d'enqueue dans le head
include_once 'inc/widgets.php';             // WIDGETS


include_once 'inc/display-posts-shortcode.php';  // on shortecode

include_once 'inc/register-post-type.php';               // on poste type 
