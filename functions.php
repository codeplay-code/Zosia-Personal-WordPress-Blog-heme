<?php

/**
 * Zosia functions and definitions
 *
 *
 * @package WordPress
 * @subpackage Zosia
 * @since 1.0
 * @version 1.0
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function tfm_theme_setup() {

	// Make theme available for translation.
	load_theme_textdomain( 'zosia', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );

	// Add support for responsive embeds.
	add_theme_support( 'responsive-embeds' );

	// Switch default core markup for search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'search',
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats',
		array(  
		'gallery',
		'image',
		'video',
		'audio',
		)
	);

	// Add theme support for Custom Logo.
	add_theme_support('custom-logo');

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Add theme support for custom background
	add_theme_support( 'custom-background',
		array(
			'default-color' => 'ffffff',
		)
	);

	// Block styles
	add_theme_support( 'wp-block-styles' );

	// Register Menus
	register_nav_menus( array(
		'primary'    => esc_html__( 'Primary Menu', 'zosia' ),
		'split-menu-left'    => esc_html__( 'Split Menu Left Items', 'zosia' ),
		'split-menu-right'    => esc_html__( 'Split Menu Right Items', 'zosia' ),
		'slide-menu-primary'    => esc_html__( 'Toggle Sidebar Primary Menu', 'zosia' ),
		'header-secondary'    => esc_html__( 'Header Secondary Menu', 'zosia' ),
		'footer'     => esc_html__( 'Footer Menu', 'zosia'),
	) );

	add_image_size( 'tfm-mobile-image', apply_filters( 'tfm_mobile_image_width', 432 ), 0, false );

}

add_action( 'after_setup_theme', 'tfm_theme_setup' );

// ========================================================
// Set content width
// ========================================================

if ( ! isset( $content_width ) ) {
	$content_width = 1200;
}

// ========================================================
// Register Widget areas
// ========================================================

function tfm_widgets_init() {

	register_sidebar( array(
		'name'          => esc_html__( 'Static Sidebar', 'zosia' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here to appear in your static sidebar', 'zosia' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Slide Out Sidebar', 'zosia' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here to appear in your slide out sidebar', 'zosia' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 1', 'zosia' ),
		'id'            => 'footer-column-1',
		'description'   => esc_html__( 'Add widgets here to appear in your footer column', 'zosia' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 2', 'zosia' ),
		'id'            => 'footer-column-2',
		'description'   => esc_html__( 'Add widgets here to appear in your footer column', 'zosia' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 3', 'zosia' ),
		'id'            => 'footer-column-3',
		'description'   => esc_html__( 'Add widgets here to appear in your footer column', 'zosia' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 4', 'zosia' ),
		'id'            => 'footer-column-4',
		'description'   => esc_html__( 'Add widgets here to appear in your footer column', 'zosia' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	// Home In Loop
	register_sidebar( array(
		'name'          => esc_html__( 'Home: Between Blog Posts', 'zosia' ),
		'id'            => 'loop-sidebar-home',
		'description'   => esc_html__( 'Add widgets here to appear between posts on your homepage. Set the position of this sidebar in Appearance > Zosia: Theme Settings > Homepage Settings', 'zosia' ),
		'before_widget' => '<section id="%1$s" class="widget in-loop-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	// Category In Loop
	register_sidebar( array(
		'name'          => esc_html__( 'Category: Between Blog Posts', 'zosia' ),
		'id'            => 'loop-sidebar-category',
		'description'   => esc_html__( 'Add widgets here to appear between posts in your category pages. Use Jetpack Widget Visibility or similar plugin to set different widgets for each category.  Set the position of this sidebar in Appearance > Zosia: Theme Settings > Archive/Category Settings', 'zosia' ),
		'before_widget' => '<section id="%1$s" class="widget in-loop-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
}
add_action( 'widgets_init', 'tfm_widgets_init' );

// ========================================================
// Enqueue Google Fonts
// ========================================================

if ( ! function_exists( 'tfm_fonts_url' ) ) {

	function tfm_fonts_url( $font ) {

		$fonts_url = '';
		 
		 /*
	    Translators: If there are characters in your language that are not supported
	    by chosen font(s), translate this to 'off'. Do not translate into your own language.
	     */
	    if ( 'off' !== _x( 'on', 'Google font: on or off', 'zosia' ) ) {
	    	if ($font === 'kumbh') {
		        $fonts_url = add_query_arg( 'family', 'Kumbh+Sans:wght@400;500;600;700&display=swap', "https://fonts.googleapis.com/css2" );
		    }
		    if ($font === 'opensans') {
		        $fonts_url = add_query_arg( 'family', 'Open+Sans:ital,wght@0,400;0,600;0,700;1,400;1,700&display=swap', "https://fonts.googleapis.com/css2" );
		    }
	    }
		 
		return esc_url_raw( $fonts_url );

	}

}

// ========================================================
// Enqueue scripts and styles
// ========================================================

if ( ! function_exists( 'tfm_scripts' ) ) {

	function tfm_scripts() {

		// Get Theme Version.
		$theme_version = wp_get_theme()->get( 'Version' );
		
		// CSS
		wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '1.0.0', 'all');
		wp_enqueue_style('fontello', get_template_directory_uri() . '/css/fontello/css/fontello.css', array(), null );
		wp_enqueue_style( 'zosia-google-font-kumbh', tfm_fonts_url('kumbh'), array(), '1.0.0' );
		wp_enqueue_style( 'zosia-google-font-opensans', tfm_fonts_url('opensans'), array(), '1.0.0' );
		wp_enqueue_style('zosia-core-style', get_template_directory_uri() . '/style.css', array(), $theme_version, 'all');
		wp_enqueue_style('zosia-theme-style', get_template_directory_uri() . '/css/zosia.css', array(), '1.2.1', 'all');
		wp_enqueue_style('zosia-gutenberg', get_template_directory_uri() . '/css/gutenberg.css', array(), '1.0.0', 'all');
		wp_style_add_data( 'zosia-core-style', 'rtl', 'replace' );
		wp_style_add_data( 'zosia-theme-style', 'rtl', 'replace' );
		wp_style_add_data( 'zosia-gutenberg', 'rtl', 'replace' );
		if ( is_rtl() ) {
			wp_enqueue_style('zosia-rtl-extra', get_template_directory_uri() . '/css/rtl-extra.css', array(), '1.0.0', 'all' );
		}

		// Load Masonry
		if ( 'masonry' === tfm_get_post_layout() )  {
			wp_enqueue_script( 'masonry');
			wp_enqueue_script( 'zosia-masonry-init', get_template_directory_uri() . '/js/masonry-init.js', array(), null, true);
		}

		// Slick assets (for gallery post format)
		wp_enqueue_style('slick', get_template_directory_uri() . '/css/slick.css', array(), '1.0.0', 'all');
		wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.min.js', array( 'jquery' ), '1.0.0', false);

		// Main JS
		wp_enqueue_script( 'zosia-main', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '1.0.0', false);

		// Comments
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

	}
}
add_action( 'wp_enqueue_scripts', 'tfm_scripts' );

// ========================================================
// Enqueue Gutenberg Editor scripts and styles
// ========================================================

function tfm_gutenberg_styles() {

	 wp_enqueue_style('fontello', get_template_directory_uri() . '/css/fontello/css/fontello.css', array(), null );
	 wp_enqueue_style( 'zosia-gutenberg-editor', get_template_directory_uri() . '/css/gutenberg-editor-style.css', false, '1.0.0', 'all' );
	 wp_enqueue_style( 'zosia-google-font-kumbh', tfm_fonts_url('kumbh'), array(), '1.0.0' );
	 wp_enqueue_style( 'zosia-google-font-opensans', tfm_fonts_url('opensans'), array(), '1.0.0' );

}
add_action( 'enqueue_block_editor_assets', 'tfm_gutenberg_styles' );

// ========================================================
// Custom classes added to body class array
// ========================================================

