<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class adminlogin extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('login_admins')->insert([
            'name' => 'admin',
            'email' => 'dduong1703@gmail.com',
            'password' => Hash::make('Duonghk123@'),
        ]);
    }
}
