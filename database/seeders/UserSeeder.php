<?php

namespace Database\Seeders;

use App\Helper\Config;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
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
        \Illuminate\Support\Facades\DB::table('users')->truncate();
        \Illuminate\Support\Facades\DB::table('users')->insert([
            [
                'id' => 1,
                'user_name' => 'supperadmin',
                'email' => 'supper.admin@gmail.com',
                'password' => bcrypt(123456),
                'full_name' => 'Super Admin',
                'user_role' => Config::ROLE_USER_SP_ADMIN,
                'status' => Config::STATUS_ACTIVE,
            ],
            [
                'id' => 2,
                'user_name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt(123456),
                'full_name' => 'Admin',
                'user_role' => Config::ROLE_USER_ADMIN,
                'status' => Config::STATUS_ACTIVE,
            ],
            [
                'id' => 3,
                'user_name' => 'admin_dth',
                'email' => 'admin_dth@gmail.com',
                'password' => bcrypt(123456),
                'full_name' => 'Admin DTH',
                'user_role' => Config::ROLE_USER_ADMIN,
                'status' => Config::STATUS_ACTIVE,
            ],
            [
                'id' => 4,
                'user_name' => 'moderator',
                'email' => 'moderator@gmail.com',
                'password' => bcrypt(123456),
                'full_name' => 'Moderator',
                'user_role' => Config::ROLE_USER_MODERATOR,
                'status' => Config::STATUS_ACTIVE,
            ],
            [
                'id' => 5,
                'user_name' => 'dth_door',
                'email' => 'user_normal@gmail.com',
                'password' => bcrypt(123456),
                'full_name' => 'DTH Door',
                'user_role' => Config::ROLE_USER_NORMAL,
                'status' => Config::STATUS_ACTIVE,
            ]
        ]);
        if (env('DB_CONNECTION') == 'mysql') {
            \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        }
    }
}
