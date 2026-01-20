<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimonStoreDetailAlbumProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $list = [];

        $row1 = [
            'album_product_id' => 1,
            'set_product_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row1);

        $row2 = [
            'album_product_id' => 1,
            'set_product_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row2);

        $row3 = [
            'album_product_id' => 2,
            'set_product_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row3);

        $row4 = [
            'album_product_id' => 2,
            'set_product_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row4);

        DB::table('timon_store_detail_album_products')->insert($list);
    }
}
