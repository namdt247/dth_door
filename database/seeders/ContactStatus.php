<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContactStatus extends Seeder
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

//        \Illuminate\Support\Facades\DB::table('contact_statuses')->truncate();
        \Illuminate\Support\Facades\DB::table('contact_statuses')->insert([
            [
                'id' => 1,
                'stt_name' => 'Tiếp nhận',
                'stt_nameAction' => 'Tiếp nhận',
                'stt_order' => 1,
            ],
            [
                'id' => 2,
                'stt_name' => 'Tư vấn',
                'stt_nameAction' => 'Tư vấn',
                'stt_order' => 2,
            ],
            [
                'id' => 3,
                'stt_name' => 'Báo giá',
                'stt_nameAction' => 'Báo giá',
                'stt_order' => 3,
            ],
            [
                'id' => 4,
                'stt_name' => 'Hợp đồng',
                'stt_nameAction' => 'Hợp đồng',
                'stt_order' => 4,
            ],
            [
                'id' => 5,
                'stt_name' => 'Thi công',
                'stt_nameAction' => 'Thi công',
                'stt_order' => 5,
            ],
            [
                'id' => 6,
                'stt_name' => 'Nghiệm thu',
                'stt_nameAction' => 'Nghiệm thu',
                'stt_order' => 6,
            ],
            [
                'id' => 7,
                'stt_name' => 'Hoàn thành',
                'stt_nameAction' => 'Hoàn thành',
                'stt_order' => 7,
            ],
            [
                'id' => 101,
                'stt_name' => 'Hủy',
                'stt_nameAction' => 'Hủy',
                'stt_order' => 101,
            ]
        ]);

        if (env('DB_CONNECTION') == 'mysql') {
            \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        }
    }
}
