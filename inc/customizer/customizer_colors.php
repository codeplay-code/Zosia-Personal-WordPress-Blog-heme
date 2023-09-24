<?php
/**
 * Zosia: Customizer Colour Scheme Settings
 *
 * @package WordPress
 * @subpackage zosia
 * @since 1.0
 * @version 1.2
 */

require( get_template_directory() . '/inc/customizer/custom_controls.php' );

// // Load the sections
require( get_template_directory() . '/inc/customizer/sections/colors/theme.php' );
require( get_template_directory() . '/inc/customizer/sections/colors/header.php' );
require( get_template_directory() . '/inc/customizer/sections/colors/primary-menu.php' );
require( get_template_directory() . '/inc/customizer/sections/colors/entry.php' );
require( get_template_directory() . '/inc/customizer/sections/colors/footer.php' );
require( get_template_directory() . '/inc/customizer/sections/colors/toggle-sidebar.php' );
require( get_template_directory() . '/inc/customizer/sections/colors/widgets-sidebar.php' );
require( get_template_directory() . '/inc/customizer/sections/colors/archive-header.php' );
require( get_template_directory() . '/inc/customizer/sections/colors/category-tags.php' );
require( get_template_directory() . '/inc/customizer/sections/colors/post-tags.php' );
require( get_template_directory() . '/inc/customizer/sections/colors/misc.php' );

// Load theme options panel
function tfm_color_scheme_customize_register( $wp_customize ) {

		$wp_customize->add_panel( 'tfm_color_settings', array(
	  'title' => esc_html__( 'Zosia: Color Settings', 'zosia' ),
	  'priority' => 140,
	  ) );

}

add_action( 'customize_register', 'tfm_color_scheme_customize_register', 20 );