<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComposantPlatTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('composant_plat')->insert([
            ['composant_id' => 1, 'plat_id' => 1, 'quantite' => 200, 'unite' => 'g'],
            ['composant_id' => 2, 'plat_id' => 1, 'quantite' => 100, 'unite' => 'g'],
            ['composant_id' => 3, 'plat_id' => 2, 'quantite' => 150, 'unite' => 'g'],
        ]);
    }
}
