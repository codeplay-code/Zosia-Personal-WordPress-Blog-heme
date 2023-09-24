<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Zosia
 * @since 1.0
 * @version 1.1
 */

$tfm_vars = tfm_template_vars('', false);

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php if ( '' !== get_theme_mod( 'tfm_meta_theme_color', '' ) ): ?>
<meta name="theme-color" content="<?php echo esc_attr( get_theme_mod( 'tfm_meta_theme_color', '' ) ); ?>">
<?php endif; ?>
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<!-- toggle sidebar overlay -->
	<div class="body-fade menu-overlay"></div>
	<div class="body-fade search-overlay"></div>

	<?php

	// Before header hook
	tfm_before_header();

	?>

	<header id="site-header" class="site-header <?php echo esc_attr( get_theme_mod( 'tfm_header_layout', 'default' ) ) . esc_attr( $tfm_vars['sticky_nav'] . $tfm_vars['sticky_mobile_nav'] . $tfm_vars['header_size'] . $tfm_vars['header_search_input'] . $tfm_vars['header_toggle_icons'] . $tfm_vars['header_background'] . $tfm_vars['header_primary_nav'] . $tfm_vars['header_secondary_nav'] . $tfm_vars['header_third_nav'] . $tfm_vars['header_split_menu'] . $tfm_vars['header_social_icons'] . $tfm_vars['header_primary_nav_background'] ); ?>">

		<div class="mobile-header">

			<div class="header-section header-left">

			<?php

			tfm_toggle_icon( 'menu', true ); ?>

			</div>

			<?php tfm_site_logo( array( 'mobile' => true ) ); ?>

			<div class="header-section header-right">

			<?php tfm_toggle_icon( 'search', true );
				
			?>

			</div>

		</div>

		<div class="header-layout-wrapper">

			<?php get_template_part( 'template-parts/header', get_theme_mod( 'tfm_header_layout', 'default' ) ); ?>

		</div>

	</header>

	<?php

	/*
	 * Logo below nav
	 */

	if ( get_theme_mod( 'tfm_header_layout', 'logo-left-menu-right' ) === 'logo-below-nav' ) : ?>

		<div class="lbn-site-title-wrapper">

			<?php

			tfm_site_logo( );

			if ( get_theme_mod( 'tfm_header_tagline', false ) ) : ?>

				<p class="tagline"><?php echo get_bloginfo( 'description' ); ?></p>

			<?php endif; ?>

			<?php tfm_header_branding(); ?>

		</div>

	<?php endif; ?>

	<?php get_sidebar( 'search' ); ?>

	<?php

	// After header hook
	tfm_after_header();

	get_sidebar( 'slide' ); ?>

	<div class="wrap">

		<?php tfm_after_wrap(); ?>

		<div class="wrap-inner">

		<?php tfm_after_wrap_inner(); ?>

