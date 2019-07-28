<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carosel;

class CaroselController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param  \App\Carosel  $model
     * @return \Illuminate\Http\Response
     */
    public function index(Carosel $model)
    {
        return view('carosels.index', ['carosels' => $model->paginate(15)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('carosels.create');
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

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);
        $imageName = time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $imageName);
        $carosel = new Carosel([
            'name_en' => $request->get('name_en'),
            'name_vi' => $request->get('name_vi'),
            'description_en' => $request->get('description_en'),
            'description_vi' => $request->get('description_vi'),
            'image' => $imageName,

        ]);

        $carosel->save();
        return redirect()->route('carosel.index')->withStatus(__('Thêm Slide thành công'));
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
     * @param  \App\Carosel  $carosel
     * @return \Illuminate\Http\Response
     */
    public function edit(Carosel $carosel)
    {
        return view('carosels.edit', compact('Carosel'));
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

                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);
            $image_name = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $image_name);
        } else {
            $request->validate([]);
        }
        $form_data = array(
            'name_en' => $request->get('name_en'),
            'name_vi' => $request->get('name_vi'),
            'description_en' => $request->get('description_en'),
            'description_vi' => $request->get('description_vi'),
            'image' => $image_name,
        );
        Carosel::whereId($id)->update($form_data);
        return redirect()->route('carosel.index')->withStatus(__('Sửa Slide thành công'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Carosel  $carosel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carosel $carosel)
    {
        $carosel->delete();

        return redirect()->route('carosel.index')->withStatus(__('Xóa Slide thành công'));
    }
}
