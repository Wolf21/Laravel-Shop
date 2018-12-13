<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('products')->delete();

        \DB::table('products')->insert(array(
            0 =>
                array(
                    'product_id' => 22,
                    'name' => 'Galaxy S7 EDGE',
                    'slug' => 'galaxy-s7-edge',
                    'sale' => 20,
                    'images' => '1480005553_635918156798139185_s7-g2.jpg',
                    'price' => '15890000',
                    'status' => 1,
                    'cat_id' => 4,
                    'created_at' => '2016-11-24 09:39:13',
                    'updated_at' => '2016-11-28 18:02:19',
                ),
            1 =>
                array(
                    'product_id' => 23,
                    'name' => 'Galaxy NOTE 7',
                    'slug' => 'galaxy-note-7',
                    'sale' => 20,
                    'images' => '1480005568_635918156798139185_s7-g2.jpg',
                    'price' => '15890000',
                    'status' => 1,
                    'cat_id' => 4,
                    'created_at' => '2016-11-24 09:39:28',
                    'updated_at' => '2016-11-24 09:39:28',
                ),
            2 =>
                array(
                    'product_id' => 24,
                    'name' => 'OPPO F1S',
                    'slug' => 'oppo-f1s',
                    'sale' => 10,
                    'images' => '1480650741_oppo-f1s-hero-400x460-400x460.png',
                    'price' => '5990000',
                    'status' => 1,
                    'cat_id' => 16,
                    'created_at' => '2016-11-24 18:48:39',
                    'updated_at' => '2016-12-01 20:52:21',
                ),
            3 =>
                array(
                    'product_id' => 25,
                    'name' => 'iPhone 7 Plus 128GB',
                    'slug' => 'iphone-7-plus-128gb',
                    'sale' => 20,
                    'images' => '1480038525_636089592275907954_7-plus-chi-tiet.jpg',
                    'price' => '25190000',
                    'status' => 1,
                    'cat_id' => 15,
                    'created_at' => '2016-11-24 18:48:45',
                    'updated_at' => '2016-12-01 20:53:36',
                ),
            4 =>
                array(
                    'product_id' => 26,
                    'name' => 'Galaxy S7 EDGE',
                    'slug' => 'galaxy-s7-edge',
                    'sale' => 30,
                    'images' => '1480399297_s7 edge.png',
                    'price' => '18490000',
                    'status' => 1,
                    'cat_id' => 4,
                    'created_at' => '2016-11-25 23:44:07',
                    'updated_at' => '2016-11-28 23:01:37',
                ),
            5 =>
                array(
                    'product_id' => 27,
                    'name' => 'Galaxy S8',
                    'slug' => 'galaxy-s8',
                    'sale' => 0,
                    'images' => '1480399312_s7 edge.png',
                    'price' => '18490000',
                    'status' => 1,
                    'cat_id' => 4,
                    'created_at' => '2016-11-25 23:44:11',
                    'updated_at' => '2016-11-28 23:01:52',
                ),
            6 =>
                array(
                    'product_id' => 28,
                    'name' => 'Galaxy S8',
                    'slug' => 'galaxy-s8',
                    'sale' => 20,
                    'images' => '1480399324_s7 edge.png',
                    'price' => '18490000',
                    'status' => 1,
                    'cat_id' => 4,
                    'created_at' => '2016-11-25 23:44:15',
                    'updated_at' => '2016-11-28 23:02:04',
                ),
            7 =>
                array(
                    'product_id' => 34,
                    'name' => 'ZENFONE 3 MAX',
                    'slug' => 'zenfone-3-max',
                    'sale' => 10,
                    'images' => '1480399412_asus-zenfone-3-max-400-400x460.png',
                    'price' => '18490000',
                    'status' => 1,
                    'cat_id' => 3,
                    'created_at' => '2016-11-25 23:45:03',
                    'updated_at' => '2016-11-28 23:03:32',
                ),
            8 =>
                array(
                    'product_id' => 35,
                    'name' => 'Zenfone 2 Laser',
                    'slug' => 'zenfone-2-laser',
                    'sale' => 0,
                    'images' => '1480399445_asus-zenfone-2-laser-1-400x460.png',
                    'price' => '18490000',
                    'status' => 1,
                    'cat_id' => 3,
                    'created_at' => '2016-11-25 23:45:08',
                    'updated_at' => '2016-11-28 23:04:05',
                ),
        ));


    }
}
