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
        // Create admin user
        User::factory()->create([
            'first_name' => 'Admin',
            'last_name' => 'User',
            'name' => 'Admin User',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'is_admin' => true,
            'is_user' => true,
            'is_login' => true,
            'status' => 1,
        ]);

        // Create client user
        User::factory()->create([
            'first_name' => 'Client',
            'last_name' => 'User',
            'name' => 'Client User',
            'email' => 'client@example.com',
            'password' => Hash::make('password'),
            'is_client' => true,
            'is_user' => true,
            'status' => 1,
        ]);

        // Create regular users
        // User::factory(10)->create();
    }
}
