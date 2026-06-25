<?php

namespace Database\Seeders;

use App\Models\Hobbies;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Pehle Roles aur Permissions create karein (Jo aapne pehle banaya tha)
        $this->call(RolePermissionSeeder::class);

        // 2. Admin User Banayein aur Role dein
        $admin = User::firstOrCreate(
            ['email' => 'admin@test.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('password123'), // Password yeh hoga
                'email_verified_at' => now(), // Email verify karne ka jhanjhat khatam
            ]
        );
        $admin->assignRole('admin');

        // 3. Teacher User Banayein aur Role dein
        $teacher = User::firstOrCreate(
            ['email' => 'teacher@test.com'],
            [
                'name' => 'Teacher User',
                'password' => Hash::make('password123'),
                'email_verified_at' => now(),
            ]
        );
        $teacher->assignRole('teacher');

        // 4. Student User Banayein aur Role dein
        $student = User::firstOrCreate(
            ['email' => 'student@test.com'],
            [
                'name' => 'Student User',
                'password' => Hash::make('password123'),
                'email_verified_at' => now(),
            ]
        );
        $student->assignRole('student');
          
    $this->call([Hobbyseeder::class]);
        
    }
}
