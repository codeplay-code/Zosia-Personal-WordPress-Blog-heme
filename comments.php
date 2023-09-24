<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Zosia
 * @since 1.0
 * @version 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}

$toggle_comments = ( get_theme_mod( 'tfm_single_toggle_comments', true ) ? ' closed' : ' open' );

?>

<?php if ( get_theme_mod( 'tfm_single_toggle_comments', true ) ) : ?>
<div class="section-header comments-header">
<h2 class="page-title toggle-comments button"><span>
	<?php
		comments_number( esc_html__('Leave a Comment', 'zosia'), esc_html__('1 Comment', 'zosia'), esc_html__('% Comments', 'zosia') );
	?>
</span></h2>
</div>
<?php endif; ?>
<div id="comments" class="comments-area<?php echo esc_attr( $toggle_comments ); ?>">

	<div class="comments-container">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>

		<ul class="comment-list">
			<?php
				wp_list_comments( array(
					'avatar_size' => 50,
					'style'       => 'ul',
					'short_ping'  => true,
					'reply_text'  =>  esc_html__( 'Reply', 'zosia' ),
				) );
			?>
		</ul>

		<?php the_comments_pagination( array(
			'prev_text' => esc_html__( 'Previous', 'zosia' ),
			'next_text' => esc_html__( 'Next', 'zosia' ),
		) );

	endif; // Check for have_comments().

	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

		<p class="no-comments"><?php echo esc_html__( 'Comments are closed.', 'zosia' ); ?></p>
	<?php
	endif;

	comment_form();
	?>

</div>

</div><!-- #comments -->
