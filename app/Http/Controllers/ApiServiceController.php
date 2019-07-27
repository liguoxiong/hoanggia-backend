<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Http\Resources\ServiceResource;

class ApiServiceController extends Controller
{
    public function index()
    {
        return ServiceResource::collection(Service::all());;
    }

    public function show(Service $service)
    {
        return new ServiceResource($service);
    }

    public function store(Request $request)
    {
        // return Service::create($request->all());
    }

    public function update(Request $request, $id)
    {
        // $service = Service::findOrFail($id);
        // $service->update($request->all());

        // return $service;
    }

    public function delete(Request $request, $id)
    {
        // $service = Service::findOrFail($id);
        // $service->delete();

        // return 204;
    }
}
