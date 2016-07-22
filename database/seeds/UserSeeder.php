<?php

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
        DB::table('users')->delete();

        DB::table('users')->insert([
            'fullname' => 'Valentine Mwangi',
            'username' => 'queens',
            'password' => bcrypt('password'),
        ]);

    }
}