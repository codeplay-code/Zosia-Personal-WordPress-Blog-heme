jQuery( document ).ready( function() {

	"use strict";
	
	var container = document.querySelector('.masonry-container');
	//create empty var msnry
	var msnry;
	// initialize Masonry after all images have loaded
	imagesLoaded( container, function() {
	    msnry = new Masonry( container, {
	        itemSelector: '.masonry-container .article',
	        columnWidth: '.masonry-container .article',  
	    });
	});
});