if ( ! function_exists( 'tfm_body_classes' ) ) {

	function tfm_body_classes( $classes ) {


		if ( ( is_single( ) && get_theme_mod( 'tfm_single_sidebar', false ) || is_home() && get_theme_mod( 'tfm_homepage_sidebar', true ) || ( is_archive() || is_search() ) && get_theme_mod( 'tfm_archive_sidebar', true ) || is_page() && get_theme_mod( 'tfm_page_sidebar', false ) ) && is_active_sidebar( 'sidebar-1' ) ) {
			$classes[] = 'has-sidebar';
		}
		// Hero class single global
		if ( is_single() && ( get_theme_mod( 'tfm_single_post_style', 'default' ) === 'hero-default' || get_theme_mod( 'tfm_single_post_style', 'default' ) === 'hero-cover' ) ) {
			if ( function_exists('tfm_custom_meta_box') && get_post_meta( get_the_ID(), 'tfm_single_post_style', true ) && ( get_post_meta( get_the_ID(), 'tfm_single_post_style', true ) !== 'global' && get_post_meta( get_the_ID(), 'tfm_single_post_style', true ) !== 'hero-default' && get_post_meta( get_the_ID(), 'tfm_single_post_style', true ) !== 'hero-cover' ) ) {
				$classes[] = '';
			} else {
				$classes[] = 'has-hero';
			}
		}
		// Hero class per single post
		if ( is_single() && function_exists('tfm_custom_meta_box') && get_post_meta( get_the_ID(), 'tfm_single_post_style', true ) && ( get_post_meta( get_the_ID(), 'tfm_single_post_style', true ) === 'hero-default' || get_post_meta( get_the_ID(), 'tfm_single_post_style', true ) === 'hero-cover' ) ) {
				$classes[] = 'has-hero';
		}
		//  Hero class page
		if ( is_page() && ( get_theme_mod( 'tfm_page_style', 'default' ) === 'hero-default' || get_theme_mod( 'tfm_page_style', 'default' ) === 'hero-cover' ) ) {
			$classes[] = 'has-hero';
		}
		if ( get_theme_mod( 'tfm_sticky_nav', false ) ) {
			$classes[] = 'has-sticky-nav';
		}
		if ( get_theme_mod( 'tfm_sticky_nav_mobile', false ) ) {
			$classes[] = 'has-sticky-nav-mobile';
		}
		if ( '' !== get_theme_mod( 'tfm_header_background_color', '' ) ) {
			$classes[] = 'has-custom-header';
		}
		if ( 'logo-below-nav' === get_theme_mod( 'tfm_header_layout', 'logo-left-menu-right' ) ) {
			$classes[] = 'has-logo-below-nav';
		}
		if ( get_query_var( 'cpage' ) ) {
			$classes[] = 'comment-page';
		}
		if ( is_single() && ( get_previous_post() || get_next_post() ) && get_theme_mod( 'tfm_single_post_navigation', true) ) {
			$classes[] = 'has-post-nav';
		}
		if ( is_single() && get_theme_mod( 'tfm_single_author_bio', true ) ) {
			$classes[] = 'has-author-bio';
		}
		if ( is_home() && '' !== get_theme_mod( 'tfm_homepage_loop_title', '' ) ) {
			$classes[] = 'has-loop-header';
		}
		if ( is_archive() && get_theme_mod( 'tfm_archive_title_position', 'header' ) === 'loop' && get_theme_mod( 'tfm_archive_title', true ) ) {
			$classes[] = 'header-in-loop';
		}
		if ( is_single() && '' !== get_theme_mod( 'tfm_single_background_color', '' ) ) {
			$classes[] = 'single-custom-background';
		}
		if ( get_theme_mod( 'tfm_goto_top', true )) {
			$classes[] = 'has-backtotop';
		}
		return $classes;
	}

}
add_filter( 'body_class', 'tfm_body_classes', 10 );

// ========================================================
// Display the custom logo or title
// ========================================================

if ( ! function_exists( 'tfm_site_logo' ) ) {

	function tfm_site_logo( $args = array() ) {

		$defaults = array(
			'logo'        => '%1$s<span class="screen-reader-text">%2$s</span>',
			'mobile_logo' => '%1$s',
			'logo_class'  => 'site-logo',
			'title'       => '<a href="%1$s">%2$s</a>',
			'title_class' => 'site-title',
			'home_wrap'   => '<h1 class="%1$s">%2$s</h1>',
			'single_wrap' => '<div class="%1$s faux-heading">%2$s</div>',
			'mobile'      => false,
			'sidebar'	  => false,
			'condition'   => ( ( is_front_page() || is_home() )),
		);

		$args = wp_parse_args( $args, $defaults );

		$site_title = get_bloginfo( 'name' );
		$mobile_logo = get_theme_mod( 'tfm_mobile_logo_upload', '' ) ? get_theme_mod( 'tfm_mobile_logo_upload', '' ) : wp_get_attachment_url(get_theme_mod( 'custom_logo' ));
		$sidebar_logo = get_theme_mod( 'tfm_sidebar_logo_upload', '' ) ? get_theme_mod( 'tfm_sidebar_logo_upload', '' ) : wp_get_attachment_url(get_theme_mod( 'custom_logo' ));
	    $custom_logo_id = $args['mobile'] ? $mobile_logo : wp_get_attachment_url( get_theme_mod( 'custom_logo' ) );
	    if ( $args['sidebar'] ) {
	    	$custom_logo_id = $sidebar_logo;
	    }
	    $logo_size = $args['mobile'] ? wp_get_attachment_image_src( $custom_logo_id, 'full' ) : wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
	    if ( empty($logo_size)) {
	    	$logo_size = array(1 => false);
	    }
		$logo_width = get_theme_mod( 'tfm_custom_logo_max_width', '' ) ? get_theme_mod( 'tfm_custom_logo_max_width', '' ) : $logo_size[1];
		if ( get_theme_mod( 'tfm_retina_logo', false ) ) {
			$logo_width  = floor( $logo_size[1] / 2 );
		}
		if ( $args['sidebar'] ) {
			$logo_width = get_theme_mod( 'tfm_sidebar_custom_logo_max_width', '' );
		}
		$logo = '<a href="' . esc_url( get_home_url() ) . '" rel="home"><img src="' . esc_url( $custom_logo_id ) . '" alt="' . get_bloginfo( 'name' ) . '" class="custom-logo" width="' . $logo_width . '" /></a>';
		$contents   = '';
		$classname  = '';

		if ( $custom_logo_id ) {
			if ( ! $args['mobile'] ) {
			$contents  = sprintf( $args['logo'], $logo, esc_html( $site_title ) );
			$classname = $args['logo_class'];
		} else {
			$contents  = sprintf( $args['mobile_logo'], $logo, esc_html( $site_title ) );
			$classname = $args['logo_class'];
		}
		} else {
			$contents  = sprintf( $args['title'], esc_url( get_home_url( null, '/' ) ), esc_html( $site_title ) );
			$classname = $args['title_class'];
		}

		$wrap = $args['condition'] && ! $args['mobile'] && ! $args['sidebar'] ? 'home_wrap' : 'single_wrap';

		$html = sprintf( $args[ $wrap ], $classname, $contents );

		$html = apply_filters( 'tfm_site_logo', $html, $args, $classname, $contents );

		echo wp_kses_post( $html );

	}

}

// ========================================================
// Output toggle icons
// ========================================================

if ( ! function_exists( 'tfm_toggle_icon' ) ) {

	function tfm_toggle_icon( $icon, $mobile = false ) {

		$mobile_toggle = ( $mobile ? ' mobile-toggle' : '' );
		$has_toggle_background = '';
		$has_toggle_text = ( 'menu' === $icon && get_theme_mod( 'tfm_toggle_menu_text', '' ) || 'search' === $icon && get_theme_mod( 'tfm_toggle_search_text', '' ) ? 'has-toggle-text' : '' );
		$show_icon = ( ( true === $mobile && ( ( $icon === 'menu' && get_theme_mod( 'tfm_toggle_menu_mobile', true ) ) || ( $icon === 'search' && get_theme_mod( 'tfm_toggle_search_mobile', true ) ) ) ) || 
			// Desktop Menu
			( false === $mobile && ( ( $icon === 'menu' && get_theme_mod( 'tfm_toggle_menu', true ) && ( is_active_sidebar( 'sidebar-2') || ( ! is_active_sidebar( 'sidebar-2') && ( has_nav_menu( 'slide-menu-primary' ) || has_nav_menu( 'primary' ) ) && get_theme_mod( 'tfm_sidebar_primary_nav', false ) ) ) ) || 
			// Desktop search
			( $icon === 'search' && get_theme_mod( 'tfm_toggle_search', true ) ) ) ) ? '' : ' hidden' );

		$html = '';

		$html .= '<div class="toggle toggle-' . esc_attr( $icon . $mobile_toggle . $show_icon ) . '">';

		if ( $icon === 'menu' ) {

			$html .= '<span><i class="icon-tfm-menu-2"></i></span><span class="screen-reader-text">' . esc_html__( 'Menu', 'zosia' ) . '</span>';

		}

		if ( $icon === 'search' ) {
			
			$html .= '<span><i class="icon-tfm-search"></i></span><span class="screen-reader-text">' . esc_html__( 'Search', 'zosia' ) . '</span>';

		}

		$html .= '</div>';

		echo wp_kses_post( $html );

	}

}


// ========================================================
// Output category tags in post meta
// ========================================================

if ( ! function_exists( 'tfm_get_category_slugs' ) ) {

	function tfm_get_category_slugs( $num = 999, $post_id = false ) {

		$num = ( ! is_single() ? apply_filters( 'tfm_archive_max_category_slugs', 2 ) : $num );
		$category = array_slice( get_the_category( $post_id ), 0, $num );
		$count = 0;

		echo '<ul class="post-categories-meta">';

		foreach( $category as $the_category ) {

			$count++;

			echo '<li class="cat-slug-' . esc_attr( $the_category->slug ) . ' cat-id-' . esc_attr( $the_category->cat_ID ) . '">';
			// "In" text string
			if ( $count === 1 && tfm_toggle_entry_meta( 'in' ) ) {
				echo '<span class="screen-reader-text">' . esc_html__( 'Posted in', 'zosia' ) . '</span><i dir="ltr">' . esc_html__( 'in', 'zosia' ) . '</i> ';
			}
			echo '<a href="' . get_category_link( $the_category->cat_ID ) . '" class="cat-link-' . esc_attr( $the_category->cat_ID ) . '">' . esc_html( $the_category->cat_name ) . '</a></li>';

		}

		echo '</ul>';

	}

}

// ========================================================
// Output entry meta
// ========================================================

