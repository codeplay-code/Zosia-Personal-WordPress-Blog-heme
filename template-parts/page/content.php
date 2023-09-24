<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Zosia
 * @since 1.0
 * @version 1.1
 */

?>

<?php  $tfm_vars = tfm_template_vars( 'content', false ); ?>

<?php $show_frontpage_title = is_front_page() ? get_theme_mod( 'tfm_front_page_entry_title', true ) : true;  ?>

<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="post-inner">

	<?php if ( $tfm_vars['content']['cover_wrapper'] ) : ?>

	<div class="cover-wrapper<?php echo esc_attr($tfm_vars['content']['full_width']['cover']); ?>">

	<?php endif; ?>

	<?php

	// ========================================================
	// Post thumbnail
	// ========================================================

	if ( '' !== get_the_post_thumbnail() && ! $tfm_vars['content']['disabled_thumbnail'] && 'hero-default' !== $tfm_vars['content']['post_style'] && 'hero-cover' !== $tfm_vars['content']['post_style'] ) : ?>

		<div class="thumbnail-wrapper<?php echo esc_attr($tfm_vars['content']['full_width']['default']); ?>">

			<figure class="post-thumbnail<?php echo esc_attr( $tfm_vars['content']['figcaption'] ); ?>">

				<?php tfm_get_post_thumbnail(); ?>

				<?php if ( $tfm_vars['content']['figcaption'] ) : // Figcaption ?>

					<figcaption class="featured-media-caption"><?php echo esc_html( get_the_post_thumbnail_caption() ); ?></figcaption>

				<?php endif; ?>

			</figure>

		</div>
		
	<?php endif; ?>

	<?php if ( $tfm_vars['content']['post_style'] !== 'default-alt' ): ?>
		<div class="entry-wrapper">
			<?php tfm_after_entry_wrapper(); ?>
	<?php endif; ?>

	<?php if ( 'hero-default' !== $tfm_vars['content']['post_style'] && 'hero-cover' !== $tfm_vars['content']['post_style'] && $show_frontpage_title  ): ?>

	<header class="entry-header">
		<?php

		// ========================================================
		// Entry header
		// ========================================================

		the_title( '<h1 class="entry-title">', '</h1>' );

		?>
	</header>
	<?php endif; ?>

	<?php if ( $tfm_vars['content']['cover_wrapper'] ) : ?>

	<?php if ( $tfm_vars['content']['post_style'] !== 'default-alt' ): ?>
	</div><!-- .entry-wrapper -->
	<?php endif; ?>
	</div><!-- .cover-wrapper -->

	<?php 

		endif;

		// ========================================================
		// Entry content
		// ========================================================

		?>

			<div class="single-content-wrapper page-content-wrapper">

				<?php tfm_before_single_content(); ?>

				<div class="entry-content">

					<?php

						the_content( );

						wp_link_pages( array(
							'before'      => '<div class="nav-links">' . esc_html__( 'Pages:', 'zosia' ),
							'after'       => '</div>',
							'link_before' => '<span class="page-number">',
							'link_after'  => '</span>',
						) );

				    ?>

				</div><!-- .entry-content -->

			</div><!-- .single-content-wrapper -->
		
		<?php if ( $tfm_vars['content']['post_style'] !== 'default-alt' && ! $tfm_vars['content']['cover_wrapper'] ): ?>
		</div><!-- .entry-wrapper -->

	<?php endif; ?>

	<?php get_template_part( 'template-parts/page/footer' ); ?>

	</div><!-- .post-inner -->

</article>
