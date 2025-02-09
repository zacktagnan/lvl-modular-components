<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory()->create([
            'name' => 'Laptops',
        ]);

        Category::factory()->create([
            'name' => 'Smartphones',
        ]);

        Category::factory()->create([
            'name' => 'Tablets',
        ]);

        Category::factory()->create([
            'name' => 'Desktops',
        ]);

        Category::factory()->create([
            'name' => 'Monitors',
        ]);

        Category::factory()->create([
            'name' => 'Headphones',
        ]);
    }
}
