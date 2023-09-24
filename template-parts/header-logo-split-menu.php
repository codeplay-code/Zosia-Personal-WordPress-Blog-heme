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

	<?php

			wp_nav_menu( array( 'theme_location' => 'split-menu-left',
							'container' => 'nav',
							'container_class' => 'split-menu split-menu-left-wrapper',
							'menu_class' => 'primary-menu split-menu-left',
							'menu_id' => 'split-menu-left',
	     					'link_before' => '<span class="menu-label">',
	     					'link_after' => '</span>'));

							?>

	</div>

	<div class="header-branding">

 	<?php tfm_site_logo(); ?>

 	<?php tfm_header_branding(); ?>

	</div>

	<div class="header-section header-right">

		<?php 

		wp_nav_menu( array( 'theme_location' => 'split-menu-right',
						'container' => 'nav',
						'container_class' => 'split-menu split-menu-right-wrapper',
						'menu_class' => 'primary-menu split-menu-right',
						'menu_id' => 'split-menu-right',
	     					'link_before' => '<span class="menu-label">',
	     					'link_after' => '</span>'));

		?>

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
		     					'menu_id' => 'header-secondary')); 

		     					?>

		<?php endif; ?>

		<?php tfm_header_right(); ?>

	</div>