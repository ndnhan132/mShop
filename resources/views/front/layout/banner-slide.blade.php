<div class="container p-0 mt-1 homeBanner  d-flex flex-row carousel slide"  data-ride="carousel"  id="js-homeCarousel">

	<div class="carousel-inner col-sm-8 p-0" id="js-homeBannerImage">
		@foreach($homeBanners as $key=>$banner)
		<div class="carousel-item {{ $key === 0 ?'active' : '' }}" id="img-{{ $key }}">
			<img src="{{ $banner->images->first()->link }}" alt="..." class="d-block w-100 img-fluid">
		</div>
		@endforeach
	</div>
	<div class="col-sm-4 p-0" id="js-homeBannerDescription">
		<ul class="list-group h-100 ml-2 homeBanner__description d-flex flex-column">
			@php
			$bannerItemHeight = 100/($homeBanners->count()-1) .'%';
			@endphp
			@foreach($homeBanners as $key=>$banner)
			<li data-target="#js-homeCarousel" data-slide-to="{{ $key }}" class="list-group-item m-0 rounded-0 border-0  align-items-center p-0 		
			{{ $key === 0 ?'d-none' : 'd-flex flex-row' }}
			{{ $key === $homeBanners->count()-1 ? ' mb-0 ':' mb-1 ' }}"
			style="height: {{ $bannerItemHeight}}">
			<div class="col-sm-6 border-0 border-danger m-0 p-0">
				<img src="{{ $banner->images->first()->link }}" alt="..." class="img-fluid d-block ">
			</div>
			<div class="col-sm-6 border-0 border-warning px-2">
				<a href="" class="text-center text-capitalize text-dark">
					{{ $banner->description }}
				</a>
			</div>
		</li>
		@endforeach
	</ul>
</div>
</div>