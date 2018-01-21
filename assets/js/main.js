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
