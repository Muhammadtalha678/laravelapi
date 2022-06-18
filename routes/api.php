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
// });
Route::post('/create','App\Http\Controllers\apiController@apicreate');
Route::get('/show','App\Http\Controllers\apiController@apishow');
Route::get('/delete/{id}','App\Http\Controllers\apiController@apidelete');
Route::post('/update/{id}','App\Http\Controllers\apiController@apiupdate');