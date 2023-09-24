<?php
/**
 * Template part for displaying post meta
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

tfm_before_entry_title();

// If meta data is active
if ( tfm_toggle_entry_meta( 'before_title_meta' ) ): ?>

<div class="entry-meta before-title">

	<?php if ( tfm_toggle_entry_meta( 'category' ) ):  ?>

		<span class="screen-reader-text"><?php _e( 'Categories', 'zosia' ); ?></span>

		<?php tfm_get_category_slugs();

	endif; ?>
	
</div>

<?php endif; ?>