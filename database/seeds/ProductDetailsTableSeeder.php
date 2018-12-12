<?php

use Illuminate\Database\Seeder;

class ProductDetailsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_details')->delete();
        
        \DB::table('product_details')->insert(array (
            0 => 
            array (
                'id' => 9,
                'quantity' => 100,
                'cpu' => 'Exynos 8890, 8 Nhân',
                'ram' => '4G',
            'screen' => '5.1 inch (1440 x 2560 pixels)',
                'vga' => 'Mali-T880 MP12',
                'storage' => '32 GB',
            'extend_memory' => 'MicroSD (T-Flash)',
                'cam1' => '12MP',
                'cam2' => '5 MP',
                'sim' => '1 Sim Micro',
                'connect' => 'Wi-Fi 802.11 a/b/g/n/ac, dual-band, DLNA, Wi-Fi Direct, Wi-Fi hotspot',
                'pin' => '3000mAh',
                'os' => 'Android 6.0',
                'note' => '',
                'product_id' => 22,
                'created_at' => '2016-11-24 09:39:13',
                'updated_at' => '2016-11-28 18:02:19',
            ),
            1 => 
            array (
                'id' => 10,
                'quantity' => 100,
                'cpu' => 'Exynos 8890, 8 Nhân',
                'ram' => '4G',
            'screen' => '5.1 inch (1440 x 2560 pixels)',
                'vga' => 'Mali-T880 MP12',
                'storage' => '32 GB',
            'extend_memory' => 'MicroSD (T-Flash)',
                'cam1' => '12MP',
                'cam2' => '5 MP',
                'sim' => '1 Sim Micro',
                'connect' => 'Wi-Fi 802.11 a/b/g/n/ac, dual-band, DLNA, Wi-Fi Direct, Wi-Fi hotspot',
                'pin' => '3000mAh',
                'os' => 'Android 6.0',
                'note' => '',
                'product_id' => 23,
                'created_at' => '2016-11-24 09:39:28',
                'updated_at' => '2016-11-24 09:39:28',
            ),
            2 => 
            array (
                'id' => 11,
                'quantity' => 100,
                'cpu' => 'Apple A10',
                'ram' => '3G',
            'screen' => '5.5 inch (1920 x 1080 pixels)',
                'vga' => 'chip apple 6 nhân',
                'storage' => '256 G',
                'extend_memory' => 'không',
                'cam1' => 'dual 12 MP',
                'cam2' => '7MP',
                'sim' => '1 Sim Nano',
                'connect' => 'Wi-Fi 802.11 a/b/g/n/ac, Linning',
                'pin' => '2890mAh',
                'os' => 'IOS 10.0',
                'note' => '',
                'product_id' => 24,
                'created_at' => '2016-11-24 18:48:39',
                'updated_at' => '2016-12-01 20:52:21',
            ),
            3 => 
            array (
                'id' => 12,
                'quantity' => 100,
                'cpu' => 'Apple A10',
                'ram' => '3G',
            'screen' => '5.5 inch (1920 x 1080 pixels)',
                'vga' => 'chip apple 6 nhân',
                'storage' => '128 G',
                'extend_memory' => 'không',
                'cam1' => 'dual 12 MP',
                'cam2' => '7MP',
                'sim' => '1 Sim Nano',
                'connect' => 'Wi-Fi 802.11 a/b/g/n/ac, Linning',
                'pin' => '2890mAh',
                'os' => 'IOS 10.0',
                'note' => '',
                'product_id' => 25,
                'created_at' => '2016-11-24 18:48:46',
                'updated_at' => '2016-12-01 20:53:36',
            ),
            4 => 
            array (
                'id' => 13,
                'quantity' => 100,
                'cpu' => 'snapdragon 821 2.5 Ghz',
                'ram' => '6G',
            'screen' => '5.1 inch (1440 x 2560 pixels)',
                'vga' => 'adreno900',
                'storage' => '128 G',
                'extend_memory' => 'không',
                'cam1' => 'dual 12 MP',
                'cam2' => '7MP',
                'sim' => '1 Sim Micro',
                'connect' => 'Wi-Fi 802.11 a/b/g/n/ac, dual-band, DLNA, Wi-Fi Direct, Wi-Fi hotspot',
                'pin' => '3500mAh',
                'os' => 'Android 7.0',
                'note' => '',
                'product_id' => 26,
                'created_at' => '2016-11-25 23:44:07',
                'updated_at' => '2016-11-28 23:01:37',
            ),
            5 => 
            array (
                'id' => 14,
                'quantity' => 100,
                'cpu' => 'snapdragon 821 2.5 Ghz',
                'ram' => '6G',
            'screen' => '5.1 inch (1440 x 2560 pixels)',
                'vga' => 'adreno900',
                'storage' => '128 G',
                'extend_memory' => 'không',
                'cam1' => 'dual 12 MP',
                'cam2' => '7MP',
                'sim' => '1 Sim Micro',
                'connect' => 'Wi-Fi 802.11 a/b/g/n/ac, dual-band, DLNA, Wi-Fi Direct, Wi-Fi hotspot',
                'pin' => '3500mAh',
                'os' => 'Android 7.0',
                'note' => '',
                'product_id' => 27,
                'created_at' => '2016-11-25 23:44:11',
                'updated_at' => '2016-11-28 23:01:52',
            ),
            6 => 
            array (
                'id' => 15,
                'quantity' => 100,
                'cpu' => 'snapdragon 821 2.5 Ghz',
                'ram' => '6G',
            'screen' => '5.1 inch (1440 x 2560 pixels)',
                'vga' => 'adreno900',
                'storage' => '128 G',
                'extend_memory' => 'không',
                'cam1' => 'dual 12 MP',
                'cam2' => '7MP',
                'sim' => '1 Sim Micro',
                'connect' => 'Wi-Fi 802.11 a/b/g/n/ac, dual-band, DLNA, Wi-Fi Direct, Wi-Fi hotspot',
                'pin' => '3500mAh',
                'os' => 'Android 7.0',
                'note' => '',
                'product_id' => 28,
                'created_at' => '2016-11-25 23:44:15',
                'updated_at' => '2016-11-28 23:02:04',
            ),
            7 => 
            array (
                'id' => 21,
                'quantity' => 100,
                'cpu' => 'snapdragon 821 2.5 Ghz',
                'ram' => '6G',
            'screen' => '5.1 inch (1440 x 2560 pixels)',
                'vga' => 'adreno900',
                'storage' => '128 G',
                'extend_memory' => 'không',
                'cam1' => 'dual 12 MP',
                'cam2' => '7MP',
                'sim' => '1 Sim Micro',
                'connect' => 'Wi-Fi 802.11 a/b/g/n/ac, dual-band, DLNA, Wi-Fi Direct, Wi-Fi hotspot',
                'pin' => '3500mAh',
                'os' => 'Android 7.0',
                'note' => '',
                'product_id' => 34,
                'created_at' => '2016-11-25 23:45:03',
                'updated_at' => '2016-11-28 23:03:32',
            ),
        ));
        
        
    }
}