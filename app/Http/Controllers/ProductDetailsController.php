<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductDetailsController extends Controller
{
    public function index(Product $product, $id)
    {
        $newProduct = Product::orderBy('created_at', 'desc')->take(3)->get();
        $product = Product::findOrFail($id);
        return view('product-details', compact('newProduct', 'product'));
    }
}
