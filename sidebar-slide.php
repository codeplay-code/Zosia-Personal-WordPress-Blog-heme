<?php
/**
 * The toggle sidebar containing the secondary widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Zosia
 * @since 1.0
 * @version 1.0
 */

if ( ! is_active_sidebar( 'sidebar-2' ) && ! has_nav_menu( 'slide-menu-primary') && ! has_nav_menu( 'primary') ) {
	return;
}
?>

<aside id="toggle-sidebar" class="mobile-navigation toggle-sidebar sidebar sidebar-2" aria-label="<?php esc_attr_e( 'Blog Sidebar', 'zosia' ); ?>">
	<div class="toggle-sidebar-header">
		<?php 

		// Check if we have anything to display here
		if ( get_theme_mod( 'tfm_sidebar_logo', false ) ) :

			tfm_site_logo( array( 'sidebar' => true ) );

		endif;  ?>
		<div class="close-menu"><span><i class="icon-cancel"></i></span><span class="close"><?php echo esc_html__('close', 'zosia' ); ?></span></div>
	</div>

		<?php 

		$mobile_only = ( get_theme_mod( 'tfm_sidebar_primary_nav', false ) ? '' : ' mobile-only' );

		// The primary sidebar nav
		if ( has_nav_menu( 'slide-menu-primary' ) ) {

			echo '<nav class="primary-nav-sidebar-wrapper">';

		    wp_nav_menu( array( 'theme_location' => 'slide-menu-primary',
		     					 'container' => 'ul',
		     					 'menu_class' => 'primary-nav-sidebar',
		     					 'menu_id' => 'slidemenu-nav-sidebar',
		     					 'after'=>'<span class="expand"></span>',
		     					 'link_before' => '<span class="menu-label">',
	     						 'link_after' => '</span>'));

			echo '</nav>';

		} elseif ( has_nav_menu( 'primary' ) ) {

			echo '<nav class="primary-nav-sidebar-wrapper' . esc_attr( $mobile_only ) . '">';

		    wp_nav_menu( array( 'theme_location' => 'primary',
		     					 'container' => 'ul',
		     					 'menu_class' => 'primary-nav-sidebar',
		     					 'menu_id' => 'primary-nav-sidebar',
		     					 'after'=>'<span class="expand"></span>',
		     					 'link_before' => '<span class="menu-label">',
	     						 'link_after' => '</span>'));

			echo '</nav>';

		}
		// Widgets
		if (is_active_sidebar( 'sidebar-2' )) {
			dynamic_sidebar( 'sidebar-2');
		}

		?>
		
	</aside>
