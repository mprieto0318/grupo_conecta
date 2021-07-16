<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoriaController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::resource('users', UserController::class)->names('users')->middleware(['auth', 'role:Admin']);

// Route::resource('categoria', CategoriaController::class)->names('categoria');
Route::get('/categoria', 'App\Http\Controllers\CategoriaController@index');
Route::get('/categoria/index', 'App\Http\Controllers\CategoriaController@index');
Route::get('/categoria/create', 'App\Http\Controllers\CategoriaController@index');
Route::get('/categoria/edit/{num}', 'App\Http\Controllers\CategoriaController@index');


// CRUD TEST
Route::get('/employee', 'App\Http\Controllers\EmployeeController@index');
Route::get('/employee/index', 'App\Http\Controllers\EmployeeController@index');
Route::get('/employee/list', 'App\Http\Controllers\EmployeeController@index');
Route::get('/employee/form', 'App\Http\Controllers\EmployeeController@index');
Route::get('/employee/edit/{num}', 'App\Http\Controllers\EmployeeController@index');