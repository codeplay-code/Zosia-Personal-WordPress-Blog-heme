<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Mura
 * @since 1.0
 * @version 1.0
 */

?>

<?php 

$count = ( ! is_single( ) ? $args['count'] : false );
$faux_count = ( ! is_single( ) ? $args['faux_count'] : false );
$tfm_vars = tfm_template_vars( 'content', array( 'count' => $count, 'faux_count' => $faux_count, ));
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( $tfm_vars['content']['faux_class'] ); ?>>

	<div class="post-inner">

	<?php if ( $tfm_vars['content']['cover_wrapper'] ) : ?>

	<div class="cover-wrapper<?php echo esc_attr($tfm_vars['content']['full_width']['cover']); ?>">

	<?php endif; ?>

	<?php

	echo tfm_featured_video();
	tfm_featured_audio();
	tfm_gallery_format_gallery();

	// ========================================================
	// Post thumbnail
	// ========================================================

	if ( '' !== get_the_post_thumbnail() && ! $tfm_vars['content']['disabled_thumbnail'] && 'hero-default' !== $tfm_vars['content']['post_style'] && 'hero-cover' !== $tfm_vars['content']['post_style'] && ! tfm_gallery_format_gallery( true ) && ! tfm_featured_video( true ) && ! tfm_featured_audio( true ) ) : ?>

		<div class="thumbnail-wrapper<?php echo esc_attr($tfm_vars['content']['full_width']['default']); ?>">

			<figure class="post-thumbnail<?php echo esc_attr( $tfm_vars['content']['figcaption'] ); ?>">

				<?php if ( ! is_single() ) : // Home/Archive  ?>
					<a href="<?php the_permalink(); ?>">
						<?php tfm_get_post_thumbnail( $tfm_vars['content']['thumbnail_size'] ); ?>
					</a>
				<?php else: // Single ?>
					<?php tfm_get_post_thumbnail(); ?>
				<?php endif; ?>
			</figure>

			<?php if ( $tfm_vars['content']['figcaption'] ) : // Figcaption ?>

				<figcaption class="featured-media-caption"><?php echo esc_html( get_the_post_thumbnail_caption() ); ?></figcaption>

			<?php endif; ?>

		</div>
		
	<?php endif; ?>

	<?php if ( $tfm_vars['content']['post_style'] !== 'default-alt' ): ?>
		<div class="entry-wrapper">
			<?php tfm_after_entry_wrapper(); ?>
		<?php endif; ?>

	<?php if ( 'hero-default' !== $tfm_vars['content']['post_style'] && 'hero-cover' !== $tfm_vars['content']['post_style'] ): ?>
	<header class="entry-header">

		<?php tfm_entry_header_open(); ?>

		<?php

		// ========================================================
		// Entry header
		// ========================================================

		get_template_part( 'template-parts/post/sticky-formats' );

		if ( 'post' === get_post_type() ) {

			get_template_part( 'template-parts/post/meta', 'before-title' ); 

		};

		if ( is_single() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		} else {
			if ( $tfm_vars['content']['entry_title'] ) {
				the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
			}
		}

		get_template_part( 'template-parts/post/meta', 'after-title' ); 

		?>

		<?php tfm_entry_header_close(); ?>
	</header>
	<?php endif; ?>

	<?php if ( 'default-alt' == $tfm_vars['content']['post_style'] ) :

	tfm_get_excerpt( );

	endif; ?>

	<?php if ( $tfm_vars['content']['cover_wrapper'] ) : ?>

	<?php if ( $tfm_vars['content']['post_style'] !== 'default-alt' ): ?>
	</div><!-- .entry-wrapper -->
	<?php endif; ?>
	</div><!-- .cover-wrapper -->

	<?php 

		endif;

		// Default alt open entry-wrapper

		if ( $tfm_vars['content']['post_style'] === 'default-alt' && ! $tfm_vars['content']['cover_wrapper'] ): ?>
		<div class="entry-wrapper">
			<?php tfm_after_entry_wrapper();
		endif;

		// ========================================================
		// Entry content
		// ========================================================

		if ( 'hero-default' !== $tfm_vars['content']['post_style'] && 'default-alt' !== $tfm_vars['content']['post_style'] && 'hero-cover' !== $tfm_vars['content']['post_style']  ) {

			tfm_get_excerpt( );

		}

		get_template_part( 'template-parts/post/continue-reading' ); 

		if ( is_single() ) : ?>

			<div class="single-content-wrapper">

				<?php tfm_before_single_content(); ?>

				<div class="entry-content">

					<?php

						the_content( );

						tfm_after_the_content();

						wp_link_pages( array(
						'before'      => '<div class="nav-links page-pagination">',
						'after'       => '</div>',
						'link_before' => '<span class="page-numbers">',
						'link_after'  => '</span>',
						'nextpagelink' => esc_html__( 'Next page', 'zosia'),
						'previouspagelink' => esc_html__( 'Previous page', 'zosia'),
						'next_or_number'   => 'next',
						) );

				    ?>

				</div><!-- .entry-content -->

			</div><!-- .single-content-wrapper -->

		<?php endif; ?>
		
		<?php if ( ! $tfm_vars['content']['cover_wrapper'] ): ?>
		</div><!-- .entry-wrapper -->

	<?php endif; ?>

	<?php if ( is_single() ):

	// Get post tags and share template
	get_template_part( 'template-parts/post/single', 'tags');

	endif; ?>

	</div><!-- .post-inner -->

</article>
