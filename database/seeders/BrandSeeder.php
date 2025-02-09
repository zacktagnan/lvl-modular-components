<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::factory()->create([
            'name' => 'Apple',
        ]);

        Brand::factory()->create([
            'name' => 'Samsung',
        ]);

        Brand::factory()->create([
            'name' => 'LG',
        ]);

        Brand::factory()->create([
            'name' => 'AMD',
        ]);

        Brand::factory()->create([
            'name' => 'Intel',
        ]);
    }
}
