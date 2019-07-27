<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Resources\CategoryResource;

class ApiCategoryController extends Controller
{
    public function index()
    {
        return CategoryResource::collection(Category::all());;
    }

    public function show(Category $category)
    {
        return new CategoryResource($category);
    }

    public function store(Request $request)
    {
        // return Category::create($request->all());
    }

    public function update(Request $request, $id)
    {
        // $category = Category::findOrFail($id);
        // $category->update($request->all());

        // return $category;
    }

    public function delete(Request $request, $id)
    {
        // $category = Category::findOrFail($id);
        // $category->delete();

        // return 204;
    }
}
