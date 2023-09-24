<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Zosia
 * @since 1.0
 * @version 1.0
 */

if ( ! in_array( 'has-sidebar', get_body_class( ) ) || ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
// $body_bg = get_background_color() ? '#' . get_background_color() : '';
// $body_background = is_single() && '' !== get_theme_mod( 'tfm_single_background_color', '') ? get_theme_mod( 'tfm_single_background_color', '' ) : $body_bg;
$widget_background_class = '' !== get_theme_mod( 'tfm_widget_background', '' ) ? ' has-background' : '';
?>

<aside id="aside-sidebar" class="aside-sidebar sidebar sidebar-1<?php echo esc_attr( $widget_background_class ); ?>" aria-label="<?php esc_attr_e( 'Sidebar', 'zosia' ); ?>">
	<?php if ( get_theme_mod( 'tfm_static_sidebar_sticky', true )): ?>
	<div class="aside-sticky-container">
	<?php endif; ?>
		<?php

		// Widgets
		if (is_active_sidebar( 'sidebar-1' )) {
			dynamic_sidebar( 'sidebar-1');
		}

		?>
	<?php if ( get_theme_mod( 'tfm_static_sidebar_sticky', true )): ?>
	</div>
	<?php endif; ?>

</aside>
