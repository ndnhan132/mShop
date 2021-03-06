<div class="w-100 bg-white mt-3">
	<div class="home-product-nav navbar navbar-expand-lg navbar-light p-0 border-bottom-0">
		<span class="text-uppercase col-sm-4 home-product-nav--font-16 py-2">
			{{ $category->name}} NỔI BẬT NHẤT
		</span>
		<div class="col-sm-8 collapse navbar-collapse px-0">
			<ul class="navbar-nav w-100 d-flex flex-row justify-content-end">	
				@foreach(getBrandOfCategory($category) as $brand)
				<li class="nav-item px-1">
					<a href="" class="nav-link home-product-nav--font-14 text-capitalize text-info">
						{{ $brand["name"] }}
					</a>
				</li>
				@endforeach
				<li class="nav-item">
					<a href="" class="nav-link pr-3 home-product-nav--font-14 text-capitalize text-info">
						xem nhiều {{ $category->name }} hơn
					</a>
				</li>
			</ul>
		</div>
	</div>


	<div class="home-product d-flex flex-row">


		<div class="home-product--w40 border-top">
			@php
			$productImg = $category->products->sortBy('created_at')->first();
			@endphp
			<div class="w-100 card h-100 border-0">
				<a href="" class="card-link">
					<img src="{{ $productImg->images->first()->link }}" class="card-img-top px-5 pt-4">

					<div class="card-body pt-3 px-5">
						<p class="card-title text-info text-capitalize">
							{{ $productImg->name }}
						</p>
						<div class="d-flex flex-row justify-content-between ">
							<p class="card-text home-product--txt-red mx-0 mb-1">
								{{ number_format($productImg->price, '0',',','.')}} ₫
							</p>
							<div class="card-text home-product--txt-red bg-warning d-block py-0 px-4 m-0 border border-danger rounded-circle">
								{{ $productImg->short_description }}
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>



		<div class="home-product--w60 d-block px-0">
			@foreach($category->products->sortBy('created_at') as $key => $product)
			@if($key > 0 && $key <= 6)
			<div class="w-100">
				<a href="">
					<div class="col-sm-4 p-0 float-left border-top border-left p-3 pb-4">
						@include('front.layout.one-product', ['product'=> $product])
					</div>
				</a>
			</div>
			@elseif($key > 6)
			@break
			@endif
			@endforeach
		</div>
	</div>	
</div>