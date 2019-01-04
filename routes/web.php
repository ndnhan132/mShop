<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
//     // return view('front.index');
// });

Route::get('/', 'PageController@index')->name('home');
Route::get('/home', 'PageController@index')->name('page.home');
Route::get('/h', 'PageController@abc')->name('abc');
Route::get('blade', function () {
    return view('front.child');
});


// Route::prefix('/san-pham')->group(function(){
// 	Route::get('/', 'CategoryController@getAllProducts')->name('category.all-product');

// });
// Route::get('/{id}', 'CategoryController@getProductsByCategoryId')->name('category.product-with-category');
// Route::get('/{idCategory}/{idBrand}', 'CategoryController@getProductsByCategoryAndBrand')->name('category.product-with-category-brand');
// Route::get('/{idCategory}/{idBrand}', 'CategoryController@getProductsByCategoryAndBrand')->name('category.product-with-category-brand');

// Route::post('/{id}/loc', 'CategoryController@loc')->name('locsp');


Route::get('/one', function () {
    return view('one');
});
Route::get('/two', function () {
    return view('two');
});
