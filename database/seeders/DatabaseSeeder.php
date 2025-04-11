<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'adminstartor',
            'email' => 'admin@example.com',
            'password' => Hash::make('12345678'),
            'permission' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        User::create([
            'name' => 'development',
            'email' => 'dev@example.com',
            'password' => Hash::make('12345678'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
