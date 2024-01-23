<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'status' => 'active',
                'password' => Hash::make('Alma1234'),
                'newsletter' => 0,
            ],
            [
                'username' => 'leader',
                'email' => 'leader@gmail.com',
                'role' => 'leader',
                'status' => 'active',
                'password' => Hash::make('Alma1234'),
                'newsletter' => 0,
            ],
            [
                'username' => 'agent',
                'email' => 'agent@gmail.com',
                'role' => 'agent',
                'status' => 'active',
                'password' => Hash::make('Alma1234'),
                'newsletter' => 0,
            ],
            [
                'username' => 'customer',
                'email' => 'customer@gmail.com',
                'role' => 'customer',
                'status' => 'active',
                'password' => Hash::make('Alma1234'),
                'newsletter' => 0,
            ]
        ]);
    }
}
