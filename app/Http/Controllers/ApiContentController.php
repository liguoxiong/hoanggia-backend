<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;
use App\Http\Resources\ContentResource;

class ApiContentController extends Controller
{
    public function index()
    {
        return ContentResource::collection(Content::all());;
    }

    public function show(Content $content)
    {
        return new ContentResource($content);
    }

    public function store(Request $request)
    {
        // return Content::create($request->all());
    }

    public function update(Request $request, $id)
    {
        // $content = Content::findOrFail($id);
        // $content->update($request->all());

        // return $content;
    }

    public function delete(Request $request, $id)
    {
        // $content = Content::findOrFail($id);
        // $content->delete();

        // return 204;
    }
}
