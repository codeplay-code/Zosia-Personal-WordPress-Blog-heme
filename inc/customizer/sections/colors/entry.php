<?php


/**
 * Post Color Settings
 *
 * @package WordPress
 * @subpackage Zosia
 */

function tfm_customize_register_colors_posts( $wp_customize ) {

	$customizer_settings = tfm_general_settings();

	$wp_customize->add_section( 'tfm_entry_colors', array(
		'title'    => esc_html__( 'Entry Colors', 'zosia' ),
		'priority' => 130,
		'panel' => 'tfm_color_settings',
	) );

	// Add Setting
	$wp_customize->add_setting( 'tfm_archive_post_background', array(
		'default'  => $customizer_settings['default_archive_post_background'],
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_archive_post_background', array(
      'section' => 'tfm_entry_colors',
      'label'   => esc_html__( 'Post Background', 'zosia' ),
    ) ) );
	
    // Add Setting
	$wp_customize->add_setting( 'tfm_entry_title_link_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_entry_title_link_color', array(
      'section' => 'tfm_entry_colors',
      'label'   => esc_html__( 'Entry Title Color', 'zosia' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'tfm_entry_meta_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_entry_meta_color', array(
      'section' => 'tfm_entry_colors',
      'label'   => esc_html__( 'Entry Meta Color', 'zosia' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'tfm_entry_meta_link_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_entry_meta_link_color', array(
      'section' => 'tfm_entry_colors',
      'label'   => esc_html__( 'Entry Meta Link Color', 'zosia' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'tfm_entry_meta_icon_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_entry_meta_icon_color', array(
      'section' => 'tfm_entry_colors',
      'label'   => esc_html__( 'Entry Meta Icon Color', 'zosia' ),
    ) ) );

     // Add Setting
	$wp_customize->add_setting( 'tfm_entry_meta_border_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_entry_meta_border_color', array(
      'section' => 'tfm_entry_colors',
      'label'   => esc_html__( 'Entry Meta Border Color', 'zosia' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'tfm_continue_reading_button_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_continue_reading_button_color', array(
      'section' => 'tfm_entry_colors',
      'label'   => esc_html__( 'Button Text Color', 'zosia' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'tfm_continue_reading_button_hover_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_continue_reading_button_hover_color', array(
      'section' => 'tfm_entry_colors',
      'label'   => esc_html__( 'Button Hover Text Color', 'zosia' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'tfm_post_format_icon_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_post_format_icon_color', array(
      'section' => 'tfm_entry_colors',
      'label'   => esc_html__( 'Post Format & Sticky Icon Color', 'zosia' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'tfm_post_format_icon_background', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_post_format_icon_background', array(
      'section' => 'tfm_entry_colors',
      'label'   => esc_html__( 'Post Format & Sticky Icon Background', 'zosia' ),
    ) ) );


    /**
	Separator
	**/
	$wp_customize->add_setting('tfm_color_settings_single_separator', array(
		'default'           => '',
		'sanitize_callback' => 'esc_html',
	));
	$wp_customize->add_control(new Tfm_Separator_Custom_Control($wp_customize, 'tfm_color_settings_single_separator', array(
		'settings'		=> 'tfm_color_settings_single_separator',
		'section'  		=> 'tfm_entry_colors',
	)));

	// Add Setting
	$wp_customize->add_setting( 'tfm_single_post_background', array(
		'default'  => $customizer_settings['default_single_post_background'],
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_single_post_background', array(
      'section' => 'tfm_entry_colors',
      'label'   => esc_html__( 'Single Post Background', 'zosia' ),
    ) ) );


    // Add Setting
	$wp_customize->add_setting( 'tfm_single_entry_title_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_single_entry_title_color', array(
      'section' => 'tfm_entry_colors',
      'label'   => esc_html__( 'Single Title Color', 'zosia' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'tfm_single_entry_meta_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_single_entry_meta_color', array(
      'section' => 'tfm_entry_colors',
      'label'   => esc_html__( 'Single Entry Meta Color', 'zosia' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'tfm_single_entry_meta_link_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_single_entry_meta_link_color', array(
      'section' => 'tfm_entry_colors',
      'label'   => esc_html__( 'Single Entry Meta Link Color', 'zosia' ),
    ) ) );

     // Add Setting
	$wp_customize->add_setting( 'tfm_single_entry_font_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_single_entry_font_color', array(
      'section' => 'tfm_entry_colors',
      'label'   => esc_html__( 'Single Font Color', 'zosia' ),
    ) ) );

    // ========================================================
	// Single hero seperator
	// ========================================================
	$wp_customize->add_setting('tfm_color_settings_single_hero_separator', array(
		'default'           => '',
		'sanitize_callback' => 'esc_html',
	));
	$wp_customize->add_control(new Tfm_Separator_Custom_Control($wp_customize, 'tfm_color_settings_single_hero_separator', array(
		'settings'		=> 'tfm_color_settings_single_hero_separator',
		'section'  		=> 'tfm_entry_colors',
	)));

	// Add Setting
	$wp_customize->add_setting( 'tfm_single_hero_background', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_single_hero_background', array(
      'section' => 'tfm_entry_colors',
      'label'   => esc_html__( 'Single Hero Background', 'zosia' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'tfm_single_hero_entry_title_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_single_hero_entry_title_color', array(
      'section' => 'tfm_entry_colors',
      'label'   => esc_html__( 'Single Hero Title Color', 'zosia' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'tfm_single_hero_entry_meta_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_single_hero_entry_meta_color', array(
      'section' => 'tfm_entry_colors',
      'label'   => esc_html__( 'Single Hero Entry Meta Color', 'zosia' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'tfm_single_hero_entry_meta_link_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_single_hero_entry_meta_link_color', array(
      'section' => 'tfm_entry_colors',
      'label'   => esc_html__( 'Single Hero Entry Meta Link Color', 'zosia' ),
    ) ) );


    // ========================================================
	// Info header separator
	// ========================================================
	$wp_customize->add_setting('tfm_color_settings_cover_separator', array(
		'default'           => '',
		'sanitize_callback' => 'esc_html',
	));
	$wp_customize->add_control(new Tfm_Separator_Custom_Control($wp_customize, 'tfm_color_settings_cover_separator', array(
		'settings'		=> 'tfm_color_settings_cover_separator',
		'section'  		=> 'tfm_entry_colors',
	)));

	// Info header
	$wp_customize->add_setting('tfm_color_settings_cover_info_header', array(
        'default'           => '',
        'sanitize_callback' => 'tfm_sanitize_text',
     
    ));
    $wp_customize->add_control(new Tfm_Info_Custom_Control($wp_customize, 'tfm_color_settings_cover_info_header', array(
        'label'         => esc_html__('Cover/Image Format', 'zosia'),
        'description' => esc_html__('Cover settings apply to archive, blog and single posts', 'zosia'),
        'settings'      => 'tfm_color_settings_cover_info_header',
        'section'       => 'tfm_entry_colors',
    )));
    // ========================================================
	// End
	// ========================================================

	 // Add Setting
	$wp_customize->add_setting( 'tfm_cover_format_primary_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_cover_format_primary_color', array(
      'section' => 'tfm_entry_colors',
      'label'   => esc_html__( 'Primary Text Color', 'zosia' ),
    ) ) );

     // Add Setting
	$wp_customize->add_setting( 'tfm_cover_format_button_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_cover_format_button_color', array(
      'section' => 'tfm_entry_colors',
      'label'   => esc_html__( 'Button Text Color', 'zosia' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'tfm_cover_format_button_hover_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_cover_format_button_hover_color', array(
      'section' => 'tfm_entry_colors',
      'label'   => esc_html__( 'Button Hover Text Color', 'zosia' ),
    ) ) );

}

add_action( 'customize_register', 'tfm_customize_register_colors_posts' );