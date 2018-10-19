<?php

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


/* Rutas cuando estas logeado */
Auth::routes();
Route::group(['middleware' => ['auth']], function() {
    Route::get('/task', 'TaskController@task');
    Route::post('task', 'TaskController@createTask');
    Route::get('/', 'TaskController@listado');
    Route::get('/home', 'TaskController@listado');
});

