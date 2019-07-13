<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feature;
use App\Http\Resources\FeatureResource;

class ApiFeatureController extends Controller
{
    public function index()
    {
        return FeatureResource::collection(Feature::all());;
    }

    public function show(Feature $feature)
    {
        return new FeatureResource($feature);
    }

    public function store(Request $request)
    {
        // return Feature::create($request->all());
    }

    public function update(Request $request, $id)
    {
        // $feature = Feature::findOrFail($id);
        // $feature->update($request->all());

        // return $feature;
    }

    public function delete(Request $request, $id)
    {
        // $feature = Feature::findOrFail($id);
        // $feature->delete();

        // return 204;
    }
}
