<?php


/**
 * Footer Color Settings
 *
 * @package WordPress
 * @subpackage Zosia
 */

function tfm_customize_register_colors_footer( $wp_customize ) {

	$customizer_settings = tfm_general_settings();

	$wp_customize->add_section( 'tfm_footer_colors', array(
		'title'    => esc_html__( 'Footer Colors', 'zosia' ),
		'priority' => 130,
		'panel' => 'tfm_color_settings',
	) );

    // Add Setting
	$wp_customize->add_setting( 'tfm_footer_background', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_footer_background', array(
      'section' => 'tfm_footer_colors',
      'label'   => esc_html__( 'Footer Background Color', 'zosia' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'tfm_footer_heading_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_footer_heading_color', array(
      'section' => 'tfm_footer_colors',
      'label'   => esc_html__( 'Footer Heading Color', 'zosia' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'tfm_footer_font_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_footer_font_color', array(
      'section' => 'tfm_footer_colors',
      'label'   => esc_html__( 'Footer Font Color', 'zosia' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'tfm_footer_link_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_footer_link_color', array(
      'section' => 'tfm_footer_colors',
      'label'   => esc_html__( 'Footer Link Color', 'zosia' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'tfm_footer_border_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_footer_border_color', array(
      'section' => 'tfm_footer_colors',
      'label'   => esc_html__( 'Footer Line Color', 'zosia' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'tfm_footer_misc_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_footer_misc_color', array(
      'section' => 'tfm_footer_colors',
      'label'   => esc_html__( 'Misc. Elements Color', 'zosia' ),
    ) ) );

}

add_action( 'customize_register', 'tfm_customize_register_colors_footer' );