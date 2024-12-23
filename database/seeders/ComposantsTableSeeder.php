<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Composant;

class ComposantsTableSeeder extends Seeder
{
    public function run()
    {
        Composant::insert([
            ['libelle' => 'Poulet', 'created_at' => now(), 'updated_at' => now()],
            ['libelle' => 'Tomates', 'created_at' => now(), 'updated_at' => now()],
            ['libelle' => 'Fromage', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
