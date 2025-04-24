<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;
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


Route::get('/libros', "App\Http\Controllers\LibroController@index");
Route::post('/libro/{id}', "App\Http\Controllers\LibroController@show");

Route::patch('/libros/actualizar-cantidad', "App\Http\Controllers\LibroController@actualizarCantidad");
Route::delete('/libros/{isbn}', "App\Http\Controllers\LibroController@eliminarLibro");
Route::post('/libros/nuevo', "App\Http\Controllers\LibroController@crearLibro");

Route::post('/nuevo', function () {
    return "creando un libro";
});

