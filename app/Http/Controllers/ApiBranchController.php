<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Branch;
use App\Http\Resources\BranchResource;

class ApiBranchController extends Controller
{
    public function index()
    {
        return BranchResource::collection(Branch::all());;
    }

    public function show(Branch $branch)
    {
        return new BranchResource($branch);
    }

    public function store(Request $request)
    {
        // return Branch::create($request->all());
    }

    public function update(Request $request, $id)
    {
        // $branch = Branch::findOrFail($id);
        // $branch->update($request->all());

        // return $branch;
    }

    public function delete(Request $request, $id)
    {
        // $branch = Branch::findOrFail($id);
        // $branch->delete();

        // return 204;
    }
}
