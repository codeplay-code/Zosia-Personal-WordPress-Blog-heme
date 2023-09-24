<?php
/**
 * Template for displaying search forms
 *
 * @package WordPress
 * @subpackage Zosia
 * @since 1.0
 * @version 1.0
 */

?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="<?php echo esc_attr( $unique_id ); ?>">
		<span class="screen-reader-text"><?php echo esc_html__( 'Search for:', 'zosia' ); ?></span>
	</label>
	<input type="search" id="<?php echo esc_attr( $unique_id ); ?>" class="search-field" placeholder="<?php echo esc_attr_e( 'Search and press enter', 'zosia' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<button type="submit" class="search-submit"><i class="icon-tfm-search"></i><span class="screen-reader-text"><?php echo esc_html__( 'Search', 'zosia' ); ?></span></button>
</form>
