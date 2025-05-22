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
Route::get('/nueva', function () {
    return view('F1.nueva_vista');
});
Route::get('/vista2/{nombre}', function ($nombre) {
    return view('vista2',['nombre'=>$nombre]);
});


Route::get('/web_libros', "App\Http\Controllers\Libros_webController@index");
Route::get('/ver_libro/{id}', "App\Http\Controllers\Libros_webController@show");





Route::get('/nueva_v/{nombre}', function ($nombre) {
    return view('vista_nueva',['nombre'=>$nombre]);
});



Route::get('/vista3/{edad}', [App\Http\Controllers\tablasController::class, 'index']);
