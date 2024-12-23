<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Serveur;

class ServeursTableSeeder extends Seeder
{
    public function run()
    {
        Serveur::insert([
            ['nom' => 'Ahmed', 'date_embauche' => '2023-01-15', 'created_at' => now(), 'updated_at' => now()],
            ['nom' => 'Fatima', 'date_embauche' => '2022-11-10', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}

