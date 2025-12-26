<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            [
                'title'       => 'iPhone 13',
                'slug'        => Str::slug('iPhone 13'),
                'quantity'    => 50,
                'description'=> 'Latest Apple smartphone',
                'published'   => 1,
                'inStock'     => 1,
                'price'       => 999.99,
                'category_id' => 1,
                'brand_id'    => 1,
                'created_by'  => 1,
                'updated_by'  => 1,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'title'       => 'Samsung Galaxy S21',
                'slug'        => Str::slug('Samsung Galaxy S21'),
                'quantity'    => 40,
                'description'=> 'Flagship Samsung phone',
                'published'   => 1,
                'inStock'     => 1,
                'price'       => 899.99,
                'category_id' => 1,
                'brand_id'    => 2,
                'created_by'  => 1,
                'updated_by'  => 1,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'title'       => 'Nike Air Max',
                'slug'        => Str::slug('Nike Air Max'),
                'quantity'    => 30,
                'description'=> 'Popular athletic shoes',
                'published'   => 1,
                'inStock'     => 1,
                'price'       => 149.99,
                'category_id' => 3,
                'brand_id'    => 3,
                'created_by'  => 1,
                'updated_by'  => 1,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
        ]);
    }
}
