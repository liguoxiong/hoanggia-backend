<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Resources\ProductResource;

class ApiProductController extends Controller
{
    public function index()
    {
        return ProductResource::collection(Product::all());
    }

    public function show($category_id, Request $request)
    {
        return ProductResource::collection(Product::where('category_id', '=', $category_id)->firstOrFail());
    }

    public function store(Request $request)
    {
        // return Product::create($request->all());
    }

    public function update(Request $request, $id)
    {
        // $product = Product::findOrFail($id);
        // $product->update($request->all());

        // return $product;
    }

    public function delete(Request $request, $id)
    {
        // $product = Product::findOrFail($id);
        // $product->delete();

        // return 204;
    }
}
