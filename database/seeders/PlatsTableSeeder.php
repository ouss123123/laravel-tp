<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Plat;

class PlatsTableSeeder extends Seeder
{
    public function run()
    {
        Plat::insert([
            ['categorie_id' => 1, 'intitule' => 'Salade César', 'description' => 'Salade avec poulet grillé', 'prix' => 50, 'photo' => 'salade.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['categorie_id' => 2, 'intitule' => 'Pizza Margherita', 'description' => 'Pizza classique', 'prix' => 80, 'photo' => 'pizza.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['categorie_id' => 3, 'intitule' => 'Tiramisu', 'description' => 'Dessert italien', 'prix' => 40, 'photo' => 'tiramisu.jpg', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}

