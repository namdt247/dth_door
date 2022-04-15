<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
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

        \Illuminate\Support\Facades\DB::table('roles')->truncate();
        \Illuminate\Support\Facades\DB::table('roles')->insert([
            [
                'role_id' => 1,
                'role_name' => 'super admin',
            ],
            [
                'role_id' => 2,
                'role_name' => 'admin',
            ],
            [
                'role_id' => 3,
                'role_name' => 'moderator',
            ],
            [
                'role_id' => 4,
                'role_name' => 'normal',
            ],
        ]);

        if (env('DB_CONNECTION') == 'mysql') {
            \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        }
    }
}
