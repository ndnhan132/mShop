<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');
            $table->string('color');
            
            $table->string('screen_technology');
            $table->string('screen_resolution');
            $table->integer('screen_size');

            $table->string('cam_back_resolution');
            // $table->string('cam_back_record')
            $table->boolean('cam_back_flash');
            $table->string('cam_front_resolution');
            $table->boolean('cam_front_videocall');
            
            $table->string('flatform_os');
            $table->string('flatform_chipset');
            $table->string('flatform_speed');
            $table->string('flatform_gpu');
            
            $table->integer('memory_ram');
            $table->integer('memory_internal');
            $table->string('memory_external');
            $table->integer('memory_external_size');
            
            $table->string('connect_internet');
            $table->string('connect_sim');
            $table->string('connect_wifi');
            $table->string('connect_gps');
            $table->string('connect_bluetooth');
            $table->string('connect_usb');
            $table->string('connect_jack_headphone');
            $table->string('connect_other');
            
            $table->string('body_size_vertical');
            $table->string('body_size_horizontal');
            $table->string('body_size_thick');
            $table->integer('body_weight');
            // $table->string('body_sim');
            
            $table->integer('battery_size');
            $table->string('battery_type');
            $table->string('battery_technology');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('details');
    }
}
