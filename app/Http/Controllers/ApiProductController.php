<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Resources\ProductResource;

class ApiProductController extends Controller
{
    public function index(Request $request)
    {
        if ($request->cat) {
            $listProduct = Product::where('category_id', '=', $request->cat)
                ->get();
            return ProductResource::collection($listProduct);
        } else {
            return ProductResource::collection(Product::all());
        }
    }

    public function show(Request $request)
    { }

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
