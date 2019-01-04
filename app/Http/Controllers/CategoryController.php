<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Brand;
class CategoryController extends Controller
{
    //
    public function __construct(){
    	$categories = Category::with('products.brand.images')->get();
        $brands = Brand::with('products')->with('images')->get();
        view()->share('categories', $categories);
		view()->share('brands', $brands);
	}
    public function getProductsByCategoryId($id){
        $products = Product::with('images')
                            ->with('detail')
                            ->where('category_id', $id)
                            ->get();
    	return view('front.all-product', ['products'=>$products]);
    }
    public function getAllProducts(){
    	return view('front.all-product',['products'=>Product::with('images')->with('detail')->get()]);
    }
    public function getProductsByCategoryAndBrand($idCategory, $idBrand){
        $products = Product::with('images')
                            ->with('detail')
                            ->where('category_id', $idCategory)
                            ->where('brand_id', $idBrand)
                            ->get();
        return view('front.all-product', ['products'=>$products]);
    }
    public function loc($idCategory ,Request $request){
        $this->validate($request, []);
        $min = $request->input('min-price');
        $max = $request->input('max-price');
        $products=Product::with('images')
                         ->with('detail')
                         ->where('category_id', $idCategory)
                         ->whereBetween('price', [$min , $max])
                         ->get();
        return view('front.all-product', ['products'=>$products]);            
    }
}
