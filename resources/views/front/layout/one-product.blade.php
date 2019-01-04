<div class="card rounded-0 border-0">
	<div class="w-100">
		<img class="card-img-top img-fluid px-4" src="{{ $product->images->random()->link}}" alt="{{ $product->images->random()->link}}">
		<div class="home-product__shock">
			{{ $product->short_description }}
		</div>
	</div>
	<div class="card-body text-dark px-1 pb-0 pt-0">
		<p class="card-title text-capitalize text-truncate text-left mb-0">
			{{ $product->name}}
		</p>
		<p class="card-text text-left font-weight-bold home-product--font-13 home-product--txt-red">
			{{ number_format($product->price, '0',',','.')}} ₫
		</p>
	</div>
</div>