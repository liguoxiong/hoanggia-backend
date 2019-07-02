<?php

use Illuminate\Http\Request;
use App\Branch;
use App\Client;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('branches', 'ApiBranchController@index');
// Route::get('branches/{branch}', 'ApiBranchController@show');
Route::apiResource('branches', 'ApiBranchController');
Route::apiResource('clients', 'ApiBranchController');
