<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feature;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param  \App\Feature  $model
     * @return \Illuminate\Http\Response
     */
    public function index(Feature $model)
    {
        return view('features.index', ['features' => $model->paginate(15)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('features.create');
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
            'description_en' => 'required',
            'description_vi' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);
        $imageName = time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $imageName);
        $feature = new Feature([
            'name_en' => $request->get('name_en'),
            'name_vi' => $request->get('name_vi'),
            'description_en' => $request->get('description_en'),
            'description_vi' => $request->get('description_vi'),
            'image' => $imageName,

        ]);

        $feature->save();
        return redirect()->route('feature.index')->withStatus(__('Thêm Giới thiệu thành công'));
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
     * @param  \App\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function edit(Feature $feature)
    {
        return view('features.edit', compact('feature'));
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
                'description_en' => 'required',
                'description_vi' => 'required',
            ]);
        }
        $form_data = array(
            'name_en' => $request->get('name_en'),
            'name_vi' => $request->get('name_vi'),
            'description_en' => $request->get('description_en'),
            'description_vi' => $request->get('description_vi'),
            'image' => $image_name,
        );
        Feature::whereId($id)->update($form_data);
        return redirect()->route('feature.index')->withStatus(__('Sửa Giới thiệu thành công'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feature $feature)
    {
        $feature->delete();

        return redirect()->route('feature.index')->withStatus(__('Xóa Giới thiệu thành công'));
    }
}
