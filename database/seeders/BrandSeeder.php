<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::insert([
            [
                'name' => 'Apple',
                'slug' => 'apple',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Samsung',
                'slug' => 'samsung',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Nike',
                'slug' => 'nike',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
