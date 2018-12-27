<div class="w-100">
	@foreach($categories as $key=>$category)
		@include('front.layout.home-product-child', ['category'=>$category])
	@endforeach
</div>