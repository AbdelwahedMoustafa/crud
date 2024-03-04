<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('productos', 'ProductoController');
Route::get('/productos', 'ProductoController@index')->name('productos.index');
Route::get('/productos/create', 'ProductoController@create')->name('productos.create');
Route::post('/productos', 'ProductoController@store')->name('productos.store');
Route::get('/productos/{id}', 'ProductoController@show')->name('productos.show');
Route::get('/productos/{id}/edit', 'ProductoController@edit')->name('productos.edit');
Route::put('/productos/{id}', 'ProductoController@update')->name('productos.update');
Route::delete('/productos/{id}', 'ProductoController@destroy')->name('productos.destroy');
Route::middleware(['web'])->group(function () {
    Route::resource('productos', 'ProductoController');
});
