<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function brand(){
    	return $this->belongsTo('App\Brand');
    }
    public function images(){
    	return $this->morphMany('App\Image', 'imageable');
    }
    public function banner(){
    	return $this->hasOne('App\Banner');
    }
    public function Category(){
        return $this->belongsTo('App\Category');
    }
}
