@extends('front.layout.master')
@section('content') 


@php
	// $cat_id = getCategoryFromProducts($products);
	// dd($cat_id);

@endphp




<div class="d-flex flex-column">
	<div class="w-100 d-flex flex-row justify-content-start ali align-items-center">
		<h5 class="py-1 text-uppercase border-bottom border-danger my-0">
			san pham
		</h5>
		<h6 class="text-muted py-1 ml-2 my-0 text-capitalize">
			( {{ $products->count()}} san pham )
		</h6>
	</div>

	<div class="d-flex flex-row bg-white">
		<div class="px-0 all-product__option">

			<div class="border-bottom pb-0">
				<div class="w-100 all-product__option__item btn d-flex flex-row justify-content-between align-items-center">
					<span class="text-capitalize">
						Danh muc
					</span>
					<i class="fas fa-chevron-up"></i>
				</div>
				<div class="w-100">
					@foreach($categories as $category)
					<div class=" py-1 px-4 text-capitalize">
						<a href="{{ route('category.product-with-category' , $category->id) }}" class="text-dark">
							{{ $category->name }}
						</a>
					</div>
					@endforeach
				</div>
			</div>
			<form action="{{ route('locsp', 2) }}" method="post">
				<input type="hidden" name="_method" value="post" />
				{{ csrf_field() }}

				<div class="form-group border-bottom pb-3 m-0">
					<div class="w-100 all-product__option__item btn d-flex flex-row justify-content-between align-items-center">
						<span class="text-capitalize">
							thuong hieu
						</span>
						<i class="fas fa-chevron-up"></i>
					</div>

					<div class="w-100">
						<div class="d-flex flex-wrap px-3">
							@foreach($brands as $brand)

							<div class="col-sm-6 form-check m-0 p-1 pl-4">
								<input class="form-check-input " type="checkbox" name="">
								<label class="form-check-label text-capitalize">
									{{ $brand->name }}
								</label>
							</div>
							@endforeach
						</div>
					</div>
				</div>
				<div class="form-group border-bottom pb-3 m-0">
					<div class="w-100 all-product__option__item btn d-flex flex-row justify-content-between align-items-center">
						<span class="text-capitalize">
							Don gia
						</span>
						<i class="fas fa-chevron-up"></i>
					</div>

					<div class="w-100">
						<div class="d-flex flex-row all-product__option__price form-group m-0">
							<input type="text" name="min-price"  value="0" class="form-control" id="js-min-price">
							<input type="text" name="max-price" id="js-max-price"  value="99999999" class="form-control">
						</div>
						<button type="submit" >TIM</button>
					</div>
				</div>


{{-- 
				<div class="form-group border-bottom pb-0 m-0">
					man hinh
				</div>
				<div class="form-group border-bottom pb-0 m-0">
					ram
				</div>
				<div class="form-group border-bottom pb-0 m-0">
					bo nho trong
				</div>
				<div class="form-group border-bottom pb-0 m-0">
					
				</div>
				
				--}}
			</form>

		</div>
		<div class="all-product__view d-flex flex-column">
			{{-- {{ var_dump($products) }} --}}
			<div class="w-100 d-block border-bottom border-left">

				@foreach($products as $product)
				<a href="">
					<div class="col-sm-4 float-left p-3 border-top border-right">
						@include('front.layout.one-product', ['product'=>$product])
					</div>
				</a>
				@endforeach
			</div>
		</div>
	</div>
</div>	
@endsection
