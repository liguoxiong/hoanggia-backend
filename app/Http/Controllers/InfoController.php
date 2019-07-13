<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param  \App\Info
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
     * @param  \App\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function edit(Info $info)
    {
        return view('infos.edit', compact('info'));
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
            'company_name_en' => 'required|max:255',
            'company_name_vi' => 'required|max:255',
            'address_en' => 'required|max:255',
            'address_vi' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required|max:255',
        ]);
        $form_data = array(
            'company_name_en' => $request->get('company_name_en'),
            'company_name_vi' => $request->get('company_name_vi'),
            'address_en' => $request->get('address_en'),
            'address_vi' => $request->get('address_vi'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'facebook' => $request->get('facebook'),
            'youtube' => $request->get('youtube'),
            'twitter' => $request->get('twitter'),
            'likedin' => $request->get('likedin'),
        );
        Info::whereId($id)->update($form_data);
        return redirect()->route('home')->withStatus(__('Sửa thông tin thành công'));
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
