<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        \DB::table('users')->delete();
        \DB::table('users')->insert([
            'uid' => 1,
            'name' => 'Cường',
            'email' => 'cuong@dep.trai',
            'password' => '123456',
            'phone' => 123456789,
            'address' => '79 Âu Cơ',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
