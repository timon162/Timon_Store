<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimonStoreSetProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $list = [];

        $row1 = [
            'set_product_name' => 'Set ÁO Dài NỮ',
            'set_product_image' => 'https://bizweb.dktcdn.net/100/462/587/products/55-77b5dc26-b1f6-4d27-a068-364a41937083.png?v=1767675849813',
            'set_product_price' => 680000,
            'set_product_quantity' => 50,
            'set_product_status' => 'Còn Hàng',
            'set_product_gender' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row1);

        $row2 = [
            'set_product_name' => 'Set Đầm NỮ',
            'set_product_image' => '//cdn.hstatic.net/products/200000905463/hand-embroidered-ocean-linen-dress-with-unique-fabric-combination1_8d438778f0e140018162802aa2150370_master.jpg',
            'set_product_price' => 680000,
            'set_product_quantity' => 50,
            'set_product_status' => 'Còn Hàng',
            'set_product_gender' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row2);

        $row3 = [
            'set_product_name' => 'Set ÁO Nam',
            'set_product_image' => '//moidien.com/cdn/shop/files/MOIDIENNO.138682copy_620x.jpg?v=1699598702',
            'set_product_price' => 680000,
            'set_product_quantity' => 50,
            'set_product_status' => 'Còn Hàng',
            'set_product_gender' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row3);

        $row4 = [
            'set_product_name' => 'Set Blazer Nam',
            'set_product_image' => '//product.hstatic.net/200000690725/product/41271cdf-a186-4ca8-96db-540e840e20c2_8d3937f7473b4eb6bfdd030f17b84b29_master.jpg',
            'set_product_price' => 680000,
            'set_product_quantity' => 50,
            'set_product_status' => 'Còn Hàng',
            'set_product_gender' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row4);

        DB::table('timon_store_set_products')->insert($list);
    }
}
