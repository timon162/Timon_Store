<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimonStoreProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $list = [];

        $row1 = [
            'product_name' => 'Áo Kiểu Nữ Anh Đào Top RR26AK01',
            'product_code' => 'RR26AK01-S-VA',
            'category_style_id' => 1,
            'supplier_id' => 1,
            'product_status' => 'còn hàng',
            'product_price' => 680000,
            'product_description' => 'Mô tả đang cập nhật',
            'product_image' => 'https://bizweb.dktcdn.net/100/462/587/products/55-77b5dc26-b1f6-4d27-a068-364a41937083.png?v=1767675849813',
            'product_quantity' => 50,
            'is_hot' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row1);

        $row2 = [
            'product_name' => 'Áo Dài Nữ Ý An RR25AD10',
            'product_code' => 'RR25AD10-MD',
            'category_style_id' => 2,
            'supplier_id' => 1,
            'product_status' => 'còn hàng',
            'product_price' => 1590000,
            'product_description' => 'Mô tả đang cập nhật',
            'product_image' => 'https://bizweb.dktcdn.net/100/462/587/products/61-c096aca1-9b5f-47d0-834e-16ce629c2035.png?v=1767676044553',
            'product_quantity' => 50,
            'is_hot' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row2);

        $row3 = [
            'product_name' => 'Đầm Linen Biển Cả',
            'product_code' => 'SP003591',
            'category_style_id' => 5,
            'supplier_id' => 2,
            'product_status' => 'còn hàng',
            'product_price' => 1870000,
            'product_description' => 'Vải Linen TimTay sử dụng có nguồn gốc 100% từ sợi tự nhiên - an toàn cho da, độ bền cao cùng khả năng hút ẩm, khử mùi tốt. Tất cả đều trải qua bước xử lý vải giúp Linen mềm mại, ít nhăn và không co rút. ',
            'product_image' => '//cdn.hstatic.net/products/200000905463/hand-embroidered-ocean-linen-dress-with-unique-fabric-combination1_8d438778f0e140018162802aa2150370_master.jpg',
            'product_quantity' => 50,
            'is_hot' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row3);

        $row4 = [
            'product_name' => 'Đầm Linen Khoai Tím',
            'product_code' => 'SP002784 ',
            'category_style_id' => 5,
            'supplier_id' => 2,
            'product_status' => 'còn hàng',
            'product_price' => 1443000,
            'product_description' => '  - Tập trung xử lý các chi tiết nhỏ tạo điểm nhấn khi nhìn cận, đường lé màu xám trên vai áo. Chạy chỉ nổi ở cổ và vạt đầm.
                                        - Xẻ ở tay áo kết hợp nút bọc vải
                                        - Vạt đầm ngang ở thân trước và cong ở thân sau.
                                        - Đầm có túi sâu, rộng.
                                        - Chất liệu 100% linen cao cấp, đã trải qua bước xử lý vải giúp linen mềm mại và không co rút.
                                        - Mạc được in trực tiếp lên sản phẩm để loại bỏ những cọ xát khó chịu lên cơ thể cũng như giảm thiểu rác thời trang.
                                        - Thiết kế và sản xuất tại Sài Gòn.',
            'product_image' => '//product.hstatic.net/200000905463/product/khoaitim_c293d8fd9f074e1385f5d9d2839a971b_master.jpg',
            'product_quantity' => 50,
            'is_hot' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row4);

        $row5 = [
            'product_name' => '3D Striped Long Sleeves',
            'product_code' => 'product_code',
            'category_style_id' => 7,
            'supplier_id' => 3,
            'product_status' => 'còn hàng',
            'product_price' => 2450000,
            'product_description' => '',
            'product_image' => '//moidien.com/cdn/shop/files/MOIDIENNO.138682copy_620x.jpg?v=1699598702',
            'product_quantity' => 50,
            'is_hot' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row5);

        $row6 = [
            'product_name' => 'Monster Pants',
            'product_code' => 'product_code',
            'category_style_id' => 9,
            'supplier_id' => 3,
            'product_status' => 'còn hàng',
            'product_price' => 1150000,
            'product_description' => '',
            'product_image' => '//moidien.com/cdn/shop/products/Qu_nQVDen_620x.jpg?v=1693969137',
            'product_quantity' => 50,
            'is_hot' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row6);

        $row7 = [
            'product_name' => 'Áo blazer túi cơi ngực FWTV002',
            'product_code' => 'FWTV00271PE00RB_BL',
            'category_style_id' => 8,
            'supplier_id' => 4,
            'product_status' => 'còn hàng',
            'product_price' => 1049300,
            'product_description' => 'Áo blazer FWTV002 là mẫu blazer nam cao cấp chính hãng Torano. Chất vải dày dặn, mềm mịn và không nhăn nhàu lại cực thì thoáng mát. Sản phẩm khi kết hợp cùng quần âu đen sẽ tạo thành 1 set đồ lịch lãm, trẻ trung, tôn lên vẻ nam tính cho anh em.',
            'product_image' => '//product.hstatic.net/200000690725/product/41271cdf-a186-4ca8-96db-540e840e20c2_8d3937f7473b4eb6bfdd030f17b84b29_master.jpg',
            'product_quantity' => 50,
            'is_hot' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row7);

        $row8 = [
            'product_name' => 'Áo polo trơn bo tay kẻ thêu logo ngực GSTP602',
            'product_code' => 'GSTP60272CA13SB_BL',
            'category_style_id' => 7,
            'supplier_id' => 4,
            'product_status' => 'còn hàng',
            'product_price' => 439200,
            'product_description' => 'Áo polo trơn bo tay kẻ thêu logo ngực GSTP602 chính hãng Torano là dòng polo với bảng màu đạ dạng và độc đáo phá bỏ mọi định kiến về màu sắc trong trang phục của phái mạnh. Vải Pique dệt kim cương cao cấp với ưu điểm vượt trội:',
            'product_image' => '//cdn.hstatic.net/products/200000690725/3_1d17de0de41043bfb959b2bffc7a4333_master.png',
            'product_quantity' => 50,
            'is_hot' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row8);

        DB::table('timon_store_products')->insert($list);
    }
}
