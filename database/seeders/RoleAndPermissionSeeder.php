<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        $supperAdmin = Role::create(['name' => 'supper-admin']);
        $admin = Role::create(['name' => 'admin']);
        Role::create(['name' => 'moderator']);
        Role::create(['name' => 'normal']);

        $editor = Permission::create(['name' => 'editor']);
        $support = Permission::create(['name' => 'support']);

        User::find(1)->assignRole($supperAdmin);
        User::find(2)->assignRole($admin);
        User::find(3)->assignRole($admin);
        User::find(4)->syncPermissions($editor);

        $supperAdmin->syncPermissions([$editor, $support]);
        $admin->syncPermissions([$editor, $support]);
    }
}
