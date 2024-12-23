<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        Category::insert([
            ['titre' => 'Entrées', 'photo' => 'entrees.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['titre' => 'Plats principaux', 'photo' => 'plats.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['titre' => 'Desserts', 'photo' => 'desserts.jpg', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
