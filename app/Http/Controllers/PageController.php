<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Product;
use App\Brand;
use App\Image;
use App\Banner;

class PageController extends Controller
{
    //
    public function __construct(){
		// $products   = Product::with('banners')->get();
		$categories = Category::with('brands')->get();
		$brands     = Brand::all();
		// $banners     = Banner::all();
		// $images     = Image::all();
		view()->share('categories', $categories);
		// view()->share('products', $products);
		view()->share('brands', $brands);
		// view()->share('images', $images);
		// view()->share('banners', $banner);
	}
	public function index(){
		// $products = Product::select('id')
		// 					->where('top' ,true)
		// 					->get()
		// 					->toArray();
		$topBanners = Banner::has('images')
							// ->whereIn('product_id', $products)
							->join('products', function($join){
								$join->on('banners.product_id', '=' , 'products.id')
									 ->where('products.top', true);
							})
							->inRandomOrder()
							->take(5)
							->get();
		return view('front.index',['topBanners' => $topBanners]);
	}
	public function abc(){
		return view('welcome');
	}
}
