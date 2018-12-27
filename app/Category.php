<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
	// public function brands(){
	// 	return $this->hasManyThrough('App\Brand', 'App\Product');
	// }
	public function products(){
		return $this->hasMany('App\Product');
	}    

	// public function products(){
	// 	return $this->hasManyThrough('App\Product' ,'App\Brand');
	// }
}
