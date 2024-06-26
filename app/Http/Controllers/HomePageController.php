<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $data = Product::all();
        return view('index', compact('data'));
    }
}
