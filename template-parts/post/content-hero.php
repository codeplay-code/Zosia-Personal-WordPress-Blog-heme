<?php
/**
 * Template part for displaying posts
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

$tfm_vars = tfm_template_vars( 'content', false);
$hero_style = ( 'hero-cover' === $tfm_vars['content']['post_style'] ? 'cover' : 'default' );
$full_width = ( $tfm_vars['content']['full_width']['default'] || $tfm_vars['content']['full_width']['cover'] ? 'true' : 'false' );
$margins = ( 'true' === $full_width ? 'false' : 'true' );
$has_background = '' !== get_theme_mod( 'tfm_single_hero_background', '') ? ' has-background' : '';
$has_thumbnail = '' !== get_the_post_thumbnail() && ! $tfm_vars['content']['disabled_thumbnail'] ? 'true' : 'false';

?>
<div class="single-hero-wrapper">
<div class="single-hero<?php echo esc_attr( $has_background . ' ' . $tfm_vars['content']['post_style'] ); ?>" data-fullwidth="<?php echo esc_attr( $full_width ); ?>" data-margins="<?php echo esc_attr( $margins ); ?>" data-thumbnails="<?php echo esc_attr( $has_thumbnail); ?>">
<div <?php post_class( $hero_style ) ?>>

	<div class="post-inner">

	<?php if ( $hero_style === 'cover' ): ?>

	<div class="cover-wrapper">

	<?php endif; ?>

	<?php

	// ========================================================
	// Post thumbnail
	// ========================================================

	if ( '' !== get_the_post_thumbnail() && ! $tfm_vars['content']['disabled_thumbnail'] ) : ?>

		<div class="thumbnail-wrapper">

			<figure class="post-thumbnail<?php echo esc_attr( $tfm_vars['content']['figcaption'] ); ?>">

				<?php tfm_get_post_thumbnail(); ?>

				<?php if ( $tfm_vars['content']['figcaption'] ) : // Figcaption ?>

					<figcaption class="featured-media-caption"><?php echo esc_html( get_the_post_thumbnail_caption() ); ?></figcaption>

				<?php endif; ?>

			</figure>

		</div>
		
	<?php endif; ?>

	<div class="entry-wrapper">

	<header class="entry-header">
		<?php

		// ========================================================
		// Entry header
		// ========================================================

		if ( 'post' === get_post_type() ) {

		get_template_part( 'template-parts/post/sticky-formats' );

		get_template_part( 'template-parts/post/meta', 'before-title' ); 

		}

		the_title( '<h1 class="entry-title">', '</h1>' );

		if ( 'post' === get_post_type() ) {

			get_template_part( 'template-parts/post/meta', 'after-title' ); 

		}

		?>
	</header>

	<?php tfm_get_excerpt( ); ?>
		
		</div><!-- .entry-wrapper -->
<?php if ( $hero_style === 'cover' ): ?>
	</div>
<?php endif; ?>

	</div><!-- .post-inner -->

</div><!-- .article -->
</div><!-- .hero -->
</div><!-- .hero-wrapper -->