<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin2@gmail.com',
            'password' => bcrypt('admin123'),
        ]);

        $admin->assignRole('Admin');

        $user = User::create([
            'name' => 'Regular User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('user123'),
        ]);

        $user->assignRole('User');
    }
}
