<?php


/**
 * Sidebar Widget Color Settings
 *
 * @package WordPress
 * @subpackage Zosia
 */

function tfm_customize_register_colors_widgets_sidebar( $wp_customize ) {

	$customizer_settings = tfm_general_settings();

	$wp_customize->add_section( 'tfm_sidebar_widget_colors', array(
		'title'    => esc_html__( 'Widgets (Sidebar)', 'zosia' ),
		'priority' => 130,
		'panel' => 'tfm_color_settings',
	) );

	// Add Setting
	$wp_customize->add_setting( 'tfm_widget_background', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_widget_background', array(
      'section' => 'tfm_sidebar_widget_colors',
      'label'   => esc_html__( 'Widget Background Color', 'zosia' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'tfm_widget_title_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_widget_title_color', array(
      'section' => 'tfm_sidebar_widget_colors',
      'label'   => esc_html__( 'Widget Title Color', 'zosia' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'tfm_widget_subtitle_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_widget_subtitle_color', array(
      'section' => 'tfm_sidebar_widget_colors',
      'label'   => esc_html__( 'Widget Subtitle Color', 'zosia' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'tfm_widget_font_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_widget_font_color', array(
      'section' => 'tfm_sidebar_widget_colors',
      'label'   => esc_html__( 'Widget Font Color', 'zosia' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'tfm_widget_link_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_widget_link_color', array(
      'section' => 'tfm_sidebar_widget_colors',
      'label'   => esc_html__( 'Widget Link Color', 'zosia' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'tfm_widget_child_link_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_widget_child_link_color', array(
      'section' => 'tfm_sidebar_widget_colors',
      'label'   => esc_html__( 'Widget Child Link Color', 'zosia' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'tfm_widget_meta_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_widget_meta_color', array(
      'section' => 'tfm_sidebar_widget_colors',
      'label'   => esc_html__( 'Widget Meta Color', 'zosia' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'tfm_widget_meta_link_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_widget_meta_link_color', array(
      'section' => 'tfm_sidebar_widget_colors',
      'label'   => esc_html__( 'Widget Meta Link Color', 'zosia' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'tfm_widget_button_background', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_widget_button_background', array(
      'section' => 'tfm_sidebar_widget_colors',
      'label'   => esc_html__( 'Widget Button Color', 'zosia' ),
    ) ) );

     // Add Setting
	$wp_customize->add_setting( 'tfm_widget_button_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_widget_button_color', array(
      'section' => 'tfm_sidebar_widget_colors',
      'label'   => esc_html__( 'Widget Button Text Color', 'zosia' ),
    ) ) );

     // Add Setting
	$wp_customize->add_setting( 'tfm_widget_tag_background', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_widget_tag_background', array(
      'section' => 'tfm_sidebar_widget_colors',
      'label'   => esc_html__( 'Widget Tag Color', 'zosia' ),
    ) ) );

     // Add Setting
	$wp_customize->add_setting( 'tfm_widget_tag_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_widget_tag_color', array(
      'section' => 'tfm_sidebar_widget_colors',
      'label'   => esc_html__( 'Widget Tag Text Color', 'zosia' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'tfm_widget_border_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_widget_border_color', array(
      'section' => 'tfm_sidebar_widget_colors',
      'label'   => esc_html__( 'Widget Line Color', 'zosia' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'tfm_widget_thumbnail_background', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_widget_thumbnail_background', array(
      'section' => 'tfm_sidebar_widget_colors',
      'label'   => esc_html__( 'Thumbnail Border Color', 'zosia' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'tfm_widget_misc_elements', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_widget_misc_elements', array(
      'section' => 'tfm_sidebar_widget_colors',
      'label'   => esc_html__( 'Widget Misc. Elements', 'zosia' ),
    ) ) );

}

add_action( 'customize_register', 'tfm_customize_register_colors_widgets_sidebar' );