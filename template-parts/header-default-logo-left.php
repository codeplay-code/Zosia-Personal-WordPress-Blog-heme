<?php
/**
 * Template part for displaying the header
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage zosia
 * @since 1.0
 * @version 1.0
 */

?>
<div class="header-branding">
<div class="header-section header-left">

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

<div class="header-section logo-branding">
<?php tfm_site_logo( ); ?>

	<?php if ( get_theme_mod( 'tfm_header_tagline', false ) && get_bloginfo( 'description' ) ) : ?>

		<p class="tagline"><?php echo get_bloginfo( 'description' ); ?></p>

	<?php endif; ?>
</div>

<div class="header-section header-right">
	 <?php if ( get_theme_mod( 'tfm_header_search_input', false ) ):

    	get_template_part( 'searchform', false );

    	endif; ?>

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
</div>
	<div class="primary-menu-container">

		<div class="primary-menu-section section-left">

			<?php tfm_toggle_icon( 'menu' ); ?>

			<?php tfm_primary_menu_section_left(); ?>

		</div>

		<?php if ( has_nav_menu( 'primary' ) ) :

	    wp_nav_menu( array( 'theme_location' => 'primary',
	     					'container' => 'nav',
	     					'container_class' => 'primary-menu-wrapper',
	     					'menu_class' => 'primary-menu',
	     					'menu_id' => 'primary-menu',
	     					'link_before' => '<span class="menu-label">',
	     					'link_after' => '</span>'));

	    endif; ?>

	    <div class="primary-menu-section section-right">

	    	<?php tfm_primary_menu_section_right(); ?>

			<?php tfm_toggle_icon( 'search' ); ?>

		</div>


	</div>