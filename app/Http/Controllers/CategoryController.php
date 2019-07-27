<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param  \App\Category  $model
     * @return \Illuminate\Http\Response
     */
    public function index(Category $model)
    {
        return view('categories.index', ['categories' => $model->paginate(15)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
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
            'name_vi' => 'required|max:255',
            'name_en' => 'required|max:255',

        ]);
        $category = new Category([
            'name_vi' => $request->get('name_vi'),
            'name_en' => $request->get('name_en'),
            'description_en' => $request->get('description_en'),
            'description_vi' => $request->get('description_vi'),

        ]);

        $category->save();
        return redirect()->route('category.index')->withStatus(__('Thêm Danh mục thành công'));
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
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
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

        $request->validate([
            'name_vi' => 'required|max:255',
            'name_en' => 'required|max:255',
        ]);

        $form_data = array(
            'name_vi' => $request->get('name_vi'),
            'name_en' => $request->get('name_en'),
            'description_en' => $request->get('description_en'),
            'description_vi' => $request->get('description_vi'),
        );
        Category::whereId($id)->update($form_data);
        return redirect()->route('category.index')->withStatus(__('Sửa Danh mục thành công'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('category.index')->withStatus(__('Xóa Danh mục thành công'));
    }
}
