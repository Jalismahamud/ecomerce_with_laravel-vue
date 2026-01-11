<?php

namespace App\Http\Controllers\Backend\Admin;

use Inertia\Inertia;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProductImage;

class ProductController extends Controller
{
    public function index()
    {
        $prouduct = Product::get();
        return Inertia::render('Admin/Product/Index' , ['products' => $prouduct]);
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->title = $request->title;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;


        if($product->hasFile('product_images')){
            $productImages = $request->file('product_images');

            foreach($productImages as $image){
                $uniqueName = time() . '=' . Str::random(10) . '.' . $image->getClientOriginaExtension();

                $image->save('product_images' , $uniqueName);

                ProductImage::create([
                    'product_id' => $product->id,
                    'image' => 'product_images/' . $uniqueName,
                ]);
            }
        }
        return redirect()->route('admin.product.create')->with('success' , 'Product Created succesfully.');
    }
}
