<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Product;
use App\Brand;
use App\Category;

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

        $shortDes=[
           'Trả góp 0%',
            'Giá rẻ Online',
            'Mới ra mắt',
            'Giảm 35%',
            'Hàng giảm giá',
        ];

        foreach(range(1, 300) as $index ){
            $category = Category::inRandomOrder()->first();
            $brand= Brand::inRandomOrder()->first();
        	Product::create([
                'name'              => $brand->name . ' ' . $faker->name,
                'price'             => $faker->numberBetween(10, 300) * 100000,
                'long_description'  =>$faker->text(155),
                'short_description' =>$shortDes[array_rand($shortDes)],
                'category_id'       =>Category::inRandomOrder()->first()->id,
                'brand_id'          =>$brand->id,
                'hot'               =>$bool[array_rand(['0','1'])],
                'top'               =>$bool[array_rand(['0','1'])],
        	]);
        }
    }
}
