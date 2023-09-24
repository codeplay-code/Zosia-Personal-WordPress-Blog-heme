<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Zosia
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

		<main id="main" class="site-main">
		<div id="primary" class="content-area the-post">

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/post/content' );

				?>

				<div class="after-content">

				<?php

				// After Content Hook
				tfm_after_content();

				// Before Comments Hook
				tfm_before_comments();


				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :

					comments_template();
				
				endif;

				// After Comments Hook
				tfm_after_comments();

				?>

				</div>

			<?php

			endwhile; // End of the loop.
			?>

		</div><!-- #primary -->
	</main><!-- #main -->
	<?php 
		get_sidebar( );
	?>

<?php get_footer();
