var $ = jQuery;

//  Mobile menu slide
$(".mobile-menu").click(function() {
	$("#main-navigation").slideToggle();
	$(".main-header").toggleClass("header-active");
});

// Remove Mobile Nav on Desktop Function
function dothis() {
	if ($(window).width() >= 640) {
		$('.main-header').removeClass('header-active');
	}
};

$("ul#main-navigation li.request_demo a").attr("data-toggle", "modal");
$("ul#main-navigation li.request_demo a").attr("data-target", "#contact-modal");

/*$("ul#main-navigation li.request_demo a").click(function(){
	//$("#request-demo-modal.menu_modal").addClass("modal_open");
	$(".modal.menu_modal").css("display","block");
	//alert("Hi");
});*/

// Scroll to Top
$("a[href='#top']").click(function() {
	$("html, body").animate({ scrollTop: 0 }, "slow");
	return false;
});

// Toggle Accordions/Collapse
$(".collapse-toggle").click(function(){
	$(this).toggle();
	$(this).parent().next('.collapse').slideToggle();
	$(this).next('.collapse').slideToggle();
})

// Panel Overlay Text Toggle
$('[data-toggle="panel"]').click(function(){
	var tar = $(this).data('target');
	var panels = $(this).closest('.flex__wrapper').find('.panel-overlay');
	$(panels).fadeOut();
	console.log(tar);
	$(tar).css('display', 'flex');
	if ($(tar).is(':hidden'))
	$(tar).show('medium', function() {
		if ($(this).is(':visible'))
		$(this).css('display','flex');
	});
})

// Change header opacity on scroll
$(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 72) {
        $(".main-header").addClass("scrolled");
    } else {
        $(".main-header").removeClass("scrolled");
    }
});

// ======================================================
//  APPEAR ON SCROLL ANIMATION
// ======================================================
//Fade In in View
$(function() {
	setTimeout(function() {
		$('.fade-in').addClass('fade-in-show');
	}, 500);

});
var $animation_elements = $('.fade-in');
var $window = $(window);

function check_if_in_view() {
	var window_height = $window.height();
	var window_top_position = $window.scrollTop();
	var window_bottom_position = (window_top_position + window_height);
	$.each($animation_elements, function() {
		var $element = $(this);
		var element_height = $element.outerHeight();
		var element_top_position = $element.offset().top;
		var element_bottom_position = (element_top_position + element_height);
		//check to see if this current container is within viewport
		if ((element_bottom_position >= window_top_position) &&
		(element_top_position <= window_bottom_position)) {
			$element.addClass('in-view');
		} else {
			// $element.removeClass('in-view');
		}
	});
}
$window.on('scroll resize', check_if_in_view);
$window.trigger('scroll');


// Isotope
$(window).load(function() {
	$('.grid').isotope({
		itemSelector: '.article-container-half',
		percentPosition: true,
		layoutMode: 'masonry',
		horizontalOrder: true,
		masonry: {
			columnWidth: '.article-container-half'
		}
	});
});
