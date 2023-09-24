<?php


/**
 * Archive Header Color Settings
 *
 * @package WordPress
 * @subpackage Zosia
 */

function tfm_customize_register_colors_archive_header( $wp_customize ) {

	$customizer_settings = tfm_general_settings();

	$wp_customize->add_section( 'tfm_archive_header_colors', array(
		'title'    => esc_html__( 'Archive/Category Header', 'zosia' ),
		'priority' => 130,
		'panel' => 'tfm_color_settings',
	) );

	// Add Setting
	$wp_customize->add_setting( 'tfm_archive_header_background', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_archive_header_background', array(
      'section' => 'tfm_archive_header_colors',
      'label'   => esc_html__( 'Header Background', 'zosia' ),
    ) ) );

	// Add Setting
	$wp_customize->add_setting( 'tfm_archive_title_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_archive_title_color', array(
      'section' => 'tfm_archive_header_colors',
      'label'   => esc_html__( 'Title Color', 'zosia' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'tfm_archive_description_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_archive_description_color', array(
      'section' => 'tfm_archive_header_colors',
      'label'   => esc_html__( 'Description Color', 'zosia' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'tfm_archive_meta_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_archive_meta_color', array(
      'section' => 'tfm_archive_header_colors',
      'label'   => esc_html__( 'Meta Color', 'zosia' ),
    ) ) );

}

add_action( 'customize_register', 'tfm_customize_register_colors_archive_header' );