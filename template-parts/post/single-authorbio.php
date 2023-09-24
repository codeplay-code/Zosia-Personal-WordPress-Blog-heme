<?php
/**
 * The template for displaying the author bio in single post
 *
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

if ( ( get_theme_mod( 'tfm_single_author_bio_avatar', true ) || get_theme_mod( 'tfm_single_author_bio_name', true ) || get_theme_mod( 'tfm_single_author_bio_info', true ) ) && '' !== get_the_author_meta( 'description' ) ) : ?>

<div class="author-bio">
	<div class="author-bio-inner">
	<?php if ( get_theme_mod( 'tfm_single_author_bio_avatar', true ) && get_avatar(get_the_author_meta('ID')) ): ?>
		<div class="author-avatar">
			<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ) ?>">
				<?php echo get_avatar(get_the_author_meta('ID'),120); ?>
			</a>
		</div>
	<?php endif; ?>
	<div class="author-description">
		<?php if ( get_theme_mod( 'tfm_single_author_bio_name', true ) ): ?>
			<?php if ( get_theme_mod( 'tfm_single_author_bio_by', true ) ): ?>
				<span class="entry-meta"><?php echo esc_html__( 'Written by', 'zosia' ); ?></span>
			<?php endif; ?>
			<h4 class="page-title author-bio-name"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ) ?>"><?php the_author(); ?></a></h4>
		<?php endif; ?>
		<?php if ( get_theme_mod( 'tfm_single_author_bio_info', true ) ): ?>
			<p><?php echo the_author_meta('description'); ?></p>
		<?php endif; ?>
	</div>
	<?php

	// Author Bio hook
	tfm_author_bio_bottom();

	?>
</div>
</div>

<?php endif; ?>