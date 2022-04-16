<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (env('DB_CONNECTION') == 'mysql') {
            \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        }
        \Illuminate\Support\Facades\DB::table('products')->truncate();
        \Illuminate\Support\Facades\DB::table('products')->insert([
            [
                'id' => 1,
                'category_id' => 1,
                'name' => 'Nhôm Topal Prima',
                'title' => 'Topal Prima thuộc phân khúc giá trung cấp, cao hơn so với các dòng cửa nhôm Xingfa',
                'thumbnail' => 'product_01_vak2h0,product_02_acqkbk,product_03_nwudlw,product_04_fah9cs',
                'description' => '<p>Topal Prima thuộc phân khúc giá trung cấp, cao hơn so với các dòng cửa nhôm Xingfa. Về cấu tạo và hình dáng bên ngoài dòng nhôm này cũng tương tự như Topal Slima. Sau đây là những chi tiết chuyên sâu hơn dành cho dòng nhôm Topal Prima</p><p>Phân hệ nhôm: Hệ nhôm 55</p><ul class="list-arrow"><li>Độ dày cánh cửa: Cửa đi 1.9ly, cửa sổ mở quay 1.3ly, cửa trượt 1.5ly</li><li>Độ dày khung bao: Cửa đi 1.9ly, cửa sổ mở quay 1.3ly, cửa trượt 1.6ly</li></ul><br/><p>Hệ ron: Ron cao su kép.</p><ul class="list-arrow"><li>Màu sắc: Màu xám lông chuột, màu xám đa đen</li><li>Loại cửa: Cửa đi mở quay, cửa sổ mở quay, cửa đi mở trượt, cửa sổ mở trượt, vách kính</li><li>Bảo hành: Được bảo hành màu sắc 5 năm</li><li>Phụ kiện: Topal Prima, Topal Slima, Bogo, HMA, Cmech, Sigico</li></ul>',
                'created_at' => \Illuminate\Support\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'category_id' => 1,
                'name' => 'Nhôm Xingfa Quảng Đông',
                'title' => 'Xingfa Group Quảng Đông (tên đầy đủ là Guangdong Xingfa Aluminium Co., Ltd) là công ty sản xuất nhôm toàn cầu được thành lập vào năm 1984 với trụ sở chính đặt ở Phật Sơn, Quảng Đông, Trung Quốc',
                'thumbnail' => 'product_05_zai7eg,product_06_fknxm4,product_07_chvx16',
                'description' => '<p>Xingfa Group Quảng Đông (tên đầy đủ là Guangdong Xingfa Aluminium Co., Ltd) là công ty sản xuất nhôm toàn cầu được thành lập vào năm 1984 với trụ sở chính đặt ở Phật Sơn, Quảng Đông, Trung Quốc</p><p>Xingfa Group là một trong những nhà sản xuất nhôm đùn sớm nhất tại Trung Quốc. Hiện nay, Xingfa Group có sở hữu 636 bằng sáng chế trong nhiều lĩnh vực quan trọng với hơn 40.000 sản phẩm khác loại, trở thành doanh nghiệp quy mô lớn trên phạm vi toàn cầu. Các lĩnh vực chính là Xingfa Group tham gia gồm sản xuất nhôm xây dựng ứng dụng, máy móc điện tử, vận tải, hàng không...</p><p>Các dòng sản phẩm chính của Xingfa trong thị trường Việt Nam gồm cửa sổ, cửa đi và vách ngăn tương ứng với các hệ 55, hệ 93, hệ 65</p><ul class="list-arrow"><li>Hệ 65 có độ dày từ 3.0 – 5.0mm thiết kế dành cho vách ngăn và các loại mặt dựng tòa nhà</li><li>Hệ 55 có độ dày từ 1.4 – 2.0mm dành cho các loại cửa đi mở quay, cửa sổ mở quay, cửa sổ mở hất</li><li>Hệ 93 có độ dày 2.0mm dành cho các loại cửa có cấu trúc phức tạp hơn là cửa trượt lùa, cửa xếp gấp</li></ul>',
                'created_at' => \Illuminate\Support\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 3,
                'category_id' => 1,
                'name' => 'Nhôm Seaaluk( Biên dạng xingfa Việt)',
                'title' => 'Nhôm SeaAluk loại nhôm định hình được sản xuất và phân phối bởi Công ty TNHH tập đoàn nhôm Quốc tế Aluk với nhiều hệ nhôm và có thể sản xuất ra nhiều sản phẩm nhôm kính được ứng dụng khá rộng rãi trong ngành nhôm kính xây dựng hiện nay',
                'thumbnail' => 'product_08_sgpshi,product_09_stxkxz,product_10_attjj9,product_11_xap4dv',
                'description' => '<p>Nhôm SeaAluk loại nhôm định hình được sản xuất và phân phối bởi Công ty TNHH tập đoàn nhôm Quốc tế Aluk với nhiều hệ nhôm và có thể sản xuất ra nhiều sản phẩm nhôm kính được ứng dụng khá rộng rãi trong ngành nhôm kính xây dựng hiện nay</p><p>Tại thị trường Việt Nam, nhôm SeaAluk-I đang dẫn top đầu về sản xuất cũng như phân phối các sản phẩm nhôm và các giải pháp tổng thể về nhôm, đặc biệt là  vách nhôm lớn, nhôm công nghiệp, nhôm kiến trúc...</p><p>Với dây chuyền công nghệ hiện đại và được đầu tư trên quy mô lớn nhôm SeaAluk-I đang ngày càng chiếm lòng tin của người tiêu dùng Việt Nam. Các sản phẩm nhôm SeaAluck bao gồm: nhôm sơn tĩnh điện, nhôm phủ film vân gỗ, nhôm kiến trúc công trình xây dựng và nhôm cầu cách nhiệt, hệ nhôm vách cỡ lớn được sản xuất, kiểm soát chặt chẽ về chất lượng dựa trên dây chuyền công nghệ máy móc hiện đại</p><p>Nhôm SeaAluk có nhiều hệ khác nhau được sử dụng chủ yếu làm cửa sổ, cửa đi, vách mặt dựng và nhiều sản phẩm khác trong ngành nhôm xây dựng</p><p>Với độ dày thanh nhôm từ 1.4mm – 3.5mm với nhiều hệ nhôm sử dụng để sản xuất các loại cửa nhôm kính, vách mặt dựng… nhôm SeaAluk có thể đáp ứng được hầu hết nhu cầu của khách hàng hiện nay</p><p>Bề mặt của nhôm SeaAluck được phủ sơn tĩnh điện với độ bền màu cao, màu sắc đa dạng nên phù hợp với mọi lối kiến trúc như: màu trắng, màu đen, màu ghi, màu vân gỗ, màu nâu...</p>',
                'created_at' => \Illuminate\Support\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
        if (env('DB_CONNECTION') == 'mysql') {
            \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        }
    }
}
