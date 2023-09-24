<?php


/**
 * Header Color Settings
 *
 * @package WordPress
 * @subpackage Zosia
 */

function tfm_customize_register_colors_toggle_sidebar( $wp_customize ) {

	$customizer_settings = tfm_general_settings();

    $wp_customize->add_section( 'tfm_toggle_sidebar_colors', array(
		'title'    => esc_html__( 'Toggle Sidebar', 'zosia' ),
		'priority' => 130,
		'panel' => 'tfm_color_settings',
	) );

	// Add Setting
	$wp_customize->add_setting( 'tfm_toggle_sidebar_background', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_toggle_sidebar_background', array(
      'section' => 'tfm_toggle_sidebar_colors',
      'label'   => esc_html__( 'Sidebar Background', 'zosia' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'tfm_toggle_sidebar_heading_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_toggle_sidebar_heading_color', array(
      'section' => 'tfm_toggle_sidebar_colors',
      'label'   => esc_html__( 'Sidebar Heading Color', 'zosia' ),
    ) ) );

	// Add Setting
	$wp_customize->add_setting( 'tfm_toggle_sidebar_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_toggle_sidebar_color', array(
      'section' => 'tfm_toggle_sidebar_colors',
      'label'   => esc_html__( 'Sidebar Font Color', 'zosia' ),
    ) ) );

	// Add Setting
	$wp_customize->add_setting( 'tfm_toggle_sidebar_border_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_toggle_sidebar_border_color', array(
      'section' => 'tfm_toggle_sidebar_colors',
      'label'   => esc_html__( 'Sidebar Border Color', 'zosia' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'tfm_toggle_sidebar_logo_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_toggle_sidebar_logo_color', array(
      'section' => 'tfm_toggle_sidebar_colors',
      'label'   => esc_html__( 'Sidebar Logo Color', 'zosia' ),
    ) ) );

     // Add Setting
	$wp_customize->add_setting( 'tfm_toggle_sidebar_menu_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_toggle_sidebar_menu_color', array(
      'section' => 'tfm_toggle_sidebar_colors',
      'label'   => esc_html__( 'Sidebar Link Color', 'zosia' ),
    ) ) );

     // Add Setting
	$wp_customize->add_setting( 'tfm_toggle_sidebar_misc_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_toggle_sidebar_misc_color', array(
      'section' => 'tfm_toggle_sidebar_colors',
      'label'   => esc_html__( 'Misc. Elements Color', 'zosia' ),
    ) ) );

}

add_action( 'customize_register', 'tfm_customize_register_colors_toggle_sidebar' );