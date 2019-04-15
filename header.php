<!doctype html>
<html lang="<?php language_attributes(); ?>">
  <head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php wp_title('|'); ?> <?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="<?php bloginfo('name'); ?>">

  <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?> >
    <header role="banner">
      <div class="progress">
       <div id="myBar" class="progress-bar progress-bar-striped" role="progressbar" aria-valuemin="0" aria-valuemax="100">
       </div>
     </div>
    </header>
