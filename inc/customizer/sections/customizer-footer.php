<?php


/**
 * Footer Settings
 *
 * @package WordPress
 * @subpackage Zosia
 */

function tfm_customize_register_footer( $wp_customize ) {

	$customizer_settings = tfm_general_settings();

	$wp_customize->add_section( 'tfm_footer_settings', array(
		'title'    => esc_html__( 'Footer Settings', 'zosia' ),
		'priority' => 130,
		'panel' => 'tfm_theme_settings',
	) );

	$wp_customize->add_setting( 'tfm_footer_layout', array(
		'default'           => 'columns-menu',
		'sanitize_callback' => 'tfm_sanitize_select',
	) );

	$wp_customize->add_control( 'tfm_footer_layout', array(
		'label'       => esc_html__( 'Footer Layout', 'zosia' ),
		'section'     => 'tfm_footer_settings',
		'type'        => 'select',
		'choices'     => array(
			'columns' => esc_html__( '1/2/3/4 Columns', 'zosia' ),
			'columns-menu' => esc_html__( '1/2/3 Columns w/Menu', 'zosia' ),
		),
	) );

	// Footer text
	$wp_customize->add_setting( 'tfm_footer_text', array(
		'default'           => '',
		'sanitize_callback' => 'tfm_sanitize_html',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_footer_text', array(
		'label'       => esc_html__( 'Footer Text', 'zosia' ),
		'section'     => 'tfm_footer_settings',
		'type'        => 'textarea',
	) );

	// Footer menu title
	$wp_customize->add_setting( 'tfm_footer_menu_title', array(
		'default'           => '',
		'sanitize_callback' => 'tfm_sanitize_text',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_footer_menu_title', array(
		'label'       => esc_html__( 'Footer Menu Title', 'zosia' ),
		'section'     => 'tfm_footer_settings',
		'type'        => 'text',
	) );

	// Footer menu subtitle
	$wp_customize->add_setting( 'tfm_footer_menu_subtitle', array(
		'default'           => '',
		'sanitize_callback' => 'tfm_sanitize_text',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_footer_menu_subtitle', array(
		'label'       => esc_html__( 'Footer Menu Subtitle', 'zosia' ),
		'section'     => 'tfm_footer_settings',
		'type'        => 'text',
	) );

}

add_action( 'customize_register', 'tfm_customize_register_footer' );