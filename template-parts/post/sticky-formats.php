<?php
/**
 * Template part for displaying post format icons and sticky
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Zosia
 * @since 1.0
 * @version 1.0
 */

?>

<?php
// Formats key
if ( ( ( is_home() && ! is_paged() && is_sticky() ) || ! is_single() && get_theme_mod( 'tfm_post_format_icons', true ) ) && 'page' !== get_post_type() ) : ?>

	<div class="formats-key">

		<?php if ( is_sticky() && is_home() && ! is_paged() ): ?>

			<span class="format-sticky"><i class="icon-pin"></i><span><?php echo esc_html__( 'sticky', 'zosia' ); ?></span></span>

		<?php endif; ?>

		<?php if ( ! is_single() && get_theme_mod( 'tfm_post_format_icons', true ) ): ?>

			<?php if ( has_post_format( 'gallery' )): ?>

				<span class="format-gallery"><i class="icon-picture-1"></i><span><?php echo esc_html__( 'gallery', 'zosia' ); ?></span></span>

			<?php endif; ?>

			<?php if ( has_post_format( 'video' )): ?>

				<span class="format-video"><i class="icon-video"></i><span><?php echo esc_html__( 'video', 'zosia' ); ?></span></span>

			<?php endif; ?>

			<?php if ( has_post_format( 'audio' )): ?>

				<span class="format-audio"><i class="icon-headphones"></i><span><?php echo esc_html__( 'audio', 'zosia' ); ?></span></span>

			<?php endif; ?>

		<?php endif; ?>

		<?php tfm_append_formats_key(); ?>

	</div>

<?php endif; ?>