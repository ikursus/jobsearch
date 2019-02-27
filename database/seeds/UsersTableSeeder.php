<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # User 1
        DB::table('users')->insert([
            'name' => 'John Doe',
            'email' => 'johndoe@gmail.com',
            'password' => bcrypt('johndoe'),
        ]);

        # User 2
        DB::table('users')->insert([
            'name' => 'Raja',
            'email' => 'raja@gmail.com',
            'password' => bcrypt('raja'),
        ]);

        # User 3
        DB::table('users')->insert([
            'name' => 'Boon Lee',
            'email' => 'boonlee@gmail.com',
            'password' => bcrypt('boonlee'),
        ]);

        # User 4
        DB::table('users')->insert([
            'name' => 'Ahmad Albab',
            'email' => 'ahmad@gmail.com',
            'password' => bcrypt('ahmad'),
        ]);

    }
}
