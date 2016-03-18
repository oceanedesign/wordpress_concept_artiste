<?php
function concept_artiste_style_taxonomy() {

	$labels = array(
			'name'                       => _x( 'Styles des Artistes', 'Taxonomy General Name', 'concept' ),
			'singular_name'              => _x( 'Style de l Artiste', 'Taxonomy Singular Name', 'concept' ),
			'menu_name'                  => __( 'Styles des Artistes', 'conceptconceptconcept' ),
			'all_items'                  => __( 'Tous les Styles de l Artiste possibles', 'conceptconcept' ),
			'parent_item'                => __( 'Parent artiste Styles', 'conceptconcept' ),
			'parent_item_colon'          => __( 'Parent artiste Styles:', 'conceptconcept' ),
			'new_item_name'              => __( 'New artiste Style Name', 'conceptconcept' ),
			'add_new_item'               => __( 'Ajouter un nouveau Style pour les Artistes', 'concept' ),
			'edit_item'                  => __( 'Editer le Style de la Artiste', 'concept' ),
			'update_item'                => __( 'Mettre à jour le style de la Artiste', 'concept' ),
			'view_item'                  => __( 'Voir Item', 'concept' ),
			'separate_items_with_commas' => __( 'Separate artiste Styles with commas', 'concept' ),
			'add_or_remove_items'        => __( 'Ajouter ou supprimer des styles à la Artiste', 'concept' ),
			'choose_from_most_used'      => __( 'Choose from the most used Artistes Style', 'concept' ),
			'popular_items'              => __( 'Les Styles de Artistes populaires', 'concept' ),
			'search_items'               => __( 'Aucun Style de Artistes trouvé', 'concept' ),
			'not_found'                  => __( 'Not Artistes Styles Found', 'concept' ),
			'no_terms'                   => __( 'No items', 'concept' ),
			'items_list'                 => __( 'Items list', 'concept' ),
			'items_list_navigation'      => __( 'Items list navigation', 'concept' ),
	);
	$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
	);
	register_taxonomy( 'concept_artiste_style', array( 'artiste' ), $args );

}
add_action( 'init', 'concept_artiste_style_taxonomy', 0 );