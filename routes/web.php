<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolController;
use App\Http\Controllers\CategoriaController;
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
})->name('home');

Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('/contacto', function () {
    return view('contactos');
})->name('contacto');

Route::get('/inicio_sesion', function () {
    return view('inicio_sesion');
})->name('inicio_sesion');

Route::get('/about', function () {
    return view('about');
})->name('nosotros');

Route::get('/registro', function () {
    return view('registro');
})->name('registro');

Route::get('/roles', [RolController::class, 'index'])->name('roles.index');

Route::get('/roles/create', [RolController::class, 'create'])->name('roles.create');

Route::post('/roles/store', [RolController::class, 'store'])->name('roles.store');

Route::get('/roles/edit/{rol}',[Rolcontroller::class, 'edit'])->name('roles.edit');

Route::put('/roles/update/{rol}',[Rolcontroller::class, 'update'])->name('roles.update');

Route::get('/roles/mostrar/{rol}',[Rolcontroller::class, 'show'])->name('roles.mostrar');

Route::delete('roles/borrar/{rol}',[Rolcontroller::class, 'destroy'])->name('roles.borrar');

Route::get('/categorias',[CategoriaController::class, 'index'])->name('categorias.index');

Route::get('/categorias/crear',[CategoriaController::class, 'create'])->name('categorias.crear');

Route::post('/categorias/store', [CategoriaController::class, 'store'])->name('categorias.store');

Route::get('/categorias/edit/{categoria}',[CategoriaController::class, 'edit'])->name('categorias.edit');

Route::put('/categorias/update/{categoria}',[CategoriaController::class, 'update'])->name('categorias.update');

Route::delete('categorias/delete/{categoria}',[CategoriaController::class, 'destroy'])->name('categorias.delete');

Route::get('/categorias/mostrar/{categoria}',[CategoriaController::class, 'show'])->name('categorias.mostrar');


