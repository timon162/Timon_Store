<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimonStoreAlbumProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $list = [];

        $row1 = [
            'album_product_name' => 'Album NỮ',
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row1);

        $row2 = [
            'album_product_name' => 'Album NAM',
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row2);

        DB::table('timon_store_album_products')->insert($list);
    }
}
