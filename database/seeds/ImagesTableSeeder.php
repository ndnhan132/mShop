<?php

use Illuminate\Database\Seeder;
use App\Brand;
use App\Product;
use App\Image;
use App\Banner;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //---------------------------------------------
        $brandImages = [
    		['image'=> 'https://cdn.tgdd.vn/Brand/1/iPhone-(Apple)42-b_16.jpg'],
    		['image' => 'https://cdn.tgdd.vn/Brand/1/Samsung42-b_25.jpg'],
    		['image' => 'https://cdn.tgdd.vn/Brand/1/OPPO42-b_23.jpg'],
    		['image' => 'https://cdn.tgdd.vn/Brand/1/Nokia42-b_21.jpg'],
            ['image' => 'https://cdn.tgdd.vn/Brand/1/Huawei42-b_16.jpg'],
            ['image' => 'https://cdn.tgdd.vn/Brand/1/Xiaomi42-b_33.png'],
            ['image' => 'https://cdn.tgdd.vn/Brand/1/HTC42-b_15.jpg'],
            ['image' => 'https://cdn.tgdd.vn/Brand/1/Asus-(Zenfone)42-b_14.jpg'],
    	];
    	$i = 0;
    	Brand::all()->each(function($brand, $key) use ($brandImages){
    		$img = new Image();
    		$img->link = $brandImages[$key]['image'];
    		$brand->images()->save($img);
    	});
    	//---------------------------------------------
    	$productImages = []; 
		$dir = "/var/www/html/MobileShop/public/img/mobile-image";
		$files = File::files($dir);
		foreach ($files as $f) {
		 	# code...
		 	if(ends_with($f, ['.png', '.jpg', '.jpeg', '.gif'])){
		 		$productImages[] = "img/mobile-image/" . basename($f);
		 	}
		 }
		 // $product = Product::all();
		 foreach (range(1,40) as $index) {
		 	# code...
		 	$img = new Image();
		 	$img->link = $productImages[array_rand($productImages)];
		 	Product::inRandomOrder()->first()->images()->save($img);
		 }
         //-------------------------------------
        $bannerImages = []; 
        $dir = "/var/www/html/MobileShop/public/img/banner";
        $files = File::files($dir);
        foreach ($files as $f) {
            # code...
            if(ends_with($f, ['.png', '.jpg', '.jpeg', '.gif'])){
                $bannerImages[] ="img/banner/" . basename($f);
            }
         }
         Banner::all()->each(function($banner) use ($bannerImages){
                $img = new Image();
                $img->link = $bannerImages[array_rand($bannerImages)];
                $banner->images()->save($img);
         });

    }
}
