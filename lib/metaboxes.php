<?php
/**
 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the CMB2 directory)
 *
 * Be sure to replace all instances of 'yourprefix_' with your project's prefix.
 * http://nacin.com/2010/05/11/in-wordpress-prefix-everything/
 *
 * @category YourThemeOrPlugin
 * @package  Demo_CMB2
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/WebDevStudios/CMB2
 */

/**
 * Get the bootstrap! If using the plugin from wordpress.org, REMOVE THIS!
 */

if ( file_exists(get_template_directory() . '/cmb2/init.php' ) ) {
	require_once get_template_directory() . '/cmb2/init.php';
} elseif ( file_exists( get_template_directory() . '/CMB2/init.php' ) ) {
	require_once get_template_directory() . '/CMB2/init.php';
}

add_action( 'cmb2_admin_init', 'concept_register_artiste_social_metabox' );
function concept_register_artiste_social_metabox() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_concept_artiste_social_';

	$cmb_concept_artiste_social = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => __( 'Réseaux sociaux', 'concept' ),
		'object_types'  => array( 'artiste', )
	) );
	
	$cmb_concept_artiste_social->add_field( array(
			'name' => __( 'Facebook ', 'concept' ),
			'id'   => $prefix . 'facebook',
			'type' => 'text_url'
	) );	
	
	$cmb_concept_artiste_social->add_field( array(
			'name' => __( 'Twitter ', 'concept' ),
			'id'   => $prefix . 'twitter',
			'type' => 'text_url'
	) );
}

add_action( 'cmb2_admin_init', 'concept_register_artiste_options_metabox' );
function concept_register_artiste_options_metabox() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_concept_artiste_options_';

	$cmb_concept_artiste_options = new_cmb2_box( array(
			'id'            => $prefix . 'metabox',
			'title'         => __( 'artiste Options', 'concept' ),
			'object_types'  => array( 'artiste', )
	) );

	$cmb_concept_artiste_options->add_field( array(
			'name'    => __( 'artiste Color', 'concept' ),
			'desc'    => __( 'Select artiste color', 'concept' ),
			'id'      => $prefix . 'artiste_color',
			'type'    => 'colorpicker',
			'default' => '#70d628',
	) );
}


add_action( 'cmb2_admin_init', 'concept_register_realisation_metabox' );
function concept_register_realisation_metabox() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_concept_realisation_';

	$cmb_concept_realisation_informations = new_cmb2_box( array(
			'id'            => $prefix . 'metabox',
			'title'         => __( 'realisation Informations', 'concept' ),
			'object_types'  => array( 'realisation', )
	) );

	$cmb_concept_realisation_informations->add_field( array(
			'name' => __( 'realisation Code ', 'concept' ),
			'desc' => __('Enter a youtube, twitter, or instagram URL', 'concept'),
			'id'   => $prefix . 'realisation',
			'type' => 'oembed'
	) );
	
	$cmb_concept_realisation_informations->add_field( array(
			'name' => __( 'Concept Style', 'concept' ),
			'desc' => __('Concept Style of the realisation', 'concept'),
			'id'   => $prefix . 'style_realisation',
			'type' => 'taxonomy_select',
			'taxonomy' => 'concept_style'
	) );
	
	$cmb_concept_realisation_informations->add_field( array(
			'name' => __( 'Artist', 'concept' ),
			'desc' => __('Artist of the realisation', 'concept'),
			'id'   => $prefix . 'artist_realisation',
			'type' => 'select',
			'options' => 'get_artistes_array'
	) );	
}
