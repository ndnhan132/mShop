<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Product;
use App\Brand;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker  = Faker::create();
        $brands = Brand::all(); 
        $bool   = [true, false];
        foreach(range(1, 30) as $index ){
        	Product::create([
                'name'     => $faker->name,
                'brand_id' => $faker->randomElement($brands->pluck('id')->toArray()),
                'hot'      =>$bool[array_rand(['0','1'])],
                'top'      =>$bool[array_rand(['0','1'])],
        	]);
        }
    }
}
