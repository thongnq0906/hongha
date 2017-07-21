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
        // $this->call(UsersTableSeeder::class);
        $this->call(RoleTableSeed::class);
        $this->call(UserTableSeed::class);
        $this->call(CategoryTableSeed::class);
        $this->call(PostTableSeed::class);

    }
}
