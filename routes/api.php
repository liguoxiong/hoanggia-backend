<?php

use Illuminate\Http\Request;
use App\Branch;
use App\Client;
use App\Info;
use App\Feature;
use App\Category;
use App\Product;
use App\Content;
use App\Service;
use App\Carosel;
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
Route::apiResource('features', 'ApiFeatureController');
Route::apiResource('carosels', 'ApiCaroselController');
Route::apiResource('services', 'ApiServiceController');
Route::apiResource('info', 'ApiInfoController');
Route::apiResource('content', 'ApiContentController');
Route::apiResource('branches', 'ApiBranchController');
Route::apiResource('clients', 'ApiClientController');
Route::apiResource('categories', 'ApiCategoryController');
Route::get('products?cat={category_id}', 'ApiProductController@show');
Route::apiResource('products', 'ApiProductController');
