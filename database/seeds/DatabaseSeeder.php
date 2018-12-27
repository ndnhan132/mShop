<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder    ::class);
        $this->call(BrandsTableSeeder        ::class);
        // $this->call(Brand_CategoryTableSeeder::class);
        $this->call(ProductsTableSeeder      ::class);
        $this->call(BannersTableSeeder       ::class);
        $this->call(ImagesTableSeeder        ::class);
        
    }
}
