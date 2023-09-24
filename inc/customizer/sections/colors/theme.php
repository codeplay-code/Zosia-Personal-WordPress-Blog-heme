<?php


/**
 * Theme Color Settings
 *
 * @package WordPress
 * @subpackage Zosia
 */

function tfm_customize_register_colors_theme( $wp_customize ) {

	$customizer_settings = tfm_general_settings();

	$wp_customize->add_section( 'tfm_theme_colors', array(
		'title'    => esc_html__( 'Theme Color Scheme', 'zosia' ),
		'priority' => 130,
		'panel' => 'tfm_color_settings',
	) );

	// Theme colour scheme
	$wp_customize->add_setting( 'tfm_primary_theme_color', array(
		'default'           => $customizer_settings['primary_theme_color'],
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_primary_theme_color', array(
      'section' => 'tfm_theme_colors',
      'label'   => esc_html__( 'Primary Theme Color', 'zosia' ),
    ) ) );


	if ( array_key_exists('secondary_theme_color', $customizer_settings)) {

	    $wp_customize->add_setting( 'tfm_secondary_theme_color', array(
			'default'           => $customizer_settings['secondary_theme_color'],
			'transport' => 'refresh',
			'sanitize_callback' => 'sanitize_hex_color',
		) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_secondary_theme_color', array(
	      'section' => 'tfm_theme_colors',
	      'label'   => esc_html__( 'Secondary Theme Color', 'zosia' ),
	    ) ) );

	}

	if ( array_key_exists('tertiary_theme_color', $customizer_settings)) {
		
	    $wp_customize->add_setting( 'tfm_tertiary_theme_color', array(
			'default'           => $customizer_settings['tertiary_theme_color'],
			'transport' => 'refresh',
			'sanitize_callback' => 'sanitize_hex_color',
		) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_tertiary_theme_color', array(
	      'section' => 'tfm_theme_colors',
	      'label'   => esc_html__( 'Tertiary Theme Color', 'zosia' ),
	    ) ) );

	}

	if ( array_key_exists('quaternary_theme_color', $customizer_settings)) {
		
	    $wp_customize->add_setting( 'tfm_quaternary_theme_color', array(
			'default'           => $customizer_settings['quaternary_theme_color'],
			'transport' => 'refresh',
			'sanitize_callback' => 'sanitize_hex_color',
		) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_quaternary_theme_color', array(
	      'section' => 'tfm_theme_colors',
	      'label'   => esc_html__( 'Quaternary Theme Color', 'zosia' ),
	    ) ) );

	}

	if ( array_key_exists('quinary_theme_color', $customizer_settings)) {
		
	    $wp_customize->add_setting( 'tfm_quinary_theme_color', array(
			'default'           => $customizer_settings['quinary_theme_color'],
			'transport' => 'refresh',
			'sanitize_callback' => 'sanitize_hex_color',
		) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_quinary_theme_color', array(
	      'section' => 'tfm_theme_colors',
	      'label'   => esc_html__( 'Quinary Theme Color', 'zosia' ),
	    ) ) );

	}


	// Add Setting
	$wp_customize->add_setting( 'tfm_very_dark_grey', array(
		'default'           => '#131315',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_very_dark_grey', array(
      'section' => 'tfm_theme_colors',
      'label'   => esc_html__( 'Very Dark Grey', 'zosia' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'tfm_dark_grey', array(
		'default'           => '#45464b',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_dark_grey', array(
      'section' => 'tfm_theme_colors',
      'label'   => esc_html__( 'Dark Grey', 'zosia' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'tfm_medium_grey', array(
		'default'           => '#94979e',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_medium_grey', array(
      'section' => 'tfm_theme_colors',
      'label'   => esc_html__( 'Medium Grey', 'zosia' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'tfm_light_grey', array(
		'default'           => '#cfd0d2',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_light_grey', array(
      'section' => 'tfm_theme_colors',
      'label'   => esc_html__( 'Light Grey', 'zosia' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'tfm_very_light_grey', array(
		'default'           => '#f2f2f3',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_very_light_grey', array(
      'section' => 'tfm_theme_colors',
      'label'   => esc_html__( 'Very Light Grey', 'zosia' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'tfm_off_white', array(
		'default'           => '#f9f9f9',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_off_white', array(
      'section' => 'tfm_theme_colors',
      'label'   => esc_html__( 'Off white', 'zosia' ),
    ) ) );

    // ========================================================
	// Global Font and Link Colors
	// ========================================================

	 // Add Setting
	$wp_customize->add_setting( 'tfm_body_font_color', array(
		'default'           => '#131315',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_body_font_color', array(
      'section' => 'tfm_theme_colors',
      'label'   => esc_html__( 'Body Font Color', 'zosia' ),
    ) ) );

     // Add Setting
	$wp_customize->add_setting( 'tfm_link_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_link_color', array(
      'section' => 'tfm_theme_colors',
      'label'   => esc_html__( 'Body Link Color', 'zosia' ),
      'description' => esc_html__( 'Inherits Secondary Theme Color If No Color selected', 'zosia'),
    ) ) );

    $wp_customize->add_setting( 'tfm_link_hover_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_link_hover_color', array(
      'section' => 'tfm_theme_colors',
      'label'   => esc_html__( 'Body Link Hover Color', 'zosia' ),
      'description' => esc_html__( 'Inherits Secondary Theme Color If No Color selected', 'zosia'),
    ) ) );

	$wp_customize->add_setting( 'tfm_button_background', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_button_background', array(
      'section' => 'tfm_theme_colors',
      'label'   => esc_html__( 'Button Background', 'zosia' ),
      'description' => esc_html__( 'Inherits Primary Theme Color If No Color selected', 'zosia'),
    ) ) );

	$wp_customize->add_setting( 'tfm_button_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_button_color', array(
      'section' => 'tfm_theme_colors',
      'label'   => esc_html__( 'Button Text Color', 'zosia' ),
    ) ) );

}

add_action( 'customize_register', 'tfm_customize_register_colors_theme' );