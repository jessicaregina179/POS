<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Jessica', 'email' => 'jessicaregina@gmail.com', 'password' => bcrypt('jessica')],
            ['name' => 'Regina', 'email' => 'primaregina@gmail.com', 'password' => bcrypt('regina')],
            ['name' => 'Prima', 'email' => 'jeprimaregina@gmail.com', 'password' => bcrypt('prima')]
        ];
        \App\Models\User::insert($data);
    }
}
