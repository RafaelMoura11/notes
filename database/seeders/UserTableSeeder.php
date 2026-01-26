<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'username' => 'Rafael',
                'password' => bcrypt('password'),
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'username' => 'Moura',
                'password' => bcrypt('password'),
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'username' => 'User 03',
                'password' => bcrypt('password'),
                'created_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
