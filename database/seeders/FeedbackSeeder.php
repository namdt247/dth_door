<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FeedbackSeeder extends Seeder
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
//        \Illuminate\Support\Facades\DB::table('feedbacks')->truncate();
        \Illuminate\Support\Facades\DB::table('feedbacks')->insert([
            [
                'id' => 1,
                'fb_name' => 'Anh Đức',
                'fb_position' => 'Kỹ sư xây dựng',
                'fb_content' => 'Kĩ sư xây dựng: Tôi rất hài lòng về dịch vụ cũng như sản phẩm của DTHDOOR, đặc thù công việc của tôi bên lĩnh vực xây dựng nên rất cần các đơn vị nhà thầu về các hạng mục nhôm kính uy tín, tiến độ như DTHDOOR nên tôi rất yên tâm và tin dùng',
                'created_at' => \Illuminate\Support\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'fb_name' => 'Chị Lan',
                'fb_position' => 'Chủ nhà',
                'fb_content' => 'Chủ nhà: Tôi làm bên lĩnh vực y tế nên công việc khá bận. Thời gian vừa rồi tôi hoàn thiện căn nhà ở Quận Hoàng Mai nhờ sự hỗ trợ và tư vấn rất nhiệt tình của DTHDOOR mà tôi đã chọn được vật liệu ưng ý để hoàn thiện toàn căn nhà. Tôi rất hài lòng và cảm ơn đội ngũ DTHDOOR!',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 3,
                'fb_name' => 'Anh Tài',
                'fb_position' => 'TGĐ VCM',
                'fb_content' => ' Cảm ơn anh em bên DTHDOOR đã hỗ trợ tôi về các hạng mục nhôm kính của căn biệt thự dưới Ba Vì mới hoàn thiện của tôi. Chúc anh em cty nhiều sức khỏe và chúc cty càng ngày càng phát triển hơn nữa.',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->format('Y-m-d H:i:s'),
            ]
        ]);
        if (env('DB_CONNECTION') == 'mysql') {
            \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        }
    }
}
