<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
class CategoryController extends Controller
{
    //
    public function __construct(){
    	$categories = Category::with('products.brand.images')->get();
		view()->share('categories', $categories);
	}
    public function getProductsById($id){
    	return view('front.all-product');
    }
    public function getAllProducts(){
    	return view('front.all-product',['products'=>Product::with('images')]);
    }
}
