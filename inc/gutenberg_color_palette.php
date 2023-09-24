<?php

$customizer_settings = tfm_general_settings();

// Adds support for editor color palette.
add_theme_support( 'editor-color-palette', array(
	array(
		'name'  => __( 'Primary Theme Color', 'zosia' ),
		'slug'  => 'primary-theme-color',
		'color'	=> get_theme_mod( 'tfm_primary_theme_color', $customizer_settings['primary_theme_color'] ),
	),
	array(
		'name'  => __( 'Secondary Theme Color', 'zosia' ),
		'slug'  => 'secondary-theme-color',
		'color'	=> get_theme_mod( 'tfm_secondary_theme_color', $customizer_settings['secondary_theme_color'] ),
	),
	array(
		'name'  => __( 'Tertiary Theme Color', 'zosia' ),
		'slug'  => 'tertiary-theme-color',
		'color'	=> get_theme_mod( 'tfm_tertiary_theme_color', $customizer_settings['tertiary_theme_color'] ),
	),
	array(
		'name'  => __( 'Black', 'zosia' ),
		'slug'  => 'black',
		'color' => '#000000',
	),
	array(
		'name'  => __( 'Very Dark Grey', 'zosia' ),
		'slug'  => 'very-dark-grey',
		'color' => get_theme_mod( 'tfm_very_dark_grey', '#131315' ),
       ),
	array(
		'name'  => __( 'Dark Grey', 'zosia' ),
		'slug'  => 'dark-grey',
		'color' => get_theme_mod( 'tfm_dark_grey', '#45464b' ),
       ),
	array(
		'name'  => __( 'Medium Grey', 'zosia' ),
		'slug'  => 'medium-grey',
		'color' => get_theme_mod( 'tfm_medium_grey', '#94979e' ),
       ),
	array(
		'name'  => __( 'Light Grey', 'zosia' ),
		'slug'  => 'light-grey',
		'color' => get_theme_mod( 'tfm_medium_grey', '#cfd0d2' ),
       ),
	array(
		'name'  => __( 'Very Light Grey', 'zosia' ),
		'slug'  => 'very-light-grey',
		'color' => get_theme_mod( 'tfm_very_light_grey', '#f2f2f3' ),
       ),
) );