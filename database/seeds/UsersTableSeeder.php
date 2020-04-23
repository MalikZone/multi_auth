<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id'        => 1,
            'role_id'   => 1,
            'name'      => 'Admin',
            'username'  => 'Malik',
            'email'     => 'malik@gmail.com',
            'password'  => bcrypt('rootadmin'),
        ]);

        DB::table('users')->insert([
            'id'        => 2,
            'role_id'   => 2,
            'name'      => 'Author',
            'username'  => 'Aisyah',
            'email'     => 'aisyah@gmail.com',
            'password'  => bcrypt('rootauthor'),
        ]);
    }
}
