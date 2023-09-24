<?php 

/**
 * Customizer Colour Options
 *
 *
 * @package WordPress
 * @subpackage Zosia
 * @since 1.0
 * @version 1.0
 */

/**
 * Generate and output inline (in header) CSS for Colour Customizer
 */

function tfm_custom_color_scheme() {

		$customizer_settings = tfm_general_settings();

		// Theme colour scheme

		$custom_css[] = ( get_theme_mod( 'tfm_primary_theme_color', $customizer_settings['primary_theme_color'] ) !== $customizer_settings['primary_theme_color'] ? '--primary-theme-color:' . get_theme_mod( 'tfm_primary_theme_color', $customizer_settings['primary_theme_color'] ) . ';' : '' ); 
		$custom_css[] = ( array_key_exists('secondary_theme_color', $customizer_settings ) && get_theme_mod( 'tfm_secondary_theme_color', $customizer_settings['secondary_theme_color'] ) !== $customizer_settings['secondary_theme_color'] ? '--secondary-theme-color:' . get_theme_mod( 'tfm_secondary_theme_color', $customizer_settings['secondary_theme_color'] ) . ';' : '' ); 
		$custom_css[] = ( array_key_exists('tertiary_theme_color', $customizer_settings ) && get_theme_mod( 'tfm_tertiary_theme_color', $customizer_settings['tertiary_theme_color'] ) !== $customizer_settings['tertiary_theme_color'] ? '--tertiary-theme-color:' . get_theme_mod( 'tfm_tertiary_theme_color', $customizer_settings['tertiary_theme_color'] ) . ';' : '' ); 
		$custom_css[] = ( array_key_exists('quaternary_theme_color', $customizer_settings ) && get_theme_mod( 'tfm_quaternary_theme_color', $customizer_settings['quaternary_theme_color'] ) !== $customizer_settings['quaternary_theme_color'] ? '--quaternary-theme-color:' . get_theme_mod( 'tfm_quaternary_theme_color', $customizer_settings['quaternary_theme_color'] ) . ';' : '' ); 
		$custom_css[] = ( array_key_exists('quinary_theme_color', $customizer_settings ) && get_theme_mod( 'tfm_quinary_theme_color', $customizer_settings['quinary_theme_color'] ) !== $customizer_settings['quinary_theme_color'] ? '--quinary-theme-color:' . get_theme_mod( 'tfm_quinary_theme_color', $customizer_settings['quinary_theme_color'] ) . ';' : '' ); 

		// Greys
		
		$custom_css[] = ( get_theme_mod( 'tfm_very_dark_grey', '#131315' ) !== '#131315' ? '--very-dark-grey:' . get_theme_mod( 'tfm_very_dark_grey', '#131315' ) . ';' : '' ); 
		$custom_css[] = ( get_theme_mod( 'tfm_dark_grey', '#45464b' ) !== '#45464b' ? '--dark-grey:' . get_theme_mod( 'tfm_dark_grey', '#45464b' ) . ';' : '' ); 
		$custom_css[] = ( get_theme_mod( 'tfm_medium_grey', '#94979e' ) !== '#94979e' ? '--medium-grey:' . get_theme_mod( 'tfm_medium_grey', '#94979e' ) . ';' : '' );
		$custom_css[] = ( get_theme_mod( 'tfm_light_grey', '#cfd0d2' ) !== '#cfd0d2' ? '--light-grey:' . get_theme_mod( 'tfm_light_grey', '#cfd0d2' ) . ';' : '' );
		$custom_css[] = ( get_theme_mod( 'tfm_very_light_grey', '#f2f2f3' ) !== '#f2f2f3' ? '--very-light-grey:' . get_theme_mod( 'tfm_very_light_grey', '#f2f2f3' ) . ';' : '' );
		$custom_css[] = ( get_theme_mod( 'tfm_off_white', '#f9f9f9' ) !== '#f9f9f9' ? '--off-white:' . get_theme_mod( 'tfm_off_white', '#f9f9f9' ) . ';' : '' );

		// Body font colour
		$custom_css[] = ( get_theme_mod( 'tfm_body_font_color', '#131315' ) !== '#131315' ? '--body-font-color:' . get_theme_mod( 'tfm_body_font_color', '#131315' ) . ';' : '' );

		// Link colour
		$custom_css[] = ( get_theme_mod( 'tfm_link_color', '' ) !== '' ? '--link-color:' . get_theme_mod( 'tfm_link_color', '' ) . ';' : '' );
		$custom_css[] = ( get_theme_mod( 'tfm_link_hover_color', '' ) !== '' ? '--link-hover-color:' . get_theme_mod( 'tfm_link_hover_color', '' ) . ';' : '' );

		// Butotn colour
		$custom_css[] = ( get_theme_mod( 'tfm_button_background', '' ) !== '' ? '--button-background:' . get_theme_mod( 'tfm_button_background', '' ) . ';' : '' );
		$custom_css[] = ( get_theme_mod( 'tfm_button_color', '' ) !== '' ? '--button-color:' . get_theme_mod( 'tfm_button_color', '' ) . ';' : '' );


		// ========================================================
		// Header
		// ========================================================
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_header_background_color', '' ) ? '--header-background:' . get_theme_mod( 'tfm_header_background_color', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_header_logo_color', '' ) ? '--logo-color:' . get_theme_mod( 'tfm_header_logo_color', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_header_border_color', '' ) ? '--header-border-color:' . get_theme_mod( 'tfm_header_border_color', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_header_toggle_background_color', '' ) ? '--toggle-background-color:' . get_theme_mod( 'tfm_header_toggle_background_color', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_header_toggle_hover_background_color', '' ) ? '--toggle-hover-background-color:' . get_theme_mod( 'tfm_header_toggle_hover_background_color', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_header_toggle_icon_color', '' ) ? '--toggle-icon-color:' . get_theme_mod( 'tfm_header_toggle_icon_color', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_header_search_input_background_color', '' ) ? '--header-search-input-background:' . get_theme_mod( 'tfm_header_search_input_background_color', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_header_search_input_border_color', '' ) ? '--header-search-input-border-color:' . get_theme_mod( 'tfm_header_search_input_border_color', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_header_search_input_icon_color', '' ) ? '--header-search-input-color:' . get_theme_mod( 'tfm_header_search_input_icon_color', '' ) . ';' : '' );

		// ========================================================
		// Footer
		// ========================================================
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_footer_background', '' ) ? '--footer-background:' . get_theme_mod( 'tfm_footer_background', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_footer_font_color', '' ) ? '--footer-color:' . get_theme_mod( 'tfm_footer_font_color', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_footer_link_color', '' ) ? '--footer-link-color:' . get_theme_mod( 'tfm_footer_link_color', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_footer_border_color', '' ) ? '--footer-border-color:' . get_theme_mod( 'tfm_footer_border_color', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_footer_misc_color', '' ) ? '--footer-misc-color:' . get_theme_mod( 'tfm_footer_misc_color', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_footer_heading_color', '' ) ? '--footer-heading-color:' . get_theme_mod( 'tfm_footer_heading_color', '' ) . ';' : '' );

		// ========================================================
		// Page/Archive Header
		// ========================================================
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_archive_header_background', '' ) ? '--archive-header-background:' . get_theme_mod( 'tfm_archive_header_background', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_archive_title_color', '' ) ? '--archive-header-title-color:' . get_theme_mod( 'tfm_archive_title_color', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_archive_description_color', '' ) ? '--archive-header-description-color:' . get_theme_mod( 'tfm_archive_description_color', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_archive_meta_color', '' ) ? '--archive-header-meta-color:' . get_theme_mod( 'tfm_archive_meta_color', '' ) . ';' : '' );


		// ========================================================
		// Primary Nav
		// ========================================================

		$custom_css[] = ( get_theme_mod( 'tfm_primary_nav_background', '' ) !== '' ? '--primary-menu-background:' . get_theme_mod( 'tfm_primary_nav_background', '' ) . ';' : '' );
		$custom_css[] = ( get_theme_mod( 'tfm_primary_nav_link_color', '' ) !== '' ? '--primary-menu-link-color:' . get_theme_mod( 'tfm_primary_nav_link_color', '' ) . ';' : '' );
		$custom_css[] = ( get_theme_mod( 'tfm_primary_nav_link_hover_color', '' ) !== '' ? '--primary-menu-link-hover-color:' . get_theme_mod( 'tfm_primary_nav_link_hover_color', '' ) . ';' : '' );
		$custom_css[] = ( get_theme_mod( 'tfm_primary_nav_submenu_background', '' ) !== '' ? '--primary-menu-submenu-background:' . get_theme_mod( 'tfm_primary_nav_submenu_background', '' ) . ';' : '' );
		$custom_css[] = ( get_theme_mod( 'tfm_primary_nav_submenu_link_color', '' ) !== '' ? '--primary-menu-submenu-link-color:' . get_theme_mod( 'tfm_primary_nav_submenu_link_color', '' ) . ';' : '' );
		$custom_css[] = ( get_theme_mod( 'tfm_primary_nav_submenu_link_hover_color', '' ) !== '' ? '--primary-menu-submenu-link-hover-color:' . get_theme_mod( 'tfm_primary_nav_submenu_link_hover_color', '' ) . ';' : '' );
		$custom_css[] = ( get_theme_mod( 'tfm_primary_nav_submenu_border_color', '' ) !== '' ? '--primary-menu-submenu-border-color:' . get_theme_mod( 'tfm_primary_nav_submenu_border_color', '' ) . ';' : '' );
		$custom_css[] = ( get_theme_mod( 'tfm_primary_nav_description_color', '' ) !== '' ? '--primary-menu-description-color:' . get_theme_mod( 'tfm_primary_nav_description_color', '' ) . ';' : '' );

		// ========================================================
		// Toggle sidebar
		// ========================================================
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_toggle_sidebar_background', '' ) ? '--toggle-sidebar-background:' . get_theme_mod( 'tfm_toggle_sidebar_background', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_toggle_sidebar_color', '' ) ? '--toggle-sidebar-color:' . get_theme_mod( 'tfm_toggle_sidebar_color', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_toggle_sidebar_color', '' ) ? '--toggle-sidebar-menu-description-color:' . get_theme_mod( 'tfm_toggle_sidebar_color', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_toggle_sidebar_heading_color', '' ) ? '--toggle-sidebar-heading-color:' . get_theme_mod( 'tfm_toggle_sidebar_heading_color', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_toggle_sidebar_border_color', '' ) ? '--toggle-sidebar-border-color:' . get_theme_mod( 'tfm_toggle_sidebar_border_color', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_toggle_sidebar_logo_color', '' ) ? '--toggle-sidebar-logo-color:' . get_theme_mod( 'tfm_toggle_sidebar_logo_color', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_toggle_sidebar_menu_color', '' ) ? '--toggle-sidebar-link-color:' . get_theme_mod( 'tfm_toggle_sidebar_menu_color', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_toggle_sidebar_misc_color', '' ) ? '--toggle-sidebar-misc-color:' . get_theme_mod( 'tfm_toggle_sidebar_misc_color', '' ) . ';' : '' );

		// ========================================================
		// Posts Archive
		// ========================================================

		$default_archive_post_background = array_key_exists('default_archive_post_background', $customizer_settings ) ? $customizer_settings['default_archive_post_background'] : '';

		$tfm_archive_post_background = '' !== get_theme_mod( 'tfm_archive_post_background', '' ) ? get_theme_mod( 'tfm_archive_post_background', '' ) : $default_archive_post_background;

		$custom_css[] = ( '' !== $tfm_archive_post_background ? '--post-background:' . $tfm_archive_post_background . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_entry_border_color', '' ) ? '--entry-border-color:' . get_theme_mod( 'tfm_entry_border_color', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_entry_title_link_color', '' ) ? '--entry-title-link-color:' . get_theme_mod( 'tfm_entry_title_link_color', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_entry_meta_color', '' ) ? '--entry-meta-color:' . get_theme_mod( 'tfm_entry_meta_color', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_entry_meta_link_color', '' ) ? '--entry-meta-link-color:' . get_theme_mod( 'tfm_entry_meta_link_color', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_post_excerpt_color', '' ) ? '--excerpt-color:' . get_theme_mod( 'tfm_post_excerpt_color', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_entry_meta_border_color', '' ) ? '--entry-meta-border-color:' . get_theme_mod( 'tfm_entry_meta_border_color', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_continue_reading_button_color', '' ) ? '--continue-reading-button-color:' . get_theme_mod( 'tfm_continue_reading_button_color', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_continue_reading_button_background', '' ) ? '--continue-reading-button-background:' . get_theme_mod( 'tfm_continue_reading_button_background', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_continue_reading_button_hover_background', '' ) ? '--continue-reading-button-hover-background:' . get_theme_mod( 'tfm_continue_reading_button_hover_background', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_continue_reading_button_hover_color', '' ) ? '--continue-reading-button-hover-color:' . get_theme_mod( 'tfm_continue_reading_button_hover_color', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_entry_meta_icon_color', '' ) ? '--entry-meta-icon-color:' . get_theme_mod( 'tfm_entry_meta_icon_color', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_avatar_border_color', '' ) ? '--avatar-border-color:' . get_theme_mod( 'tfm_avatar_border_color', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_post_format_icon_color', '' ) ? '--post-format-icon-color:' . get_theme_mod( 'tfm_post_format_icon_color', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_post_format_icon_background', '' ) ? '--post-format-icon-background:' . get_theme_mod( 'tfm_post_format_icon_background', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_post_format_video_icon_background', '' ) ? '--format-video-icon-background:' . get_theme_mod( 'tfm_post_format_video_icon_background', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_post_format_gallery_icon_background', '' ) ? '--format-gallery-icon-background:' . get_theme_mod( 'tfm_post_format_gallery_icon_background', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_post_format_audio_icon_background', '' ) ? '--format-audio-icon-background:' . get_theme_mod( 'tfm_post_format_audio_icon_background', '' ) . ';' : '' );

		// ========================================================
		// Post Single
		// ========================================================

		$default_single_post_background = array_key_exists('default_single_post_background', $customizer_settings ) ? $customizer_settings['default_single_post_background'] : '';

		$tfm_single_post_background = '' !== get_theme_mod( 'tfm_single_post_background', '' ) ? get_theme_mod( 'tfm_single_post_background', '' ) : $default_single_post_background;

		$custom_css[] = ( '' !== $tfm_single_post_background ? '--single-post-background:' . $tfm_single_post_background . ';' : '' );

		$custom_css[] = ( '' !== get_theme_mod( 'tfm_single_entry_title_color', '' ) ? '--single-entry-title-color:' . get_theme_mod( 'tfm_single_entry_title_color', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_single_entry_meta_color', '' ) ? '--single-entry-meta-color:' . get_theme_mod( 'tfm_single_entry_meta_color', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_single_entry_meta_link_color', '' ) ? '--single-entry-meta-link-color:' . get_theme_mod( 'tfm_single_entry_meta_link_color', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_single_avatar_border_color', '' ) ? '--single-avatar-border-color:' . get_theme_mod( 'tfm_single_avatar_border_color', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_single_entry_font_color', '' ) ? '--single-entry-font-color:' . get_theme_mod( 'tfm_single_entry_font_color', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_single_entry_excerpt_color', '' ) ? '--single-excerpt-color:' . get_theme_mod( 'tfm_single_entry_excerpt_color', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_post_tags_default_background', '' ) ? '--single-tags-background:' . get_theme_mod( 'tfm_post_tags_default_background', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_post_tags_default_font_color', '' ) ? '--single-tags-color:' . get_theme_mod( 'tfm_post_tags_default_font_color', '' ) . ';' : '' );

		// Single Hero

		$custom_css[] = ( '' !== get_theme_mod( 'tfm_single_hero_background', '' ) ? '--single-hero-background:' . get_theme_mod( 'tfm_single_hero_background', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_single_hero_entry_title_color', '' ) ? '--single-hero-entry-title-color:' . get_theme_mod( 'tfm_single_hero_entry_title_color', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_single_hero_entry_meta_color', '' ) ? '--single-hero-entry-meta-color:' . get_theme_mod( 'tfm_single_hero_entry_meta_color', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_single_hero_entry_meta_link_color', '' ) ? '--single-hero-entry-meta-link-color:' . get_theme_mod( 'tfm_single_hero_entry_meta_link_color', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_single_hero_avatar_border_color', '' ) ? '--single-hero-avatar-border-color:' . get_theme_mod( 'tfm_single_hero_avatar_border_color', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_single_hero_excerpt_color', '' ) ? '--single-hero-excerpt-color:' . get_theme_mod( 'tfm_single_hero_excerpt_color', '' ) . ';' : '' );


		// ========================================================
		// Cover/Image Format
		// ========================================================

		$custom_css[] = ( '' !== get_theme_mod( 'tfm_cover_format_primary_color', '' ) ? '--cover-global-color:' . get_theme_mod( 'tfm_cover_format_primary_color', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_cover_format_meta_color', '' ) ? '--cover-meta-color:' . get_theme_mod( 'tfm_cover_format_meta_color', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_cover_format_excerpt_color', '' ) ? '--cover-excerpt-color:' . get_theme_mod( 'tfm_cover_format_excerpt_color', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_cover_format_button_background', '' ) ? '--cover-button-background:' . get_theme_mod( 'tfm_cover_format_button_background', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_cover_format_button_color', '' ) ? '--cover-button-color:' . get_theme_mod( 'tfm_cover_format_button_color', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_cover_format_button_hover_background', '' ) ? '--cover-button-hover-background:' . get_theme_mod( 'tfm_cover_format_button_hover_background', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_cover_format_button_hover_color', '' ) ? '--cover-button-hover-color:' . get_theme_mod( 'tfm_cover_format_button_hover_color', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_cover_format_border_color', '' ) ? '--cover-border-color:' . get_theme_mod( 'tfm_cover_format_border_color', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_cover_format_meta_icon_color', '' ) ? '--cover-entry-meta-icon-color:' . get_theme_mod( 'tfm_cover_format_meta_icon_color', '' ) . ';' : '' );

		// ========================================================
		// Misc.
		// ========================================================

		$custom_css[] = ( '' !== get_theme_mod( 'tfm_body_fade_background', '' ) ? '--body-fade-background:' . get_theme_mod( 'tfm_body_fade_background', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_pagination_prev_next_background', '' ) ? '--pagination-button-background:' . get_theme_mod( 'tfm_pagination_prev_next_background', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_pagination_prev_next_color', '' ) ? '--pagination-button-color:' . get_theme_mod( 'tfm_pagination_prev_next_color', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_menu_pill_background', '' ) ? '--tfm-pill-menu-item-background:' . get_theme_mod( 'tfm_menu_pill_background', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_menu_pill_color', '' ) ? '--tfm-pill-menu-item-color:' . get_theme_mod( 'tfm_menu_pill_color', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_menu_pill_hover_background', '' ) ? '--tfm-pill-menu-item-hover-background:' . get_theme_mod( 'tfm_menu_pill_hover_background', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_menu_pill_hover_color', '' ) ? '--tfm-pill-menu-item-hover-color:' . get_theme_mod( 'tfm_menu_pill_hover_color', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_widget_highlight_background', '' ) ? '--widget-highlight-background:' . get_theme_mod( 'tfm_widget_highlight_background', '' ) . ';' : '' );
		$custom_css[] = ( 'ffffff' !== get_background_color() ? '--body-background:#' . get_background_color() . ';' : '');
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_menu_sash_background', '' ) ? '--tfm-menu-sash-background:' . get_theme_mod( 'tfm_menu_sash_background', '' ) . ';' : '' );
		$custom_css[] = ( '' !== get_theme_mod( 'tfm_menu_sash_color', '' ) ? '--tfm-menu-sash-color:' . get_theme_mod( 'tfm_menu_sash_color', '' ) . ';' : '' );

		// ========================================================
		// Logo Size
		// ========================================================

		$custom_css[] = ( get_theme_mod( 'tfm_logo_font_size', '40' ) != '40' ? '--logo-font-size:' . get_theme_mod( 'tfm_logo_font_size', '40' ) . 'px;' : '' );
		$custom_css[] = ( get_theme_mod( 'tfm_logo_font_size_medium_mobile', '32' ) != '32' ? '--large-mobile-logo-font-size:' . get_theme_mod( 'tfm_logo_font_size_medium_mobile', '32' ) . 'px;' : '' );
		$custom_css[] = ( get_theme_mod( 'tfm_logo_font_size_small_mobile', '26' ) != '26' ? '--small-mobile-logo-font-size:' . get_theme_mod( 'tfm_logo_font_size_small_mobile', '26' ) . 'px;' : '' );
		$custom_css[] = ( get_theme_mod( 'tfm_custom_logo_max_width_mobile', '100' ) != '100' ? '--custom-logo-width-mobile:' . get_theme_mod( 'tfm_custom_logo_max_width_mobile', '40' ) . 'px;' : '' );
		$custom_css[] = ( get_theme_mod( 'tfm_custom_logo_max_width_small', '70' ) != '70' ? '--custom-logo-width-small-mobile:' . get_theme_mod( 'tfm_custom_logo_max_width_small', '50' ) . 'px;' : '' );
		// Sidebar Logo
		$custom_css[] = ( get_theme_mod( 'tfm_logo_font_size_sidebar', '40' ) != '40' ? '--sidebar-logo-font-size:' . get_theme_mod( 'tfm_logo_font_size_sidebar', '40' ) . 'px;' : '' );


		// ========================================================
		// General Settings
		// ========================================================
		$custom_css[] = ( get_theme_mod( 'tfm_site_width', $customizer_settings['site_width'] ) !== $customizer_settings['site_width'] ? '--site-width:' . get_theme_mod( 'tfm_site_width', $customizer_settings['site_width'] ) . 'px;' : '' );
		$custom_css[] = ( get_theme_mod( 'tfm_sidebar_width', $customizer_settings['sidebar_width'] ) !== $customizer_settings['sidebar_width'] ? '--sidebar-width: calc(' . get_theme_mod( 'tfm_sidebar_width', $customizer_settings['sidebar_width'] ) . 'px + ( var(--post-margin) * 2));' : '' );

		// Content max width not more than site width
		$content_max_width = get_theme_mod( 'tfm_content_max_width', $customizer_settings['content_max_width'] ) > get_theme_mod( 'tfm_site_width', $customizer_settings['site_width'] ) ? get_theme_mod( 'tfm_site_width', $customizer_settings['site_width'] ) : get_theme_mod( 'tfm_content_max_width', $customizer_settings['content_max_width'] );

		// Modified content width
		$custom_css[] = ( get_theme_mod( 'tfm_content_max_width', $customizer_settings['content_max_width'] ) !== $customizer_settings['content_max_width'] ? '--content-max-width:' . $content_max_width . 'px;' : '' );

		// Unchanged content width is more than site width
		$custom_css[] = ( get_theme_mod( 'tfm_content_max_width', $customizer_settings['content_max_width'] ) === $customizer_settings['content_max_width'] && get_theme_mod( 'tfm_content_max_width', $customizer_settings['content_max_width'] ) > get_theme_mod( 'tfm_site_width', $customizer_settings['site_width'] ) ? '--content-max-width:' . $content_max_width . 'px;' : '' );

		// Border radius

		$custom_css[] =  ( $customizer_settings['input_border_radius'] !== get_theme_mod( 'tfm_input_border_radius', $customizer_settings['input_border_radius'] ) ? '--input-border-radius:' . get_theme_mod( 'tfm_input_border_radius', $customizer_settings['input_border_radius'] ) . 'px;' : '' );
		$custom_css[] =  ( $customizer_settings['button_border_radius'] !== get_theme_mod( 'tfm_button_border_radius', $customizer_settings['button_border_radius'] ) ? '--button-border-radius:' . get_theme_mod( 'tfm_button_border_radius', $customizer_settings['button_border_radius'] ) . 'px;' : '' );
		$custom_css[] =  ( $customizer_settings['thumbnail_border_radius'] != get_theme_mod( 'tfm_thumbnail_border_radius', $customizer_settings['thumbnail_border_radius'] ) ? '--post-thumbnail-border-radius:' . get_theme_mod( 'tfm_thumbnail_border_radius', $customizer_settings['thumbnail_border_radius'] ) . 'px;' : '' );
		$custom_css[] =  ( 0 !== get_theme_mod( 'tfm_image_embed_border_radius', 0 ) ? '--image-embed-border-radius:' . get_theme_mod( 'tfm_image_embed_border_radius', 0 ) . 'px;' : '' );

		// Primary menu

		$custom_css[] =  ( $customizer_settings['primary_menu_letter_spacing'] !== get_theme_mod( 'tfm_primary_menu_letter_spacing', $customizer_settings['primary_menu_letter_spacing'] ) ? '--primary-menu-letter-spacing:' . get_theme_mod( 'tfm_primary_menu_letter_spacing', $customizer_settings['primary_menu_letter_spacing'] ) . 'px;' : '' );

		$custom_css[] =  ( $customizer_settings['primary_menu_letter_spacing'] !== get_theme_mod( 'tfm_primary_menu_description_letter_spacing', $customizer_settings['primary_menu_letter_spacing'] ) ? '--primary-menu-description-letter-spacing:' . get_theme_mod( 'tfm_primary_menu_description_letter_spacing', $customizer_settings['primary_menu_letter_spacing'] ) . 'px;' : '' );

		$custom_css[] =  ( $customizer_settings['primary_menu_font_size'] != get_theme_mod( 'tfm_primary_menu_font_size', $customizer_settings['primary_menu_font_size'] ) ? '--primary-menu-font-size:' . get_theme_mod( 'tfm_primary_menu_font_size', $customizer_settings['primary_menu_font_size'] ) . 'px;' : '' );

		$custom_css[] =  ( get_theme_mod( 'tfm_primary_menu_uppercase', false ) ? '--primary-menu-text-transform: uppercase' : '' );

		// Font size

		$custom_css[] =  ( $customizer_settings['h1_font_size'] !== get_theme_mod( 'tfm_h1_font_size', $customizer_settings['h1_font_size'] ) ? '--h1-font-size:' . get_theme_mod( 'tfm_h1_font_size', $customizer_settings['h1_font_size'] ) . 'px;' : '' );
		$custom_css[] =  ( $customizer_settings['h2_font_size'] !== get_theme_mod( 'tfm_h2_font_size', $customizer_settings['h2_font_size'] ) ? '--h2-font-size:' . get_theme_mod( 'tfm_h2_font_size', $customizer_settings['h2_font_size'] ) . 'px;' : '' );
		$custom_css[] =  ( $customizer_settings['h3_font_size'] !== get_theme_mod( 'tfm_h3_font_size', $customizer_settings['h3_font_size'] ) ? '--h3-font-size:' . get_theme_mod( 'tfm_h3_font_size', $customizer_settings['h3_font_size'] ) . 'px;' : '' );
		$custom_css[] =  ( $customizer_settings['h4_font_size'] !== get_theme_mod( 'tfm_h4_font_size', $customizer_settings['h4_font_size'] ) ? '--h4-font-size:' . get_theme_mod( 'tfm_h4_font_size', $customizer_settings['h4_font_size'] ) . 'px;' : '' );
		$custom_css[] =  ( $customizer_settings['h5_font_size'] !== get_theme_mod( 'tfm_h5_font_size', $customizer_settings['h5_font_size'] ) ? '--h5-font-size:' . get_theme_mod( 'tfm_h5_font_size', $customizer_settings['h5_font_size'] ) . 'px;' : '' );
		$custom_css[] =  ( $customizer_settings['h6_font_size'] !== get_theme_mod( 'tfm_h6_font_size', $customizer_settings['h6_font_size'] ) ? '--h6-font-size:' . get_theme_mod( 'tfm_h6_font_size', $customizer_settings['h6_font_size'] ) . 'px;' : '' );
		$custom_css[] =  ( $customizer_settings['single_entry_font_size'] !== get_theme_mod( 'tfm_single_entry_font_size', $customizer_settings['single_entry_font_size'] ) ? '--single-entry-font-size:' . get_theme_mod( 'tfm_single_entry_font_size', $customizer_settings['single_entry_font_size'] ) . 'px;' : '' );

		$color_vars = array_filter($custom_css);

		if ( count($color_vars) !== 0 ) :

			echo '<style type="text/css" id="zosia-custom-css-vars">' . "\n";
			echo ':root {' . "\n";
			foreach ($color_vars as $css ) {
				echo wp_strip_all_tags( $css ) . "\n";
			}
			echo '}' . "\n";
			echo '</style>' . "\n";

		endif;

		// Background Image

		$bg_css[] = get_background_image() && ( is_single() || is_page() ) && false === get_theme_mod( 'tfm_background_image_single', true ) ? 'body.custom-background.single, body.custom-background.page { background-image:none;}' : ''; 
		$bg_css[] = get_background_image() && ( is_archive() || is_search() ) && false === get_theme_mod( 'tfm_background_image_archive', true ) ? 'body.custom-background.archive, body.custom-background.search { background-image:none;}' : ''; 

		$background_image_css = array_filter($bg_css);

		if ( count($background_image_css) !== 0 ) :

			echo '<style type="text/css" id="zosia-bg-css">';
			foreach ($background_image_css as $css ) {
				echo wp_strip_all_tags( $css );
			}
			echo  '</style>' . "\n";

		endif;

		// ========================================================
		// Widgets
		// ========================================================

		// Get sidebar section and foreach prepend with class

		$sections = apply_filters( 'tfm_widget_customizer_sections', array(
	     	 'sidebar:not(.toggle-sidebar)' => 'tfm',
	     ));

		foreach ($sections as $section => $value) {

		$widget_css[] = ( '' !== get_theme_mod( $value . '_widget_background', '' ) ? '.' . $section . '.has-background .widget { background:' . get_theme_mod( $value . '_widget_background', '' ) . ';}' : '' );
		$widget_css[] = ( '' !== get_theme_mod( $value . '_widget_border_color', '' ) ? '.' . $section . '.has-border .widget { border: 1px solid ' . get_theme_mod( $value . '_widget_border_color', '' ) . ';}' : '' );
		$widget_css[] = ( '' !== get_theme_mod( $value . '_widget_title_color', '' ) ? '.' . $section . ' .widget-title { color:' . get_theme_mod( $value . '_widget_title_color', '' ) . ' !important;}' : '' );
		$widget_css[] = ( '' !== get_theme_mod( $value . '_widget_subtitle_color', '' ) ? '.' . $section . ' .widget-subtitle { color:' . get_theme_mod( $value . '_widget_subtitle_color', '' ) . ';}' : '' );
		$widget_css[] = ( '' !== get_theme_mod( $value . '_widget_font_color', '' ) ? '.' . $section . ' .widget, .' . $section . ' .widget ul li, .' . $section . ' .widget ol li, .' . $section . ' .widget_recent_comments ul li::before { color:' . get_theme_mod( $value . '_widget_font_color', '' ) . ';}' : '' );
		$widget_css[] = ( '' !== get_theme_mod( $value . '_widget_link_color', '' ) ? '.' . $section . ' .widget ul li a:not([class*="cat-link"]), .' . $section . ' .widget ol li a:not([class*="cat-link"]), .' . $section . ' .wp-calendar-nav a { color:' . get_theme_mod( $value . '_widget_link_color', '' ) . ';}' : '' );
		$widget_css[] = ( '' !== get_theme_mod( $value . '_widget_child_link_color', '' ) ? '.' . $section . ' .widget ul.children li a, .' . $section . ' .widget ul.sub-menu li a { color:' . get_theme_mod( $value . '_widget_child_link_color', '' ) . ';}' : '' );
		$widget_css[] = ( '' !== get_theme_mod( $value . '_widget_meta_color', '' ) ? '.' . $section . ' .tfm_posts_widget .entry-meta li, .' . $section . ' .widget .tfm-count, .' . $section . ' .widget_recent_comments ul li, .' . $section . ' .widget_rss .rss-date, .' . $section . ' .widget_rss cite, .' . $section . ' .widget caption, .' . $section . ' .widget .wp-caption-text { color:' . get_theme_mod( $value . '_widget_meta_color', '' ) . ';}' : '' );
		$widget_css[] = ( '' !== get_theme_mod( $value . '_widget_meta_link_color', '' ) ? '.' . $section . ' .tfm_posts_widget .entry-meta a, .' . $section . ' .widget_recent_comments .comment-author-link, .' . $section . ' .widget_recent_comments .comment-author-link a { color:' . get_theme_mod( $value . '_widget_meta_link_color', '' ) . ';}' : '' );
		$widget_css[] = ( '' !== get_theme_mod( $value . '_widget_button_background', '' ) ? '.' . $section . ' .widget button, .' . $section . ' .widget .button, .' . $section . ' .widget .faux-button, .' . $section . ' .widget_tag_cloud a, .' . $section . ' .widget .wp-block-button__link, .' . $section . ' .widget .wp-block-file .wp-block-file__button, .' . $section . ' .widget input[type="button"], .' . $section . ' .widget input[type="reset"], .' . $section . ' .widget input[type="submit"] {
background:' . get_theme_mod( $value . '_widget_button_background', '' ) . ';}' : '' );
		$widget_css[] = ( '' !== get_theme_mod( $value . '_widget_button_color', '' ) ? '.' . $section . ' .widget button, .' . $section . ' .widget .button, .' . $section . ' .widget .faux-button, .' . $section . ' .widget_tag_cloud a, .' . $section . ' .widget .wp-block-button__link, .' . $section . ' .widget .wp-block-file .wp-block-file__button, .' . $section . ' .widget input[type="button"], .' . $section . ' .widget input[type="reset"], .' . $section . ' .widget input[type="submit"] {
color:' . get_theme_mod( $value . '_widget_button_color', '' ) . ';}' : '' );
		$widget_css[] = ( '' !== get_theme_mod( $value . '_widget_line_color', '' ) ? '.' . $section . ' .widget.tfm_posts_widget li.widget-entry, .' . $section . ' .widget ul li, .' . $section . ' .widget ol li, .' . $section . ' .widget_calendar table, .' . $section . ' .widget_calendar td, .' . $section . ' .widget_calendar th, .' . $section . ' .toggle-sidebar-header { border-color:' . get_theme_mod( $value . '_widget_line_color', '' ) . ';}' : '' );
		$widget_css[] = ( '' !== get_theme_mod( $value . '_widget_thumbnail_background', '' ) ? '.' . $section . ' .tfm_posts_widget .has-post-thumbnails .widget-entry .post-thumbnail { background:' . get_theme_mod( $value . '_widget_thumbnail_background', '' ) . ';}' : '' );
		// Calendar Widget
		$widget_css[] = ( '' !== get_theme_mod( $value . '_widget_line_color', '' ) ? '.' . $section . ' .widget_calendar table caption, .' . $section . ' .wp-calendar-nav { background:' . get_theme_mod( $value . '_widget_line_color', '' ) . ';}' : '' );
		$widget_css[] = ( '' !== get_theme_mod( $value . '_widget_misc_elements', '' ) ? '.' . $section . ' .widget_calendar td:not(#prev):not(#next) a::before, .' . $section . ' .widget_calendar caption, .' . $section . ' .wp-calendar-nav { background:' . get_theme_mod( $value . '_widget_misc_elements', '' ) . ';}' : '' );
		// Tags
		$widget_css[] = ( '' !== get_theme_mod( $value . '_widget_tag_background', '' ) ? '.' . $section . ' .widget_tag_cloud a { background:' . get_theme_mod( $value . '_widget_tag_background', '' ) . ';}' : '' );
		$widget_css[] = ( '' !== get_theme_mod( $value . '_widget_tag_color', '' ) ? '.' . $section . ' .widget_tag_cloud a { color:' . get_theme_mod( $value . '_widget_tag_color', '' ) . ';}' : '' );

		}

		// Highlight widgets (by class names)

		$highlight_classes = '' !== get_theme_mod( 'tfm_widget_highlight_classes', '' ) ? explode(',', get_theme_mod( 'tfm_widget_highlight_classes', '' ) ) : false;

		$highlight_classes = $highlight_classes ? array_filter($highlight_classes) : false;

		if ( $highlight_classes && '' !== get_theme_mod( 'tfm_widget_highlight_background', '' ) ) {

			foreach ($highlight_classes as $key => $value) {

				$widget_css[] = '#' . str_replace([' ', '.', '#'], '', $value) . '{ background:' . get_theme_mod( 'tfm_widget_highlight_background', '' ) . '; border:0; padding: var(--post-inner-elements-margin);}';

			}

		}

		$widget_colors = array_filter($widget_css);

		if ( count($widget_colors) !== 0 ) :

			echo '<style type="text/css" id="zosia-widget-css">';
			foreach ($widget_colors as $css ) {
				echo wp_strip_all_tags( $css );
			}
			echo  '</style>' . "\n";

		endif;

		// ========================================================
		// Category & Tag Slug colors
		// ========================================================

		$categories = apply_filters( 'tfm_set_category_colors', true ) ? array_slice( get_categories('type=post'), 0, apply_filters( 'tfm_set_category_colors_max_count', 50 ) ) : false;
		$tags = apply_filters( 'tfm_set_tag_colors', false ) ? array_slice( get_tags(), 0, apply_filters( 'tfm_set_tag_colors_max_count', 50 ) ) : false;
		$shop_categories = class_exists('WooCommerce') ? get_categories( array( 'taxonomy' => 'product_cat') ) : false;

		if ( $categories || $tags || $shop_categories) :

			// Categories
			if ( $categories ) {

				$slug_color = '' !== get_theme_mod( 'category_slug_color', '' ) ? 'color:' . get_theme_mod( 'category_slug_color', '' ) . ' !important;' : '';
				$slug_background = '' !== get_theme_mod( 'category_slug_background', '' ) ? 'background:' . get_theme_mod( 'category_slug_background', '' ) . '; border: 0 !important;' : '';

				// Global
				$custom_slug_color[] =  ( $slug_color || $slug_background ? '.entry-meta a[class*="cat-link"] { ' . $slug_color . $slug_background . ' } .widget a[class*="tag-link"], .sub-categories a[class*="cat-link"], .wp-block-categories-list li[class*="cat-item"] .tfm-count { ' . $slug_color . $slug_background . ' }' : '' );


				// Custom category tags
				foreach ( $categories as $key => $value) {

				$slug_color = '' !== get_theme_mod( 'category_slug_color_' . $value->slug . '', '' ) ? 'color:' . get_theme_mod( 'category_slug_color_' . $value->slug . '', '' ) . ' !important;' : '';
				$slug_background = '' !== get_theme_mod( 'category_slug_background_' . $value->slug . '', '' ) ? 'background:' . get_theme_mod( 'category_slug_background_' . $value->slug . '', '' ) . ' !important; border: 0 !important;' : '';

					$custom_slug_color[] =  ( $slug_color || $slug_background ? '.entry-meta a.cat-link-' . $value->term_id . ' { ' . $slug_color . $slug_background . '} .widget a.tag-link-' . $value->term_id . ', .sub-categories a.cat-link-' . $value->term_id . ', .wp-block-categories-list li.cat-item-' . $value->term_id . ' .tfm-count { ' . $slug_color . $slug_background . ' }' : '' );
					
				}

			}

			// Tags
			if ( $tags ) {
				
				foreach ($tags as $key => $value) {

					$custom_slug_color[] =  ( '' !== get_theme_mod( 'tag_slug_color_' . $value->slug . '', '' ) ? '.single-post-tags a.tag-link-' . $value->term_id . ', .widget a.tag-link-' . $value->term_id . ' { background:' . get_theme_mod( 'tag_slug_color_' . $value->slug . '', '' ) . '; color: #ffffff }' : '' );
					
				}

			}

			// Shop Categories
			if ( $shop_categories) {

				foreach ($shop_categories as $key => $value) {

					$custom_slug_color[] =  ( '' !== get_theme_mod( 'woo_category_slug_color_' . $value->slug . '', '' ) ? '.entry-meta a.cat-link-' . $value->term_id . ' { color:' . get_theme_mod( 'woo_category_slug_color_' . $value->slug . '', '' ) . '; }' : '' );
					
				}

			}

			$slug_colors = array_filter($custom_slug_color);

			if ( count($slug_colors) !== 0 ) :

				echo '<style type="text/css" id="zosia-custom-slug-css">';
				foreach ($slug_colors as $css ) {
					echo wp_strip_all_tags( $css );
				}
				echo  '</style>' . "\n";

			endif;

		endif;

}

add_action( 'wp_head', 'tfm_custom_color_scheme' ); // Enqueue the CSS Inline Style after the main stylesheet


// ========================================================
// Admin Inline CSS for Gutenebrg editor
// ========================================================

function tfm_admin_gutenberg_inline_css() {

	$customizer_settings = tfm_general_settings();

	$bg_color = '' !== get_theme_mod( 'tfm_single_background_color', '' ) ? str_replace('#', '', get_theme_mod( 'tfm_single_background_color', '' )) : get_background_color();

	echo '<style id="zosia-inline-gutenberg-css">';
	echo ':root {';
	echo '--content-max-width:' . esc_attr( get_theme_mod( 'tfm_content_max_width', $customizer_settings['content_max_width'] )) . 'px';
	echo '} ';
	echo '.wp-block-button .wp-block-button__link { border-radius: ' . esc_attr( get_theme_mod( 'tfm_button_border_radius', $customizer_settings['button_border_radius'] )) . 'px;}';
	echo '.editor-styles-wrapper { background-color:#' . esc_attr( $bg_color ) . '}';
	echo '</style>';

}

add_action('admin_head', 'tfm_admin_gutenberg_inline_css');

 ?>