function tfm_get_entry_meta( $meta_data = array(), $has_wrapper = true, $has_container = true, $html_style = 'li', $meta_wrapper_class = '', $meta_class = '' ) {

	// Make sure we don't have an empty array
	if ( ! $meta_data ) {
		$meta_data = apply_filters( 'tfm_entry_meta_data', array('author_avatar', 'author', 'date', 'updated_date', 'comment_count', 'read_time' ) );
	}

	// Additonal classes
	$meta_wrapper_class = '' === $meta_wrapper_class ? ' after-title' : ' ' . $meta_wrapper_class;
	$meta_class = '' !== $meta_class ? ' ' . $meta_class : '';
	$container_style = $html_style === 'li' ? 'ul' : 'div';

	// Create an array of meta items

	/**
	 * Filter empty 
	 * Remove avatar
	 * Set 'multi-meta-items' class
	 * */

	$meta_item['author_avatar'] = in_array('author_avatar', $meta_data ) && tfm_toggle_entry_meta( 'author_avatar' ) ? true : false;
	$meta_item['author'] = in_array('author', $meta_data ) && tfm_toggle_entry_meta( 'author' )  ? true : false;
	$meta_item['date'] = in_array('date', $meta_data ) && tfm_toggle_entry_meta( 'date' ) ? true : false;
	$meta_item['updated_date'] = in_array('updated_date', $meta_data ) && tfm_toggle_entry_meta( 'updated_date' ) ? true : false;
	$meta_item['comment_count'] = in_array('comment_count', $meta_data ) && tfm_toggle_entry_meta( 'comment_count' ) ? true : false;

	$meta_items = array_filter($meta_item);

	unset($meta_items['author_avatar']);

	$meta_items_class = count($meta_items) > 1 ? ' multi-meta-items' : '';

	$html = '';

	if ( tfm_toggle_entry_meta( 'after_title_meta' ) ) :

		if ( $has_wrapper ) {

			$html .= '<div class="entry-meta' . $meta_wrapper_class . $meta_items_class . '">';

		}

		if ( $has_container ) {

			$html .= '<' . $container_style . ' class="after-title-meta' . $meta_class . '">';

		}

	if ( in_array('author_avatar', $meta_data ) && tfm_toggle_entry_meta( 'author_avatar' ) ) :

		$avatar_size = is_single() ? 60 : 40;

		$html .= '<' . $html_style . ' class="entry-meta-avatar">';

		$html .= '<a href="' . get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ) . '">';

		$html .= get_avatar( get_the_author_meta('ID'), esc_attr( $avatar_size ) );

		$html .= '</a>';

		$html .= '</' . $html_style . '>';

	endif;

	if ( in_array('author', $meta_data ) && tfm_toggle_entry_meta( 'author' ) ) :

		$html .= '<' . $html_style . ' class="entry-meta-author">';

		$html .= '<span class="screen-reader-text">' . esc_html__( 'Posted by', 'zosia' ) . '</span>';
		if ( tfm_toggle_entry_meta( 'by' ) ):
			$html .= '<i dir="ltr">' . esc_html__( 'by', 'zosia' ) . '</i> ';
			endif;
		$html .= '<a href="' . get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ) . '">' . get_the_author() . '</a>';

		$html .= '</' . $html_style . '>';

	endif;


	if ( in_array('date', $meta_data ) && tfm_toggle_entry_meta( 'date' ) ) :

		$tfm_date = function_exists('tfm_human_entry_date') ? tfm_human_entry_date() : get_the_time( get_option( 'date_format' ));

		$html .= '<' . $html_style . ' class="entry-meta-date">';

		$title = get_the_title('','', false);

		if ( ! is_single( ) && strlen($title) == 0 ) {

		$html .= '<a href="' . get_the_permalink() . '">';

		}

		$html .= '<time datetime="' . get_the_date( 'Y-m-d' ) . '">' . $tfm_date . '</time>';

		if ( ! is_single( ) && strlen($title) == 0 ) {

		$html .= '</a>';

		}

	   $html .= '</' . $html_style . '>';

	endif;

	if ( in_array('updated_date', $meta_data ) && tfm_toggle_entry_meta( 'updated_date' )  ) :

		$html .= '<' . $html_style . ' class="entry-meta-date-updated">';

		$html .= tfm_updated_date();

	    $html .= '</' . $html_style . '>';

	endif;

	if ( in_array('comment_count', $meta_data ) && tfm_toggle_entry_meta( 'comment_count' ) ) :

		$html .= '<' . $html_style . ' class="entry-meta-comment-count">';

		if ( is_single( ) ) : 

			$html .= '<a href="#comments">';

		endif;

		$comment_string = (int)get_comments_number() === 1 ? esc_html__( ' Comment', 'zosia' ) : esc_html__( ' Comments', 'zosia' );

		$html .= get_comments_number() . '<span>' . esc_attr( $comment_string ) . '</span>';

		if ( is_single( ) ) :

			$html .= '</a>';

		endif;

	$html .= '</' . $html_style . '>';

	endif;

	// TFM Read time (theme boost plugin)

	if ( function_exists('tfm_read_time') ) :

		if ( in_array('read_time', $meta_data ) && tfm_show_read_time() ) :

			$html .= tfm_read_time( $forced_request = true, $return = true, $style = $html_style );

		endif;

	endif;

	/******************************************
	 * Append meta data with share icons
	 * This is specific to Zosia theme
	 * Only default archive displays (see plugin-filters.php)
	 *****************************************/

	if ( function_exists('tfm_share_content') && in_array('social', $meta_data ) )  {

		$html .= '<li class="tfm-entry-meta-share">';
        $html .= tfm_share_archive_content( $is_active = false, $show_text = false, $round = false, $icon_style = '', $color_scheme = '', $forced_request = false,  $return = true  );
        $html .= '</li>';

	}

	if ( $has_container ) {

		$html .= '</' . $container_style . '>';

	}

	if ( $has_wrapper ) {

		$html .= '</div>';

	}

	echo wp_kses_post( $html );

	endif;

}

// ========================================================
// Additional custom post_class classes
// ========================================================

if ( ! function_exists( 'tfm_post_class' ) ) {

	function tfm_post_class( $classes ) {

		global $post;

		$customizer_settings = tfm_general_settings();

		$classes[] = 'article'; // Always set the article class

		// Post background class

		$default_archive_post_background = array_key_exists('default_archive_post_background', $customizer_settings ) ? $customizer_settings['default_archive_post_background'] : '';

		$default_single_post_background = array_key_exists('default_single_post_background', $customizer_settings ) ? $customizer_settings['default_single_post_background'] : '';

		$tfm_archive_post_background = '' !== get_theme_mod( 'tfm_archive_post_background', '' ) ? get_theme_mod( 'tfm_archive_post_background', '' ) : $default_archive_post_background;
		
		$tfm_single_post_background = '' !== get_theme_mod( 'tfm_single_post_background', '' ) ? get_theme_mod( 'tfm_single_post_background', '' ) : $default_single_post_background;

		if ( ( ( ! is_single() && ! is_page() ) && '' !== $tfm_archive_post_background ) || ( ( is_single() || is_page() ) && '' !== $tfm_single_post_background )) {
			$classes[] = 'has-background';
		}

		$site_background = '#' . get_background_color();

		if ( ! is_single() && '' !== get_theme_mod( 'tfm_entry_border_color', '' ) && get_theme_mod( 'tfm_entry_border_color', '' ) === $site_background ) {
			$classes[] = 'no-border';
		}

		//  Meta
		if ( tfm_toggle_entry_meta( 'excerpt' ) ) {
			$classes[] = 'has-excerpt';
		}
		if ( tfm_toggle_entry_meta( 'author_avatar' ) ) {
			$classes[] = 'has-avatar';
		}
		if ( tfm_toggle_entry_meta( 'author' ) ) {
			$classes[] = 'has-author';
		}
		if ( tfm_toggle_entry_meta( 'date' ) || tfm_toggle_entry_meta( 'updated_date' ) ) {
			$classes[] = 'has-date';
		}
		if ( tfm_toggle_entry_meta( 'comment_count' ) ) {
			$classes[] = 'has-comment-count';
		}
		if ( tfm_toggle_entry_meta( 'category' ) ) {
			$classes[] = 'has-category-meta';
		}
		// Read more
		if ( tfm_toggle_entry_meta( 'read_more' ) ) {
				$classes[] = 'has-read-more';
		}


		// Disabled Post Thumbnail
		$disabled_thumbnail = false;

		// Disabled video/audio embeds (archive)
		$disabled_post_media = false;
		if ( ( is_home() && ! get_theme_mod( 'tfm_homepage_post_media', true ) ) || ( ( is_archive() || is_search() ) && ! get_theme_mod( 'tfm_archive_post_media', true ) ) ) {
			$disabled_post_media = true;
		}

		if ( ( is_archive() || is_search() ) && ! get_theme_mod( 'tfm_archive_post_thumbnail', true ) ||
		is_home() && ! get_theme_mod( 'tfm_homepage_post_thumbnail', true ) ||
		is_single() && ( ! get_theme_mod( 'tfm_single_thumbnail', true ) || ( function_exists('tfm_custom_meta_box') && get_post_meta( get_the_ID(), 'tfm_disable_featured_media', true ) ) ) )  {

			if ( ( is_home() || is_archive() || is_search() ) && has_post_format('image') && false === get_theme_mod( 'tfm_image_format_use_global', true ) && get_theme_mod( 'tfm_image_format_post_thumbnail', true ) ) {
				$classes[] = '';
			} else {

		$classes[] = 'disabled-post-thumbnail';
		$disabled_thumbnail = true;

	}

		}

		// Media files
		if ( ( ! $disabled_post_media && ( has_post_format( 'video') || ( has_post_format( 'audio') && tfm_featured_audio( true ) ) ) ) || ( has_post_format( 'gallery' ) && tfm_gallery_format_gallery( true ) ) || ( has_post_thumbnail( ) && ! $disabled_thumbnail ) ) {
			$classes[] = 'has-post-media';
		}

		// Thumbnail size
		$thumbnail_size = 'thumbnail-';

		if ( has_post_format( 'image' ) && ! is_single() && false === get_theme_mod( 'tfm_image_format_use_global', true ) ) {
			if ( 'list' !== tfm_get_post_layout() && 'list-grid' !== tfm_get_post_layout() ) {
				$thumbnail_size = $thumbnail_size . get_theme_mod( 'tfm_image_format_thumbnail_aspect_ratio', 'uncropped' );
			} else {
				if ( is_home() ) {
					$thumbnail_size = $thumbnail_size . get_theme_mod( 'tfm_homepage_thumbnail_aspect_ratio', 'uncropped' );
				}
				if ( is_archive() || is_search() ) {
					$thumbnail_size =  $thumbnail_size . get_theme_mod( 'tfm_archive_thumbnail_aspect_ratio', 'uncropped' );
				}
			}
		} else {
			if ( is_single() ) {
				if ( function_exists('tfm_custom_meta_box') && get_post_meta( get_the_ID(), 'tfm_single_post_thumbnail_size', true ) && get_post_meta( get_the_ID(), 'tfm_single_post_thumbnail_size', true ) !== 'global' ) {
				$thumbnail_size = $thumbnail_size . get_post_meta( get_the_ID(), 'tfm_single_post_thumbnail_size', true );
				} else {
					$thumbnail_size = $thumbnail_size . get_theme_mod( 'tfm_single_thumbnail_aspect_ratio', 'uncropped' );
				}
			}
			if ( is_page() ) {
				$thumbnail_size = $thumbnail_size . get_theme_mod( 'tfm_page_thumbnail_aspect_ratio', 'uncropped' );
			}
			if ( is_home() ) {
				$thumbnail_size = $thumbnail_size . get_theme_mod( 'tfm_homepage_thumbnail_aspect_ratio', 'uncropped' );
			}
			if ( is_archive() || is_search() ) {
				$thumbnail_size =  $thumbnail_size . get_theme_mod( 'tfm_archive_thumbnail_aspect_ratio', 'landscape' );
			}
		}
		$classes[] = $thumbnail_size;

		// Post style
		if ( is_home() || is_archive() || is_search() ) {
			if ( has_post_format( 'video' ) || has_post_format( 'audio') || has_post_format( 'gallery' ) ) {
				$classes[] = 'default';
			} elseif ( has_post_format( 'image' ) ) {
				$classes[] = 'list' !== tfm_get_post_layout() && 'list-grid' !== tfm_get_post_layout()  ? 'cover' : '';
			} else {
				$classes[] = is_home() ? get_theme_mod( 'tfm_homepage_loop_style', 'default' ) : get_theme_mod( 'tfm_archive_loop_style', 'default' );
			}
		} 
		
		// Override post style for single and page (check for custom post meta)
		if ( is_single() ) {
			$single_post_style = function_exists('tfm_custom_meta_box') && get_post_meta( get_the_ID(), 'tfm_single_post_style', true ) && get_post_meta( get_the_ID(), 'tfm_single_post_style', true ) !== 'global' ? get_post_meta( get_the_ID(), 'tfm_single_post_style', true ) : get_theme_mod( 'tfm_single_post_style', 'default' );
			if ( ( ! has_post_thumbnail() || $disabled_thumbnail ) && $single_post_style === 'cover' ) {
				$single_post_style = 'default';
			}
			$classes[] = $single_post_style;
		}
		if ( is_page() ) {
			if ( '' === get_the_post_thumbnail( ) ) {
				$classes[] = 'default';
			} else {
				$classes[] = get_theme_mod( 'tfm_page_style', 'default' );
			}
		}

			return $classes;

	}

	add_filter( 'post_class', 'tfm_post_class' );

}

