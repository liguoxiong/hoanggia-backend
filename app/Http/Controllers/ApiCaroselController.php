<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carosel;
use App\Http\Resources\CaroselResource;

class ApiCaroselController extends Controller
{
    public function index()
    {
        return CaroselResource::collection(Carosel::all());;
    }

    public function show(Carosel $carosel)
    {
        return new CaroselResource($carosel);
    }

    public function store(Request $request)
    {
        // return Carosel::create($request->all());
    }

    public function update(Request $request, $id)
    {
        // $carosel = Carosel::findOrFail($id);
        // $carosel->update($request->all());

        // return $carosel;
    }

    public function delete(Request $request, $id)
    {
        // $carosel = Carosel::findOrFail($id);
        // $carosel->delete();

        // return 204;
    }
}
