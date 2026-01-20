<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimonStoreCategoryStyleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $list = [];

        $row1 = [
            'category_id' => 1,
            'category_style_name' => 'Áo Kiểu Nữ',
            'gender' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row1);

        $row2 = [
            'category_id' => 1,
            'category_style_name' => 'Áo Dài Nữ',
            'gender' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row2);

        $row3 = [
            'category_id' => 2,
            'category_style_name' => 'Áo Khoác Kiểu Nữ',
            'gender' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row3);

        $row4 = [
            'category_id' => 2,
            'category_style_name' => 'Áo Khoác Blazer Nữ',
            'gender' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row4);

        $row5 = [
            'category_id' => 3,
            'category_style_name' => 'Quần Dài Nữ',
            'gender' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row5);

        $row6 = [
            'category_id' => 3,
            'category_style_name' => 'Quần Jeans Nữ',
            'gender' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row6);

        $row7 = [
            'category_id' => 4,
            'category_style_name' => 'Váy Ngắn',
            'gender' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row7);

        $row8 = [
            'category_id' => 4,
            'category_style_name' => 'Váy Dài',
            'gender' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row8);

        $row9 = [
            'category_id' => 4,
            'category_style_name' => 'Váy Quần',
            'gender' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row9);

        $row10 = [
            'category_id' => 5,
            'category_style_name' => 'Đầm Dài',
            'gender' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row10);
        $row11 = [
            'category_id' => 5,
            'category_style_name' => 'Đầm Ngắn',
            'gender' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row11);

        $row12 = [
            'category_id' => 6,
            'category_style_name' => 'Túi',
            'gender' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row12);

        $row13 = [
            'category_id' => 6,
            'category_style_name' => 'Nón',
            'gender' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row13);

        $row14 = [
            'category_id' => 6,
            'category_style_name' => 'Khăn',
            'gender' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row14);

        $row15 = [
            'category_id' => 6,
            'category_style_name' => 'Cài Áo',
            'gender' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row15);

        $row16 = [
            'category_id' => 6,
            'category_style_name' => 'Thắt Lưng',
            'gender' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row16);

        $row17 = [
            'category_id' => 6,
            'category_style_name' => 'Quần tất',
            'gender' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row17);

        $row18 = [
            'category_id' => 6,
            'category_style_name' => 'Giày',
            'gender' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row18);

        $row19 = [
            'category_id' => 7,
            'category_style_name' => 'Áo Sơ Mi Nam',
            'gender' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row19);

        $row20 = [
            'category_id' => 7,
            'category_style_name' => 'Áo Polo Nam',
            'gender' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row20);

        $row21 = [
            'category_id' => 8,
            'category_style_name' => 'Áo Khoác Jacket Nam',
            'gender' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row21);

        $row22 = [
            'category_id' => 8,
            'category_style_name' => 'Áo Khoác Blazer Nam',
            'gender' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row22);

        $row23 = [
            'category_id' => 9,
            'category_style_name' => 'Quần Tây Nam',
            'gender' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row23);

        $row24 = [
            'category_id' => 9,
            'category_style_name' => 'Quần Nỉ Nam',
            'gender' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row24);

        $row25 = [
            'category_id' => 6,
            'category_style_name' => 'Thắt Lưng',
            'gender' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row25);

        $row26 = [
            'category_id' => 6,
            'category_style_name' => 'Ví Da',
            'gender' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row26);

        $row27 = [
            'category_id' => 6,
            'category_style_name' => 'Giày',
            'gender' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row27);

        DB::table('timon_store_category_styles')->insert($list);
    }
}
