<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Color::factory()->create([
            'name' => 'Black',
        ]);

        Color::factory()->create([
            'name' => 'White',
        ]);

        Color::factory()->create([
            'name' => 'Red',
        ]);

        Color::factory()->create([
            'name' => 'Green',
        ]);

        Color::factory()->create([
            'name' => 'Blue',
        ]);

        Color::factory()->create([
            'name' => 'Purple',
        ]);

        Color::factory()->create([
            'name' => 'Orange',
        ]);
    }
}
