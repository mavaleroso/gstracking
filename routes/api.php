<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();

Route::group(['prefix' => 'v1', 'namespace' => 'Api\V1', 'middleware' => 'locale.api'], function () {    
    
});

// AXIOS
Route::get('/regions_data', 'ajax\RegionController@index');
Route::get('/provinces_data', 'ajax\ProvinceController@show');
Route::get('/cities_data', 'ajax\CityController@show');
Route::get('/brgys_data', 'ajax\BrgyController@show');
Route::get('/request_data', 'page\TravelController@index');

Route::get('/destination_details', 'page\ListRequestController@destinations');
Route::get('/passenger_details', 'page\ListRequestController@passengers');