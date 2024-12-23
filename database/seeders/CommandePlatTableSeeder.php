<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommandePlatTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('commande_plat')->insert([
            ['commande_id' => 1, 'plat_id' => 1, 'nombre' => 2],
            ['commande_id' => 1, 'plat_id' => 2, 'nombre' => 1],
            ['commande_id' => 2, 'plat_id' => 3, 'nombre' => 3],
        ]);
    }
}
