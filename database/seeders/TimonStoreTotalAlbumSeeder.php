<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimonStoreTotalAlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $list = [];

        $row1 = [
            'total_album_name' => 'Album Xuân Hạ',
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row1);

        $row2 = [
            'total_album_name' => 'Album Thu Đông',
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row2);

        DB::table('timon_store_total_albums')->insert($list);
    }
}
