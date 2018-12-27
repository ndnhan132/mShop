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


Route::prefix('/san-pham')->group(function(){
	Route::get('/', 'CategoryController@getAllProducts')->name('category.all-product');
});