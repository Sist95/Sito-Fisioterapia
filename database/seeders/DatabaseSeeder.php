<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Service;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public $services = [
        'Terapia manuale',
        'Esercizio Terapeutico Personalizzato',
        'Osteopatia',
        'Linfodrenaggio Manuale Metodo Vodder',
        'Rieducazione Posturale Metodo Mézières',
        'Rieducazione Pelvi Perineale',
        'Riabilitazione Pre Post Chirurgia',
        'Terapia Strumentale',
        'Nutrizione',
        
    ];

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(AdminUserSeeder::class);
        
       foreach($this->services as $service){
        Service::create([
            'name' => $service
        ]);
       }
    }
}
