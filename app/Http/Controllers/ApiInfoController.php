<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info;
use App\Http\Resources\InfoResource;

class ApiInfoController extends Controller
{
    public function index()
    {
        return InfoResource::collection(Info::all());;
    }

    public function show(Info $info)
    {
        return new InfoResource($info);
    }

    public function store(Request $request)
    {
        // return Info::create($request->all());
    }

    public function update(Request $request, $id)
    {
        // $info = Info::findOrFail($id);
        // $info->update($request->all());

        // return $info;
    }

    public function delete(Request $request, $id)
    {
        // $info = Info::findOrFail($id);
        // $info->delete();

        // return 204;
    }
}
