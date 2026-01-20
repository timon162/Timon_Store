<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimonStoreDetailSetProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $list = [];

        $row1 = [
            'set_product_id' => 1,
            'product_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row1);

        $row2 = [
            'set_product_id' => 1,
            'product_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row2);

        $row3 = [
            'set_product_id' => 2,
            'product_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row3);

        $row4 = [
            'set_product_id' => 2,
            'product_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row4);

        $row5 = [
            'set_product_id' => 3,
            'product_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row5);

        $row6 = [
            'set_product_id' => 3,
            'product_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row6);

        $row7 = [
            'set_product_id' => 4,
            'product_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row7);

        $row8 = [
            'set_product_id' => 4,
            'product_id' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row8);

        DB::table('timon_store_detail_set_products')->insert($list);
    }
}
