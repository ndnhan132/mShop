@extends('front.layout.master')
@section('content') 
<div class="d-flex flex-column">
	<div class="w-100 d-flex flex-row justify-content-start ali align-items-center">
		<h5 class="py-1 text-uppercase border-bottom border-danger my-0">
			san pham
		</h5>
		<h6 class="text-muted py-1 ml-2 my-0 text-capitalize">
			( {{ $products->count()}} san pham )
		</h6>
	</div>

	<div class="d-flex flex-row bg-white" style="height: 1111px">
		<div class="border px-0 all-product__option">

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
						<a href="" class="text-dark">
							{{ $category->name }}
						</a>
					</div>
					@endforeach
				</div>
			</div>


			<form>
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
						<div class="d-flex flex-column">
							<div class="price-slide-range w-100">
								<input type="range" min="1" max="100" value="50" class="slider" id="myRange">
							</div>
						</div>
					</div>
				</div>



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
				

			</form>

		</div>
		<div class="col-sm-6">

		</div>
	</div>
</div>	
@endsection
