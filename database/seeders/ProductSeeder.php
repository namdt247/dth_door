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
//        \Illuminate\Support\Facades\DB::table('products')->truncate();
        \Illuminate\Support\Facades\DB::table('products')->insert([
            [
                'id' => 1,
                'category_id' => 1,
                'name' => 'Nhôm Topal Prima',
                'title' => 'Topal Prima thuộc phân khúc giá trung cấp, cao hơn so với các dòng cửa nhôm Xingfa',
                'thumbnail' => 'dth_door/prd-02_c2a95b,dth_door/prd-03_v29yvc,dth_door/prd-04_ejpe5u,dth_door/prd-05_daqud9,dth_door/prd-06_dw1kda,dth_door/prd-07_hzkxho,dth_door/prd-08_gt3tkh,dth_door/prd-09_gsfss3,dth_door/prd-10_hsqw31,dth_door/prd-11_zfzhm1,dth_door/prd-12_cd67ue,dth_door/prd-13_lemom5,dth_door/prd-14_ygcdzl,dth_door/prd-15_cqz7df,dth_door/prd-16_m7snvw,dth_door/prd-17_fkniau,dth_door/prd-18_ww2tfl',
                'description' => '<p>Topal Prima thuộc phân khúc giá trung cấp, cao hơn so với các dòng cửa nhôm Xingfa. Về cấu tạo và hình dáng bên ngoài dòng nhôm này cũng tương tự như Topal Slima. Sau đây là những chi tiết chuyên sâu hơn dành cho dòng nhôm Topal Prima</p><p>Phân hệ nhôm: Hệ nhôm 55</p><ul class="list-arrow"><li>Độ dày cánh cửa: Cửa đi 1.9ly, cửa sổ mở quay 1.3ly, cửa trượt 1.5ly</li><li>Độ dày khung bao: Cửa đi 1.9ly, cửa sổ mở quay 1.3ly, cửa trượt 1.6ly</li></ul><br/><p>Hệ ron: Ron cao su kép.</p><ul class="list-arrow"><li>Màu sắc: Màu xám lông chuột, màu xám đa đen</li><li>Loại cửa: Cửa đi mở quay, cửa sổ mở quay, cửa đi mở trượt, cửa sổ mở trượt, vách kính</li><li>Bảo hành: Được bảo hành màu sắc 5 năm</li><li>Phụ kiện: Topal Prima, Topal Slima, Bogo, HMA, Cmech, Sigico</li></ul>',
                'created_at' => \Illuminate\Support\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'category_id' => 1,
                'name' => 'Nhôm Xingfa Quảng Đông',
                'title' => 'Xingfa Group Quảng Đông (tên đầy đủ là Guangdong Xingfa Aluminium Co., Ltd) là công ty sản xuất nhôm toàn cầu được thành lập vào năm 1984 với trụ sở chính đặt ở Phật Sơn, Quảng Đông, Trung Quốc',
                'thumbnail' => 'dth_door/prd-19_qbcppj,dth_door/prd-20_o2tte9,dth_door/prd-21_ryz6zg,dth_door/prd-22_qxshn0,dth_door/prd-23_blkliq,dth_door/prd-24_ik8mnj,dth_door/prd-25_f6m3sc,dth_door/prd-26_vqeapw',
                'description' => '<p>Xingfa Group Quảng Đông (tên đầy đủ là Guangdong Xingfa Aluminium Co., Ltd) là công ty sản xuất nhôm toàn cầu được thành lập vào năm 1984 với trụ sở chính đặt ở Phật Sơn, Quảng Đông, Trung Quốc</p><p>Xingfa Group là một trong những nhà sản xuất nhôm đùn sớm nhất tại Trung Quốc. Hiện nay, Xingfa Group có sở hữu 636 bằng sáng chế trong nhiều lĩnh vực quan trọng với hơn 40.000 sản phẩm khác loại, trở thành doanh nghiệp quy mô lớn trên phạm vi toàn cầu. Các lĩnh vực chính là Xingfa Group tham gia gồm sản xuất nhôm xây dựng ứng dụng, máy móc điện tử, vận tải, hàng không...</p><p>Các dòng sản phẩm chính của Xingfa trong thị trường Việt Nam gồm cửa sổ, cửa đi và vách ngăn tương ứng với các hệ 55, hệ 93, hệ 65</p><ul class="list-arrow"><li>Hệ 65 có độ dày từ 3.0 – 5.0mm thiết kế dành cho vách ngăn và các loại mặt dựng tòa nhà</li><li>Hệ 55 có độ dày từ 1.4 – 2.0mm dành cho các loại cửa đi mở quay, cửa sổ mở quay, cửa sổ mở hất</li><li>Hệ 93 có độ dày 2.0mm dành cho các loại cửa có cấu trúc phức tạp hơn là cửa trượt lùa, cửa xếp gấp</li></ul>',
                'created_at' => \Illuminate\Support\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 3,
                'category_id' => 1,
                'name' => 'Nhôm Seaaluk( Biên dạng xingfa Việt)',
                'title' => 'Nhôm SeaAluk loại nhôm định hình được sản xuất và phân phối bởi Công ty TNHH tập đoàn nhôm Quốc tế Aluk với nhiều hệ nhôm và có thể sản xuất ra nhiều sản phẩm nhôm kính được ứng dụng khá rộng rãi trong ngành nhôm kính xây dựng hiện nay',
                'thumbnail' => 'dth_door/prd-27_er0n7z,dth_door/prd-28_kkqaxx,dth_door/prd-29_eewszl,dth_door/prd-30_qytmk6,dth_door/prd-31_fid40x,dth_door/prd-32_wgwgbb',
                'description' => '<p>Nhôm SeaAluk loại nhôm định hình được sản xuất và phân phối bởi Công ty TNHH tập đoàn nhôm Quốc tế Aluk với nhiều hệ nhôm và có thể sản xuất ra nhiều sản phẩm nhôm kính được ứng dụng khá rộng rãi trong ngành nhôm kính xây dựng hiện nay</p><p>Tại thị trường Việt Nam, nhôm SeaAluk-I đang dẫn top đầu về sản xuất cũng như phân phối các sản phẩm nhôm và các giải pháp tổng thể về nhôm, đặc biệt là  vách nhôm lớn, nhôm công nghiệp, nhôm kiến trúc...</p><p>Với dây chuyền công nghệ hiện đại và được đầu tư trên quy mô lớn nhôm SeaAluk-I đang ngày càng chiếm lòng tin của người tiêu dùng Việt Nam. Các sản phẩm nhôm SeaAluck bao gồm: nhôm sơn tĩnh điện, nhôm phủ film vân gỗ, nhôm kiến trúc công trình xây dựng và nhôm cầu cách nhiệt, hệ nhôm vách cỡ lớn được sản xuất, kiểm soát chặt chẽ về chất lượng dựa trên dây chuyền công nghệ máy móc hiện đại</p><p>Nhôm SeaAluk có nhiều hệ khác nhau được sử dụng chủ yếu làm cửa sổ, cửa đi, vách mặt dựng và nhiều sản phẩm khác trong ngành nhôm xây dựng</p><p>Với độ dày thanh nhôm từ 1.4mm – 3.5mm với nhiều hệ nhôm sử dụng để sản xuất các loại cửa nhôm kính, vách mặt dựng… nhôm SeaAluk có thể đáp ứng được hầu hết nhu cầu của khách hàng hiện nay</p><p>Bề mặt của nhôm SeaAluck được phủ sơn tĩnh điện với độ bền màu cao, màu sắc đa dạng nên phù hợp với mọi lối kiến trúc như: màu trắng, màu đen, màu ghi, màu vân gỗ, màu nâu...</p>',
                'created_at' => \Illuminate\Support\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 4,
                'category_id' => 2,
                'name' => 'Phụ kiện Kin Long (Cửa nhôm)',
                'title' => '',
                'thumbnail' => 'dth_door/prd-40_nyb6he,dth_door/prd-41_fqxrwq,dth_door/prd-42_qog15r,dth_door/prd-43_gefdxj,dth_door/prd-44_nibj9a',
                'description' => '<p>Ngoài phụ kiện cửa kính Hafele, phụ kiện cửa kính VVP Thái Lan thì phụ kiện cửa kính KinLong được coi là phụ kiện tốt nhất, được nhiều người sử dụng nhất hiện nay, tuy mỗi loại phụ kiện có đặc tính, cấu tạo khác nhau nhưng mấu chốt chung nhất là đều được sản xuất trên dây chuyền hiện đại, được nghiên cứu đồng bộ với hầu hết các loại cửa nhôm, cửa kính hiện nay, do đó khi sử dụng phụ kiện này, sản phẩm cửa luôn được bền bỉ, vận hành êm ái giúp kéo dài thời gian sử dụng của sản phẩm</p>',
                'created_at' => \Illuminate\Support\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 5,
                'category_id' => 2,
                'name' => 'Phụ kiện Sigico',
                'title' => 'Thương hiệu SIGICO ra đời bởi Kỹ sư thiết kế tài ba JONAS SIGICO đây là dòng phụ kiện cao cấp theo tiêu chuẩn Đức. Hệ thống phụ kiện được sản xuất bởi công nghệ và máy móc hiện đại nhập khẩu từ Đức',
                'thumbnail' => 'dth_door/prd-55_gdiomr,dth_door/prd-56_kdtovc,dth_door/prd-57_jrnzgo,dth_door/prd-58_jegmyu,dth_door/prd-59_z2hlnm,dth_door/prd-60_dy6g4o,dth_door/prd-61_pzpdus,dth_door/prd-62_eygtm6',
                'description' => '<p>SIGICO hệ phụ kiện cửa Đức với thiết bị sản xuất tiên tiến hiện đại, kỹ thuật công nghệ tinh xảo tỉ mỉ, sở hữu những sản phẩm chất lượng cao, chế tác khuôn mẫu sản phẩm, quá trình sảnxuất cũng như quá trình thử nghiệm đều được các chuyên gia kỹ thuật kiểm tra kỹ lưỡng. Đồng thời quá trình quản lý kiểm tra chất lượng cũng được thực hiện nghiêm ngặt, hệ phụ kiện cửa nhôm kính không ngừng hoàn thiện chất lượng để đưa đến khách hàng các loại phụ kiện tuyệt với nhất.</p>',
                'created_at' => \Illuminate\Support\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 6,
                'category_id' => 2,
                'name' => 'Phụ kiện Adler',
                'title' => 'Adler là thương hiệu hàng đầu tại Việt Nam trong lĩnh vực sản xuất và cung ứng các sản phẩm bản lề sàn, kẹp kính, tay co cửa kính và các phụ kiện ngành kính.',
                'thumbnail' => 'dth_door/prd-45_trnx0i,dth_door/prd-46_hrwtxl,dth_door/prd-47_qpf9op,dth_door/prd-48_acccbg,dth_door/prd-49_civrov',
                'description' => '<p>Với phương châm: "Chất lượng tạo nên thương hiệu - Uy tín tạo nên sự phát triển", ADLER luôn hướng tới là “Doanh nghiệp văn minh - chuyên nghiệp- uy tín- hiệu quả”, luôn nỗ lực không ngừng để ngâng cao chất lượng sản phẩm và hoàn thiện dịch vụ bán hàng. Hiện nay, Công Ty đã có hệ thống đại lí trải dài gần 40 tỉnh thành của cả nước, với trên 300 đại lý phân phối và trên 6.000 cơ sở sản xuất lắp đặt, sử dụng thường xuyên sản phẩm của ADLER. Bởi vậy, Công ty dễ dàng đáp ứng tốt nhất nhu cầu của Khách hàng khắp mọi miền đất nước, tập trung xây dựng dịch vụ giao hàng nhanh chóng, miễn phí nhằm mang đến cho Khách hàng sự tiện dụng và hài lòng nhất. Doanh số bình quân hàng năm của công ty tăng trên 60%. Trong kế hoạch phát triển giai đoạn tới, Adler sẽ tiếp tục mở rộng quy mô, đẩy mạnh sản xuất, tập trung đầu tư giá trị chất lượng, tăng cường hợp tác, ưu tiên khai thác những thế mạnh và năng lực cốt lõi sẵn có, từng bước hoàn thiện hệ thống phân phối và dịch vụ.</p><p>Quý khách hàng thân mến! ADLER không chỉ là tên để gọi, để nhớ mà còn là tâm huyết của những kỹ sư sáng tạo, đã làm nên tên tuổi của hãng. Sự phong phú về kích thước, sự độc đáo về màu sắc, sự tinh tế của từng chi tiết, sự uy tín về chất lượng đã khiến bản lề sàn ADLER giữ trọn niềm tin với khách hàng. Không chỉ thế, với logo được thiết kế độc đáo, đẹp mắt, ADLER còn là một Banner di động để quảng bá thương hiệu của người thợ đến với người tiêu dùng mọi lúc, mọi nơi. Đây chính là món quà vô cùng ý nghĩa thay lời tri ân mà chúng tôi gửi tặng đến cho Khách hàng của mình.</p>',
                'created_at' => \Illuminate\Support\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 7,
                'category_id' => 3,
                'name' => 'Phụ kiện Kin Long (Cửa kính)',
                'title' => '',
                'thumbnail' => 'dth_door/prd-50_b6amir,dth_door/prd-51_jpuygv,dth_door/prd-52_gkkxw9,dth_door/prd-53_smorrs,dth_door/prd-54_z26m77',
                'description' => '<p>Ngoài phụ kiện cửa kính Hafele, phụ kiện cửa kính VVP Thái Lan thì phụ kiện cửa kính KinLong được coi là phụ kiện tốt nhất, được nhiều người sử dụng nhất hiện nay, tuy mỗi loại phụ kiện có đặc tính, cấu tạo khác nhau nhưng mấu chốt chung nhất là đều được sản xuất trên dây chuyền hiện đại, được nghiên cứu đồng bộ với hầu hết các loại cửa nhôm, cửa kính hiện nay, do đó khi sử dụng phụ kiện này, sản phẩm cửa luôn được bền bỉ, vận hành êm ái giúp kéo dài thời gian sử dụng của sản phẩm</p>',
                'created_at' => \Illuminate\Support\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 8,
                'category_id' => 3,
                'name' => 'Phụ kiện VVP',
                'title' => 'Phụ kiện kính cường lực VVP là dòng sản phẩm thông nhất bậc nhất tại thị trường Việt Nam hiện nay. Bài viết này sẽ giúp khách hàng nắm rõ về phụ kiện của một bộ phụ kiện cửa kính cường lực VVP và mã sản phẩm của từng loại',
                'thumbnail' => 'dth_door/prd-33_odnrqp,dth_door/prd-34_qqzrs7,dth_door/prd-35_csytwy,dth_door/prd-36_eaaguc,dth_door/prd-37_jchbkg,dth_door/prd-38_dzgkdc,dth_door/prd-39_btyxxm',
                'description' => '<ul class="list-arrow"><li>Bản lề sàn VVP: tùy theo kích thước cửa và trọng lượng cửa sử dụng các loại bản lề sàn khác nhau:<ul class="list-arrow pl-3"><li>Đối với cửa kính VVP trọng lượng < 105kg, kích thước cửa: 1.0-1.15m bản lề sàn phù hợp là VVP FC34-15</li><li>Đối với  cửa kính VVP trọng lượng < 105kg, kích thước cửa: < 1.0m bản lề sàn phù hợp là VVP FC34-20</li><li>Đối với  cửa kính VVP trọng lượng < 150 kg, kích thước cửa: 1.0m-1.15m bản lề sàn phù hợp là VVP FC34-2</li></ul></li><li>Kẹp khóa VVP (mã sản phẩm: VVP FL50)</li></ul>',
                'created_at' => \Illuminate\Support\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
        if (env('DB_CONNECTION') == 'mysql') {
            \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        }
    }
}
