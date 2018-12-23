<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function brands(){
    	return $this->belongsTo('App\Brand');
    }
    public function images(){
    	return $this->morphMany('App\Image', 'imageable');
    }
    public function banners(){
    	return $this->hasOne('App\Banner');
    }
}
