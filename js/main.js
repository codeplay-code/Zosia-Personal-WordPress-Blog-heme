jQuery(document).ready(function($){

  "use strict";

/*---------------------------------------*/
/* Sticky Header Nav                     */
/*---------------------------------------*/

     var nav = $('.site-header.sticky-nav');
     var body = $('body.has-sticky-nav');
     var wrapper = $('body.custom-background .site-wrapper');
     var navheight = $(".site-header.sticky-nav .primary-menu-container").outerHeight(); // Primary mav height
     var headerheight = $(".site-header.sticky-nav").outerHeight(); // Header height
     if ( body.hasClass('has-loop-header') && !$(body).hasClass('has-tfm-hero') && !$(body).hasClass('has-tfm-ad-after-header') && !$('.site-header').hasClass('logo-below-nav')) {
        headerheight = headerheight + 40; // style.css .blog .section-header.home-title margin-top in px
     }
     var logoheight = $(".site-header.sticky-nav .header-layout-wrapper").outerHeight() - navheight;
     var scrolltop = logoheight;

     if ($('.site-header.sticky-nav').hasClass('logo-left-menu-right') || $('.site-header.sticky-nav').hasClass('logo-split-menu') || $('.site-header.sticky-nav').hasClass('logo-below-nav') ) {
        scrolltop = 0;
      }
    
    $(window).on('scroll', function () {
        if ($(this).scrollTop() > scrolltop ) {
            nav.addClass("fixed").css("margin-top", "-" + headerheight + "px" );
            body.addClass("body-fix").css("margin-top", "" + headerheight + "px" );
            $('.site-header:not(.logo-left-menu) .primary-menu-container .toggle.has-sticky-toggle-background').css("width", "");
        } else {
            nav.removeClass("fixed").css("margin-top", "" );
            body.removeClass("body-fix").css("margin-top", "" );
            wrapper.css("padding-top", "" );
        }
    });


/*---------------------------------------*/
/* Slide Menu Sidebar                    */
/*---------------------------------------*/

$(".toggle-menu span, .toggle-sidebar.mobile-navigation .close-menu span, .menu-overlay").on('click', function() {
        $(".mobile-navigation").toggleClass("show");
        $(".menu-overlay").fadeToggle(400);
});

// Expand the parent/child menu
$('ul.primary-nav-sidebar li.menu-item-has-children > span.expand').on('click', function(event) {
    event.preventDefault();
   $(this).next('.sub-menu').slideToggle(200);
   $(this).next('.sub-menu').toggleClass("visible");
   $(this).toggleClass("close");
});

/*---------------------------------------*/
/* Search sidebar                        */
/*---------------------------------------*/

  $(".toggle-search span, .site-search  .close-menu span, .sub-message-404 .toggle-search").on('click', function() {
        $(".site-search").toggleClass("show-search");
        $(".site-search").fadeToggle(300);

        // Focus the cursor on the search field when it's visible
        $(".site-search.show-search .search-field").focus();

        // Remove focus when not visible
        $('.site-search:not(.show-search) .search-field').blur();


});

/*---------------------------------------*/
/* ESC key close of open toggle elements */
/*---------------------------------------*/

$(document).keyup(function(e) { 
        if (e.keyCode == 27) { // esc keycode
            if($(".site-search").hasClass("show-search")) {
               $(".site-search").toggleClass("show-search");
               $(".search-overlay").fadeToggle(400);
            }
            if($('.mobile-navigation').hasClass("show")) {
               $(".mobile-navigation").toggleClass("show");
               $(".menu-overlay").fadeToggle(400);
            }
        }
    });

/*---------------------------------------*/
/* smooth scroll to top                  */
/*---------------------------------------*/
$(".backtotop").on('click', function(event){
    event.preventDefault();
    $('body,html').animate({
        scrollTop: 0 ,
        }, 500
    );
});
/*---------------------------------------*/
/* Back to Top Pop Up Link               */
/*---------------------------------------*/
// browser window scroll (in pixels) after which the "back to top" link is shown
    var offset = 1200,
        //duration of the top scrolling animation (in ms)
        scroll_top_duration = 100,
        //grab the "back to top" link
        $back_to_top = $('.goto-top');

    //hide or show the "back to top" link
    $(window).on('scroll', function(){
        ( $(this).scrollTop() > offset ) ? $back_to_top.addClass("visible") : $back_to_top.removeClass("visible");
    });
/*---------------------------------------*/
/* smooth scroll anchor links            */
/*---------------------------------------*/
$(document).on('click', 'a[href^="#comments"], a[href^="#reviews"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 800);
});

/*---------------------------------------*/
/* Toggle comments                       */
/*---------------------------------------*/

$('.toggle-comments').on('click', function() {
   $('#comments').slideToggle(400);
   $('#comments').toggleClass("open");
   $(this).toggleClass("close");
});
// Comments anchor link open and reset toggle comments
$('.entry-meta-comment-count a').on('click', function() {
   if (! $('#comments').hasClass("open") ) {
    $('#comments').slideToggle(400);
    $('#comments').toggleClass("open");
    $('.toggle-comments').toggleClass("close");
   }
});
$('.comments-pagination a.page-numbers').on('click', function() {
   if ($('#comments').hasClass("close") ) {
    $('#comments').slideToggle(400);
    $('#comments').toggleClass("close");
    $('.toggle-comments').toggleClass("open");
   }
});

if ($("body").hasClass("rtl")) {
// Gallery slideshow
$('.format-gallery .tfm-gallery-format-slideshow').slick({
            rtl: true,
        }); 

} else {
    $('.format-gallery .tfm-gallery-format-slideshow').slick();
}


});

