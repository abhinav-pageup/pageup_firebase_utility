<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();

        \App\Models\UserMaster::create([
            'name' => 'Pageup Admin',
            'email' => 'admin@pageupsoft.com',
            'password' => Hash::make('Admin@123'),
            'role' => 'Admin',
            'created_at' => now(),
            'created_by' => 1
        ]);

        \App\Models\UserMaster::create([
            'name' => 'Abhinav Nmadeo',
            'email' => 'abhinav.namdeo@pageupsoft.com',
            'password' => Hash::make('Admin@123'),
            'role' => 'Maintainer',
            'created_at' => now(),
            'created_by' => 1
        ]);
    }
}
