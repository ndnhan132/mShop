<?php 

if (! function_exists('getBrandOfCategory')) {
	function getBrandOfCategory(App\Category $category){
		$brands = collect([]);
		foreach($category->products as $p){
			$brands->push($p->brand->only(['id', 'name']));
		}
		return $brands->unique();
	}
}
if(!function_exists('echoTxt')){
	function echoTxt($txt){
		return $txt;
	}
}

// if(!function_exists('getCategoryFromProducts')){
// 	function getCategoryFromProducts(App\Product $products){
// 		$categoryId = $products->first()->category_id;
// 		foreach ($products as $c_id) {
// 			# code...
// 			if($categoryId !== $c_id) {
// 				return 'all' ;
// 			}
// 		}
// 		return $categoryId;

// 	}
// }