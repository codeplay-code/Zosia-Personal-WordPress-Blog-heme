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
	 is_active_sidebar( 'footer-column-2' ) ) :

	$columns = array(is_active_sidebar( 'footer-column-1' ), is_active_sidebar( 'footer-column-2' ));
	$cols = 'cols-' . count(array_filter($columns));
?>

	<div class="footer-widget-area footer-columns <?php echo esc_attr( $cols . ' ' . get_theme_mod( 'tfm_footer_layout', 'columns-menu' ) ); ?>">
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
		<?php endif; ?>
	</div><!-- .widget-area -->

<?php endif; ?>