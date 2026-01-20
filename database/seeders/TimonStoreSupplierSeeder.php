<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimonStoreSupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $list = [];

        $row1 = [
            'supplier_name' => 'RUBIES',
            'supplier_image' => '//bizweb.dktcdn.net/100/462/587/themes/880841/assets/logo.png?1764605723305',
            'supplier_description' => 'RUBIES là thương hiệu thời trang nữ Việt Nam với các sản phẩm trẻ trung và đa dạng như áo, váy, đầm, jumpsuit, đồ bộ và phụ kiện dành cho phái nữ. Rubies hướng tới việc mang đến thời trang chất lượng, phong cách năng động và nữ tính cho khách hàng, kèm theo dịch vụ như miễn phí vận chuyển (TP.HCM), tích điểm thành viên và chính sách đổi trả hàng rõ ràng. Trang web cũng hiển thị các bộ sưu tập mới nhất và sản phẩm bán chạy, giúp người dùng dễ dàng lựa chọn phong cách phù hợp.',
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row1);

        $row2 = [
            'supplier_name' => 'TimTay',
            'supplier_image' => '//theme.hstatic.net/200000905463/1001273537/14/logo.png?v=1576',
            'supplier_description' => 'TimTay là thương hiệu thời trang Việt Nam nổi bật với phong cách thoải mái, tinh tế và bền vững. Thiết kế của TimTay tập trung vào sự thoáng mát, nhẹ nhàng và ứng dụng cao trong đời sống hàng ngày, sử dụng chủ yếu chất liệu tự nhiên như linen, cotton, tơ tằm để đem lại cảm giác dễ chịu cho người mặc và thân thiện với môi trường. Các bộ sưu tập không chạy theo xu hướng nhất thời mà nhấn mạnh sự đơn giản, phom rộng thoải mái, đường may chắc chắn và tính bền lâu, phản ánh phong cách sống chậm, sáng tạo và trân trọng cái “thuần Việt”.',
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row2);

        $row3 = [
            'supplier_name' => 'Moidien',
            'supplier_image' => '//moidien.com/cdn/shop/files/008Asset_3_330x_x68.png?v=1613739620',
            'supplier_description' => 'Moidien là thương hiệu thời trang Việt Nam mang phong cách minimalism hiện đại với tinh thần streetwear đầy cá tính. Những thiết kế của Môi Điên tập trung vào đường cắt may tinh tế, phom dáng gọn gàng và màu sắc trung tính, thể hiện vẻ tối giản nhưng sang trọng phù hợp với phong cách power minimalism đang thịnh hành hiện nay. Thương hiệu này còn nổi bật với ý thức bền vững, sử dụng vật liệu tự nhiên, kỹ thuật nhuộm không hóa chất và tận dụng vải thừa để tạo phụ kiện, mang đến vẻ ngoài hiện đại, linh hoạt cho người mặc mà vẫn giữ được tính nghệ thuật riêng.',
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row3);

        $row4 = [
            'supplier_name' => 'Torano',
            'supplier_image' => '//theme.hstatic.net/200000690725/1001078549/14/logo.png?v=1046',
            'supplier_description' => 'Torano là thương hiệu thời trang nam Việt Nam định hình phong cách lịch lãm, nam tính và hiện đại cho phái mạnh. Các thiết kế chủ đạo gồm áo polo, sơ mi, áo thun, quần kaki, quần âu và áo khoác với form dáng chuẩn, chất liệu thoáng mát và đường may tinh tế, giúp phái mạnh trông chỉn chu nhưng vẫn trẻ trung trong các bối cảnh từ công sở đến đi chơi. Torano còn được biết đến với xu hướng quiet luxury – sang trọng tinh tế mà không phô trương, mang đến diện mạo tự tin, cuốn hút cho người mặc.',
            'created_at' => now(),
            'updated_at' => now(),
        ];

        array_push($list, $row4);


        DB::table('timon_store_suppliers')->insert($list);
    }
}
