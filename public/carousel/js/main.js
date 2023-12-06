(function($) {

	"use strict";

	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	var carousel = function() {
		$('.owl-carousel').owlCarousel({
	    loop: true,
	    autoplay: true,
	    margin:20,
	    animateOut: 'fadeOut',
	    animateIn: 'fadeIn',
	    nav:false,
	    dots: true,
	    autoplayHoverPause: false,
	    items: 1,
	    navText : ["<span class='ion-ios-arrow-back'></span>","<span class='ion-ios-arrow-forward'></span>"],
	    responsive:{
			// mengatur berapa item yang dimunculkan setiap dot
			0: {
				items: 1,
				dotsEach: 7 
			},
			600: {
				items: 2,
				dotsEach: 7
			},
			1000: {
				items: 4,
				dotsEach: 7
			}
	    }
		});

	};
	carousel();

})(jQuery);