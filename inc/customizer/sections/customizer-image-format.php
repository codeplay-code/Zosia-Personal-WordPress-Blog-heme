<?php


/**
 * Footer Settings
 *
 * @package WordPress
 * @subpackage Zosia
 */

function tfm_customize_register_image_format( $wp_customize ) {

	$customizer_settings = tfm_general_settings();

	$wp_customize->add_section( 'tfm_image_format_settings', array(
		'title'    => esc_html__( 'Image Format Settings', 'zosia' ),
		'priority' => 130,
		'panel' => 'tfm_theme_settings',
	) );

	// Use global
	$wp_customize->add_setting( 'tfm_image_format_use_global', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_image_format_use_global', array(
		'label'       => esc_html__( 'Use Archive &amp; Homepage Settings', 'zosia' ),
		'section'     => 'tfm_image_format_settings',
		'type'        => 'checkbox',
	) );

	// Show excerpt (Auto)
	$wp_customize->add_setting( 'tfm_image_format_post_excerpt', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_image_format_post_excerpt', array(
		'label'       => esc_html__( 'Excerpt (Auto-Generated)', 'zosia' ),
		'section'     => 'tfm_image_format_settings',
		'type'        => 'checkbox',
	) );
	//Excerpt (Manual)
	$wp_customize->add_setting( 'tfm_image_format_post_excerpt_custom', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_image_format_post_excerpt_custom', array(
		'label'       => esc_html__( 'Excerpt (Custom)', 'zosia' ),
		'section'     => 'tfm_image_format_settings',
		'type'        => 'checkbox',
	) );

	$wp_customize->add_setting( 'tfm_image_format_read_more', array(
		'default'           => false,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_image_format_read_more', array(
		'label'       => esc_html__( 'Read More', 'zosia' ),
		'section'     => 'tfm_image_format_settings',
		'type'        => 'checkbox',
	) );

	// Show entry title
	$wp_customize->add_setting( 'tfm_image_format_entry_title', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_image_format_entry_title', array(
		'label'       => esc_html__( 'Entry Title', 'zosia' ),
		'section'     => 'tfm_image_format_settings',
		'type'        => 'checkbox',
	) );

	// Show post thumbnail
	$wp_customize->add_setting( 'tfm_image_format_post_thumbnail', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_image_format_post_thumbnail', array(
		'label'       => esc_html__( 'Thumbnail', 'zosia' ),
		'section'     => 'tfm_image_format_settings',
		'type'        => 'checkbox',
	) );

	// Homepage Standard Loop Image aspect ratio
	$wp_customize->add_setting( 'tfm_image_format_thumbnail_aspect_ratio', array(
		'default'           => 'uncropped',
		'sanitize_callback' => 'tfm_sanitize_select',
	) );

	$wp_customize->add_control( 'tfm_image_format_thumbnail_aspect_ratio', array(
		'label'       => esc_html__( 'Thumbnail Aspect Ratio', 'zosia' ),
		'section'     => 'tfm_image_format_settings',
		'type'        => 'select',
		'choices'     => array(
			'wide' => esc_html__( 'Wide', 'zosia' ),
			'landscape' => esc_html__( 'Landscape', 'zosia' ),
			'portrait' => esc_html__( 'Portrait', 'zosia' ),
			'square' => esc_html__( 'Square', 'zosia' ),
			'uncropped' => esc_html__( 'Uncropped', 'zosia' ),
		),
	) );

	// Show by meta
	$wp_customize->add_setting( 'tfm_image_format_entry_meta_by', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_image_format_entry_meta_by', array(
		'label'       => esc_html__( '"by"', 'zosia' ),
		'section'     => 'tfm_image_format_settings',
		'type'        => 'checkbox',
	) );

	// Show "in" meta
	$wp_customize->add_setting( 'tfm_image_format_entry_meta_in', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_image_format_entry_meta_in', array(
		'label'       => esc_html__( '"in"', 'zosia' ),
		'section'     => 'tfm_image_format_settings',
		'type'        => 'checkbox',
	) );

	// Show author meta
	$wp_customize->add_setting( 'tfm_image_format_entry_meta_author', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_image_format_entry_meta_author', array(
		'label'       => esc_html__( 'Author', 'zosia' ),
		'section'     => 'tfm_image_format_settings',
		'type'        => 'checkbox',
	) );

	// Show author meta
	$wp_customize->add_setting( 'tfm_image_format_entry_meta_author_avatar', array(
		'default'           => false,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_image_format_entry_meta_author_avatar', array(
		'label'       => esc_html__( 'Avatar', 'zosia' ),
		'section'     => 'tfm_image_format_settings',
		'type'        => 'checkbox',
	) );

	// Show category meta
	$wp_customize->add_setting( 'tfm_image_format_entry_meta_category', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_image_format_entry_meta_category', array(
		'label'       => esc_html__( 'Category', 'zosia' ),
		'section'     => 'tfm_image_format_settings',
		'type'        => 'checkbox',
	) );

	// Show read time (TFM theme boost plugin)
	if ( function_exists( 'tfm_read_time') ) {
		$wp_customize->add_setting( 'tfm_image_format_entry_meta_read_time', array(
			'default'           => true,
			'sanitize_callback' => 'tfm_sanitize_checkbox',
		) );

		// Control Options
		$wp_customize->add_control( 'tfm_image_format_entry_meta_read_time', array(
			'label'       => esc_html__( 'Read Time', 'zosia' ),
			'section'     => 'tfm_image_format_settings',
			'type'        => 'checkbox',
		) );
	}

	// Show date meta
	$wp_customize->add_setting( 'tfm_image_format_entry_meta_comment_count', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_image_format_entry_meta_comment_count', array(
		'label'       => esc_html__( 'Comment Count', 'zosia' ),
		'section'     => 'tfm_image_format_settings',
		'type'        => 'checkbox',
	) );

	// Show date meta
	$wp_customize->add_setting( 'tfm_image_format_entry_meta_date', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_image_format_entry_meta_date', array(
		'label'       => esc_html__( 'Date', 'zosia' ),
		'section'     => 'tfm_image_format_settings',
		'type'        => 'checkbox',
	) );

}

add_action( 'customize_register', 'tfm_customize_register_image_format' );