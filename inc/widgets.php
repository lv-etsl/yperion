<?php

// the widgets file: on y liste les divers widgets du thèmes
// source : https://generatewp.com/sidebar/

// Register Sidebars
register_sidebar( array(
		'id'            => 'right-sidebar',
		'class'         => 'aside-right',
		'name'          => __( 'Sidebar droit', 'yperion' ),
		'description'   => __( 'C est la sidebar qui s affiche à droite', 'yperion' ),
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
		'before_widget' => '<div class="col-sm-12 card">',
		'after_widget'  => '</div>',
	));

	register_sidebar( array(
			'id'            => 'right-sidebar-private',
			'class'         => 'aside-right-private',
			'name'          => __( 'Sidebar Droit , zone privée', 'yperion' ),
			'description'   => __( 'C est la sidebar qui s affiche en log in à droite', 'yperion' ),
			'before_title'  => '<h2>',
			'after_title'   => '</h2>',
			'before_widget' => '<div class="col-sm-12 card">',
			'after_widget'  => '</div>',
		));
