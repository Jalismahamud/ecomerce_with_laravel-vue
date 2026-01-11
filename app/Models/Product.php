<?php

namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasSlug, HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'quantity',
        'price',
        'category_id',
        'brand_id',
        'inStock',
        'image',
        'published'
    ];

     /**
     * Get the options for generating the slug.
     */

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function product_images(){
        return $this->hasMany(ProductImage::class , 'product_id' , 'id');
    }
    public function category(){
        return $this->hasMany(Category::class , 'product_id' , 'id');
    }
    public function brand(){
        return $this->hasMany(Brand::class , 'product_id' , 'id');
    }
}
