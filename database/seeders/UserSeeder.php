<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(['name' => 'admin', 'email' => 'admin@gmail.com', 'status' => 'active', 'role' => 'admin', 'password' => 'admin']);
        User::create(['name' => 'marketing', 'email' => 'marketing@gmail.com', 'status' => 'active', 'role' => 'marketing', 'password' => 'marketing']);
        User::create(['name' => 'administrasi', 'email' => 'administrasi@gmail.com', 'status' => 'active', 'role' => 'administrasi', 'password' => 'administrasi']);
    }
}
