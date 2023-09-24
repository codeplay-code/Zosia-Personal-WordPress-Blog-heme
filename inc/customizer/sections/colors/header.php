<?php


/**
 * Header Color Settings
 *
 * @package WordPress
 * @subpackage Zosia
 */

function tfm_customize_register_colors_header( $wp_customize ) {

	$customizer_settings = tfm_general_settings();

	$wp_customize->add_section( 'tfm_header_colors', array(
		'title'    => esc_html__( 'Header Colors', 'zosia' ),
		'priority' => 130,
		'panel' => 'tfm_color_settings',
	) );

	// Add Setting
	$wp_customize->add_setting( 'tfm_header_background_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_header_background_color', array(
      'section' => 'tfm_header_colors',
      'label'   => esc_html__( 'Header Background Color', 'zosia' ),
    ) ) );

      // Add Setting
	$wp_customize->add_setting( 'tfm_header_logo_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_header_logo_color', array(
      'section' => 'tfm_header_colors',
      'label'   => esc_html__( 'Header Logo Color', 'zosia' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'tfm_header_border_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_header_border_color', array(
      'section' => 'tfm_header_colors',
      'label'   => esc_html__( 'Header Line Color', 'zosia' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'tfm_header_toggle_icon_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_header_toggle_icon_color', array(
      'section' => 'tfm_header_colors',
      'label'   => esc_html__( 'Toggle Icon Color', 'zosia' ),
    ) ) );

}

add_action( 'customize_register', 'tfm_customize_register_colors_header' );