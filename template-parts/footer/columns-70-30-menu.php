<?php
/**
 * Displays footer widgets
 *
 * @package WordPress
 * @subpackage Zosia
 * @since 1.0
 * @version 1.0
 */

?>

<?php
if ( is_active_sidebar( 'footer-column-2' ) ||
	 has_nav_menu( 'footer' ) ) :

	$columns = array(is_active_sidebar( 'footer-column-2' ), has_nav_menu( 'footer' ));
	$cols = 'cols-' . count(array_filter($columns));
?>

	<div class="footer-widget-area footer-columns <?php echo esc_attr( $cols . ' ' . get_theme_mod( 'tfm_footer_layout', 'columns-menu' ) ); ?>">
		<?php
		if ( has_nav_menu( 'footer' ) ) : ?>
			<div class="footer-column footer-column-1 footer-menu ">
			    <?php

			    wp_nav_menu( array( 'theme_location' => 'footer',
			     					 'container' => 'ul',
			     					 'depth' => 2,
			     					 'menu_class' => 'footer-nav',
			     					 'menu_id' => 'footer-nav')); ?>
			</div>
		<?php endif;
		if ( is_active_sidebar( 'footer-column-2' ) ) : ?>
			<div class="footer-column footer-column-2">
				<?php dynamic_sidebar( 'footer-column-2' ); ?>
			</div>
		<?php endif; ?>
	</div><!-- .widget-area -->

<?php endif; ?>