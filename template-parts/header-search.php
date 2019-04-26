<!doctype html>
<html lang="<?php language_attributes(); ?>">
  <head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php wp_title('|'); ?> <?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="<?php bloginfo('name'); ?>">
    <script defer src="https://use.fontawesome.com/releases/v5.8.1/js/solid.js" integrity="sha384-IA6YnujJIO+z1m4NKyAGvZ9Wmxrd4Px8WFqhFcgRmwLaJaiwijYgApVpo1MV8p77" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.8.1/js/fontawesome.js" integrity="sha384-EMmnH+Njn8umuoSMZ3Ae3bC9hDknHKOWL2e9WJD/cN6XLeAN7tr5ZQ0Hx5HDHtkS" crossorigin="anonymous"></script>
  <?php wp_head(); ?>

  <!-- HIGHLIGHT SEARCH with JQUERY -->
  <style type="text/css" media="screen">
  .hls { background: rgba(130, 121, 140,0.5); }
  </style>
  <script type="text/javascript">
  jQuery.fn.extend({
  highlight: function(search, insensitive, hls_class){
  var regex = new RegExp("(<[^>]*>)|(\\b"+ search.replace(/([-.*+?^${}()|[\]\/\\])/g,"\\$1") +")", insensitive ? "ig" : "g");
  return this.html(this.html().replace(regex, function(a, b, c){
  return (a.charAt(0) == "<") ? a : "<strong class=\""+ hls_class +"\">" + c + "</strong>";
  }));
  }
  });
  jQuery(document).ready(function($){
  if(typeof(hls_query) != 'undefined'){
  $("#search-area").highlight(hls_query, 1, "hls");
  }
  });
  </script>
  <!-- END HIGHLIGHT SEARCH with JQUERY -->
  </head>
  <body <?php body_class(); ?> >
<!-- on peut rajouter banner-progress.php -->
