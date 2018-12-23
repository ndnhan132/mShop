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

	$('#js-carouselTopSlideControls').carousel({
		interval: false
	});
	$('#js-descriptionSlide').carousel({
		interval: false
	});
	$('#js-carouselTopSlideControls').on('slid.bs.carousel', function() {
		var i = $('#js-carouselTopSlideControls .active').attr('id');
		// $('#js-descriptionSlide p').removeClass('font-weight-bold');
		$('#js-descriptionSlide .js-item').each(function(){
			
			$(this).removeClass('active');
			if($(this).attr('id') === ('js-' +i)){
				$(this).addClass('active');
				var id ="#js-descriptionSlide .active div #js-des-" + i;
				$(id).parent().addClass('banner__bot--highlight border');
			}
		});

	});

	$('#js-descriptionSlide .js-item').each(function(){
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

	$('#js-carouselTopSlideControls .banner__top__item').each(function(){
		if($(this).hasClass('active')){
			console.log($(this).attr('id'));
		}
	});



});