<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }

    public function create()
    {
        //
    }

    public function store(StoreProductRequest $request)
    {
        $record = new Product();
        $record->fill($request->all())->save();
    }

    public function show(Product $product)
    {
        return $product;
    }

    public function edit(Product $product)
    {
        //
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->fill($request->all())->save();
    }

    public function destroy(Product $product)
    {
        $product->delete();
    }
}
