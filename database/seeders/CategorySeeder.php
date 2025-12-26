<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([
            [
                'name' => 'Electronics',
                'slug' => 'electronics',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Books',
                'slug' => 'books',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Clothing',
                'slug' => 'clothing',
                'created_at' => now(),
                'updated_at' => now()
            ]
            ]);
    }
}
