<?php
/**
 * Template part for displaying prev/next post navigation
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

if ( false === get_theme_mod( 'tfm_single_post_navigation', true ) ) {
	return false;
}

$prev_post = get_previous_post();
$next_post = get_next_post();

$prev_next_post_style = ' ' . get_theme_mod( 'tfm_single_post_navigation_style', 'default' );
$prev_thumbnail= ( $prev_post && get_theme_mod( 'tfm_single_post_navigation_thumbnail', false ) && '' !== get_the_post_thumbnail( $prev_post->ID ) ? ' has-post-media has-post-thumbnail thumbnail-wide' : '' );
$next_thumbnail = ( $next_post && get_theme_mod( 'tfm_single_post_navigation_thumbnail', false ) && '' !== get_the_post_thumbnail( $next_post->ID ) ? ' has-post-media has-post-thumbnail thumbnail-wide' : '' );
$has_section_header = get_theme_mod( 'tfm_single_post_navigation_header', true ) ? ' has-header' : '';

if ( $prev_post || $next_post ) : ?>

<div class="content-area post-navigation post-grid grid cols-2<?php echo esc_attr( $has_section_header ); ?>">
	<?php if ( get_theme_mod( 'tfm_single_post_navigation_header', true )): ?>
	<div class="section-header">
		<h2><?php echo esc_html__( 'More Reading', 'zosia' ); ?></h2>
	</div>
<?php endif; ?>
	<h2 class="screen-reader-text">Post navigation</h2>

<?php if ( $prev_post ): ?>

	<article class="article post previous-article has-category-meta has-background<?php echo esc_attr( $prev_thumbnail . $prev_next_post_style  ); ?>">
		<div class="post-inner">
		<?php if ( $prev_thumbnail ) : ?>
			<div class="thumbnail-wrapper">
			<figure class="post-thumbnail">
	  				<a href="<?php the_permalink( $prev_post->ID ); ?>"><?php echo get_the_post_thumbnail( $prev_post->ID, 'medium_large' ); ?></a>
	  	</figure>
	  </div>
	  <?php endif; ?>
	  <div class="entry-wrapper">
  		<header class="entry-header">
  			<div class="entry-meta before-title"> 
  				<?php tfm_get_category_slugs( 1, $prev_post->ID ); ?>
  				</div>
  			<h3 class="entry-title"><a href="<?php the_permalink( $prev_post->ID ); ?>"><?php echo wp_kses_post( $prev_post->post_title ); ?></a></h3>
  						<div class="entry-meta after-title"> 
  				<?php 

          // Link the prev/next post string if we have no titles

  				if ( strlen($prev_post->post_title) == 0 ) : ?>

            <a href="<?php the_permalink( $prev_post->ID ); ?>">

  				<?php endif; ?>

  					<span class="prev-next prev"><?php echo esc_html__( 'Previous Post', 'zosia' ); ?></span>

  				<?php if ( strlen($prev_post->post_title) == 0 ) : ?>

            </a>

  				<?php endif; ?>

  				</div>
  		</header>
  	</div>
  	</div>
  </article>

<?php endif; ?>

<?php if ( $next_post ): ?>

	<article class="article post next-article has-category-meta has-background<?php echo esc_attr( $next_thumbnail . $prev_next_post_style  ); ?>">
		<div class="post-inner">
		<?php if ( $next_thumbnail ) : ?>
			<div class="thumbnail-wrapper">
		<figure class="post-thumbnail">

	  				<a href="<?php the_permalink( $next_post->ID ); ?>">

	  				<?php echo get_the_post_thumbnail( $next_post->ID, 'medium_large' ); ?>

	  				</a>

	  	</figure>
	  </div>
	  	<?php endif; ?>
	  	<div class="entry-wrapper">
  		<header class="entry-header">
  			<div class="entry-meta before-title"> 
  				<?php tfm_get_category_slugs( 1, $next_post->ID ); ?>
  				</div>
  			<h3 class="entry-title"><a href="<?php the_permalink( $next_post->ID ); ?>"><?php echo wp_kses_post( $next_post->post_title ); ?></a></h3>
  			<div class="entry-meta after-title"> 
  				<?php 

          // Link the prev/next post string if we have no titles

  				if ( strlen($next_post->post_title) == 0 ) : ?>

            <a href="<?php the_permalink( $next_post->ID ); ?>">

  				<?php endif; ?>

  					<span class="prev-next next"><?php echo esc_html__( 'Next Post', 'zosia' ); ?></span>

  				<?php if ( strlen($next_post->post_title) == 0 ) : ?>

            </a>

  				<?php endif; ?>

  				</div>
  		</header>
  	</div>
  	</div>
  	</article>

<?php endif; ?>

</div>

<?php endif; ?>