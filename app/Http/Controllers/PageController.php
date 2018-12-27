<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Product;
use App\Brand;
use App\Image;
use App\Banner;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    //
    public function __construct(){
    	$categories = Category::with('products.brand.images')->get();
		view()->share('categories', $categories);
	}
	public function index(){
		$homeBanners = Banner::has('images')
							->join('products', function($join){
							$join->on('banners.product_id', '=' , 'products.id')
							->where('products.top', true);
		})
							->inRandomOrder()
							->take(5)
							->get();
		$homeHotProducts = Product::has('images')
									->where('hot', true)
									->inRandomOrder()
									->get();
		return view('front.index',['homeBanners' => $homeBanners,
									'homeHotProducts'=> $homeHotProducts,
									]);
	}
	public function abc(){
		return view('welcome');
	}
}
