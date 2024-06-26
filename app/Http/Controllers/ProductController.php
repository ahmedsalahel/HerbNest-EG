<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Product::all();
        return view('dash.products.all', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::all();
        return view('dash.products.add', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $locales = LaravelLocalization::getSupportedLocales();

        $rule = [
            'main_image' => 'required|image',
            'multi_image' => 'required|array',
            'multi_image.*' => 'image',
        ];

        foreach ($locales as $localeCode => $properties) {
            $rule["{$localeCode}.name"] = 'required|string';
            $rule["{$localeCode}.description"] = 'required|string';
        }

        $request->validate($rule);

        $allProductsWithoutImages = $request->except(['main_image', 'multi_image']);
        $product = Product::create($allProductsWithoutImages);

        if ($request->file('main_image')) {
            $uploadedImage = $product->addMediaFromRequest('main_image')
                ->toMediaCollection('main_image');

            $product->update([
                'main_image' => $uploadedImage->getUrl()
            ]);
        }

        if ($request->file('multi_image')) {
            $multiImages = [];
            foreach ($request->file('multi_image') as $image) {
                $image =  $product->addMedia($image)->toMediaCollection('multi_image');
                $multiImages[] = $image->getUrl();
            }
            $product->update([
                'multi_image' => json_encode($multiImages),
            ]);
        }

        return redirect()->route('dashboard.products.index');
    }
    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('dash.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $locales = LaravelLocalization::getSupportedLocales();

        $rule = [
            'main_image' => 'image',
            'multi_image' => 'array',
            'multi_image.*' => 'image',
        ];

        foreach ($locales as $localeCode => $properties) {
            $rule["{$localeCode}.name"] = 'required|string';
            $rule["{$localeCode}.description"] = 'required|string';
        }

        $request->validate($rule);

        $allProductsWithoutImages = $request->except(['main_image', 'multi_image']);
        $product->update($allProductsWithoutImages);

        if ($request->file('main_image')) {
            $oldData = $product->getMedia('main_image')->first();
            if ($oldData) {
                $oldData->delete();
            }
            $uploadedImage = $product->addMediaFromRequest('main_image')
                ->toMediaCollection('main_image');

            $product->update([
                'main_image' => $uploadedImage->getUrl()
            ]);
        }

        if ($request->file('multi_image')) {
            $multiImages = [];
            foreach ($request->file('multi_image') as $image) {
                $image =   $product->addMedia($image)->toMediaCollection('multi_image');
                $multiImages[] = $image->getUrl();
            }
            $product->update([
                'multi_image' => json_encode($multiImages),
            ]);
        }

        return redirect()->route('dashboard.products.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $$product->clearMediaCollection('main_image');
        $$product->clearMediaCollection('multi_image');
        $product->delete();
        return redirect()->route('dashboard.products.index');
    }
}
