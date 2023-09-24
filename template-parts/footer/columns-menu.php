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
if ( is_active_sidebar( 'footer-column-1' ) ||
	 is_active_sidebar( 'footer-column-2' ) ||
	 is_active_sidebar( 'footer-column-3' ) ||
	 has_nav_menu( 'footer' ) ) :

	$columns = array(is_active_sidebar( 'footer-column-1' ), is_active_sidebar( 'footer-column-2' ), is_active_sidebar( 'footer-column-3' ), has_nav_menu( 'footer' ));
	$cols = 'cols-' . count(array_filter($columns));
?>

	<div class="footer-widget-area footer-columns <?php echo esc_attr( $cols ); ?>">
		<?php
		if ( is_active_sidebar( 'footer-column-1' ) ) : ?>
			<div class="footer-column footer-column-1">
				<?php dynamic_sidebar( 'footer-column-1' ); ?>
			</div>
		<?php endif;
		if ( is_active_sidebar( 'footer-column-2' ) ) : ?>
			<div class="footer-column footer-column-2">
				<?php dynamic_sidebar( 'footer-column-2' ); ?>
			</div>
		<?php endif;
		if ( is_active_sidebar( 'footer-column-3' ) ) : ?>
			<div class="footer-column footer-column-3">
				<?php dynamic_sidebar( 'footer-column-3' ); ?>
			</div>
		<?php endif;
		if ( has_nav_menu( 'footer' ) ) : ?>
			<div class="footer-column footer-column-4 footer-menu">
			    <?php

			    if ( '' !== get_theme_mod( 'tfm_footer_menu_title', '' )) :

			    	echo '<h3 class="widget-title">' . esc_html( get_theme_mod( 'tfm_footer_menu_title', '') ) . '</h3>';

				endif;

				if ( '' !== get_theme_mod( 'tfm_footer_menu_subtitle', '' ) ) :

			    	echo '<p class="widget-subtitle">' . esc_html( get_theme_mod( 'tfm_footer_menu_subtitle', '') ) . '</p>';

				endif;

			    wp_nav_menu( array( 'theme_location' => 'footer',
			     					 'container' => 'ul',
			     					 'depth' => 2,
			     					 'menu_class' => 'footer-nav',
			     					 'menu_id' => 'footer-nav')); ?>
			</div>
		<?php endif; ?>
	</div><!-- .widget-area -->

<?php endif; ?>