// ========================================================
// Get post cols count
// ========================================================

if ( ! function_exists('tfm_get_post_cols') ) {

	function tfm_get_post_cols( $value = 'class' ) {

		$post_layout = tfm_get_post_layout();
		$post_cols = ( is_home() ? get_theme_mod( 'tfm_homepage_loop_cols', 3 ) : get_theme_mod( 'tfm_archive_loop_cols', 3 ) );
		$enabled_sidebar = ( is_home() ? get_theme_mod( 'tfm_homepage_sidebar', true ) : get_theme_mod( 'tfm_archive_sidebar', true ) );
		$has_sidebar = is_active_sidebar( 'sidebar-1') && $enabled_sidebar ? true : false;

		$max_post_cols = $post_layout === 'list' ? apply_filters( 'tfm_max_post_cols_list', 4 ) : apply_filters( 'tfm_max_post_cols_grid', 4 );
		$max_post_cols_width_sidebar = $post_layout === 'list' ? apply_filters( 'tfm_max_post_cols_list_width_sidebar', 2 ) : apply_filters( 'tfm_max_post_cols_with_sidebar', 2 );

		// Check for max columns filters (per theme basis)
		if ( $post_cols > $max_post_cols ) {
			$post_cols = $max_post_cols;
		}
		
		// Check for sidebar and adjust cols
		if ( $has_sidebar && $post_cols > $max_post_cols_width_sidebar ) {
			$post_cols = $max_post_cols_width_sidebar;

		}

		if ( '' === $value || 'class' === $value ) {
			$post_cols = ' cols-' . $post_cols;
		}

		if ( 'count' === $value ) {
			$post_cols = $post_cols;
		}

		return $post_cols;
	}

}

// ========================================================
// Get post layout
// ========================================================

if ( ! function_exists('tfm_get_post_layout') ) {

	function tfm_get_post_layout( ) {

		$post_layout = is_home() ? get_theme_mod( 'tfm_homepage_layout', 'masonry' ) : get_theme_mod( 'tfm_archive_layout', 'list' );

		return $post_layout;
	}

}

// ========================================================
// Reset faux count
// ========================================================

function tfm_reset_faux_count( $faux_count, $post_cols ) {

	$count_reset = false;
	$post_cols = str_replace(' ', '', $post_cols);
	$post_layout = tfm_get_post_layout();

	if ( 'grid-asc' === $post_layout ) {

		if ( $post_cols === 'cols-4' || $post_cols === '4' ) {
		$count_reset = 11;
		}
		elseif ( $post_cols === 'cols-3' || $post_cols === '3' ) {
			$count_reset = 7;
		}
		elseif ( $post_cols === 'cols-2' || $post_cols === '2' ) {
			$count_reset = 4;
		}

	} elseif ( 'grid-desc' === $post_layout )  {

		if ( $post_cols === 'cols-4' || $post_cols === '4' ) {
			$count_reset = 11;
		}
		elseif ( $post_cols === 'cols-3' || $post_cols === '3' ) {
			$count_reset = 7;
		}
		elseif ( $post_cols === 'cols-2' || $post_cols === '2' ) {
			$count_reset = 4;
		}


	} else {

		if ( $post_cols === 'cols-4' || $post_cols === '4 ') {
			$count_reset = 8;
		}
		elseif ( $post_cols === 'cols-3' || $post_cols === '3' ) {
			$count_reset = 7;
		}
		elseif ( $post_cols === 'cols-2' || $post_cols === '2' ) {
			$count_reset = 5;
		}
	}

	return $count_reset;
}


// ========================================================
// Modify excerpt length
// ========================================================

if ( ! function_exists( 'tfm_excerpt_length' ) ) {

	function tfm_excerpt_length( $length ) {

			return get_theme_mod( 'tfm_excerpt_length', 30 );

	}

}

add_filter( 'excerpt_length', 'tfm_excerpt_length' );

// ========================================================
// Output the exerpt (custom and default)
// ========================================================

if ( ! function_exists( 'tfm_get_excerpt' ) ) {

	function tfm_get_excerpt() {

		$html = '';

		// Home auto generated excerpt
		if ( tfm_toggle_entry_meta( 'excerpt' )) {

			$html .= '<div class="entry-content excerpt">';
			$html .= get_the_excerpt();
			$html .= '</div>';

		}

		echo wp_kses_post( $html );

	}

}

// ========================================================
// Modify Excerpt more
// ========================================================

if ( ! function_exists( 'tfm_excerpt_more' ) ) {

	function tfm_excerpt_more( $more ) {

	return '...';

	}

}

add_filter( 'excerpt_more', 'tfm_excerpt_more' );

// ========================================================
// Toggle entry-meta displays
// ========================================================

/**
 * This function handles meta data displays
 */

