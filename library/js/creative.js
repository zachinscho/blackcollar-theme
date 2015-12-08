/*!
 * Start Bootstrap - Creative Bootstrap Theme (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

(function($) {
    "use strict"; // Start of use strict

    // jQuery for page scrolling feature - requires jQuery Easing plugin
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 50)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });

    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 51
    })

    // Closes the Responsive Menu on Menu Item Click
    $('.navbar-collapse ul li a').click(function() {
        $('.navbar-toggle:visible').click();
    });

    // Fit Text Plugin for Main Header
    $("h1").fitText(
        1.2, {
            minFontSize: '35px',
            maxFontSize: '65px'
        }
    );

    // Offset for Main Navigation
    $('#mainNav').affix({
        offset: {
            top: 100
        }
    })

    // Initialize WOW.js Scrolling Animations
    new WOW().init();

})(jQuery); // End of use strict

$(document).ready(function() {
	launchHomePage();
});

function launchHomePage(){
	var header = $('.navbar-default');
	var scrollDown = $('.scroll_button');

	$(header).delay(2000).animate({opacity:1},100, "linear");
	/*
	$(header).delay(0).transition({opacity: 0},100, "linear", function(){
	 	  $(header).transition({opacity:1},800, "easeOutQuint");
	});*/

	$(scrollDown).delay(3000).animate({y:15, opacity: 0},100, "linear", function(){
	 	$(scrollDown).animate({y:0, opacity:1},1500, "easeOutQuint", function(){
	 	  	$('.scroll_button').addClass('fadeLoop');
	 	});
	}); 

	/* waypoints(); */
}
