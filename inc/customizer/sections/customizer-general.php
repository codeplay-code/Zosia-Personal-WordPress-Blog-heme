<?php


/**
 * General Settings
 *
 * @package WordPress
 * @subpackage Zosia
 */


function tfm_customize_register_general( $wp_customize ) {

	$customizer_settings = tfm_general_settings();

	// ========================================================
	// General Theme Settings
	// ========================================================

	$wp_customize->add_section( 'tfm_general_settings', array(
		'title'    => esc_html__( 'General Settings', 'zosia' ),
		'priority' => 130,
		'panel' => 'tfm_theme_settings',
	) );

	//  Theme width

	$wp_customize->add_setting( 'tfm_site_width', array(
		'default'           => $customizer_settings['site_width'],
		'sanitize_callback' => 'absint',
	) );

	$wp_customize->add_control( 'tfm_site_width', array(
		'label'       => esc_html__( 'Site Width', 'zosia'),
		'description' => esc_html__( 'Default:', 'zosia' ) . ' ' . $customizer_settings['site_width'],
		'section'     => 'tfm_general_settings',
		'type'        => 'number',
	) );

	//  Sidebar width

	$wp_customize->add_setting( 'tfm_sidebar_width', array(
		'default'           => $customizer_settings['sidebar_width'],
		'sanitize_callback' => 'absint',
	) );

	$wp_customize->add_control( 'tfm_sidebar_width', array(
		'label'       => esc_html__( 'Sidebar Width', 'zosia' ),
		'description' => esc_html__( 'Default:', 'zosia' ) . ' ' . $customizer_settings['sidebar_width'],
		'section'     => 'tfm_general_settings',
		'type'        => 'number',
		'input_attrs' => array(
		        'min'   => 240,
		        'max' => 600,
		    ),
	) );

	//  Single content max width

	$wp_customize->add_setting( 'tfm_content_max_width', array(
		'default'           => $customizer_settings['content_max_width'],
		'sanitize_callback' => 'absint',
	) );

	$wp_customize->add_control( 'tfm_content_max_width', array(
		'label'       => esc_html__( 'Content Width', 'zosia' ),
		'description' => esc_html__( 'Default:', 'zosia' ) . ' ' . $customizer_settings['content_max_width'],
		'section'     => 'tfm_general_settings',
		'type'        => 'number',
		'input_attrs' => array(
		        'max' => $customizer_settings['site_width'],
		    ),
	) );

	$wp_customize->add_setting( 'tfm_thumbnail_border_radius', array(
		'default'           => $customizer_settings['thumbnail_border_radius'],
		'sanitize_callback' => 'absint',
	) );

	$wp_customize->add_control( 'tfm_thumbnail_border_radius', array(
		'label'       => esc_html__( 'Post Thumbnail Border Radius', 'zosia' ),
		'description' => esc_html__( 'Default:', 'zosia' ) . ' ' . $customizer_settings['thumbnail_border_radius'],
		'section'     => 'tfm_general_settings',
		'type'        => 'number',
		'input_attrs' => array(
		        'min'   => 0,
		        'step' => 1,
		    ),
	) );

	$wp_customize->add_setting( 'tfm_image_embed_border_radius', array(
		'default'           => 0,
		'sanitize_callback' => 'absint',
	) );

	$wp_customize->add_control( 'tfm_image_embed_border_radius', array(
		'label'       => esc_html__( 'Post Image Embed Border Radius', 'zosia' ),
		'section'     => 'tfm_general_settings',
		'type'        => 'number',
		'input_attrs' => array(
		        'min'   => 0,
		        'step' => 1,
		    ),
	) );

	$wp_customize->add_setting( 'tfm_input_border_radius', array(
		'default'           => $customizer_settings['input_border_radius'],
		'sanitize_callback' => 'absint',
	) );

	$wp_customize->add_control( 'tfm_input_border_radius', array(
		'label'       => esc_html__( 'Input Field Border Radius', 'zosia' ),
		'description' => esc_html__( 'Default:', 'zosia' ) . ' ' . $customizer_settings['input_border_radius'],
		'section'     => 'tfm_general_settings',
		'type'        => 'number',
		'input_attrs' => array(
		        'min'   => 0,
		        'step' => 1,
		    ),
	) );

	$wp_customize->add_setting( 'tfm_button_border_radius', array(
		'default'           => $customizer_settings['button_border_radius'],
		'sanitize_callback' => 'absint',
	) );

	$wp_customize->add_control( 'tfm_button_border_radius', array(
		'label'       => esc_html__( 'Button Border Radius', 'zosia' ),
		'description' => esc_html__( 'Default:', 'zosia' ) . ' ' . $customizer_settings['button_border_radius'],
		'section'     => 'tfm_general_settings',
		'type'        => 'number',
		'input_attrs' => array(
		        'min'   => 0,
		        'step' => 1,
		    ),
	) );

	$wp_customize->add_setting( 'tfm_archive_cat_slug_num', array(
		'default'           => '2',
		'sanitize_callback' => 'absint',
	) );

	$wp_customize->add_control( 'tfm_archive_cat_slug_num', array(
		'label'       => esc_html__( 'Number of Category Tags In Archive displays', 'zosia' ),
		'section'     => 'tfm_general_settings',
		'type'        => 'number',
		'input_attrs' => array(
	        'min'   => 1,
	        'max'   => 999,
	    ),
	) );

	$wp_customize->add_setting( 'tfm_excerpt_length', array(
		'default'           => '30',
		'sanitize_callback' => 'absint',
	) );

	$wp_customize->add_control( 'tfm_excerpt_length', array(
		'label'       => esc_html__( 'Excerpt Length', 'zosia' ),
		'section'     => 'tfm_general_settings',
		'type'        => 'number',
		'input_attrs' => array(
		        'min'   => 0,
		    ),
	) );

	$wp_customize->add_setting( 'tfm_primary_menu_letter_spacing', array(
		'default'           => $customizer_settings['primary_menu_letter_spacing'],
		'sanitize_callback' => 'absint',
	) );

	$wp_customize->add_control( 'tfm_primary_menu_letter_spacing', array(
		'label'       => esc_html__( 'Primary Menu Letter Spacing', 'zosia' ),
		'description' => esc_html__( 'Default:', 'zosia' ) . ' ' . $customizer_settings['primary_menu_letter_spacing'],
		'section'     => 'tfm_general_settings',
		'type'        => 'number',
		'input_attrs' => array(
		        'min'   => 0,
		    ),
	) );

	$wp_customize->add_setting( 'tfm_primary_menu_description_letter_spacing', array(
		'default'           => $customizer_settings['primary_menu_description_letter_spacing'],
		'sanitize_callback' => 'absint',
	) );

	$wp_customize->add_control( 'tfm_primary_menu_description_letter_spacing', array(
		'label'       => esc_html__( 'Primary Menu Description Letter Spacing', 'zosia' ),
		'description' => esc_html__( 'Default:', 'zosia' ) . ' ' . $customizer_settings['primary_menu_description_letter_spacing'],
		'section'     => 'tfm_general_settings',
		'type'        => 'number',
		'input_attrs' => array(
		        'min'   => 0,
		    ),
	) );

	$wp_customize->add_setting( 'tfm_primary_menu_font_size', array(
		'default'           => $customizer_settings['primary_menu_font_size'],
		'sanitize_callback' => 'absint',
	) );

	$wp_customize->add_control( 'tfm_primary_menu_font_size', array(
		'label'       => esc_html__( 'Primary Menu Font Size', 'zosia' ),
		'description' => esc_html__( 'Default:', 'zosia' ) . ' ' . $customizer_settings['primary_menu_font_size'],
		'section'     => 'tfm_general_settings',
		'type'        => 'number',
		'input_attrs' => array(
		        'min'   => 0,
		        'step' => 0.5,
		    ),
	) );

	$wp_customize->add_setting( 'tfm_primary_menu_uppercase', array(
		'default'           => false,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_primary_menu_uppercase', array(
		'label'       => esc_html__( 'Uppercase Primary Menu', 'zosia' ),
		'section'     => 'tfm_general_settings',
		'type'        => 'checkbox',
	) );

	// Toggle primary menu in sidebar (desktop)
	$wp_customize->add_setting( 'tfm_sidebar_primary_nav', array(
		'default'           => false,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_sidebar_primary_nav', array(
		'label'       => esc_html__( 'Show Primary Nav in Toggle Sidebar on Desktop', 'zosia' ),
		'section'     => 'tfm_general_settings',
		'type'        => 'checkbox',
	) );

	// Archive lebel
	$wp_customize->add_setting( 'tfm_remove_archive_title_label', array(
		'default'           => false,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_remove_archive_title_label', array(
		'label'       => esc_html__( 'Remove Archive Title Label', 'zosia' ),
		'section'     => 'tfm_general_settings',
		'type'        => 'checkbox',
	) );

	$wp_customize->add_setting('tfm_sidebar_logo_upload', array(
		'default'           => '',
		'sanitize_callback' => 'tfm_sanitize_image',
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'tfm_sidebar_logo_upload', array(
               'label'      => esc_html__( 'Toggle Sidebar Logo', 'zosia' ),
               'section'    => 'title_tagline',
               'priority' => 100,
           )
       )
   );

	$wp_customize->add_setting('tfm_mobile_logo_upload', array(
		'default'           => '',
		'sanitize_callback' => 'tfm_sanitize_image',
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'tfm_mobile_logo_upload', array(
               'label'      => esc_html__( 'Mobile Logo', 'zosia' ),
               'section'    => 'title_tagline',
               'priority' => 100,
           )
       )
   );

	// Static sisebar sticky
	$wp_customize->add_setting( 'tfm_static_sidebar_sticky', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_static_sidebar_sticky', array(
		'label'       => esc_html__( 'Make Static Sidebar Sticky', 'zosia' ),
		'section'     => 'tfm_general_settings',
		'type'        => 'checkbox',
	) );

	// Toggle post format icons
	$wp_customize->add_setting( 'tfm_post_format_icons', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_post_format_icons', array(
		'label'       => esc_html__( 'Show Post Format Icons', 'zosia' ),
		'section'     => 'tfm_general_settings',
		'type'        => 'checkbox',
	) );

	// Toggle Gto Top
	$wp_customize->add_setting( 'tfm_goto_top', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_goto_top', array(
		'label'       => esc_html__( 'Show Back To Top On Scroll', 'zosia' ),
		'section'     => 'tfm_general_settings',
		'type'        => 'checkbox',
	) );

	// Pagination show Numbers
	$wp_customize->add_setting( 'tfm_pagination_numbers', array(
		'default'           => false,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_pagination_numbers', array(
		'label'       => esc_html__( 'Show Pagination Numbers', 'zosia' ),
		'section'     => 'tfm_general_settings',
		'type'        => 'checkbox',
	) );

	// Pagination show Numbers
	$wp_customize->add_setting( 'tfm_pagination_prev_next', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_pagination_prev_next', array(
		'label'       => esc_html__( 'Show Pagination Prev/Next', 'zosia' ),
		'section'     => 'tfm_general_settings',
		'type'        => 'checkbox',
	) );

	// ========================================================
	// Add options to WP Background Image Section
	// ========================================================

	$wp_customize->add_setting( 'tfm_background_image_single', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'tfm_background_image_single', array(
		'label'       => esc_html__( 'Show on single post/page', 'zosia'),
		'section'     => 'background_image',
		'type'        => 'checkbox',
	) );

	$wp_customize->add_setting( 'tfm_background_image_archive', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'tfm_background_image_archive', array(
		'label'       => esc_html__( 'Show on archive pages', 'zosia'),
		'section'     => 'background_image',
		'type'        => 'checkbox',
	) );



}

add_action( 'customize_register', 'tfm_customize_register_general' );