if ( ! function_exists( 'tfm_toggle_entry_meta' ) ) {

	function tfm_toggle_entry_meta( $meta_data = '' ) {

		$show_meta = true;

		/**
		 * Image format settings 
		 */

		if ( has_post_format( 'image' ) && ! get_theme_mod( 'tfm_image_format_use_global', true ) && ! is_single() ) {

			// Before title meta
			if ( $meta_data == 'before_title_meta' ) {

			if ( ! get_theme_mod( 'tfm_image_format_entry_meta_category', true ) &&
				 ! get_theme_mod( 'tfm_image_format_entry_meta_in', true ) ) {

				$show_meta = false;

			}

		}

		// Category
		if ( $meta_data == 'category' ) {

			if ( ! get_theme_mod( 'tfm_image_format_entry_meta_category', true ) ) {

				$show_meta = false;

			}

		}

		// After title meta
		if ( $meta_data == 'after_title_meta' ) {

			if ( ! get_theme_mod( 'tfm_image_format_entry_meta_date', true ) &&
			       ( function_exists('tfm_read_time') && ! get_theme_mod( 'tfm_image_format_entry_meta_read_time', true ) ) &&
 				   ! get_theme_mod( 'tfm_image_format_entry_meta_comment_count', true ) && 
 				   ! get_theme_mod( 'tfm_image_format_entry_meta_author_avatar', false ) &&
 				   ! get_theme_mod( 'tfm_image_format_entry_meta_author', true ) &&
 				   ! get_theme_mod( 'tfm_image_format_entry_meta_by', true ) ) {

				$show_meta = false;

			}

		}


		// by
		if ( $meta_data == 'by' ) {

			if ( ! get_theme_mod( 'tfm_image_format_entry_meta_by', true ) )  {

				$show_meta = false;

			}

		}

		// in
		if ( $meta_data == 'in' ) {

			if ( ! get_theme_mod( 'tfm_image_format_entry_meta_in', true ) )  {

				$show_meta = false;

			}

		}

		// Author
		if ( $meta_data == 'author' ) {

			if ( ! get_theme_mod( 'tfm_image_format_entry_meta_author', true ) ) {

				$show_meta = false;

			}

		}

		// Author avatar
		if ( $meta_data == 'author_avatar' ) {

			if ( ! get_theme_mod( 'tfm_image_format_entry_meta_author_avatar', false ) ) {

				$show_meta = false;

			}

		}

		// Date
		if ( $meta_data == 'date' ) {

			if ( ! get_theme_mod( 'tfm_image_format_entry_meta_date', true ) ) {

				$show_meta = false;

			}

		}

		// Date
		if ( $meta_data == 'updated_date' ) {

			if ( ! is_single() ) {

				$show_meta = false;

			}

		}

		// Comment Count
		if ( $meta_data == 'comment_count' ) {

			if ( ! get_theme_mod( 'tfm_image_format_entry_meta_comment_count', true ) ) {

				$show_meta = false;

			}

		}

		// Excerpt
		if ( $meta_data == 'excerpt' ) {

			if ( ( ! get_theme_mod( 'tfm_image_format_post_excerpt', true ) && ! get_theme_mod( 'tfm_image_format_post_excerpt_custom', true ) ) || ''== get_the_excerpt() ) {

				$show_meta = false;

			}

		}

		// Read more
		if ( $meta_data == 'read_more' ) {

			if ( ! get_theme_mod( 'tfm_image_format_read_more', false ) ) {

				$show_meta = false;

			}

		}

		} else {

		/**
		 * Standard format
		 * */

		// Before title meta
		if ( $meta_data == 'before_title_meta' ) {

			if ( ( is_home() &&
	               ! get_theme_mod( 'tfm_homepage_entry_meta_category', true ) &&
	               ! get_theme_mod( 'tfm_homepage_entry_meta_in', true ) ) ||
	               // Archive
	               ( ( is_archive() || is_search() ) &&
	               ! get_theme_mod( 'tfm_archive_entry_meta_category', true ) &&
	               ! get_theme_mod( 'tfm_archive_entry_meta_in', true ) ) ||
	               is_single() && ! get_theme_mod( 'tfm_single_entry_meta_category', true ) &&
	               ! get_theme_mod( 'tfm_single_entry_meta_in', true ) ) {

				$show_meta = false;

			}

		}

		// Category
		if ( $meta_data == 'category' ) {

			if ( ( is_home() && 
				   ! get_theme_mod( 'tfm_homepage_entry_meta_category', true ) ) || 
				   ( ( is_archive() || is_search() ) && 
				   ! get_theme_mod( 'tfm_archive_entry_meta_category', true ) ) ||
				   is_single() && ! get_theme_mod( 'tfm_single_entry_meta_category', true ) ) {

				$show_meta = false;

			}

		}

		// After title meta
		if ( $meta_data == 'after_title_meta' ) {

			if ( ( is_home() && 
			       ! get_theme_mod( 'tfm_homepage_entry_meta_date', true ) &&
			       ( function_exists('tfm_read_time') && ! get_theme_mod( 'tfm_homepage_entry_meta_read_time', true ) ) &&
 				   ! get_theme_mod( 'tfm_homepage_entry_meta_comment_count', true ) && 
 				   ! get_theme_mod( 'tfm_homepage_entry_meta_author_avatar', true ) &&
 				   ! get_theme_mod( 'tfm_homepage_entry_meta_author', true ) &&
 				   ! get_theme_mod( 'tfm_homepage_entry_meta_by', true ) ) ||
 				   // Archive
 				   ( ( is_archive() || is_search() ) && 
			       ! get_theme_mod( 'tfm_archive_entry_meta_date', true ) && 
			       ( function_exists('tfm_read_time') && ! get_theme_mod( 'tfm_archive_entry_meta_read_time', true ) ) &&
 				   ! get_theme_mod( 'tfm_archive_entry_meta_comment_count', true ) && 
 				   ! get_theme_mod( 'tfm_archive_entry_meta_author_avatar', true ) &&
 				   ! get_theme_mod( 'tfm_archive_entry_meta_author', true ) &&
 				   ! get_theme_mod( 'tfm_archive_entry_meta_by', true ) ) || 
 					// Single
 				   ( ( is_single() ) && 
			       ! get_theme_mod( 'tfm_single_entry_meta_date', true ) && 
			       ! get_theme_mod( 'tfm_single_entry_meta_date_updated', false ) &&
			       ( function_exists('tfm_read_time') && ! get_theme_mod( 'tfm_single_entry_meta_read_time', false ) ) &&
 				   ! get_theme_mod( 'tfm_single_entry_meta_comment_count', true ) && 
 				   ! get_theme_mod( 'tfm_single_entry_meta_author_avatar', true ) &&
 				   ! get_theme_mod( 'tfm_single_entry_meta_author', true ) &&
 				   ! get_theme_mod( 'tfm_single_entry_meta_by', true ) ) ) {

				$show_meta = false;

			}

		}


		// by
		if ( $meta_data == 'by' ) {

			if ( ( is_home() && 
				   ! get_theme_mod( 'tfm_homepage_entry_meta_by', true ) ) || 
				   ( ( is_archive() || is_search() ) && 
				   ! get_theme_mod( 'tfm_archive_entry_meta_by', true ) ) ||
				   ( is_single() && 
				   ! get_theme_mod( 'tfm_single_entry_meta_by', true ) ) ) {

				$show_meta = false;

			}

		}

		// in
		if ( $meta_data == 'in' ) {

			if ( ( is_home() && 
				   ! get_theme_mod( 'tfm_homepage_entry_meta_in', true ) ) || 
				   ( ( is_archive() || is_search() ) && 
				   ! get_theme_mod( 'tfm_archive_entry_meta_in', true ) ) ||
				   ( is_single() && 
				   ! get_theme_mod( 'tfm_single_entry_meta_in', true ) ) ) {

				$show_meta = false;

			}

		}

		// Author
		if ( $meta_data == 'author' ) {

			if ( ( is_home() && 
				   ! get_theme_mod( 'tfm_homepage_entry_meta_author', true ) ) || 
				   ( ( is_archive() || is_search() ) && 
				   ! get_theme_mod( 'tfm_archive_entry_meta_author', true ) ) ||
				   ( is_single() && 
				   ! get_theme_mod( 'tfm_single_entry_meta_author', true ) ) ) {

				$show_meta = false;

			}

		}

		// Author avatar
		if ( $meta_data == 'author_avatar' ) {

			if ( ( is_home() && 
				   ! get_theme_mod( 'tfm_homepage_entry_meta_author_avatar', true ) ) || 
				   ( ( is_archive() || is_search() ) && 
				   ! get_theme_mod( 'tfm_archive_entry_meta_author_avatar', true ) ) ||
				   ( is_single() && 
				   ! get_theme_mod( 'tfm_single_entry_meta_author_avatar', true ) ) ) {

				$show_meta = false;

			}

		}

		// Date
		if ( $meta_data == 'date' ) {

			if ( ( is_home() && 
			       ! get_theme_mod( 'tfm_homepage_entry_meta_date', true ) ) ||
			       // Archive
			       ( ( is_archive() || is_search() ) && ! get_theme_mod( 'tfm_archive_entry_meta_date', true ) ) ||
			       // Single
			       ( is_single() && ! get_theme_mod( 'tfm_single_entry_meta_date', true ) ) ) {

				$show_meta = false;

			}

		}

		// Date Updated
		if ( $meta_data == 'updated_date' ) {

			$u_time = get_the_time('U'); 
			$u_modified_time = get_the_modified_time('U'); 

			$show_updated = ( ( $u_modified_time >= $u_time + 86400 ) ? true : false );

			if ( ! is_single() || ( is_single() && ! get_theme_mod( 'tfm_single_entry_meta_date_updated', false ) ) ) {

				$show_meta = false;

			}

			if ( $show_meta && false === $show_updated && get_theme_mod( 'tfm_single_entry_meta_date', true ) ) {

				$show_meta = false;

			}

		}

		// Comment Count
		if ( $meta_data == 'comment_count' ) {

			if ( ( is_home() && 
			       ! get_theme_mod( 'tfm_homepage_entry_meta_comment_count', true ) ) || 
			       ( ( is_archive() || is_search() ) && 
			       ! get_theme_mod( 'tfm_archive_entry_meta_comment_count', true ) ) ||
			       ( is_single() && 
			       ! get_theme_mod( 'tfm_single_entry_meta_comment_count', true ) ) ) {

				$show_meta = false;

			}

		}

		// Comment Count
		if ( $meta_data == 'excerpt' ) {

			if ( ( is_home() && 
			       ! get_theme_mod( 'tfm_homepage_post_excerpt', true ) && ( ! get_theme_mod( 'tfm_homepage_post_excerpt_custom', true ) || get_theme_mod( 'tfm_homepage_post_excerpt_custom', true ) && ! has_excerpt( ) ) ) || 
			       ( ( is_archive() || is_search() ) && 
			       ! get_theme_mod( 'tfm_archive_post_excerpt', true ) && ( ! get_theme_mod( 'tfm_archive_post_excerpt_custom', true ) || get_theme_mod( 'tfm_archive_post_excerpt_custom', true ) && ! has_excerpt( ) ) ) ||
			       ( is_single() && 
			       ( ! get_theme_mod( 'tfm_single_custom_excerpt', false ) || get_theme_mod( 'tfm_single_custom_excerpt', false ) && ! has_excerpt( ) ) ) || ''== get_the_excerpt()) {

				$show_meta = false;

			}

		}

		// Read more
		if ( $meta_data == 'read_more' ) {

			if ( is_single() || ( is_home() && 
			       ! get_theme_mod( 'tfm_homepage_read_more', false ) ) || 
			       ( ( is_archive() || is_search() ) && 
			       ! get_theme_mod( 'tfm_archive_read_more', false ) ) ) {

				$show_meta = false;

			}

		}

	}

		return $show_meta;

	}

}

