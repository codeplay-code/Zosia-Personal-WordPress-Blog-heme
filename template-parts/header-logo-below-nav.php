<?php

/**
 * Template part for displaying the header
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Zosia
 * @since 1.0
 * @version 1.0
 */

?>

		<div class="header-section header-left">

		    <?php tfm_toggle_icon( 'menu' ); ?>

		    <?php if ( has_nav_menu( 'header-third' ) ) : ?>

			    <?php

			    wp_nav_menu( array( 'theme_location' => 'header-third',
			     					'container' => 'div',
			     					'container_class' => 'header-third-menu-wrapper',
			     					'menu_class' => 'primary-menu header-third',
			     					'menu_id' => 'header-third-menu')); 

			     					?>

			<?php endif; ?>

		    <?php tfm_header_left(); ?>

		</div>

		    <?php if ( has_nav_menu( 'primary' ) ) : ?>

		    <div class="primary-menu-container">

		    <?php

		    wp_nav_menu( array( 'theme_location' => 'primary',
		     					'container' => 'nav',
		     					'container_class' => 'primary-menu-wrapper',
		     					'menu_class' => 'primary-menu',
		     					'menu_id' => 'primary-menu',
	     					'link_before' => '<span class="menu-label">',
	     					'link_after' => '</span>')); 

		     					?>

		    </div>

		    <?php endif; ?>

	    <div class="header-section header-right">

		    <?php if ( get_theme_mod( 'tfm_header_search_input', false ) ):

		    	get_template_part( 'searchform', false );

		    endif; ?>

		    <?php tfm_toggle_icon( 'search' ); ?>

		    <?php if ( has_nav_menu( 'header-secondary' ) ) : ?>

		    <?php

		    wp_nav_menu( array( 'theme_location' => 'header-secondary',
		     					'container' => 'div',
		     					'container_class' => 'header-secondary-menu-wrapper',
		     					'menu_class' => 'primary-menu header-secondary',
		     					'menu_id' => 'header-secondary-menu')); 

		     					?>

		    <?php endif; ?>

		    <?php tfm_header_right(); ?>

		</div>