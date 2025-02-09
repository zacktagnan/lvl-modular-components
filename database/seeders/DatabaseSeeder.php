<?php

namespace Database\Seeders;

use App\Models\Article;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([UserSeeder::class]);

        // Otros - Buscador Pipeline 1d2
        Article::factory()->count(120)->create();

        $this->call([
            CategorySeeder::class,
            ColorSeeder::class,
            BrandSeeder::class,
            SizeSeeder::class,
            ProductSeeder::class,
        ]);
    }
}
