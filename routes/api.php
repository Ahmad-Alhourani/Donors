<?php
use Illuminate\Http\Request;

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

//start_Country_start
Route::resource('country', 'API\CountryAPIController');

//end_Country_end

//start_City_start
Route::resource('city', 'API\CityAPIController');

//end_City_end

//start_Orphan_start
Route::resource('orphan', 'API\OrphanAPIController');

//end_Orphan_end

//*****Do Not Delete Me
