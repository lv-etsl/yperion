<?php
// Register Custom Post Type
function boissons_post_type() {

	$labels = array(
		'name'                  => _x( 'Boissons', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Les boissons', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Boissons', 'text_domain' ),
		'name_admin_bar'        => __( 'Boissons', 'text_domain' ),
		'archives'              => __( 'Boissons archivées', 'text_domain' ),
		'attributes'            => __( 'Boissons attributs', 'text_domain' ),
		'parent_item_colon'     => __( 'Boissons Parentes:', 'text_domain' ),
		'all_items'             => __( 'Toutes les boissons', 'text_domain' ),
		'add_new_item'          => __( 'Ajouter une boisson', 'text_domain' ),
		'add_new'               => __( 'Ajouter', 'text_domain' ),
		'new_item'              => __( 'Nouvelle boisson', 'text_domain' ),
		'edit_item'             => __( 'Editer la boisson', 'text_domain' ),
		'update_item'           => __( 'Mettre à jour la boisson', 'text_domain' ),
		'view_item'             => __( 'Voir la boisson', 'text_domain' ),
		'view_items'            => __( 'Voir les boissons', 'text_domain' ),
		'search_items'          => __( 'Chercher la boisson', 'text_domain' ),
		'not_found'             => __( 'Pas trouvé', 'text_domain' ),
		'not_found_in_trash'    => __( 'Pas trouvé dans la poubelle', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Boissons', 'text_domain' ),
		'description'           => __( 'Site boissons.', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'revisions' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'boissons', $args );

}
add_action( 'init', 'boissons_post_type', 0 );
