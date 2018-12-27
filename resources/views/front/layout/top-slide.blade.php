<div class="container home-hot-product mt-3 p-0 bg-white">
	<div class="home-hot-product__header mx-auto d-flex justify-content-center">
		<img src="/img/noel-dekstop.png" align="" class="">
	</div>

	<div id="carouselExampleControls" class="carousel slide home-hot-product__content pb-1" data-ride="carousel">
		<div class="carousel-inner">
			@php($arr = [])
			@foreach($homeHotProducts as $key=>$product)
			@if(count($arr) < 5)
			@php($arr = array_prepend($arr , $product))
			@else
			<div class="carousel-item  {{ $key === 5 ? 'active' : '' }}">

				@foreach($arr as $p)
				<div class="card p-0 m-0 pt-3 pb-2 px-3 border-0 d-inline-block">
					<a href="" class="card-link">
						<div class="w-100">
							<img src="{{ $p->images->first()->link }}" alt="" class="card-img-top img-fluid py-0 px-1">
							<div class="home-product__shock">
								{{ $p->short_description }}
							</div>
						</div>
						<div class="card-body text-dark p-0">
							<p class="card-title text-capitalize text-truncate text-left mb-1">
								{{ $p->name }}
							</p>
							<p class="card-text text-left font-weight-bold mb-1">
								{{ number_format($p->price,'0',',','.') }} ₫
							</p>
							<p class="card-text text-left home-hot-product__content--three-line">
								{{ $p->long_description }}
							</p>
						</div>
					</a>
				</div>
				@endforeach
			</div>
			@php ($arr = [])
			@endif
			@endforeach
		</div>
		<div class="btn btn-outline-light border-0 p-0 pr-1	 carousel-control-prev home-hot-product__control p-0" href="#carouselExampleControls" role="button" data-slide="prev">
			<i class="fas fa-caret-left"></i>
		</div>
		<div class="btn btn-outline-light border-0 p-0 pl-1	 carousel-control-next home-hot-product__control p-0" href="#carouselExampleControls" role="button" data-slide="next">
			<i class="fas fa-caret-right"></i>
		</div>
	</div>
</div>