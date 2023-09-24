<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Zosia
 * @since 1.0
 * @version 1.0
 */

$tfm_vars = tfm_template_vars();

get_header(); ?>

		<main id="main" class="site-main<?php echo esc_attr( $tfm_vars['show_pagination_numbers']  . $tfm_vars['show_pagination_arrows'] ); ?>">

		<?php tfm_before_loop(); ?>

		<div id="primary" class="content-area post-grid <?php echo esc_attr( $tfm_vars['post_layout'] . $tfm_vars['post_cols']  ); ?>">

		<?php 
			// Standard loop open masonry container
			if ( $tfm_vars['post_layout'] === 'masonry' ) : ?>

				<div id="masonry-container" class="masonry-container">
			
			 <?php endif; ?>

			<?php
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/post/content', get_post_format() );

				endwhile;

				// Standard loop open masonry container
				if ( $tfm_vars['post_layout'] === 'masonry' ) : ?>

					</div>
				
				<?php endif;

				the_posts_pagination( array(
				    'type' => 'list',
				    'mid_size' => 2,
				    'prev_text' => wp_kses_post( $tfm_vars['prev_text'] ),
				    'next_text' => wp_kses_post( $tfm_vars['next_text'] ),
				) );

			else :

				get_template_part( 'template-parts/post/content', 'none' );

			endif;
			?>

		</div><!-- #primary -->
		<?php tfm_after_loop(); ?>
	</main><!-- #main -->
	<?php 
		get_sidebar( 'aside' );
	?>

<?php get_footer();
