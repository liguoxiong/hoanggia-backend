<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param  \App\Content
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit(Content $content)
    {
        return view('contents.edit', compact('content'));
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
            'header_en' => 'required',
            'header_vi' => 'required',
            'feature_title_en' => 'required',
            'feature_title_vi' => 'required',
            'feature_description_en' => 'required',
            'feature_description_vi' => 'required',
            'service_description_en' => 'required',
            'service_description_vi' => 'required',
            'distributor_title_en' => 'required',
            'distributor_title_vi' => 'required',
        ]);
        $form_data = array(
            'header_en' => $request->get('header_en'),
            'header_vi' => $request->get('header_vi'),
            'feature_title_en' => $request->get('feature_title_en'),
            'feature_title_vi' => $request->get('feature_title_vi'),
            'feature_description_en' => $request->get('feature_description_en'),
            'feature_description_vi' => $request->get('feature_description_vi'),
            'service_description_en' => $request->get('service_description_en'),
            'service_description_vi' => $request->get('service_description_vi'),
            'distributor_title_en' => $request->get('distributor_title_en'),
            'distributor_title_vi' => $request->get('distributor_title_vi'),
            'distributor_description_en' => $request->get('distributor_description_en'),
            'distributor_description_vi' => $request->get('distributor_description_vi'),
            'product_description_en' => $request->get('product_description_en'),
            'product_description_vi' => $request->get('product_description_vi'),
            'clients_description_en' => $request->get('clients_description_en'),
            'clients_description_vi' => $request->get('clients_description_vi'),
        );
        Content::whereId($id)->update($form_data);
        return redirect()->route('home')->withStatus(__('Sửa nội dung thành công'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
