<div class="container border p-0 d-flex flex-row mt-2 banner">

	<div class="col-sm-8 pl-0 d-flex flex-column">
		<div id="js-carouselTopSlideControls" class="carousel slide banner__top" data-ride="carousel">
			<div class="carousel-inner w-100">
				@foreach($topBanners as $key => $banner)
				@if(!empty($banner->images->first()->link))
				<div class="carousel-item {{ $key===0 ? 'active' : ''}} banner__top__item" id="{{ $banner->id }}">
					<img class="d-block w-100 img-fluid" src="{{ $banner->images->first()->link }}" alt="First slide">

					<div class="carousel-caption d-none d-md-block">
						<h1 class="text-danger">{{ $key }}</h5>
						</div>
					</div>
					@endif
					@endforeach
				</div>

				<a class="carousel-control-prev" href="#js-carouselTopSlideControls" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>	
				</a>
				<a class="carousel-control-next" href="#js-carouselTopSlideControls" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>			

			</div>


			<ol id="js-descriptionSlide" class="banner__bot carousel slide bg-white w-100 d-block" data-ride="carousel" >
				<div class="carousel-inner" role="listbox">
					@foreach($topBanners as $key => $banner)
					<li 
					{{-- data-target="#js-carouselTopSlideControls" data-slide-to="{{ $key }}" --}}
					class="
					{{ $key===0 ? 'active' : '' }} 
					carousel-item js-item"
					>
					<div

					data-target="#js-carouselTopSlideControls" data-slide-to="{{ $key }}"
					class="d-block col-sm-4 float-right
					{{-- {{ $key===1 ? 'active' : '' }}  --}}
					">
					<p class="d-block text-dark text-center text-capitalize font-weight-normal m-0 p-1">{{ $key }} --- {{ $banner->description }}</p>
				</div>
			</li>
			@endforeach
		</div>
	</ol>

</div>



<div class="col-sm-4">
	<p id="sss">ddfdfd</p>
</div>
</div>