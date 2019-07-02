<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Http\Resources\ClientResource;

class ApiClientController extends Controller
{
    public function index()
    {
        return ClientResource::collection(Client::all());;
    }

    public function show(Client $client)
    {
        return new ClientResource($client);
    }

    public function store(Request $request)
    {
        // return Client::create($request->all());
    }

    public function update(Request $request, $id)
    {
        // $client = Client::findOrFail($id);
        // $client->update($request->all());

        // return $client;
    }

    public function delete(Request $request, $id)
    {
        // $client = Client::findOrFail($id);
        // $client->delete();

        // return 204;
    }
}
