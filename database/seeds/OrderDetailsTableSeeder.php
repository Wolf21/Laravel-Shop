<?php

use Illuminate\Database\Seeder;

class OrderDetailsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('order_details')->delete();
        for ($i = 0; $i <= 100; $i++) {
            \DB::table('order_details')->insert([
                'product_id' => rand(22, 28),
                'quantity' => 10,
                'order_id' => rand(1, 29),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
