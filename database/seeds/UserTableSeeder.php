<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_role = Role::where('name', 'USER')->first();
        $admin_role = Role::where('name', 'ADMIN')->first();
        $editor_role = Role::where('name', 'EDITOR')->first();

        $user = new User();
        $user->name = "Otto";
        $user->email = "okoridze@local.host";
        $user->password = Hash::make("otto");
        $user->save();
        $user->roles()->attach($user_role);

        $admin = new User();
        $admin->name = "Admin";
        $admin->email = "admin@local.host";
        $admin->password = Hash::make("admin");
        $admin->save();
        $admin->roles()->attach($admin_role);

        $editor = new User();
        $editor->name = "Editor";
        $editor->email = "editor@local.host";
        $editor->password = Hash::make("editor");
        $editor->save();
        $editor->roles()->attach($editor_role);
    }
}
