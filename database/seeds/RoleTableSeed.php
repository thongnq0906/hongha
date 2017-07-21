<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();
        $role_user = new \App\Role();
        $role_user->name = 'User';
        $role_user->description = 'A normal user';
        $role_user->save();

        $role_author = new \App\Role();
        $role_author->name = 'Author';
        $role_author->description = 'Blog Author';
        $role_author->save();

        

        $role_admin = new \App\Role();
        $role_admin->name = 'Admin';
        $role_admin->description = 'Administrator';
        $role_admin->save();

        
    }
}
