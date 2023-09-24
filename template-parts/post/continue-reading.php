<?php
/**
 * Template part for displaying continue reading button
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Zosia
 * @since 1.0
 * @version 1.0
 */

?>

<?php if ( tfm_toggle_entry_meta( 'read_more' ) ): ?>

	<ul class="entry-read-more">

		<li class="read-more-button"><a href="<?php echo esc_url( get_permalink() ); ?>" class="button read-more"><?php echo esc_html__( 'Continue Reading', 'zosia'); ?></a></li>

        <?php tfm_get_entry_meta( $meta_data = array('read_time'), $has_wrapper = false, $has_container = false, $html_style = 'li', $meta_wrapper_class = '', $meta_class = ''); ?>

		<?php tfm_after_continue_reading_button(); ?>

	</ul>
	
<?php endif; ?>
