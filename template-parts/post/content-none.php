<?php
/**
 * Template part for displaying empty search results
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Zosia
 * @since 1.0
 * @version 1.1
 */

?>

<?php 

if ( ! is_search() ) {
	return;
}

 ?>

<article id="post-<?php the_ID(); ?>" class="article search-no-results has-background">

    <div class="post-inner">

        <div class="entry-wrapper">

	<h2><?php echo esc_html__( 'Sorry, nothing matched your search terms. Please try again with some different keywords', 'zosia' ); ?></h2>

</div>

</div>

</article>
