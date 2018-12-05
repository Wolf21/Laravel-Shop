<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(ProductDetailsTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(OrderDetailsTableSeeder::class);
        $this->call(BannersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(DetailsImgTableSeeder::class);
        $this->call(NewsTableSeeder::class);
    }
}
