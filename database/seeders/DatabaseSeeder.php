<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
{
    $this->call([
        CategoriesTableSeeder::class,
        PlatsTableSeeder::class,
        ComposantsTableSeeder::class,
        ServeursTableSeeder::class,
        CommandesTableSeeder::class,
        ComposantPlatTableSeeder::class,
        CommandePlatTableSeeder::class,
    ]);
}

}
