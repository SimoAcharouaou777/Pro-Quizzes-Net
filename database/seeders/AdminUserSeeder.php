<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password = 'admin@gmail.com';
        $hashedPassword = Hash::make($password);
        $user = User::create([
            'username' => 'ahmed',
            'email' => 'admin@gmail.com',
            'password'=> $hashedPassword,
        ]);
        $user->roles()->attach([1]);
    }
}
