<?php

/**
 * Zosia Hooks
 *
 *
 * @package WordPress
 * @subpackage Zosia
 * @since 1.0
 * @version 1.0
 */

// ========================================================
// Custom Hooks
// ========================================================
function tfm_before_header() {
    do_action('tfm_before_header'); // Header
}
function tfm_after_header() {
    do_action('tfm_after_header'); // Header
}
function tfm_header_left() {
    do_action('tfm_header_left'); // Header
}
function tfm_header_right() {
    do_action('tfm_header_right'); // Header
}
function tfm_header_branding() {
    do_action( 'tfm_header_branding');
}
function tfm_primary_menu_section_left() {
    do_action('tfm_primary_menu_section_left');
}
function tfm_primary_menu_section_right() {
    do_action('tfm_primary_menu_section_right');
}
function tfm_after_content() {
    do_action('tfm_after_content'); // Single
}
function tfm_before_single_content() {
    do_action('tfm_before_single_content'); // Single
}
function tfm_after_the_content() {
    do_action( 'tfm_after_the_content');
}
function tfm_author_bio_bottom() {
    do_action('tfm_author_bio_bottom'); // Single
}
function tfm_before_wrapper_close() {
    do_action('tfm_before_wrapper_close'); // Theme wrapper (all pages)
}
function tfm_before_footer() {
    do_action('tfm_before_footer'); // Footer
}
function tfm_after_footer() {
    do_action('tfm_after_footer'); // Footer
}
function tfm_append_footer_bottom() {
    do_action('tfm_append_footer_bottom'); // Footer Bottom
}
function tfm_before_entry_title() {
    do_action('tfm_before_entry_title'); // Single & Archive
}
function tfm_after_entry_title() {
    do_action('tfm_after_entry_title'); // Single & Archive
}
function tfm_before_loop() {
    do_action('tfm_before_loop'); // Archive loop
}
function tfm_after_loop() {
    do_action('tfm_after_loop'); // Archive loop
}
function tfm_before_comments() {
    do_action('tfm_before_comments'); // Single
}
function tfm_after_comments() {
    do_action('tfm_after_comments'); // Single
}
function tfm_after_wrap() {
    do_action('tfm_after_wrap');
}
function tfm_after_wrap_inner() {
    do_action('tfm_after_wrap_inner');
}
function tfm_prepend_after_title_meta() {
    do_action('tfm_prepend_after_title_meta');
}
function tfm_append_after_title_meta() {
    do_action('tfm_append_after_title_meta');
}
function tfm_after_after_title_meta() {
    do_action('tfm_after_after_title_meta');
}
function tfm_hentry_footer_before() {
    do_action( 'tfm_hentry_footer_before' ); // Single
}
function tfm_hentry_footer_after() {
    do_action( 'tfm_hentry_footer_after' ); // Single
}
function tfm_after_continue_reading_button() {
    do_action( 'tfm_after_continue_reading_button' ); // Archive
}
function tfm_after_entry_wrapper() {
    do_action( 'tfm_after_entry_wrapper' );
}
function tfm_page_footer() {
    do_action( 'tfm_page_footer' );
}
function tfm_between_posts( $args = array() ) {
    do_action( 'tfm_between_posts' );
}
function tfm_entry_header_open() {
    do_action( 'tfm_entry_header_open' );
}
function tfm_entry_header_close() {
    do_action( 'tfm_entry_header_close' );
}
function tfm_append_formats_key() {
    do_action( 'tfm_append_formats_key' );
}

?>