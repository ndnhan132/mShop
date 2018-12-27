@extends('front.layout.master')
@section('content')
@include('front.layout.banner-slide')    
@include('front.layout.top-slide')    
@include('front.layout.home-product')
{{-- @php
 function getBrandOfCategory(App\Category $category){
	$brands = collect([]);
	foreach($category->products as $p){
		$brands->push($p->brand->only(['id', 'name']));
	}
	return $brands->unique();
}
@endphp --}}
@endsection
