<?php

use Illuminate\Database\Seeder;
use App\Brand;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $brands = [
			['name' =>'iphone'],
			['name' =>'samsung'],
			['name' =>'oppo'],
			['name' =>'nokia'],
			['name' =>'huawei'],
			['name' =>'xiaomi'],
			['name' =>'htc'],
			['name' =>'asus'],
        ];
        foreach ($brands as $key => $brand) {
            # code...
            Brand::create([
                'name' => $brand['name'],
            ]);
        }
    }
}
