<?php


/**
 * Page Settings
 *
 * @package WordPress
 * @subpackage Zosia
 */

function tfm_customize_register_page( $wp_customize ) {

	$customizer_settings = tfm_general_settings();

	$wp_customize->add_section( 'tfm_page_settings', array(
		'title'    => esc_html__( 'Page Settings', 'zosia' ),
		'priority' => 130,
		'panel' => 'tfm_theme_settings',
	) );

	// Sidebar
	$wp_customize->add_setting( 'tfm_page_sidebar', array(
		'default'           => false,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_page_sidebar', array(
		'label'       => esc_html__( 'Display Sidebar', 'zosia' ),
		'section'     => 'tfm_page_settings',
		'type'        => 'checkbox',
	) );

	// Layout style
	$wp_customize->add_setting( 'tfm_page_style', array(
		'default'           => 'default',
		'sanitize_callback' => 'tfm_sanitize_select',
	) );

	$wp_customize->add_control( 'tfm_page_style', array(
		'label'       => esc_html__( 'Page Layout Style', 'zosia' ),
		'section'     => 'tfm_page_settings',
		'type'        => 'select',
		'choices'     => array(
			'default' => esc_html__( 'Default', 'zosia' ),
			'default-alt' => esc_html__( 'Default Alt.', 'zosia' ),
			'cover' => esc_html__( 'Cover', 'zosia' ),
			'hero-default' => esc_html__( 'Hero', 'zosia' ),
			'hero-cover' => esc_html__( 'Hero Cover', 'zosia' ),
		),
	) );

	// Image aspect ratio
	$wp_customize->add_setting( 'tfm_page_thumbnail_aspect_ratio', array(
		'default'           => 'uncropped',
		'sanitize_callback' => 'tfm_sanitize_select',
	) );

	$wp_customize->add_control( 'tfm_page_thumbnail_aspect_ratio', array(
		'label'       => esc_html__( 'Thumbnail Aspect Ratio', 'zosia' ),
		'section'     => 'tfm_page_settings',
		'type'        => 'select',
		'choices'     => array(
			'wide' => esc_html__( 'Wide', 'zosia' ),
			'landscape' => esc_html__( 'Landscape', 'zosia' ),
			'portrait' => esc_html__( 'Portrait', 'zosia' ),
			'square' => esc_html__( 'Square', 'zosia' ),
			'hero' => esc_html__( 'Hero', 'zosia' ),
			'uncropped' => esc_html__( 'Uncropped', 'zosia' ),
		),
	) );

	if ( apply_filters( 'tfm_theme_supports_full_width_posts', true )) :

		$wp_customize->add_setting( 'tfm_page_full_width', array(
			'default'           => false,
			'sanitize_callback' => 'tfm_sanitize_checkbox',
		) );

		$wp_customize->add_control( 'tfm_page_full_width', array(
			'label'       => esc_html__( 'Full Width', 'zosia' ),
			'section'     => 'tfm_page_settings',
			'type'        => 'checkbox',
		) );

	endif;

	$wp_customize->add_setting( 'tfm_front_page_entry_title', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'tfm_front_page_entry_title', array(
		'label'       => esc_html__( 'Show Page Title on Front Page', 'zosia' ),
		'description' => esc_html__( 'If your Homepage is set to a page', 'zosia'),
		'section'     => 'tfm_page_settings',
		'type'        => 'checkbox',
	) );

}

add_action( 'customize_register', 'tfm_customize_register_page' );