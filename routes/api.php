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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/categoria', 'App\Http\Controllers\API\CategoriaController@index');
Route::get('/categoria/index', 'App\Http\Controllers\API\CategoriaController@index');
Route::post('/categoria/create', 'App\Http\Controllers\API\CategoriaController@create');
Route::get('/categoria/get/{id}', 'App\Http\Controllers\API\CategoriaController@get');
Route::put('/categoria/update/{id}', 'App\Http\Controllers\API\CategoriaController@update');
Route::delete('/categoria/delete/{id}', 'App\Http\Controllers\API\CategoriaController@delete');