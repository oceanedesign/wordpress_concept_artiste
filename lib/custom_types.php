<?php
// Register Custom Post Type
function concept_realisation_type() {

	$labels = array(
		'name'                  => _x( 'Réalisations', 'Post Type General Name', 'concept' ),
		'singular_name'         => _x( 'Réalisation', 'Post Type Singular Name', 'concept' ),
		'menu_name'             => __( 'Réalisations', 'concept' ),
		'name_admin_bar'        => __( 'Réalisation', 'concept' ),
		'archives'              => __( 'All Archives Réalisation', 'concept' ),
		'parent_item_colon'     => __( 'Parent Réalisation:', 'concept' ),
		'all_items'             => __( 'Toutes les réalisations', 'concept' ),
		'add_new_item'          => __( 'Ajouter une nouvelle réalisation', 'concept' ),
		'add_new'               => __( 'Ajouter', 'concept' ),
		'new_item'              => __( 'New Item', 'concept' ),
		'edit_item'             => __( 'Editer Réalisation', 'concept' ),
		'update_item'           => __( 'Mettre à jour Réalisation', 'concept' ),
		'view_item'             => __( 'Voir Réalisation', 'concept' ),
		'search_items'          => __( 'Search Réalisation', 'concept' ),
		'not_found'             => __( 'Not Réalisation found', 'concept' ),
		'not_found_in_trash'    => __( 'Not Réalisation found in Trash', 'concept' ),
		'featured_image'        => __( 'Featured Image', 'concept' ),
		'set_featured_image'    => __( 'Set featured image', 'concept' ),
		'remove_featured_image' => __( 'Remove featured image', 'concept' ),
		'use_featured_image'    => __( 'Use as featured image', 'concept' ),
		'insert_into_item'      => __( 'Insert into item', 'concept' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'concept' ),
		'items_list'            => __( 'Items list', 'concept' ),
		'items_list_navigation' => __( 'Items list navigation', 'concept' ),
		'filter_items_list'     => __( 'Filter items list', 'concept' ),
	);
	$args = array(
		'label'                 => __( 'Réalisation', 'concept' ),
		'description'           => __( 'Concept Artist Réalisation', 'concept' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-images-alt2',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'realisation', $args );

}
add_action( 'init', 'concept_realisation_type', 0 );

function concept_artiste_type() {

	$labels = array(
		'name'                  => _x( 'Concept Artistes', 'Post Type General Name', 'concept' ),
		'singular_name'         => _x( 'Concept Artiste', 'Post Type Singular Name', 'concept' ),
		'menu_name'             => __( 'Concept Artistes', 'concept' ),
		'name_admin_bar'        => __( 'Concept Artiste', 'concept' ),
		'archives'              => __( 'Tous les Concept Artistes', 'concept' ),
		'parent_item_colon'     => __( 'Parent Concept Artiste:', 'concept' ),
		'all_items'             => __( 'Tous les Concept Artistes', 'concept' ),
		'add_new_item'          => __( 'Ajouter un nouveau Concept Artiste', 'concept' ),
		'add_new'               => __( 'Ajouter', 'concept' ),
		'new_item'              => __( 'New Item', 'concept' ),
		'edit_item'             => __( 'Editer un Concept Artiste', 'concept' ),
		'update_item'           => __( 'Mettre à jour un Concept Artiste', 'concept' ),
		'view_item'             => __( 'Voir un Concept Artiste', 'concept' ),
		'search_items'          => __( 'Search Concept Artiste', 'concept' ),
		'not_found'             => __( 'Not Concept Artiste found', 'concept' ),
		'not_found_in_trash'    => __( 'Not Concept Artiste found in Trash', 'concept' ),
		'featured_image'        => __( 'Featured Image', 'concept' ),
		'set_featured_image'    => __( 'Set featured image', 'concept' ),
		'remove_featured_image' => __( 'Remove featured image', 'concept' ),
		'use_featured_image'    => __( 'Use as featured image', 'concept' ),
		'insert_into_item'      => __( 'Insert into item', 'concept' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'concept' ),
		'items_list'            => __( 'Items list', 'concept' ),
		'items_list_navigation' => __( 'Items list navigation', 'concept' ),
		'filter_items_list'     => __( 'Filter items list', 'concept' ),
	);
	$args = array(
		'label'                 => __( 'Concept Artiste', 'concept' ),
		'description'           => __( 'Concept Artiste Label', 'concept' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-businessman',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'artiste', $args );

}
add_action( 'init', 'concept_artiste_type', 0 );