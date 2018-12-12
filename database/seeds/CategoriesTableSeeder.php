<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'cat_id' => 1,
                'name' => 'Mobile - Điện thoại',
                'slug' => 'mobile-dien-thoai',
                'parent_id' => '0',
                'created_at' => '2016-11-23 20:01:57',
                'updated_at' => '2016-11-26 03:03:56',
            ),
            1 => 
            array (
                'cat_id' => 2,
                'name' => 'LAPTOP - Máy tính xách tay',
                'slug' => 'laptop-may-tinh-xach-tay',
                'parent_id' => '0',
                'created_at' => '2016-11-23 20:10:10',
                'updated_at' => '2016-11-26 03:04:07',
            ),
            2 => 
            array (
                'cat_id' => 3,
                'name' => 'Asus - ZenFones',
                'slug' => 'asus-zenfones',
                'parent_id' => '1',
                'created_at' => '2016-11-23 20:17:01',
                'updated_at' => '2016-11-23 20:42:30',
            ),
            3 => 
            array (
                'cat_id' => 4,
                'name' => 'Samsung',
                'slug' => 'samsung',
                'parent_id' => '1',
                'created_at' => '2016-11-23 20:17:39',
                'updated_at' => '2016-11-23 20:17:39',
            ),
            4 => 
            array (
                'cat_id' => 9,
                'name' => 'DELL',
                'slug' => 'dell',
                'parent_id' => '2',
                'created_at' => '2016-11-24 01:36:10',
                'updated_at' => '2016-11-24 01:36:10',
            ),
            5 => 
            array (
                'cat_id' => 10,
                'name' => 'ASUS',
                'slug' => 'asus',
                'parent_id' => '2',
                'created_at' => '2016-11-24 01:36:21',
                'updated_at' => '2016-11-24 01:36:21',
            ),
            6 => 
            array (
                'cat_id' => 11,
                'name' => 'HP',
                'slug' => 'hp',
                'parent_id' => '2',
                'created_at' => '2016-11-24 01:36:31',
                'updated_at' => '2016-11-24 01:36:31',
            ),
            7 => 
            array (
                'cat_id' => 13,
                'name' => 'TIN TỨC - KHUYỄN MẠI',
                'slug' => 'tin-tuc-khuyen-mai',
                'parent_id' => '0',
                'created_at' => '2016-11-24 01:38:46',
                'updated_at' => '2016-11-24 01:38:46',
            ),
            8 => 
            array (
                'cat_id' => 14,
                'name' => 'QUẢNG CÁO - BANNER',
                'slug' => 'quang-cao-banner',
                'parent_id' => '0',
                'created_at' => '2016-11-24 01:38:57',
                'updated_at' => '2016-11-24 01:38:57',
            ),
            9 => 
            array (
                'cat_id' => 15,
            'name' => 'Apple (Iphone)',
                'slug' => 'apple-iphone',
                'parent_id' => '1',
                'created_at' => '2016-11-24 01:56:05',
                'updated_at' => '2016-11-24 01:56:05',
            ),
            10 => 
            array (
                'cat_id' => 16,
                'name' => 'OPPO',
                'slug' => 'oppo',
                'parent_id' => '1',
                'created_at' => '2016-11-25 02:00:27',
                'updated_at' => '2016-11-25 02:00:27',
            ),
            11 => 
            array (
                'cat_id' => 17,
                'name' => 'Sony',
                'slug' => 'sony',
                'parent_id' => '1',
                'created_at' => '2016-11-25 02:00:41',
                'updated_at' => '2016-11-25 02:00:41',
            ),
            12 => 
            array (
                'cat_id' => 18,
                'name' => 'LENOVO',
                'slug' => 'lenovo',
                'parent_id' => '2',
                'created_at' => '2016-11-25 02:00:52',
                'updated_at' => '2016-11-25 02:00:52',
            ),
            13 => 
            array (
                'cat_id' => 19,
                'name' => 'PC - Máy bộ',
                'slug' => 'pc-may-bo',
                'parent_id' => '0',
                'created_at' => '2016-11-26 00:36:11',
                'updated_at' => '2016-11-26 00:36:11',
            ),
            14 => 
            array (
                'cat_id' => 20,
                'name' => 'Máy bộ DELL',
                'slug' => 'may-bo-dell',
                'parent_id' => '19',
                'created_at' => '2016-11-26 00:36:27',
                'updated_at' => '2016-11-26 00:36:27',
            ),
            15 => 
            array (
                'cat_id' => 21,
                'name' => 'Máy bộ Asus - Gamming',
                'slug' => 'may-bo-asus-gamming',
                'parent_id' => '19',
                'created_at' => '2016-11-26 00:36:48',
                'updated_at' => '2016-11-26 00:36:48',
            ),
            16 => 
            array (
                'cat_id' => 22,
                'name' => 'Tin Công Nghệ',
                'slug' => 'tin-cong-nghe',
                'parent_id' => '13',
                'created_at' => '2016-11-28 18:40:09',
                'updated_at' => '2016-11-28 18:40:09',
            ),
            17 => 
            array (
                'cat_id' => 23,
                'name' => 'Tin khuyễn mại',
                'slug' => 'tin-khuyen-mai',
                'parent_id' => '13',
                'created_at' => '2016-11-28 18:40:31',
                'updated_at' => '2016-11-28 18:40:31',
            ),
        ));
        
        
    }
}
