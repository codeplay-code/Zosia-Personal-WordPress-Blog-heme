/**
 * Customizer Live Preview
 *
 * Reloads changes on Theme Customizer Preview asynchronously
 *
 */
 
( function( $ ) {
    
    /* Post Background Colour */
    wp.customize( 'tfm_archive_post_background', function( value ) {
        value.bind( function( newval ) {
            if ( '' !== newval ) {
                $( '.archive .post-grid .article, .blog .post-grid .article' ).addClass( 'has-background' );
                $( '.archive .post-grid .article.has-background:not(.cover) .entry-wrapper, .blog .post-grid .article.has-background:not(.cover) .entry-wrapper' ).css( 'background', newval );
            } else {
                $( '.archive .post-grid .article.has-background:not(.cover) .entry-wrapper, .blog .post-grid .article.has-background:not(.cover) .entry-wrapper' ).css( 'background', 'none' );
                $( '.archive .post-grid .article.has-background, .blog .post-grid .article.has-background' ).removeClass( 'has-background' );
            }
        } );
    } );

    /*---------------------------------------*/
    /* Homepage                              */
    /*---------------------------------------*/

    // Homepage Title
    wp.customize( 'tfm_homepage_loop_title', function( value ) {
        value.bind( function( to ) {
            $( '.home-title .page-title' ).text( to );
        } );
    } );

    // Homepage subtitle
    wp.customize( 'tfm_homepage_loop_subtitle', function( value ) {
        value.bind( function( to ) {
            $( '.home-title .sub-title' ).text( to );
        } );
    } );

    // Homepage columns
    wp.customize( 'tfm_homepage_loop_cols', function( value ) {
        value.bind( function( newval ) {
            if ( '1' === newval ) {
                $( '.blog .post-grid' ).addClass( 'cols-1' );
                $( '.blog .post-grid' ).removeClass( 'cols-2 cols-3 cols-4' );
            } else if ( '2' === newval ) {
                $( '.blog .post-grid' ).addClass( 'cols-2' );
                $( '.blog .post-grid' ).removeClass( 'cols-1 cols-3 cols-4' );
            } else if ( '3' === newval ) {
                $( '.blog:not(.has-sidebar) .post-grid' ).addClass( 'cols-3' );
                $( '.blog:not(.has-sidebar) .post-grid' ).removeClass( 'cols-1 cols-2 cols-4' );
            } else if ( '4' === newval ) {
                $( '.blog:not(.has-sidebar) .post-grid' ).addClass( 'cols-4' );
                $( '.blog:not(.has-sidebar) .post-grid' ).removeClass( 'cols-1 cols-2 cols-3' );
            }
        } );
    } );

    // Homepage post style
    wp.customize( 'tfm_homepage_loop_style', function( value ) {
        value.bind( function( newval ) {
            if ( 'cover' === newval ) {
                $( '.blog .post-grid .article' ).addClass( 'cover' );
                $( '.blog .post-grid .article' ).removeClass( 'default' );
            } else if ( 'default' === newval ) {
                $( '.blog .post-grid .article' ).addClass( 'default' );
                $( '.blog .post-grid .article' ).removeClass( 'cover' );
            } 
        } );
    } );

    // Homepage thumbnail aspect ratio
    wp.customize( 'tfm_homepage_thumbnail_aspect_ratio', function( value ) {
        value.bind( function( newval ) {
            if ( 'wide' === newval ) {
                $( '.blog .post-grid .article' ).addClass( 'thumbnail-wide' );
                $( '.blog .post-grid .article' ).removeClass( 'thumbnail-landscape thumbnail-square thumbnail-portrait thumbnail-uncropped' );
            } else if ( 'landscape' === newval ) {
                $( '.blog .post-grid .article' ).addClass( 'thumbnail-landscape' );
                $( '.blog .post-grid .article' ).removeClass( 'thumbnail-wide thumbnail-square thumbnail-portrait thumbnail-uncropped' );
            } else if ( 'portrait' === newval ) {
                $( '.blog .post-grid .article' ).addClass( 'thumbnail-portrait' );
                $( '.blog .post-grid .article' ).removeClass( 'thumbnail-wide thumbnail-square thumbnail-landscape thumbnail-uncropped' );
            } else if ( 'square' === newval ) {
                $( '.blog .post-grid .article' ).addClass( 'thumbnail-square' );
                $( '.blog .post-grid .article' ).removeClass( 'thumbnail-wide thumbnail-portrait thumbnail-landscape thumbnail-uncropped' );
            } else if ( 'uncropped' === newval ) {
                $( '.blog .post-grid .article' ).addClass( 'thumbnail-uncropped' );
                $( '.blog .post-grid .article' ).removeClass( 'thumbnail-wide thumbnail-portrait thumbnail-landscape thumbnail-square' );
            } 
        } );
    } );


    /*---------------------------------------*/
    /* Archive/Category                      */
    /*---------------------------------------*/

    // Columns
    wp.customize( 'tfm_archive_loop_cols', function( value ) {
        value.bind( function( newval ) {
            if ( '1' === newval ) {
                $( '.archive .post-grid, .search .post-grid' ).addClass( 'cols-1' );
                $( '.archive .post-grid, .search .post-grid' ).removeClass( 'cols-2 cols-3 cols-4' );
            } else if ( '2' === newval ) {
                $( '.archive .post-grid, .search .post-grid' ).addClass( 'cols-2' );
                $( '.archive .post-grid, .search .post-grid' ).removeClass( 'cols-1 cols-3 cols-4' );
            } else if ( '3' === newval ) {
                $( '.archive:not(.has-sidebar) .post-grid, .search:not(.has-sidebar) .post-grid' ).addClass( 'cols-3' );
                $( '.archive:not(.has-sidebar) .post-grid, .search:not(.has-sidebar) .post-grid' ).removeClass( 'cols-1 cols-2 cols-4' );
            } else if ( '4' === newval ) {
                $( '.archive:not(.has-sidebar) .post-grid, .search:not(.has-sidebar) .post-grid' ).addClass( 'cols-4' );
                $( '.archive:not(.has-sidebar) .post-grid, .search:not(.has-sidebar) .post-grid' ).removeClass( 'cols-1 cols-2 cols-3' );
            }
        } );
    } );

    // Post style
    wp.customize( 'tfm_archive_loop_style', function( value ) {
        value.bind( function( newval ) {
            if ( 'cover' === newval ) {
                $( '.archive .post-grid .article, .search .post-grid .article' ).addClass( 'cover' );
                $( '.archive .post-grid .article, .search .post-grid .article' ).removeClass( 'default' );
            } else if ( 'default' === newval ) {
                $( '.archive .post-grid .article, .search .post-grid .article' ).addClass( 'default' );
                $( '.archive .post-grid .article, .search .post-grid .article' ).removeClass( 'cover' );
            } 
        } );
    } );

    // Thumbnail aspect ratio
    wp.customize( 'tfm_archive_thumbnail_aspect_ratio', function( value ) {
        value.bind( function( newval ) {
            if ( 'wide' === newval ) {
                $( '.archive .post-grid .article, .search .post-grid .article' ).addClass( 'thumbnail-wide' );
                $( '.archive .post-grid .article, .search .post-grid .article' ).removeClass( 'thumbnail-landscape thumbnail-square thumbnail-portrait thumbnail-uncropped' );
            } else if ( 'landscape' === newval ) {
                $( '.archive .post-grid .article, .search .post-grid .article' ).addClass( 'thumbnail-landscape' );
                $( '.archive .post-grid .article, .search .post-grid .article' ).removeClass( 'thumbnail-wide thumbnail-square thumbnail-portrait thumbnail-uncropped' );
            } else if ( 'portrait' === newval ) {
                $( '.archive .post-grid .article, .search .post-grid .article' ).addClass( 'thumbnail-portrait' );
                $( '.archive .post-grid .article, .search .post-grid .article' ).removeClass( 'thumbnail-wide thumbnail-square thumbnail-landscape thumbnail-uncropped' );
            } else if ( 'square' === newval ) {
                $( '.archive .post-grid .article, .search .post-grid .article' ).addClass( 'thumbnail-square' );
                $( '.archive .post-grid .article, .search .post-grid .article' ).removeClass( 'thumbnail-wide thumbnail-portrait thumbnail-landscape thumbnail-uncropped' );
            } else if ( 'uncropped' === newval ) {
                $( '.archive .post-grid .article, .search .post-grid .article' ).addClass( 'thumbnail-uncropped' );
                $( '.archive .post-grid .article, .search .post-grid .article' ).removeClass( 'thumbnail-wide thumbnail-portrait thumbnail-landscape thumbnail-square' );
            } 
        } );
    } );


} )( jQuery );