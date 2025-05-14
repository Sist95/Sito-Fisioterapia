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
        User::updateOrCreate(
            ['email' => 'stefano@libero.it'], // Criterio per cercare l'utente
            [ // Dati da aggiornare o inserire
                'name' => 'Stefano',
                'password' => Hash::make('Stu_Armonia_2025!'),
                'is_admin' => true,
            ]
        );
    }
}