if ( ! function_exists('tfm_updated_date') ) {

	function tfm_updated_date( ) {

		$html = '';

		$u_time = get_the_time('U'); 
		$u_modified_time = get_the_modified_time('U'); 

		$show_updated = ( ( $u_modified_time >= $u_time + 86400 ) ? true : false );

		if ( $show_updated ) {
			$html .= '<span>' . esc_html__( 'Updated', 'zosia' ) . '</span> ';
		}
		$html .= '<time datetime="' . get_the_modified_date( 'Y-m-d' ) . '">' . get_the_modified_date( ) . '</time>';

		return $html;

	}
}

// ========================================================
// Get the post thumbnail size
// ========================================================

/**
 * Keeps page size low only output 'large' image
 * for full width post else 'medium_large'
 */

if ( ! function_exists( 'tfm_get_post_thumbnail') ) {

	function tfm_get_post_thumbnail( $count = 0, $faux_count = 0, $size = 'medium_large' ) {

		$site_settings = tfm_general_settings();
		$large_size_w = get_option('large_size_w');

		// Post Columns (posts per row)
		$post_cols = tfm_get_post_cols( 'count' );
		// Layout
		$post_layout = tfm_get_post_layout();
		// Post style
		$post_style = is_home() ? get_theme_mod( 'tfm_homepage_loop_style', 'default' ) : get_theme_mod( 'tfm_archive_loop_style', 'default' );

		// 1 Column
		if ( $post_cols === 1 ) {

			$size = apply_filters( 'tfm_archive_large_thumbnail_size', 'large' );

		}

		// First Full
		if ( $post_layout === 'grid-first-full' && $count === 1 ) {

			$size = apply_filters( 'tfm_archive_large_thumbnail_size', 'large' );

		}

		// Asc/Desc grid
		if ( $post_layout === 'grid-asc' && ( $post_cols === 4 && ( $count === 1 || $count % 10 == 1  ) || $post_cols === 3 && ( $count === 1 || $count % 6 == 1  ) || $post_cols === 2 && ( $count === 1 || $count % 3 == 1  ) ) || $post_layout === 'grid-desc' && ( $post_cols === 3 && $count % 6 == 0 || $post_cols === 2 && $count % 3 == 0  ) ) {

			$size = apply_filters( 'tfm_archive_large_thumbnail_size', 'large' );

		}

		// Offset (handle max of 100 per page)
		if ( $post_layout === 'grid-offset' && ( $post_cols === 3 && ( $count === 1 || $count === 7 || $count === 11 || $count === 17 || $count === 21 || $count === 27 || $count === 31 || $count === 37 || $count === 41 || $count === 47 || $count === 51 || $count === 57 || $count === 61 || $count === 67 || $count === 71 || $count === 77 || $count === 81 || $count === 87 || $count === 91 || $count === 97 || $count === 101 ) ) ) {

			$size = apply_filters( 'tfm_archive_large_thumbnail_size', 'large' );

		}

		// Cover format List layout
		if ( $post_layout === 'list' && $post_style === 'cover' ) {
			$size = apply_filters( 'tfm_archive_large_thumbnail_size', 'large' );
		}

		// Single

		if  ( is_single() ) {
			if ( get_theme_mod( 'tfm_single_full_width', false ) && ( in_array( 'has-sidebar', get_body_class( )) === false || ( in_array( 'has-sidebar', get_body_class( )) && ( get_theme_mod( 'tfm_single_post_style', 'default' ) === 'hero-default' || get_theme_mod( 'tfm_single_post_style', 'default' ) === 'hero-cover' ) ) ) ) {
				$size = 'full';
			} else {

				if ( $large_size_w >= $site_settings['site_width']) {
					$size = apply_filters( 'tfm_single_thumbnail_size', 'large' );
				} else {
					$size = apply_filters( 'tfm_single_fallback_thumbnail_size', 'full' );
				}
			}

		}

		// Single

		if  ( is_page() ) {
			if ( get_theme_mod( 'tfm_page_full_width', false ) && ( in_array( 'has-sidebar', get_body_class( )) === false || ( in_array( 'has-sidebar', get_body_class( )) && ( get_theme_mod( 'tfm_page_post_style', 'default' ) === 'hero-default' || get_theme_mod( 'tfm_page_post_style', 'default' ) === 'hero-cover' ) ) ) ) {
				$size = 'full';
			} else {
				// If user has set large size larger than site width use it
				if ( $large_size_w >= $site_settings['site_width']) {
					$size = apply_filters( 'tfm_page_thumbnail_size', 'large' );
				} else {
					$size = apply_filters( 'tfm_page_fallback_thumbnail_size', 'full' );
				}
			}
		}



		return the_post_thumbnail( $size );

	}

}

// ========================================================
// Get post count for archive displays
// ========================================================

if ( ! function_exists( 'tfm_get_post_count' ) ) {

	function tfm_get_post_count() {

		$tfm_vars = tfm_template_vars( '', false );

		$html = '';

		if ( tfm_is_woo() || tfm_is_woo( 'archive' )) { // Shop and product category
			$html =  esc_attr( $tfm_vars['post_count'] ) . ' ' . esc_html__( 'Products', 'zosia' );
		} elseif ( is_category() ) {
			$html =  esc_attr( $tfm_vars['post_count'] ) . ' ' . esc_html__( 'Posts', 'zosia' );
		} elseif ( is_author() ) {
			$html =  count_user_posts ($tfm_vars['object']->ID ) . ' ' . esc_html__( 'Posts', 'zosia' );
		} elseif ( is_tag() ) {
			$html =  esc_attr( $tfm_vars['object']->count ) . ' ' . esc_html__( 'Posts', 'zosia' );
		} elseif ( is_search() ) {
			$html = esc_attr( $tfm_vars['post_count'] ) . ' ' . esc_html__( 'Posts', 'zosia' );
		} else {
			if ( is_archive() ) {
				$html =  esc_html__( 'Archive', 'zosia' );
			}
		}

		return $html;
	}

}

// ========================================================
// Remove archive title label
// ========================================================

if ( ! function_exists( 'tfm_remove_archive_title_label' ) ) {

	function tfm_remove_archive_title_label( $title ) {

		if ( get_theme_mod( 'tfm_remove_archive_title_label', false ) ) {

		    if ( is_category() ) {
		        $title = '<span>' . single_cat_title( '', false ) . '</span>';
		    } elseif ( is_tag() ) {
		        $title = '<span>' . single_tag_title( '', false ) . '</span>';
		    } elseif ( is_author() ) {
		        $title = '<span class="vcard">' . get_the_author() . '</span>';
		    } elseif ( is_post_type_archive() ) {
		        $title = '<span>' . post_type_archive_title( '', false ) . '</span>';
		    } elseif ( is_tax() ) {
		        $title = '<span>' . single_term_title( '', false ) . '</span>';
		    }

		}
	  
	    return $title;
	}

}
 
add_filter( 'get_the_archive_title', 'tfm_remove_archive_title_label' );


// ========================================================
// Blog header
// ========================================================

