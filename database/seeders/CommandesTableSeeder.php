<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Commande;

class CommandesTableSeeder extends Seeder
{
    public function run()
    {
        Commande::insert([
            ['serveur_id' => 1, 'numero_table' => 5, 'etat' => 'en cours', 'payé' => false, 'created_at' => now(), 'updated_at' => now()],
            ['serveur_id' => 2, 'numero_table' => 3, 'etat' => 'servi', 'payé' => true, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}

