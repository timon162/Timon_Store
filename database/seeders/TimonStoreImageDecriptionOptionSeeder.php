<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimonStoreImageDecriptionOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $list = [];

        $row1 = [
            'description_option_image' => 'https://bizweb.dktcdn.net/100/462/587/products/55-77b5dc26-b1f6-4d27-a068-364a41937083.png?v=1767675849813',
            'option_product_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row1);

        $row2 = [
            'description_option_image' => 'https://bizweb.dktcdn.net/100/462/587/products/55-77b5dc26-b1f6-4d27-a068-364a41937083.png?v=1767675849813',
            'option_product_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row2);

        $row3 = [
            'description_option_image' => 'https://bizweb.dktcdn.net/100/462/587/products/61-c096aca1-9b5f-47d0-834e-16ce629c2035.png?v=1767676044553',
            'option_product_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row3);

        $row4 = [
            'description_option_image' => 'https://bizweb.dktcdn.net/100/462/587/products/61-c096aca1-9b5f-47d0-834e-16ce629c2035.png?v=1767676044553',
            'option_product_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row4);

        DB::table('timon_store_image_description_options')->insert($list);
    }
}
