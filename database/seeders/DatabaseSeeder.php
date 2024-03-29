<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UserRoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(RoleAndPermissionSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ProjectSeeder::class);
        $this->call(FeedbackSeeder::class);
        $this->call(ContactStatus::class);
    }
}
