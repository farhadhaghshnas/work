<?php

use Illuminate\Support\Facades\Route;

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


Route::get('works','WorksController@index');
Route::get('works/{work}','WorksController@show');
Route::get('new-works','WorksController@create');
Route::post('store-works','WorksController@store');
Route::get('works/{work}/edit','WorksController@edit');
Route::post('works/{work}/update-works','WorksController@update');
Route::get('/works/{word}/delete','WorksController@destroy');
