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
	 is_active_sidebar( 'footer-column-4' ) ) :

	$columns = array(is_active_sidebar( 'footer-column-1' ), is_active_sidebar( 'footer-column-2' ), is_active_sidebar( 'footer-column-3' ), is_active_sidebar( 'footer-column-4' ));
	$cols = 'cols-' . count(array_filter($columns));
?>

	<div class="footer-widget-area footer-columns <?php echo esc_attr( $cols ); ?>">
		<?php
		if ( is_active_sidebar( 'footer-column-1' ) ) { ?>
			<div class="footer-column footer-column-1">
				<?php dynamic_sidebar( 'footer-column-1' ); ?>
			</div>
		<?php }
		if ( is_active_sidebar( 'footer-column-2' ) ) { ?>
			<div class="footer-column footer-column-2">
				<?php dynamic_sidebar( 'footer-column-2' ); ?>
			</div>
		<?php }
		if ( is_active_sidebar( 'footer-column-3' ) ) { ?>
			<div class="footer-column footer-column-3">
				<?php dynamic_sidebar( 'footer-column-3' ); ?>
			</div>
		<?php }
		if ( is_active_sidebar( 'footer-column-4' ) ) { ?>
			<div class="footer-column footer-column-4">
				<?php dynamic_sidebar( 'footer-column-4' ); ?>
			</div>
		<?php } ?>
	</div><!-- .widget-area -->

<?php endif; ?>