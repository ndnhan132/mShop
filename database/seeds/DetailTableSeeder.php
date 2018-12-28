<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DetailTableSeeder extends Seeder
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
        $bool= [true, false];
        App\Product::all()->each(function($product) use ($faker ,$bool){
        	App\Detail::created([
        		'product_id'=> $product->id,
        		'color' => $faker->hexcolor,
        		'screen_technology'=>$faker->text(20),
        		'screen_resolution'=> $faker->text(20),
        		'screen_size'=>$faker->randomFloat(4,8),
        		
        		'cam_back_resolution'=>$faker->text(20),
        		'cam_back_flash'=>$bool[array_rand(['0','1'])],
        		'cam_front_resolution'=>$faker->text(20),
        		'cam_front_videocall'=>$bool[array_rand(['0','1'])],
        		
        		'flatform_os'=>$faker->text(20),
        		'flatform_chipset'=>$faker->text(20),
        		'flatform_speed'=>$faker->numberBetween(10, 55)*100,
        		'flatform_gpu'=>'Adreno 630',
        		
        		'memory_ram'=>$faker->numberBetween(1,10),
        		'memory_internal'=>$faker->numberBetween(2,100),
        		'memory_external'=>$faker->text(22),
        		'memory_external_size'=>$faker->numberBetween(1,100),
        		'connect_internet'=>'4G',
        		'connect_sim'=>'2 Nano SIM',
        		'connect_wifi'=>'Wi-Fi 802.11 a/b/g/n/ac, Wi-Fi Direct, Wi-Fi hotspot',
        		'connect_gps'=>'A-GPS, GLONASS',
        		'connect_bluetooth'=>'A2DP, LE, v5.0',
        		'connect_usb'=>'USB Type-C',
        		'connect_jack_headphone'=>'3.5 mm',
        		'connect_other'=>'NFC',
        		
        		'body_size_vertical'=>$faker->numberBetween(100,200),
        		'body_size_horizontal'=>$faker->numberBetween(50, 100),
        		'body_size_think'=>$faker->numberBetween(5,10),
        		'body_weight'=>$faker->numberBetween(100,200),
        		
        		'battery_size'=>$faker->numberBetween(20,50) * 100,
        		'battery_type'=>'Li-Ion',
        		'battery_technology'=>'Tiết kiệm pin, Siêu tiết kiệm pin, Sạc nhanh Quick Charge 3.0',

        	]);
        });
    }
}
