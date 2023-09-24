<?php


/**
 * Archive Settings
 *
 * @package WordPress
 * @subpackage Zosia
 */

function tfm_customize_register_archive( $wp_customize ) {

	$customizer_settings = tfm_general_settings();

	$wp_customize->add_section( 'tfm_archive_settings', array(
		'title'    => esc_html__( 'Archive/Category Settings', 'zosia' ),
		'priority' => 130,
		'panel' => 'tfm_theme_settings',
	) );

	// Sidebar
	$wp_customize->add_setting( 'tfm_archive_sidebar', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_archive_sidebar', array(
		'label'       => esc_html__( 'Display Sidebar', 'zosia' ),
		'section'     => 'tfm_archive_settings',
		'type'        => 'checkbox',
	) );

	// Post Layout
		$wp_customize->add_setting( 'tfm_archive_layout', array(
			'default'           => 'list',
			'sanitize_callback' => 'tfm_sanitize_select',
		) );

		$wp_customize->add_control( 'tfm_archive_layout', array(
			'label'       => esc_html__( 'Post Layout', 'zosia' ),
			'section'     => 'tfm_archive_settings',
			'type'        => 'select',
			'choices'     => array(
				'masonry' => esc_html__( 'Masonry', 'zosia' ),
				'grid' => esc_html__( 'Grid', 'zosia' ),
				'grid-first-full' => esc_html__( 'Grid First Full', 'zosia' ),
				'grid-asc' => esc_html__( 'Grid Ascending', 'zosia' ),
				'grid-desc' => esc_html__( 'Grid Descending', 'zosia' ),
				'grid-offset' => esc_html__( 'Grid Offset', 'zosia' ),
				'list' => esc_html__( 'List', 'zosia' ),
			),
		) );

		$wp_customize->add_setting( 'tfm_archive_loop_style', array(
			'default'           => 'default',
			'sanitize_callback' => 'tfm_sanitize_select',
		) );

		$wp_customize->add_control( 'tfm_archive_loop_style', array(
			'label'       => esc_html__( 'Post Style', 'zosia' ),
			'section'     => 'tfm_archive_settings',
			'type'        => 'select',
			'choices'     => array(
				'default' => esc_html__( 'Default', 'zosia' ),
				'cover' => esc_html__( 'Cover', 'zosia' ),
			),
		) );


		// Number of columns
		$wp_customize->add_setting( 'tfm_archive_loop_cols', array(
			'default'           => '3',
			'sanitize_callback' => 'absint',
		) );

		$wp_customize->add_control( 'tfm_archive_loop_cols', array(
			'label'       => esc_html__( 'Number of Columns', 'zosia' ),
			'section'     => 'tfm_archive_settings',
			'type'        => 'number',
			'input_attrs' => array(
		        'min'   => 1,
		        'max'   => apply_filters( 'tfm_max_post_cols', 4 ),
		    ),
		) );

	//========POST META ---------------//

	// Excerpt (Auto Generated)
	$wp_customize->add_setting( 'tfm_archive_post_excerpt', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_archive_post_excerpt', array(
		'label'       => esc_html__( 'Excerpt (Auto Generated)', 'zosia' ),
		'section'     => 'tfm_archive_settings',
		'type'        => 'checkbox',
	) );

	// Excerpt (Custom)
	$wp_customize->add_setting( 'tfm_archive_post_excerpt_custom', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_archive_post_excerpt_custom', array(
		'label'       => esc_html__( 'Excerpt (Custom)', 'zosia' ),
		'section'     => 'tfm_archive_settings',
		'type'        => 'checkbox',
	) );

	$wp_customize->add_setting( 'tfm_archive_read_more', array(
		'default'           => false,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_archive_read_more', array(
		'label'       => esc_html__( 'Read More', 'zosia' ),
		'section'     => 'tfm_archive_settings',
		'type'        => 'checkbox',
	) );

	// Show entry title
	$wp_customize->add_setting( 'tfm_archive_entry_title', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_archive_entry_title', array(
		'label'       => esc_html__( 'Entry Title', 'zosia' ),
		'section'     => 'tfm_archive_settings',
		'type'        => 'checkbox',
	) );

	// Show post thumbnail
	$wp_customize->add_setting( 'tfm_archive_post_thumbnail', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_archive_post_thumbnail', array(
		'label'       => esc_html__( 'Thumbnail', 'zosia' ),
		'section'     => 'tfm_archive_settings',
		'type'        => 'checkbox',
	) );

	// Homepage Standard Loop Image aspect ratio
	$wp_customize->add_setting( 'tfm_archive_thumbnail_aspect_ratio', array(
		'default'           => 'landscape',
		'sanitize_callback' => 'tfm_sanitize_select',
	) );

	$wp_customize->add_control( 'tfm_archive_thumbnail_aspect_ratio', array(
		'label'       => esc_html__( 'Thumbnail Aspect Ratio', 'zosia' ),
		'section'     => 'tfm_archive_settings',
		'type'        => 'select',
		'choices'     => array(
			'wide' => esc_html__( 'Wide', 'zosia' ),
			'landscape' => esc_html__( 'Landscape', 'zosia' ),
			'portrait' => esc_html__( 'Portrait', 'zosia' ),
			'square' => esc_html__( 'Square', 'zosia' ),
			'uncropped' => esc_html__( 'Uncropped', 'zosia' ),
		),
	) );

	// Show video/audio embeds
	$wp_customize->add_setting( 'tfm_archive_post_media', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_archive_post_media', array(
		'label'       => esc_html__( 'Video &amp; Audio', 'zosia' ),
		'section'     => 'tfm_archive_settings',
		'type'        => 'checkbox',
	) );

	// Show by meta
	$wp_customize->add_setting( 'tfm_archive_entry_meta_by', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_archive_entry_meta_by', array(
		'label'       => esc_html__( '"by"', 'zosia' ),
		'section'     => 'tfm_archive_settings',
		'type'        => 'checkbox',
	) );

	// Show in meta
	$wp_customize->add_setting( 'tfm_archive_entry_meta_in', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_archive_entry_meta_in', array(
		'label'       => esc_html__( '"in"', 'zosia' ),
		'section'     => 'tfm_archive_settings',
		'type'        => 'checkbox',
	) );

	// Show author meta
	$wp_customize->add_setting( 'tfm_archive_entry_meta_author', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_archive_entry_meta_author', array(
		'label'       => esc_html__( 'Author', 'zosia' ),
		'section'     => 'tfm_archive_settings',
		'type'        => 'checkbox',
	) );

	// Show author meta avatar
	$wp_customize->add_setting( 'tfm_archive_entry_meta_author_avatar', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_archive_entry_meta_author_avatar', array(
		'label'       => esc_html__( 'Avatar', 'zosia' ),
		'section'     => 'tfm_archive_settings',
		'type'        => 'checkbox',
	) );

	// Show category meta
	$wp_customize->add_setting( 'tfm_archive_entry_meta_category', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_archive_entry_meta_category', array(
		'label'       => esc_html__( 'Category', 'zosia' ),
		'section'     => 'tfm_archive_settings',
		'type'        => 'checkbox',
	) );

	// Show read time
	if ( function_exists( 'tfm_read_time') ) {
		$wp_customize->add_setting( 'tfm_archive_entry_meta_read_time', array(
			'default'           => true,
			'sanitize_callback' => 'tfm_sanitize_checkbox',
		) );

		// Control Options
		$wp_customize->add_control( 'tfm_archive_entry_meta_read_time', array(
			'label'       => esc_html__( 'Read Time', 'zosia' ),
			'section'     => 'tfm_archive_settings',
			'type'        => 'checkbox',
		) );
	}

	// Show date meta
	$wp_customize->add_setting( 'tfm_archive_entry_meta_comment_count', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_archive_entry_meta_comment_count', array(
		'label'       => esc_html__( 'Comment Count', 'zosia' ),
		'section'     => 'tfm_archive_settings',
		'type'        => 'checkbox',
	) );

	// Show date meta
	$wp_customize->add_setting( 'tfm_archive_entry_meta_date', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_archive_entry_meta_date', array(
		'label'       => esc_html__( 'Date', 'zosia' ),
		'section'     => 'tfm_archive_settings',
		'type'        => 'checkbox',
	) );

	// Show post count
	$wp_customize->add_setting( 'tfm_archive_title', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_archive_title', array(
		'label'       => esc_html__( 'Show Archive Title', 'zosia' ),
		'section'     => 'tfm_archive_settings',
		'type'        => 'checkbox',
	) );

	// Show post count
	$wp_customize->add_setting( 'tfm_archive_post_count', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_archive_post_count', array(
		'label'       => esc_html__( 'Post Count', 'zosia' ),
		'section'     => 'tfm_archive_settings',
		'type'        => 'checkbox',
	) );

	// Show Description
	$wp_customize->add_setting( 'tfm_archive_description', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_archive_description', array(
		'label'       => esc_html__( 'Description', 'zosia' ),
		'section'     => 'tfm_archive_settings',
		'type'        => 'checkbox',
	) );

	// Show Description
	$wp_customize->add_setting( 'tfm_archive_subcats', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_archive_subcats', array(
		'label'       => esc_html__( 'Sub Categories', 'zosia' ),
		'section'     => 'tfm_archive_settings',
		'type'        => 'checkbox',
	) );

	// Show author Avatar
	$wp_customize->add_setting( 'tfm_archive_author_avatar', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_archive_author_avatar', array(
		'label'       => esc_html__( 'Author Avatar', 'zosia' ),
		'section'     => 'tfm_archive_settings',
		'type'        => 'checkbox',
	) );

	// Show Author Bio
	$wp_customize->add_setting( 'tfm_archive_author_bio', array(
		'default'           => false,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_archive_author_bio', array(
		'label'       => esc_html__( 'Author Bio', 'zosia' ),
		'section'     => 'tfm_archive_settings',
		'type'        => 'checkbox',
	) );

	/**
	Separator
	**/
	$wp_customize->add_setting('tfm_archive_settings_sidebar_separator', array(
		'default'           => '',
		'sanitize_callback' => 'esc_html',
	));
	$wp_customize->add_control(new Tfm_Separator_Custom_Control($wp_customize, 'tfm_archive_settings_sidebar_separator', array(
		'settings'		=> 'tfm_archive_settings_sidebar_separator',
		'section'  		=> 'tfm_archive_settings',
	)));

	// Loop widget
	$wp_customize->add_setting( 'tfm_archive_loop_sidebar_position', array(
		'default'           => '',
		'sanitize_callback' => 'absint',
	) );

	$wp_customize->add_control( 'tfm_archive_loop_sidebar_position', array(
		'label'       => esc_html__( 'Add widgets between posts in Category Pages', 'zosia' ),
		'description' => esc_html__( 'Select the position you would like to display your widget(s).', 'zosia'),
		'section'     => 'tfm_archive_settings',
		'type'        => 'number',
		'input_attrs' => array(
	        'min'   => 0,
	        'step' => 1,
	    ),
	) );

}

add_action( 'customize_register', 'tfm_customize_register_archive' );