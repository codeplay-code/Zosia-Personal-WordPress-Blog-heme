<?php


/**
 * Zosia: Customizer
 *
 * @package WordPress
 * @subpackage Zosia
 * @since 1.0
 * @version 1.1
 */

require( get_template_directory() . '/inc/customizer/custom_controls.php' );

// Load the sections
require( get_template_directory() . '/inc/customizer/sections/customizer-general.php' );
require( get_template_directory() . '/inc/customizer/sections/customizer-homepage.php' );
require( get_template_directory() . '/inc/customizer/sections/customizer-archive.php' );
require( get_template_directory() . '/inc/customizer/sections/customizer-single.php' );
require( get_template_directory() . '/inc/customizer/sections/customizer-page.php' );
require( get_template_directory() . '/inc/customizer/sections/customizer-header.php' );
require( get_template_directory() . '/inc/customizer/sections/customizer-logo.php' );
require( get_template_directory() . '/inc/customizer/sections/customizer-footer.php' );
require( get_template_directory() . '/inc/customizer/sections/customizer-image-format.php' );

// Load theme options panel
function tfm_customize_register( $wp_customize ) {

	$wp_customize->add_panel( 'tfm_theme_settings', array(
	  'title' => esc_html__( 'Zosia: Theme Settings', 'zosia' ),
	  'description' => esc_html__( 'Customize theme settings', 'zosia'),
	  'priority' => 140,
	  ) );

}

add_action( 'customize_register', 'tfm_customize_register' );