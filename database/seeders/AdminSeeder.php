<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin Ibik',
            'npm' => '000000000',
            'email' => 'admin1@ibik.ac.id',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);
        
    }
}
