<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('orders')->delete();
        for ($i = 0; $i <= 30; $i++) {
            \DB::table('orders')->insert([
                'user_id' => 1,
                'total_amount' => 100000000,
                'status' => 1,
                'type' => 'clgt',
                'note' => 'giao hàng nhanh',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
