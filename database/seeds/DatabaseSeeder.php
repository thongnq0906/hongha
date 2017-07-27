<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // $this->call(UsersTableSeeder::class);
        $this->call(RoleTableSeed::class);
        $this->call(UserTableSeed::class);
        $this->call(CategoryTableSeed::class);
        $this->call(PostTableSeed::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }
}
