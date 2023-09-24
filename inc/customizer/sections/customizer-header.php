<?php


/**
 * Header Settings
 *
 * @package WordPress
 * @subpackage Zosia
 */

function tfm_customize_register_header( $wp_customize ) {

	$customizer_settings = tfm_general_settings();

	$wp_customize->add_section( 'tfm_header_settings', array(
		'title'    => esc_html__( 'Header Settings', 'zosia' ),
		'priority' => 130,
		'panel' => 'tfm_theme_settings',
	) );

	// Layout style
	$wp_customize->add_setting( 'tfm_header_layout', array(
		'default'           => 'default',
		'sanitize_callback' => 'tfm_sanitize_select',
	) );

	if ( function_exists('tfm_site_header_widget')) {
		$wp_customize->add_control( 'tfm_header_layout', array(
			'label'       => esc_html__( 'Header Layout', 'zosia' ),
			'section'     => 'tfm_header_settings',
			'type'        => 'select',
			'choices'     => array(
				'default' => esc_html__( 'Default', 'zosia' ),
				'logo-split-menu' => esc_html__( 'Logo Center Split Menu', 'zosia' ),
				'logo-left-menu-right' => esc_html__( 'Logo Left w/Menu', 'zosia' ),
				'logo-below-nav' => esc_html__( 'Logo Below Nav', 'zosia' ),
				'default-advert' => esc_html__( 'Default w/Advert', 'zosia'),
			),
		) );
	} else {
		$wp_customize->add_control( 'tfm_header_layout', array(
			'label'       => esc_html__( 'Header Layout', 'zosia' ),
			'section'     => 'tfm_header_settings',
			'type'        => 'select',
			'choices'     => array(
				'default' => esc_html__( 'Default', 'zosia' ),
				'default-logo-left' => esc_html__( 'Default Logo Left', 'zosia'),
				'logo-split-menu' => esc_html__( 'Logo Center Split Menu', 'zosia' ),
				'logo-left-menu-right' => esc_html__( 'Logo Left w/Menu', 'zosia' ),
				'logo-below-nav' => esc_html__( 'Logo Below Nav', 'zosia' ),
			),
		) );
	}

	// Enable toggle menu
	$wp_customize->add_setting( 'tfm_toggle_menu', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_toggle_menu', array(
		'label'       => esc_html__( 'Show Toggle Menu on Desktop', 'zosia' ),
		'section'     => 'tfm_header_settings',
		'type'        => 'checkbox',
	) );

	// Enable toggle menu
	$wp_customize->add_setting( 'tfm_toggle_menu_mobile', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_toggle_menu_mobile', array(
		'label'       => esc_html__( 'Show Toggle Menu on Mobile', 'zosia' ),
		'section'     => 'tfm_header_settings',
		'type'        => 'checkbox',
	) );

	// Enable toggle search
	$wp_customize->add_setting( 'tfm_toggle_search', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_toggle_search', array(
		'label'       => esc_html__( 'Show Toggle Search on Desktop', 'zosia' ),
		'section'     => 'tfm_header_settings',
		'type'        => 'checkbox',
	) );

	// Enable toggle search
	$wp_customize->add_setting( 'tfm_toggle_search_mobile', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_toggle_search_mobile', array(
		'label'       => esc_html__( 'Show Toggle Search on Mobile', 'zosia' ),
		'section'     => 'tfm_header_settings',
		'type'        => 'checkbox',
	) );

	// Sticky Nav Desktop
	$wp_customize->add_setting( 'tfm_sticky_nav', array(
		'default'           => false,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_sticky_nav', array(
		'label'       => esc_html__( 'Make Header Nav Sticky on Desktop', 'zosia' ),
		'section'     => 'tfm_header_settings',
		'type'        => 'checkbox',
	) );

	// Sticky Nav Mobile
	$wp_customize->add_setting( 'tfm_sticky_nav_mobile', array(
		'default'           => false,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_sticky_nav_mobile', array(
		'label'       => esc_html__( 'Make Header Nav Sticky on Mobile', 'zosia' ),
		'section'     => 'tfm_header_settings',
		'type'        => 'checkbox',
	) );

	// Tagline
	$wp_customize->add_setting( 'tfm_header_tagline', array(
		'default'           => false,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_header_tagline', array(
		'label'       => esc_html__( 'Show Site Tagline', 'zosia' ),
		'section'     => 'tfm_header_settings',
		'type'        => 'checkbox',
	) );

}

add_action( 'customize_register', 'tfm_customize_register_header' );