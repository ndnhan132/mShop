<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //
    public function categories(){
    	return $this->belongsToMany('App\Brand');
    }
    public function products(){
    	return $this->hasMany('App\Product');
    }
    public function images(){
    	return $this->morphMany('App\Image', 'imageable');
    }
}
