<?php


/**
 * Primary Menu Color Settings
 *
 * @package WordPress
 * @subpackage Zosia
 */

function tfm_customize_register_colors_primary_menu( $wp_customize ) {

	$customizer_settings = tfm_general_settings();

     // Add Setting
	$wp_customize->add_setting( 'tfm_primary_nav_link_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_primary_nav_link_color', array(
      'section' => 'tfm_header_colors',
      'label'   => esc_html__( 'Primary Menu Link Color', 'zosia' ),
    ) ) );

     // Add Setting
	$wp_customize->add_setting( 'tfm_primary_nav_link_hover_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_primary_nav_link_hover_color', array(
      'section' => 'tfm_header_colors',
      'label'   => esc_html__( 'Primary Menu Link Hover Color', 'zosia' ),
    ) ) );

	   // Add Setting
	$wp_customize->add_setting( 'tfm_primary_nav_description_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_primary_nav_description_color', array(
      'section' => 'tfm_header_colors',
      'label'   => esc_html__( 'Primary Menu Description Color', 'zosia' ),
    ) ) );

     // Add Setting
	$wp_customize->add_setting( 'tfm_primary_nav_submenu_background', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_primary_nav_submenu_background', array(
      'section' => 'tfm_header_colors',
      'label'   => esc_html__( 'Primary Menu Sub-Menu Background', 'zosia' ),
    ) ) );

     // Add Setting
	$wp_customize->add_setting( 'tfm_primary_nav_submenu_link_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_primary_nav_submenu_link_color', array(
      'section' => 'tfm_header_colors',
      'label'   => esc_html__( 'Primary Menu Sub-Menu Link Color', 'zosia' ),
    ) ) );

     // Add Setting
	$wp_customize->add_setting( 'tfm_primary_nav_submenu_link_hover_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_primary_nav_submenu_link_hover_color', array(
      'section' => 'tfm_header_colors',
      'label'   => esc_html__( 'Primary Menu Sub-Menu Link Hover Color', 'zosia' ),
    ) ) );

      // Add Setting
	$wp_customize->add_setting( 'tfm_primary_nav_submenu_border_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_primary_nav_submenu_border_color', array(
      'section' => 'tfm_header_colors',
      'label'   => esc_html__( 'Primary Menu Sub-Menu Line Color', 'zosia' ),
    ) ) );

}

add_action( 'customize_register', 'tfm_customize_register_colors_primary_menu' );