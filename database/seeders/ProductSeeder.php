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
    $products = [
        [
            'title'       => 'iPhone 13',
            'quantity'    => 50,
            'description'=> 'Latest Apple smartphone',
            'published'   => 1,
            'inStock'     => 1,
            'price'       => 999.99,
            'category_id' => 1,
            'brand_id'    => 1,
        ],
        [
            'title'       => 'Samsung Galaxy S21',
            'quantity'    => 40,
            'description'=> 'Flagship Samsung phone',
            'published'   => 1,
            'inStock'     => 1,
            'price'       => 899.99,
            'category_id' => 1,
            'brand_id'    => 2,
        ],
        [
            'title'       => 'Nike Air Max',
            'quantity'    => 30,
            'description'=> 'Popular athletic shoes',
            'published'   => 1,
            'inStock'     => 1,
            'price'       => 149.99,
            'category_id' => 3,
            'brand_id'    => 3,
        ],
    ];

    foreach ($products as $product) {
        Product::create($product);
    }
}

}
