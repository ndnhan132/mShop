$(document).ready(function($) {

	$('#js-carouselTopSlideControls').mouseenter(function(event) {
		/* Act on the event */
		$('#js-carouselTopSlideControls > a').show();
	});
	$('#js-carouselTopSlideControls').mouseleave(function(event) {
		/* Act on the event */
		$('#js-carouselTopSlideControls > a').hide();
	});	
	$('.js-setItemWidth_1-4').width($('.banner__bot').width()/4-1);
	$('.js-setItemWidth').width($('.banner__bot').width());

	//https://www.codeply.com/go/FrzoIEKCdH/bootstrap-4-carousel-multiple
	// $('#recipeCarousel').carousel({
	// 	interval: 10000000000000000000
	// })

	$('#js-carouselTopSlideControls').carousel({
		interval: false
	});

	$('#js-descriptionSlide .js-item').each(function(){
		// if($(this 'div').hasClass('active')){
		// 	$('.js-item p').addClass('font-weight-bold');
		// }
		var next = $(this).next();
		if (!next.length) {
			next = $(this).siblings(':first');
		}
		next.children(':first-child').clone().appendTo($(this));

		if (next.next().length>0) {
			next.next().children(':first-child').clone().appendTo($(this));
		}
		else {
			$(this).siblings(':first').children(':first-child').clone().appendTo($(this));
		}
	});

	// $('#js-carouselTopSlideControls')


});