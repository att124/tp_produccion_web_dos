<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProvinciaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DatousuarioController;
use App\Http\Controllers\Auth\LoginController;
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
})->middleware('Userlogin')->name('contacto');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/about', function () {
    return view('about');
})->name('nosotros');

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

Route::get('/productos/index',[ProductoController::class,'index'])->name('productos.index');

Route::get('/productos/create',[ProductoController::class, 'create'])->name('productos.create');

Route::post('/productos/store',[ProductoController::class, 'store'])->name('productos.store');

Route::get('/productos/edit/{producto}',[ProductoController::class, 'edit'])->name('productos.edit');

Route::put('/productos/update/{producto}',[ProductoController::class, 'update'])->name('productos.update');

Route::delete('/productos/delete/{producto}',[ProductoController::class, 'destroy'])->name('productos.delete');

Route::get('/productos/mostrar/{producto}',[ProductoController::class, 'show'])->name('productos.mostrar');

Route::resource('provincias', ProvinciaController::class);

Route::resource('users', UserController::class);

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

