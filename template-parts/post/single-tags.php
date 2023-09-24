<?php
/**
 * The template for displaying tags and share links in the single post footer
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

<footer class="hentry-footer">
	<?php

	tfm_hentry_footer_before();
	
	$post_tags = get_the_tags();

	if ( $post_tags && get_theme_mod( 'tfm_single_post_tags', true )) : ?>

		<div class="entry-meta hentry-footer-meta">

		<ul class="single-post-tags">

		<?php foreach( $post_tags as $tag ) { ?>
	    	<li><a href="<?php echo get_tag_link($tag->term_id); ?>" aria-label="<?php echo esc_attr( $tag->name ); ?>" class="tag-link-<?php echo esc_attr( $tag->term_id ); ?>"><?php echo esc_html( $tag->name ); ?><?php if ( get_theme_mod( 'tfm_single_post_tags_count', true ) ) : ?><span class="tag-link-count"><span><?php echo esc_html( $tag->count ); ?></span></span><?php endif; ?></a></li> 
	    <?php } ?>

	    </ul>

	    </div>

	<?php endif;

	tfm_hentry_footer_after(); ?>

</footer>