if ( ! function_exists( 'tfm_blog_header' ) ) { 

	function tfm_blog_header( ) {

		$html = '';

		$bottom_padding = get_theme_mod( 'tfm_archive_header_background' ) === '#' . get_background_color() ? ' alt' : '';

		// Home

		if ( is_home( ) && ! is_paged() && have_posts( ) && get_theme_mod( 'tfm_homepage_loop_title', '' ) ) {

			$html .= '<div class="section-header home-title">';
			$html .= '<h2 class="page-title">' . esc_html( get_theme_mod( 'tfm_homepage_loop_title', '' ) ) . '</h2>';

			if ( get_theme_mod( 'tfm_homepage_loop_subtitle', '' ) )  {
				$html .= '<p class="sub-title">' . esc_html( get_theme_mod( 'tfm_homepage_loop_subtitle', '') ) . '</p>';
			}
			$html .= '</div>';

		}

		// Archive

		if ( ( get_theme_mod( 'tfm_archive_title', true ) && ( is_archive() || is_search() ) ) || tfm_is_woo( 'page' ) ) {

			$html .= '<header class="archive-header">';

			$html .= '<div class="archive-header-inner' . $bottom_padding . '">';

			// Author avatar
			if ( is_author() && get_theme_mod( 'tfm_archive_author_avatar', true ) ) {
				$html .= '<div class="author-avatar"><span>' . get_avatar( get_the_author_meta( 'ID' ), 120 ) . '</span></div>';
			} 

			$html .= '<div class="archive-description-wrap">';

			$html .= '<div class="archive-title-section">';

			if ( get_theme_mod( 'tfm_archive_post_count', true ) ) {

				$html .= '<span class="archive-subtitle post-count entry-meta">';

				$html .= tfm_get_post_count();

				$html .= '</span>';

			}

			if ( get_theme_mod( 'tfm_archive_title', true ) ) {


				if ( current_theme_supports( 'woocommerce') && class_exists('WooCommerce') ) {

					// Woo headers

					if ( is_shop() ) { // Shop page

						$html .= '<h1 class="archive-title"><span>' . get_the_title( get_option( 'woocommerce_shop_page_id' ) ). '</span></h1>';

					} elseif ( is_cart() || is_checkout() || is_account_page() ) { // Cart & Checkout Pages

						$html .= '<h1 class="archive-title"><span>' . get_the_title( ). '</span></h1>';

					} elseif ( is_product_category() || is_product_tag() ) { // Product category

						$html .= '<h1 class="archive-title">' . get_the_archive_title( ) . '</h1>';

					// End Woo Headers

					} elseif ( is_search() ) {

						$html .= '<h1 class="archive-title"><span>' . get_search_query() . '</span></h1>';

					} else {

						$html .= '<h1 class="archive-title">' . get_the_archive_title( ) . '</h1>';

					}

			} else {

				//  No Woo Output Theme headers

				if ( is_search() ) {

					$html .= '<h1 class="archive-title"><span>' . get_search_query() . '</span></h1>';

				} else {

					$html .= '<h1 class="archive-title">' . get_the_archive_title( ) . '</h1>';

				}

			}

			$html .= '</div>'; // Archive title section

			}

			// Open the desscription wrapper

			if ( ! is_author() && get_theme_mod( 'tfm_archive_description', true ) || is_author() && get_theme_mod( 'tfm_archive_author_bio', false ) || is_category() && get_theme_mod( 'tfm_archive_subcats', true ) ) {

				$html .= '<div class="archive-description-section">';

			}

			if ( ! is_author() && get_theme_mod( 'tfm_archive_description', true ) || is_author() && get_theme_mod( 'tfm_archive_author_bio', false ) ) {

				if ( tfm_is_woo( ) ) { // Shop page

					$shop_id = get_post( get_option( 'woocommerce_shop_page_id' ) );

					$html .= apply_filters('the_content', $shop_id->post_content); 

				} else {

					if ( is_author()) {
						$html .= '<p class="archive-description">' . get_the_archive_description( ) . '</p>';
					} else {
						$html .= get_the_archive_description( );
					}

				}

			}

			if ( is_category() && get_theme_mod( 'tfm_archive_subcats', true ) ) {

				// Display child categories if we have any

				$category = get_queried_object();
				$child_categories=get_categories(
	                array( 'parent' => $category->term_id,
	                        'hide_empty' => false )
	                        ); 

				if ( $child_categories ) {

					$html .= '<div class="sub-categories">';

					$html .= '<ul class="child-categories">';

	                foreach ( $child_categories as $child ) {

	                	if ( 0 !== $child->count ) {

	                	$html .= '<li class="child-cat"><a class="cat-link-' . $child->term_id . '" href="' . get_category_link( $child->term_id ) . '">' . $child->cat_name . '<span class="tag-link-count child-post-count">' . $child->count . '</span></a></li>';
	                	} else {
	                		$html .= '<li></li>';
	                	}

	                }

	                $html .= '</ul>';

	                $html .= '</div>';

	            }

			}

			if ( function_exists('tfm_author_social_meta') && get_theme_mod( 'tfm_archive_author_social', false)) {

				$html .= tfm_author_social_meta( true );

			}

			// Close description section
			if ( ! is_author() && get_theme_mod( 'tfm_archive_description', true ) || is_author() && get_theme_mod( 'tfm_archive_author_bio', false ) || is_category() && get_theme_mod( 'tfm_archive_subcats', true ) ) {

				$html .= '</div>';

			}

			$html .= '</div>'; // Description wrap

			// TFM Featured posts (override the default after_header() action)
			// This is a theme specific modification for tfm theme boost plugin

			if ( function_exists( 'tfm_featured_posts') && get_theme_mod( 'tfm_featured_posts', false ) ) {

				$html .= tfm_featured_posts( $forced_request = true, $return = true );

			}

			$html .= '</div>'; // Header inner

			$html .= '</header>';


		}

		echo wp_kses_post( $html );



	}

}
add_action('tfm_after_header', 'tfm_blog_header', 30 );

// ========================================================
// In Loop Sidebars
// ========================================================

if ( ! function_exists('tfm_in_loop_sidebar') ) {

	function tfm_in_loop_sidebar( $page, $count, $faux_count ) {
		
		if ( ( $page === 'home' && is_active_sidebar( 'loop-sidebar-home' ) && $count === get_theme_mod( 'tfm_homepage_loop_sidebar_position', '' ) ) ||
			 ( $page === 'category' && is_active_sidebar( 'loop-sidebar-category' ) && $count === get_theme_mod( 'tfm_archive_loop_sidebar_position', '' ) ) ) {

			$widget_background_class = '' !== get_theme_mod( 'tfm_widget_background', '' ) ? ' has-background' : '';
			$additional_class = tfm_get_post_layout() === 'grid-first-full' && $count === 1 ? ' first-full' : '';

			echo '<div class="article loop-sidebar sidebar post' . $widget_background_class . $additional_class . '">';

			echo '<div class="post-inner loop-sidebar-inner">';

			dynamic_sidebar( 'loop-sidebar-' . $page . '' );

			echo '</div>';

			echo '</div>';

		}

	}

}

// ========================================================
// Prev/Next Post Navigation
// ========================================================

if ( ! function_exists('tfm_prev_next_post') ) {

	function tfm_prev_next_post() {

		include_once( get_parent_theme_file_path( '/template-parts/post/single-post-navigation.php' )  );

	}

}

add_action('tfm_after_content', 'tfm_prev_next_post', 20 );

// ========================================================
// Author Bio
// ========================================================

if ( ! function_exists('tfm_author_bio') ) {

	function tfm_author_bio() {

		include_once( get_parent_theme_file_path( '/template-parts/post/single-authorbio.php' )  );

	}

}

add_action('tfm_after_content', 'tfm_author_bio', 10 );

// ========================================================
// Single hero layout
// ========================================================

if ( ! function_exists('tfm_single_hero_layout') ) {

	function tfm_single_hero_layout() {

		if ( ( is_single() || is_page() ) && ( in_array('hero-default', get_post_class()) || in_array('hero-cover', get_post_class()))) {

			while ( have_posts() ) : the_post();
				include_once( get_parent_theme_file_path( '/template-parts/post/content-hero.php' )  );
			endwhile;
		}

	}

}

add_action('tfm_after_wrap', 'tfm_single_hero_layout', 10 );

// ========================================================
// Video post format
// ========================================================

/*
 * Get the first video embed in the post
 * Display it in place of the featured image if selected
 */

if ( ! function_exists( 'tfm_featured_video' ) ) {

	function tfm_featured_video( $has_video_query = false, $return = true ) {

		if ( ! has_post_format( 'video') ) {
			return;
		}
		// Return if media is disabled for home and archive
		if ( ( is_home() && ! get_theme_mod( 'tfm_homepage_post_media', true ) ) || ( ( is_archive() || is_search() ) && ! get_theme_mod( 'tfm_archive_post_media', true ) ) ) {
			return;
		}

		$html = '';

		$full_width = is_single() && get_theme_mod( 'tfm_single_full_width', false ) ? ' alignfull' : '';

		if ( has_post_format( 'video') && ! in_array('hero-default', get_post_class( )) && ! in_array('hero-cover', get_post_class( )) ) {

			$content = apply_filters( 'the_content', get_the_content() );
			$video = false;

			// Only get video from the content if a playlist isn't present.
			if ( false === strpos( $content, 'wp-playlist-script' ) ) {
				$video = get_media_embedded_in_content( $content, array( 'video', 'object', 'embed', 'iframe' ) );

				if ( ! $video ) {
					return false;
				}

				// We have a video and a query request
				if ( $video && $has_video_query ) {
					return true;
				}
			}

			foreach ( $video as $video_html ) {
				
				// Figure out the block type by looking at the content string

				$type = 'tfm-video'; // Default is video block

				if ( strpos($video_html, 'oembed') !== false ) {
					$type = 'tfm-video-oembed'; // block oembed (Youtube block, Vimeo block etc.)
				}
				if ( strpos($video_html, 'shortcode') !== false ) {
					$type = 'tfm-video-shortcode'; // shortcode
				}

				$html .= '<figure class="wp-block-embed is-type-video ' . $type . ' wp-embed-aspect-16-9 wp-has-aspect-ratio tfm-featured-media' .  esc_attr( $full_width) . '"><div class="wp-block-embed__wrapper">';
				$html .= $video_html;
				$html .= '</div></figure>';

				return $html;

				break; // In case we have more than one embed lets break after the first iteration
			}

		} else {

			// Nothing here return false
			return false;
		}

	}

}

// ========================================================
// Audio post format
// ========================================================

/*
 * Get the first audio embed in the post
 * Display it in place of the featured image in single()
 */

