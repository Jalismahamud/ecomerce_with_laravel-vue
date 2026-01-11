<?php

namespace App\Http\Controllers\Backend\Admin;

use Inertia\Inertia;
use App\Models\Product;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $prouduct = Product::get();
        return Inertia::render('Admin/Product/Index' , ['products' => $prouduct]);
    }
}
