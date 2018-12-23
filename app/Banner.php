<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    //
    public function products (){
    	return $this->belongsTo('App\Product');
    }
    public function images(){
    	return $this->morphMany('App\Image', 'imageable');
    }
}
