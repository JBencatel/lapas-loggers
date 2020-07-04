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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('countries', 'CountryController@index');

Route::get('shore-exposures', 'ShoreExposureController@index');

Route::get('shore-levels', 'ShoreLevelController@index');

Route::get('shore-replicates', 'ShoreReplicateController@index');

Route::get('shore-subreplicates', 'ShoreSubreplicateController@index');


Route::get('field-work-units', 'FieldWorkUnitController@index');
Route::get('field-work-unit/{id}', 'FieldWorkUnitController@show');
Route::post('field-work-unit', 'FieldWorkUnitController@store');
Route::put('field-work-unit', 'FieldWorkUnitController@store');
Route::delete('field-work-unit/{id}', 'FieldWorkUnitController@destroy');


Route::get('logger-types', 'LoggerTypeController@index');
Route::get('logger-type/{id}', 'LoggerTypeController@show');
Route::post('logger-type', 'LoggerTypeController@store');
Route::put('logger-type', 'LoggerTypeController@store');
Route::delete('logger-type/{id}', 'LoggerTypeController@destroy');

Route::get('shores', 'ShoreController@index');
Route::get('shore/{id}', 'ShoreController@show');
Route::post('shore', 'ShoreController@store');
Route::put('shore', 'ShoreController@store');
Route::delete('shore/{id}', 'ShoreController@destroy');
