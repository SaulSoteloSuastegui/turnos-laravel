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
Route::view()->name();
*/

Route::get('/', function () {
    return view('welcome');
});
Route::view('turno', 'turno.index')->name('turno.index');
Route::view('turno/inicio', 'turno.inicio')->name('turno.inicio');

Route::view('turno/consulta', 'turno.consulta')->name('turno.consulta');
Route::view('turno/registrar', 'turno.registrar')->name('turno.registrar');