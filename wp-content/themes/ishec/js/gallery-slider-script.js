// JavaScript Document
(function ($) {
	"use strict";	
	
	/* ==========================================================================
	   Banner Rotater
	   ========================================================================== */
	var bannerRotater = $("#gallerySlider");
	bannerRotater.owlCarousel({
		animateIn: 'fadeIn',
		animateOut: 'fadeOut',
		lazyLoad: true,
		loop: true,
		autoplay: true,
		mouseDrag  : false,			
		items: 3,		
        touchDrag: true,        
		responsive: {
			0: {
				items: 1,
			},
			1000: {
				items: 1,
			}
		}
	});
	
	var leftnav = $(".introcarousel-lft-nav");
	leftnav.on('click', function (e) {
		bannerRotater.trigger('prev.owl.carousel');
	});

	var rightnav = $(".introcarousel-rgt-nav");
	rightnav.on('click', function (e) {
		bannerRotater.trigger('next.owl.carousel');
	});

})(jQuery);
