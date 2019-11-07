<?php

use Illuminate\Database\Seeder;
use App\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = "USER";
        $role->description = "Basic user";
        $role->save();

        $role = new Role();
        $role->name = "ADMIN";
        $role->description = "Super user";
        $role->save();

        $role = new Role();
        $role->name = "EDITOR";
        $role->description = "Manager user";
        $role->save();
    }
}
