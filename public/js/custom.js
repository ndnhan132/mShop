$(document).ready(function($) {
	var homeBannerImageHeight =$('#js-homeCarousel #js-homeBannerImage img').height();
	$('#js-homeCarousel #js-homeBannerDescription').height(homeBannerImageHeight);



	$('#js-homeCarousel').carousel({
		interval: 5000
	});
	var bannerActive = $('#js-homeCarousel #js-homeBannerImage .carousel-item').hasClass('active');
	$('#js-homeCarousel').on('slid.bs.carousel', function() {
		if(bannerActive){
			var id= $('#js-homeCarousel #js-homeBannerImage .active').attr('id').slice(4);
			$('#js-homeCarousel #js-homeBannerDescription .homeBanner__description li').each(function(){
				if($(this).attr('data-slide-to')===id){
					$(this).addClass('d-none');
					$(this).removeClass('d-flex flex-row');
				}else{
					$(this).removeClass('d-none');
					$(this).addClass('d-flex flex-row');
				}
			});
			
		}
	});

	// $('.all-product__option__item').next('ul').hide();
	$('.all-product__option__item').click(function(event){
		event.preventDefault();
		$(this).next('div').slideToggle("slow");
		// $(this).next('ul').hide();
		$(this).find("i").toggleClass('fa-chevron-up fa-chevron-down');
	});

	$('#js-min-price,#js-max-price').on("keyup" , function(event) {
		$(this).val(
			$(this).val().split("").map(function(item){
				return !isNaN(item) ? item : '';
			}).join('')
		)
	});

});