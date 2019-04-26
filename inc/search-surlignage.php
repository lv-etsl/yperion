<?php
/*
* source : https://wpchannel.com/wordpress/tutoriels-wordpress/surligner-resultats-recherche-wordpress-jquery/
*/

function hls_set_query() {
  $query  = attribute_escape(get_search_query());

  if(strlen($query) > 0){
    echo '
      <script type="text/javascript">
        var hls_query  = "'.$query.'";
      </script>
    ';
  }
}

function hls_init_jquery() {
  wp_enqueue_script('jquery');
}

add_action('init', 'hls_init_jquery');
add_action('wp_print_scripts', 'hls_set_query');
