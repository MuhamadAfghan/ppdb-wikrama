<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Afghan_admin',
            'email' => 'admin@test',
            'password' => bcrypt('admin'),
            'role' => 'admin',
        ]);
        User::create([
            'name' => 'Afghan_student',
            'email' => 'student@test',
            'password' => bcrypt('student'),
            'role' => 'student',
        ]);
    }
}