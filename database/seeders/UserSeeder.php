<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin Demo',
            'email' => 'admin@demo.com',
            'password' => Hash::make('password123'),
            'eliminar' => true,
        ]);

        User::create([
            'name' => 'Jane Smith',
            'email' => 'jane@demo.com',
            'password' => Hash::make('password123'),
            'eliminar' => true,
        ]);

        User::create([
            'name' => 'Sam Taylor',
            'email' => 'sam@demo.com',
            'password' => Hash::make('password123'),
            'eliminar' => false,
        ]);
    }
}
