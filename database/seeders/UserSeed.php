<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'username' => 'admin',
            'fullname' => 'Mr.admin',
            'email' => 'admin@gmail.com',
            'phonenumber' => '08123456789',
            'password' => Hash::make('admin'),
            'role' => 'admin'
        ]);
    }
}
