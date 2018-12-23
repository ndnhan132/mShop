<?php

use Illuminate\Database\Seeder;
use App\Brand;
use App\Category;

class Brand_CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $brands= Brand::all();
        $categories= Category::select('id')->get();
        // attaching up to 3
        Category::all()->each(function($category) use ($brands){
        	$category->brands()->attach(
        		$brands->random(rand(1,8))->pluck('id')->toArray()
        	);
        });
    }
}
