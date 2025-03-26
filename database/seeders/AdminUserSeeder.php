<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([ 
            'name' => 'Stefano', 
            'email' => 'stefano@libero.it', 
            'password' => Hash::make('Stu_Armonia_2025!'), 
            'is_admin' => true, ]);
    }
}
