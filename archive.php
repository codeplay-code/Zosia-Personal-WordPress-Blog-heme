<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Zosia
 * @since 1.0
 * @version 1.0
 */

$tfm_vars = tfm_template_vars( 'archive', $args = false );

get_header(); ?>

		<main id="main" class="site-main<?php echo esc_attr( $tfm_vars['show_pagination_numbers'] . $tfm_vars['show_pagination_prev_next']  ); ?>">

		<?php tfm_before_loop(); ?>

		<div id="primary" class="content-area post-grid <?php echo esc_attr( tfm_get_post_cols() . ' ' . tfm_get_post_layout()  ); ?>">

			<?php

			 // Open masonry container
			 if ( tfm_get_post_layout() === 'masonry' ) : ?>

				<div id="masonry-container" class="masonry-container">

			<?php endif; ?>

			<?php
			if ( have_posts() ) :

				$count = 0;
				$faux_count = 0;

				/* Start the Loop */
				while ( have_posts() ) : the_post();

					$count++;
					$faux_count++;
					
					if ( $faux_count === tfm_reset_faux_count( $faux_count, tfm_get_post_cols( )  ) ) {
						$faux_count = 1; /* Reset faux counter and continue */
					}

					/*
					 * Run the loop widget function
					 */

					tfm_in_loop_sidebar( 'category', $count, $faux_count );

					/*
					 * In loop hook
					 * Accepts args as an array()
					 */
					
					tfm_between_posts( array( 'count' => $count, 'faux_count' => $faux_count, ) );

					/*
					 * Pass count arg for use in tfm_post_thumbnail() function
					 */
					get_template_part( 'template-parts/post/content', null, array( 'count' => $count, 'faux_count' => $faux_count, ) );


				endwhile;

				// Close masonry container

				if ( tfm_get_post_layout() === 'masonry' ) : ?>

					</div>

				<?php endif;

				the_posts_pagination( array(
				    'type' => 'list',
				    'mid_size' => 2,
				    'prev_text' => '<span>' . esc_html__( 'Newer Posts', 'zosia' ) . '</span>',
				    'next_text' => '<span>' . esc_html__( 'Older Posts', 'zosia' ) . '</span>',
					) );

			else :

				get_template_part( 'template-parts/post/content', 'none' );

			endif;
			?>

		</div>
		<?php tfm_after_loop(); ?>
	</main>
	<?php 
		get_sidebar( );
	?>

<?php get_footer();
