<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Branch;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param  \App\Branch  $model
     * @return \Illuminate\Http\Response
     */
    public function index(Branch $model)
    {
        return view('branches.index', ['branches' => $model->paginate(15)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('branches.create');
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
            'name' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);
        $imageName = time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $imageName);
        $branch = new Branch([
            'name' => $request->get('name'),
            'description_en' => $request->get('description_en'),
            'description_vi' => $request->get('description_vi'),
            'image' => $imageName,
            'link' => $request->get('link'),

        ]);

        $branch->save();
        return redirect()->route('branch.index')->withStatus(__('Thêm đại lý thành công'));
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
     * @param  \App\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function edit(Branch $branch)
    {
        return view('branches.edit', compact('branch'));
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
                'name' => 'required|max:255',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);
            $image_name = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $image_name);
        } else {
            $request->validate([
                'name' => 'required|max:255',
            ]);
        }
        $form_data = array(
            'name' => $request->get('name'),
            'description_en' => $request->get('description_en'),
            'description_vi' => $request->get('description_vi'),
            'image' =>  $image_name,
            'link' => $request->get('link')
        );
        Branch::whereId($id)->update($form_data);
        return redirect()->route('branch.index')->withStatus(__('Sửa đại lý thành công'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Branch $branch)
    {
        $branch->delete();

        return redirect()->route('branch.index')->withStatus(__('Xóa đại lý thành công'));
    }
}
