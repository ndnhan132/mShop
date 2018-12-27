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
});