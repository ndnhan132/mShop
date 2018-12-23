<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name'=>'điện thoại'], //2
            ['name'=>'tablet'],     //3
            ['name'=>'phụ kiện'],   //4
            ['name'=>'máy cũ'],     //5
        ];

        foreach ($categories as $key => $category) {
            # code...
            Category::create([
                'name'=> $category['name'],
            ]);
        }
    }
}
