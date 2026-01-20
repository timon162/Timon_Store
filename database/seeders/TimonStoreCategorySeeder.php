<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimonStoreCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $list = [];

        $row1 = [
            'category_name' => 'ÁO NỮ',
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row1);

        $row2 = [
            'category_name' => 'ÁO KHOÁC NỮ',
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row2);

        $row3 = [
            'category_name' => 'QUẦN NỮ',
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row3);

        $row4 = [
            'category_name' => 'VÁY',
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row4);

        $row5 = [
            'category_name' => 'ĐẦM',
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row5);

        $row6 = [
            'category_name' => 'PHỤ KIỆN',
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row6);

        $row7 = [
            'category_name' => 'ÁO NAM',
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row7);

        $row8 = [
            'category_name' => 'ÁO KHOÁC NAM',
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row8);

        $row9 = [
            'category_name' => 'QUẦN NAM',
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row9);


        DB::table('timon_store_categories')->insert($list);
    }
}
