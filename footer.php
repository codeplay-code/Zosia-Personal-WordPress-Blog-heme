<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Zosia
 * @since 1.0
 * @version 1.0
 */

$has_footer_nav = has_nav_menu( 'footer' ) ? ' has-footer-nav' : '';
$footer_classes = '' !== get_theme_mod( 'tfm_footer_background', '' ) ? ' has-custom-background' : '';

tfm_before_wrapper_close();

?>
</div><!-- wrap-inner -->
</div><!-- .wrap -->

<?php

// Before Footer Hook
tfm_before_footer();

?>

		<footer id="colophon" class="site-footer<?php echo esc_attr( $footer_classes ); ?>">

			<div class="site-footer-inner">

			<?php get_template_part( 'template-parts/footer/' . get_theme_mod( 'tfm_footer_layout', 'columns-menu' )  ); ?>

			<div class="footer-bottom">

				<div class="footer-copyright">
					<?php echo wp_kses_post( get_theme_mod( 'tfm_footer_text', get_bloginfo('description') ) ); ?>
				</div>

				<?php

				// Append Footer Bottom
				tfm_append_footer_bottom();

				?>
			

			</div>

		</div><!-- .footer-inner -->
		</footer>
		<?php if ( get_theme_mod( 'tfm_goto_top', true ) ): ?>
			<a href="" class="goto-top backtotop"><i class="icon-up-open"></i></a>
		<?php endif; ?>
		
		<?php

		// After Footer Hook
		tfm_after_footer();

		?>
		
<?php wp_footer(); ?>

</body>
</html>
