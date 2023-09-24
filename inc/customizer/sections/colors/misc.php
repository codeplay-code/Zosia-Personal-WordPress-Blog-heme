<?php


/**
 * Misc. Color Settings
 *
 * @package WordPress
 * @subpackage Zosia
 */

function tfm_customize_register_colors_misc( $wp_customize ) {

	$customizer_settings = tfm_general_settings();

	$wp_customize->add_section( 'tfm_misc_colors', array(
		'title'    => esc_html__( 'Misc. Colors', 'zosia' ),
		'priority' => 130,
		'panel' => 'tfm_color_settings',
	) );

    // Add Setting
	$wp_customize->add_setting( 'tfm_menu_pill_background', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_menu_pill_background', array(
      'section' => 'tfm_misc_colors',
      'label'   => esc_html__( 'Primary Menu Pill Background', 'zosia' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'tfm_menu_pill_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_menu_pill_color', array(
      'section' => 'tfm_misc_colors',
      'label'   => esc_html__( 'Primary Menu Pill Color', 'zosia' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'tfm_menu_pill_hover_background', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_menu_pill_hover_background', array(
      'section' => 'tfm_misc_colors',
      'label'   => esc_html__( 'Primary Menu Pill Hover Background', 'zosia' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'tfm_menu_pill_hover_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_menu_pill_hover_color', array(
      'section' => 'tfm_misc_colors',
      'label'   => esc_html__( 'Primary Menu Pill Hover Color', 'zosia' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'tfm_meta_theme_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_meta_theme_color', array(
      'section' => 'tfm_misc_colors',
      'label'   => esc_html__( 'Meta Theme Color', 'zosia' ),
    ) ) );

	  // Add Setting
	$wp_customize->add_setting( 'tfm_menu_sash_background', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_menu_sash_background', array(
      'section' => 'tfm_misc_colors',
      'label'   => esc_html__( 'Menu Sash Background', 'zosia' ),
    ) ) );

	  // Add Setting
	$wp_customize->add_setting( 'tfm_menu_sash_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_menu_sash_color', array(
      'section' => 'tfm_misc_colors',
      'label'   => esc_html__( 'Menu Sash Color', 'zosia' ),
    ) ) );

}

add_action( 'customize_register', 'tfm_customize_register_colors_misc' );