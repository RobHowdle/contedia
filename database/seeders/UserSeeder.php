<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Rob Howdle',
            'email' => 'robhowdle94@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password')
        ]);
    }
}