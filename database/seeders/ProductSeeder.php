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
                'thumbnail' => 'dak09nxwmdkwpkegumlf,mpfb50e7d7iac7qpekic,x5uiqqtvkqlvqbmihzl1',
                'description' => 'Topal Prima thuộc phân khúc giá trung cấp, cao hơn so với các dòng cửa nhôm Xingfa. Về cấu tạo và hình dáng bên ngoài dòng nhôm này cũng tương tự như Topal Slima. Sau đây là những chi tiết chuyên sâu hơn dành cho dòng nhôm Topal Prima',
                'created_at' => \Illuminate\Support\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'category_id' => 1,
                'name' => 'Nhôm Xingfa Quảng Đông',
                'title' => 'Xingfa Group Quảng Đông (tên đầy đủ là Guangdong Xingfa Aluminium Co., Ltd) là công ty sản xuất nhôm toàn cầu được thành lập vào năm 1984 với trụ sở chính đặt ở Phật Sơn, Quảng Đông, Trung Quốc',
                'thumbnail' => 'juwzderyzxllbsbcyvmz,z3eics3pnlj4n0qamxn8',
                'description' => 'Xingfa Group là một trong những nhà sản xuất nhôm đùn sớm nhất tại Trung Quốc. Hiện nay, Xingfa Group có sở hữu 636 bằng sáng chế trong nhiều lĩnh vực quan trọng với hơn 40.000 sản phẩm khác loại, trở thành doanh nghiệp quy mô lớn trên phạm vi toàn cầu. Các lĩnh vực chính là Xingfa Group tham gia gồm sản xuất nhôm xây dựng ứng dụng, máy móc điện tử, vận tải, hàng không...',
                'created_at' => \Illuminate\Support\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 3,
                'category_id' => 1,
                'name' => 'Nhôm Seaaluk( Biên dạng xingfa Việt)',
                'title' => 'Nhôm SeaAluk loại nhôm định hình được sản xuất và phân phối bởi Công ty TNHH tập đoàn nhôm Quốc tế Aluk với nhiều hệ nhôm và có thể sản xuất ra nhiều sản phẩm nhôm kính được ứng dụng khá rộng rãi trong ngành nhôm kính xây dựng hiện nay',
                'thumbnail' => 'toi9ycfv8b2ahrgztqnv,gejlwsww3qu4iwkcysp5,hiah1axcabz22j7aysxu',
                'description' => 'Với dây chuyền công nghệ hiện đại và được đầu tư trên quy mô lớn nhôm SeaAluk-I đang ngày càng chiếm lòng tin của người tiêu dùng Việt Nam. Các sản phẩm nhôm SeaAluck bao gồm: nhôm sơn tĩnh điện, nhôm phủ film vân gỗ, nhôm kiến trúc công trình xây dựng và nhôm cầu cách nhiệt, hệ nhôm vách cỡ lớn được sản xuất, kiểm soát chặt chẽ về chất lượng dựa trên dây chuyền công nghệ máy móc hiện đại.',
                'created_at' => \Illuminate\Support\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
        if (env('DB_CONNECTION') == 'mysql') {
            \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        }
    }
}
