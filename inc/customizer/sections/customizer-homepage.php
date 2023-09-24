<?php


/**
 * Homepage Settings
 *
 * @package WordPress
 * @subpackage Zosia
 */

// Load theme options panel
function tfm_customize_register_homepage( $wp_customize ) {

	$customizer_settings = tfm_general_settings();

	// ========================================================
	// Homepage Settings
	// ========================================================

	$wp_customize->add_section( 'tfm_homepage_settings', array(
		'title'    => esc_html__( 'Homepage Settings', 'zosia' ),
		'priority' => 130,
		'panel' => 'tfm_theme_settings',
	) );

	// Sidebar
	$wp_customize->add_setting( 'tfm_homepage_sidebar', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_homepage_sidebar', array(
		'label'       => esc_html__( 'Display Sidebar', 'zosia' ),
		'section'     => 'tfm_homepage_settings',
		'type'        => 'checkbox',
	) );

	// Add Setting
		$wp_customize->add_setting( 'tfm_homepage_loop_title', array(
			'default'           => '',
			'sanitize_callback' => 'tfm_sanitize_text',
		) );

		// Control Options
		$wp_customize->add_control( 'tfm_homepage_loop_title', array(
			'label'       => esc_html__( 'Title', 'zosia' ),
			'section'     => 'tfm_homepage_settings',
			'type'        => 'text',
		) );
		// Add Setting
		$wp_customize->add_setting( 'tfm_homepage_loop_subtitle', array(
			'default'           => '',
			'sanitize_callback' => 'tfm_sanitize_text',
		) );

		// Control Options
		$wp_customize->add_control( 'tfm_homepage_loop_subtitle', array(
			'label'       => esc_html__( 'Subtitle', 'zosia' ),
			'section'     => 'tfm_homepage_settings',
			'type'        => 'text',
		) );

		// ========================================================
		// Standard Loop Settings
		// ========================================================

		// Post layout
		$wp_customize->add_setting( 'tfm_homepage_layout', array(
			'default'           => 'masonry',
			'sanitize_callback' => 'tfm_sanitize_select',
		) );

		$wp_customize->add_control( 'tfm_homepage_layout', array(
			'label'       => esc_html__( 'Post Layout', 'zosia' ),
			'section'     => 'tfm_homepage_settings',
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

		// Number of columns
		$wp_customize->add_setting( 'tfm_homepage_loop_cols', array(
			'default'           => '3',
			'sanitize_callback' => 'absint',
		) );

		$wp_customize->add_control( 'tfm_homepage_loop_cols', array(
			'label'       => esc_html__( 'Number of Columns', 'zosia' ),
			'section'     => 'tfm_homepage_settings',
			'type'        => 'number',
			'input_attrs' => array(
		        'min'   => 1,
		        'max'   => apply_filters( 'tfm_max_post_cols', 4 ),
		    ),
		) );

		$wp_customize->add_setting( 'tfm_homepage_loop_style', array(
			'default'           => 'default',
			'sanitize_callback' => 'tfm_sanitize_select',
		) );

		$wp_customize->add_control( 'tfm_homepage_loop_style', array(
			'label'       => esc_html__( 'Post Style', 'zosia' ),
			'section'     => 'tfm_homepage_settings',
			'type'        => 'select',
			'choices'     => array(
				'default' => esc_html__( 'Default', 'zosia' ),
				'cover' => esc_html__( 'Cover', 'zosia' ),
			),
		) );

		// Number of columns
		$wp_customize->add_setting( 'tfm_homepage_loop_offset', array(
			'default'           => '0',
			'sanitize_callback' => 'absint',
		) );

		$wp_customize->add_control( 'tfm_homepage_loop_offset', array(
			'label'       => esc_html__( 'Offset (Number of Posts to Skip)', 'zosia' ),
			'section'     => 'tfm_homepage_settings',
			'type'        => 'number',
			'input_attrs' => array(
		        'min'   => 0,
		    ),
		) );

		// Post Ids
		$wp_customize->add_setting( 'tfm_homepage_exclude_posts_ids', array(
			'default'           => '',
			'sanitize_callback' => 'tfm_sanitize_text',
		) );

		// Post IDs
		$wp_customize->add_control( 'tfm_homepage_exclude_posts_ids', array(
			'label'       => esc_html__( 'Exclude Post IDs', 'zosia' ),
			'description' => esc_html__( 'Enter a comma separated List of post IDs you want to exclude from the homepage', 'zosia' ),
			'section'     => 'tfm_homepage_settings',
			'type'        => 'text',
		) );

	//========POST META ---------------//

	// Show excerpt (Auto)
	$wp_customize->add_setting( 'tfm_homepage_post_excerpt', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_homepage_post_excerpt', array(
		'label'       => esc_html__( 'Excerpt (Auto-Generated)', 'zosia' ),
		'section'     => 'tfm_homepage_settings',
		'type'        => 'checkbox',
	) );

	//Excerpt (Manual)
	$wp_customize->add_setting( 'tfm_homepage_post_excerpt_custom', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_homepage_post_excerpt_custom', array(
		'label'       => esc_html__( 'Excerpt (Custom)', 'zosia' ),
		'section'     => 'tfm_homepage_settings',
		'type'        => 'checkbox',
	) );

	$wp_customize->add_setting( 'tfm_homepage_read_more', array(
		'default'           => false,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_homepage_read_more', array(
		'label'       => esc_html__( 'Read More', 'zosia' ),
		'section'     => 'tfm_homepage_settings',
		'type'        => 'checkbox',
	) );

	// Show entry title
	$wp_customize->add_setting( 'tfm_homepage_entry_title', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_homepage_entry_title', array(
		'label'       => esc_html__( 'Entry Title', 'zosia' ),
		'section'     => 'tfm_homepage_settings',
		'type'        => 'checkbox',
	) );

	// Show post thumbnail
	$wp_customize->add_setting( 'tfm_homepage_post_thumbnail', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_homepage_post_thumbnail', array(
		'label'       => esc_html__( 'Thumbnail', 'zosia' ),
		'section'     => 'tfm_homepage_settings',
		'type'        => 'checkbox',
	) );

	// Homepage Standard Loop Image aspect ratio
	$wp_customize->add_setting( 'tfm_homepage_thumbnail_aspect_ratio', array(
		'default'           => 'uncropped',
		'sanitize_callback' => 'tfm_sanitize_select',
	) );

	$wp_customize->add_control( 'tfm_homepage_thumbnail_aspect_ratio', array(
		'label'       => esc_html__( 'Thumbnail Aspect Ratio', 'zosia' ),
		'section'     => 'tfm_homepage_settings',
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
	$wp_customize->add_setting( 'tfm_homepage_post_media', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_homepage_post_media', array(
		'label'       => esc_html__( 'Video &amp; Audio', 'zosia' ),
		'section'     => 'tfm_homepage_settings',
		'type'        => 'checkbox',
	) );

	// Show by meta
	$wp_customize->add_setting( 'tfm_homepage_entry_meta_by', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_homepage_entry_meta_by', array(
		'label'       => esc_html__( '"by"', 'zosia' ),
		'section'     => 'tfm_homepage_settings',
		'type'        => 'checkbox',
	) );

	// Show "in" meta
	$wp_customize->add_setting( 'tfm_homepage_entry_meta_in', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_homepage_entry_meta_in', array(
		'label'       => esc_html__( '"in"', 'zosia' ),
		'section'     => 'tfm_homepage_settings',
		'type'        => 'checkbox',
	) );

	// Show author meta
	$wp_customize->add_setting( 'tfm_homepage_entry_meta_author', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_homepage_entry_meta_author', array(
		'label'       => esc_html__( 'Author', 'zosia' ),
		'section'     => 'tfm_homepage_settings',
		'type'        => 'checkbox',
	) );

	// Show author meta
	$wp_customize->add_setting( 'tfm_homepage_entry_meta_author_avatar', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_homepage_entry_meta_author_avatar', array(
		'label'       => esc_html__( 'Avatar', 'zosia' ),
		'section'     => 'tfm_homepage_settings',
		'type'        => 'checkbox',
	) );

	// Show category meta
	$wp_customize->add_setting( 'tfm_homepage_entry_meta_category', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_homepage_entry_meta_category', array(
		'label'       => esc_html__( 'Category', 'zosia' ),
		'section'     => 'tfm_homepage_settings',
		'type'        => 'checkbox',
	) );

	// Show read time (TFM theme boost plugin)
	if ( function_exists( 'tfm_read_time') ) {
		$wp_customize->add_setting( 'tfm_homepage_entry_meta_read_time', array(
			'default'           => true,
			'sanitize_callback' => 'tfm_sanitize_checkbox',
		) );

		// Control Options
		$wp_customize->add_control( 'tfm_homepage_entry_meta_read_time', array(
			'label'       => esc_html__( 'Read Time', 'zosia' ),
			'section'     => 'tfm_homepage_settings',
			'type'        => 'checkbox',
		) );
	}

	// Show date meta
	$wp_customize->add_setting( 'tfm_homepage_entry_meta_comment_count', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_homepage_entry_meta_comment_count', array(
		'label'       => esc_html__( 'Comment Count', 'zosia' ),
		'section'     => 'tfm_homepage_settings',
		'type'        => 'checkbox',
	) );

	// Show date meta
	$wp_customize->add_setting( 'tfm_homepage_entry_meta_date', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'tfm_homepage_entry_meta_date', array(
		'label'       => esc_html__( 'Date', 'zosia' ),
		'section'     => 'tfm_homepage_settings',
		'type'        => 'checkbox',
	) );

	/**
	Separator
	**/
	$wp_customize->add_setting('tfm_homepage_settings_sidebar_separator', array(
		'default'           => '',
		'sanitize_callback' => 'esc_html',
	));
	$wp_customize->add_control(new Tfm_Separator_Custom_Control($wp_customize, 'tfm_homepage_settings_sidebar_separator', array(
		'settings'		=> 'tfm_homepage_settings_sidebar_separator',
		'section'  		=> 'tfm_homepage_settings',
	)));

	// Loop widget
	$wp_customize->add_setting( 'tfm_homepage_loop_sidebar_position', array(
		'default'           => '',
		'sanitize_callback' => 'absint',
	) );

	$wp_customize->add_control( 'tfm_homepage_loop_sidebar_position', array(
		'label'       => esc_html__( 'Add widgets between posts', 'zosia' ),
		'description' => esc_html__( 'Select the position you would like to display your widget(s)', 'zosia' ),
		'section'     => 'tfm_homepage_settings',
		'type'        => 'number',
		'input_attrs' => array(
	        'min'   => 0,
	        'step' => 1,
	    ),
	) );

}

add_action( 'customize_register', 'tfm_customize_register_homepage' );