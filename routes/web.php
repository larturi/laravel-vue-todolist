<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TaskController;

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

// Página de Inicio
Route::get('/', function () {
    return redirect('tasks');
});

// Tasks Panel
Route::get('/tasks', 'App\Http\Controllers\AppController@index');


// CRUD Tasks API
Route::apiResource('api/tasks', TaskController::class);
