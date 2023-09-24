<?php


/**
 * Post Tag Color Settings
 *
 * @package WordPress
 * @subpackage Zosia
 */

function tfm_customize_register_colors_post_tags( $wp_customize ) {

	$customizer_settings = tfm_general_settings();

	$wp_customize->add_section( 'tfm_post_tag_colors', array(
		'title'    => esc_html__( 'Post Tags', 'zosia' ),
		'priority' => 130,
		'panel' => 'tfm_color_settings',
	) );

	 // Add Setting
	$wp_customize->add_setting( 'tfm_post_tags_default_background', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_post_tags_default_background', array(
      'section' => 'tfm_post_tag_colors',
      'label'   => esc_html__( 'Tag Background', 'zosia' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'tfm_post_tags_default_font_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tfm_post_tags_default_font_color', array(
      'section' => 'tfm_post_tag_colors',
      'label'   => esc_html__( 'Tag Color', 'zosia' ),
    ) ) );

	// Optionally add a color setting for tags (default is false)

	if ( apply_filters( 'tfm_set_tag_colors', false ) ) :

		$tags = array_slice( get_tags(), 0, apply_filters( 'tfm_set_tag_colors_max_count', 50 ) );

		foreach ( $tags as $key => $value) {
			
			// Add Setting
			$wp_customize->add_setting( 'tag_slug_color_' . $value->slug . '', array(
				'default'           => '',
				'transport' => 'refresh',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			// Control Options
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tag_slug_color_' . $value->slug . '', array(
		      'section' => 'tfm_post_tag_colors',
		      'label'   => esc_attr( $value->name ) . ' ' . esc_html__( 'Tag Color', 'zosia' ),
		    ) ) );

		}

	endif;

}

add_action( 'customize_register', 'tfm_customize_register_colors_post_tags' );