<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimonStoreOptionProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $list = [];

        $row1 = [
            'option_type' => 'Màu',
            'option_name' => 'Đỏ',
            'option_price' => 200000,
            'product_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row1);

        $row2 = [
            'option_type' => 'Size',
            'option_name' => 'M',
            'option_price' => 200000,
            'product_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row2);

        $row3 = [
            'option_type' => 'Màu',
            'option_name' => 'Xanh',
            'option_price' => 300000,
            'product_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row3);

        $row4 = [
            'option_type' => 'Size',
            'option_name' => 'L',
            'option_price' => 300000,
            'product_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row4);


        DB::table('timon_store_option_products')->insert($list);
    }
}
