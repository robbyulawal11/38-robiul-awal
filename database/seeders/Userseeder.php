<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'admin@localhost.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin123123'),
            'role' => 'admin',
            'position' => 'Front Office',
            'location' => '',
            'age' => 0,
            'phone' => '',
            'salary' => 0,
            'remember_token' => Str::random(10),
        ]);
    }
}
