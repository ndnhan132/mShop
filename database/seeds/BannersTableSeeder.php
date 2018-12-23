<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\Banner;

class BannersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $descriptions=[
            'Đặt Trước OPPO F9 Xanh Giá Chỉ 6.990.000Đ',
            'Galaxy S9+ Vang Đỏ  Tặng Màn Hình LED',
            'Vivo Y91 Trả Góp 0%  Giá Ngon 4.490.000Đ',
        ];

        Product::all()->each(function($product) use ($descriptions) {
            # code...
            Banner::create([
                'product_id'=> $product->id,
                'description' => $descriptions[array_rand($descriptions)],
            ]);
        });
    }
}
