<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductFrontController extends Controller
{
    public function index()
    {
        $data = Product::all();
        return view('product', compact('data'));
    }
}
