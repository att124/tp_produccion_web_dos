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
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});
Route::get('/contacto', function () {
    return view('contactos');
});


Route::get('/inicio-sesion', function () {
    return view('inicio_sesion');
});


Route::get('/iniciar_sesion', function () {
    return view('iniciar_sesion'); //
})->name('iniciar_sesion');