if ( ! function_exists( 'tfm_featured_audio' ) ) {

	function tfm_featured_audio( $has_audio_query = false ) {

		if ( ! has_post_format( 'audio')) {
			return;
		}

		// Return if media is disabled in archive
		if ( ( is_home() && ! get_theme_mod( 'tfm_homepage_post_media', true ) ) || ( ( is_archive() || is_search() ) && ! get_theme_mod( 'tfm_archive_post_media', true ) ) ) {
			return;
		}

		$full_width = is_single() && get_theme_mod( 'tfm_single_full_width', false ) ? ' alignfull' : '';

		if ( has_post_format( 'audio' ) && has_block('audio') ) {

			if ( $has_audio_query ) {
				return true;
			}

			$content = apply_filters( 'the_content', get_the_content() );
			$audio = false;

			// Only get audio from the content if a playlist isn't present.
			if ( false === strpos( $content, 'wp-playlist-script' ) ) {
				$audio = get_media_embedded_in_content( $content, array( 'audio', 'object', 'embed', 'iframe' ) );

				if ( ! $audio ) {
					return false;
				}

				// We have a audio file and a query request
				if ( $audio && $has_audio_query ) {
					return true;
				}
			}

			foreach ( $audio as $audio_html ) {

				$type = 'audio';

				if ( strpos($audio_html, 'spotify') !== false ) {
					$type = 'is-provider-spotify';
				} 
				if ( strpos($audio_html, 'mixcloud') !== false ) {
					$type = 'is-provider-mixcloud';
				}
				if ( strpos($audio_html, 'soundcloud') !== false ) {
					$type = 'is-provider-soundcloud';
				}
				echo '<figure class="wp-block-embed is-type-audio ' . $type . ' wp-embed-aspect-16-9 wp-has-aspect-ratio tfm-featured-media' .  esc_attr( $full_width) . '"><div class="wp-block-embed__wrapper">';
				echo wp_kses_post( $audio_html );
				echo '</div></figure>';
				break; // In case we have more than one embed break after the first iteration
			}

		} else {

			// Nothing here return false
			return false;
		}

	}

}


// ========================================================
// Gallery post format
// ========================================================

/*
 * Get the first gallery embed in the post
 * Convert to a slick slideshow
 */

if ( ! function_exists( 'tfm_gallery_format_gallery' ) ) {

	function tfm_gallery_format_gallery( $has_gallery_query = false ) {

		if ( ! has_post_format( 'gallery') ) {
			return;
		}

		global $post;
		$blocks = parse_blocks( $post->post_content );

		$full_width = is_single() && get_theme_mod( 'tfm_single_full_width', false ) ? ' alignfull' : '';

		if ( has_post_format( 'gallery') && has_block('gallery', $post->post_content ) ) {

			// We have a gallery and a query request
			if ( $has_gallery_query ) {
				return true;
			} 

		foreach( $blocks as $block ) {

			if ( 'core/gallery' === $block['blockName'] ) {

				$html = '<div class="tfm-gallery-format-slideshow-wrapper">';
				$html .= '<div class="tfm-gallery-format-slideshow' .  esc_attr( $full_width) . '">';

				foreach ( $block['innerBlocks'] as $slide ) {

					$image_size = is_single() ? apply_filters( 'tfm_gallery_format_single_image_size', 'full' ) : apply_filters( 'tfm_gallery_format_archive_image_size', 'large' );

					$html .= '<figure class="wp-block-image">';
					$html .= wp_get_attachment_image( $slide['attrs']['id'], $image_size );
					$html .= '</figure>';

				}

				$html .= '</div>';
				$html .= '</div>';

				echo wp_kses_post( $html );

				break; // Break after first iteration

			}
		}

	} else {

		// We dont have a gallery
		return false;

	}

}

}

// ========================================================
// Set offset for homepage loop
// ========================================================

add_action('pre_get_posts', 'tfm_query_offset', 1 );

if ( ! function_exists( 'tfm_query_offset' ) ) {

	function tfm_query_offset(&$query) {

	    //Before anything else, make sure this is the right query...
	    if ( ! $query->is_home() ) {
	        return;
	    }

	    //First, define your desired offset...
	    $offset = get_theme_mod( 'tfm_homepage_loop_offset', 0 );
	    
	    //Next, determine how many posts per page you want (we'll use WordPress's settings)
	    $ppp = get_option('posts_per_page');

	    //Next, detect and handle pagination...
	    if ( $query->is_main_query() ) {
		    if ( $query->is_paged ) {

		        //Manually determine page query offset (offset + current page (minus one) x posts per page)
		        $page_offset = $offset + ( ($query->query_vars['paged']-1) * $ppp );

		        //Apply adjust page offset
		        $query->set('offset', $page_offset );

		    }
		    else {

		        //This is the first page. Just use the offset...
		        $query->set('offset',$offset);

		    }

		}
	}

}

// ========================================================
// Exclude single posts ID's from homepage loop
// ========================================================

if ( ! function_exists( 'tfm_exclude_single_posts_home' ) ) {

	function tfm_exclude_single_posts_home($query) {

	    //Before anything else, make sure this is the right query...
	    if ( ! $query->is_home() ) {
	        return;
	    }

	    $post_ids =  explode(',', get_theme_mod( 'tfm_homepage_exclude_posts_ids', '' ) );
	    if ( $query->is_home() && $query->is_main_query() ) {
	        $query->set( 'post__not_in', $post_ids );
	    }
	}

}
add_action('pre_get_posts', 'tfm_exclude_single_posts_home', 1);

// ========================================================
// Add iframe to allowed wp_kses_post
// ========================================================

/**
 *
 * @param array  $tags Allowed tags, attributes, and/or entities.
 * @param string $context Context to judge allowed tags by. Allowed values are 'post'.
 *
 * @return array
 */
if ( ! function_exists( 'tfm_iframe_wpkses_post_tags' ) ) {

function tfm_iframe_wpkses_post_tags( $tags, $context ) {

	if ( 'post' === $context ) {
		$tags['iframe'] = array(
			'src'             => true,
			'height'          => true,
			'width'           => true,
			'frameborder'     => true,
			'allowfullscreen' => true,
			'allow'           => true,
		);
	}

	return $tags;
}

}

add_filter( 'wp_kses_allowed_html', 'tfm_iframe_wpkses_post_tags', 10, 2 );

// ========================================================
// Modify WP Widgets HTML output
// ========================================================

// Categories widget add span around post count
function tfm_cat_widget_count_span( $links ) {

	$links = str_replace( '</a> (', '</a><span class="tfm-count">', $links );
	$links = str_replace( ')', ' <i>' . esc_html__( 'posts', 'zosia' ) . '</i></span>', $links );
	return $links;

}
add_filter( 'wp_list_categories', 'tfm_cat_widget_count_span' );

// Archives widget add span around post count
function tfm_archive_widget_count_span( $links ) {

	$links = str_replace( '</a>&nbsp;(', '</a><span class="tfm-count"><i class="hidden">(</i>', $links );
	$links = str_replace( ')', ' <i>' . esc_html__( 'posts', 'zosia' ) . '</i><i class="hidden">)</i></span>', $links );
	return $links;

}
add_filter( 'get_archives_link', 'tfm_archive_widget_count_span' );


// ========================================================
// Display primary menu description field
// ========================================================

if ( ! function_exists('tfm_primary_menu_desc')) {

	function tfm_primary_menu_desc( $item_output, $item, $depth, $args ) {
		
		if ( ( 'primary' == $args->theme_location || 'split-menu-left' == $args->theme_location || 'split-menu-right' == $args->theme_location || 'slide-menu-primary' == $args->theme_location ) && $item->description )
			$item_output = str_replace( '</a>', '<span class="menu-description">' . $item->description . '</span></a>', $item_output );
			
		return $item_output;
	}
}

add_filter( 'walker_nav_menu_start_el', 'tfm_primary_menu_desc', 10, 4 );

// ========================================================
// Check if this is a woocommerce page
// ========================================================

if ( ! function_exists( 'tfm_is_woo' ) ) {

	function tfm_is_woo( $woo_page ='' ) {

		$is_woo = false;

		if ( current_theme_supports( 'woocommerce') && class_exists('WooCommerce')) {

			// Shop
			if ( '' === $woo_page && is_shop() ) {
				$is_woo = true;
			}

			// Product page
			if ( $woo_page === 'product' && is_product() ) {
				$is_woo = true;
			}
			// Category/archive
			if ( $woo_page === 'archive' && ( is_product_category() || is_product_tag() ) ) {
				$is_woo = true;
			}
			// Cart/Checkout/Account
			if ( $woo_page === 'page' && ( is_cart() || is_checkout() || is_account_page() ) ) {
				$is_woo = true;
			}

		}

		return $is_woo;
	}

}

// ========================================================
// Customizer and core functions
// ========================================================
require get_parent_theme_file_path( '/inc/theme-settings.php' );
require get_parent_theme_file_path( '/inc/template-vars.php' );
require get_parent_theme_file_path( '/inc/hooks.php' );
require get_parent_theme_file_path( '/inc/plugin-filters.php' );
require get_parent_theme_file_path( '/inc/customizer/customizer.php' );
require get_parent_theme_file_path( '/inc/customizer/customizer_colors.php' );
require get_parent_theme_file_path( '/inc/custom_css.php' );
require get_parent_theme_file_path( '/inc/gutenberg_color_palette.php' );
require get_parent_theme_file_path( '/inc/sanitization.php' );
require get_parent_theme_file_path( '/inc/tgmpa.php' );
require get_parent_theme_file_path( '/inc/ocdi.php' );
// Woocommerce
if ( current_theme_supports( 'woocommerce') && class_exists('WooCommerce')) {
	require get_parent_theme_file_path( '/inc/woocommerce-functions.php' );
}

?>