<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Branch;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param  \App\Product  $model
     * @return \Illuminate\Http\Response
     */
    public function index(Product $model)
    {
        return view('products.index', ['products' => $model->paginate(15)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all(['id', 'name_en']);
        $branches = Branch::all(['id', 'name']);
        return view('products.create', compact('categories', $categories, 'branches', $branches));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name_en' => 'required|max:255',
            'name_vi' => 'required|max:255',
            'category_id' => 'required',
            'branch_id' => 'required',
            'description_en' => 'required',
            'description_vi' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);
        $imageName = time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $imageName);
        $product = new Product([
            'name_en' => $request->get('name_en'),
            'name_vi' => $request->get('name_vi'),
            'category_id' => $request->get('category_id'),
            'branch_id' => $request->get('branch_id'),
            'description_en' => $request->get('description_en'),
            'description_vi' => $request->get('description_vi'),
            'image' => $imageName,

        ]);

        $product->save();
        return redirect()->route('product.index')->withStatus(__('Thêm Sản phẩm thành công'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all(['id', 'name_en']);
        $branches = Branch::all(['id', 'name']);
        return view('products.edit', compact('product', 'categories', $categories, 'branches', $branches));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $image_name = $request->hidden_image;
        $image = request()->image;
        if ($image) {

            $request->validate([
                'name_en' => 'required|max:255',
                'name_vi' => 'required|max:255',
                'category_id' => 'required',
                'branch_id' => 'required',
                'description_en' => 'required',
                'description_vi' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);
            $image_name = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $image_name);
        } else {
            $request->validate([
                'name_en' => 'required|max:255',
                'name_vi' => 'required|max:255',
                'category_id' => 'required',
                'branch_id' => 'required',
                'description_en' => 'required',
                'description_vi' => 'required',
            ]);
        }
        $form_data = array(
            'name_en' => $request->get('name_en'),
            'name_vi' => $request->get('name_vi'),
            'category_id' => $request->get('category_id'),
            'branch_id' => $request->get('branch_id'),
            'description_en' => $request->get('description_en'),
            'description_vi' => $request->get('description_vi'),
            'image' => $image_name,
        );
        Product::whereId($id)->update($form_data);
        return redirect()->route('product.index')->withStatus(__('Sửa Sản phẩm thành công'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('product.index')->withStatus(__('Xóa Sản phẩm thành công'));
    }
}
