<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProvinciaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DatousuarioController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\VentaController;

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
Route::get('/', [ProductoController::class, 'productosdestacados'])->name('home');

// Si necesitas mantener las rutas antiguas por alguna razón, podrías hacerlo así:
Route::get('/home', [ProductoController::class, 'productosdestacados'])->name('home');
Route::get('/index', [ProductoController::class, 'productosdestacados'])->name('index');


Route::get('/about', function () {
    return view('about');
})->name('nosotros');

Route::get('/roles', [RolController::class, 'index'])->middleware('Isadmin:administrador')->name('roles.index');

Route::get('/roles/create', [RolController::class, 'create'])->middleware('Isadmin:administrador')->name('roles.create');

Route::post('/roles/store', [RolController::class, 'store'])->middleware('Isadmin:administrador')->name('roles.store');

Route::get('/roles/edit/{rol}',[Rolcontroller::class, 'edit'])->middleware('Isadmin:administrador')->name('roles.edit');

Route::put('/roles/update/{rol}',[Rolcontroller::class, 'update'])->middleware('Isadmin:administrador')->name('roles.update');

Route::get('/roles/mostrar/{rol}',[Rolcontroller::class, 'show'])->middleware('Isadmin:administrador')->name('roles.mostrar');

Route::delete('roles/borrar/{rol}',[Rolcontroller::class, 'destroy'])->middleware('Isadmin:administrador')->name('roles.borrar');

Route::get('/categorias',[CategoriaController::class, 'index'])->middleware('Isadmin:administrador')->name('categorias.index');

Route::get('/categorias/crear',[CategoriaController::class, 'create'])->middleware('Isadmin:administrador')->name('categorias.crear');

Route::post('/categorias/store', [CategoriaController::class, 'store'])->middleware('Isadmin:administrador')->name('categorias.store');

Route::get('/categorias/edit/{categoria}',[CategoriaController::class, 'edit'])->middleware('Isadmin:administrador')->name('categorias.edit');

Route::put('/categorias/update/{categoria}',[CategoriaController::class, 'update'])->middleware('Isadmin:administrador')->name('categorias.update');

Route::delete('categorias/delete/{categoria}',[CategoriaController::class, 'destroy'])->middleware('Isadmin:administrador')->name('categorias.delete');

Route::get('/categorias/mostrar/{categoria}',[CategoriaController::class, 'show'])->name('categorias.mostrar');

Route::get('/productos/index',[ProductoController::class,'index'])->middleware('Isadmin:administrador')->name('productos.index');

Route::get('/productos/create',[ProductoController::class, 'create'])->middleware('Isadmin:administrador')->name('productos.create');

Route::post('/productos/store',[ProductoController::class, 'store'])->middleware('Isadmin:administrador')->name('productos.store');

Route::get('/productos/edit/{producto}',[ProductoController::class, 'edit'])->middleware('Isadmin:administrador')->name('productos.edit');

Route::put('/productos/update/{producto}',[ProductoController::class, 'update'])->middleware('Isadmin:administrador')->name('productos.update');

Route::delete('/productos/delete/{producto}',[ProductoController::class, 'destroy'])->middleware('Isadmin:administrador')->name('productos.delete');

Route::get('/productos/mostrar/{producto}',[ProductoController::class, 'show'])->name('productos.mostrar');

Route::resource('provincias', ProvinciaController::class)->middleware('Isadmin:administrador');

Route::resource('users', UserController::class);

Route::get('login', [LoginController::class, 'showLoginForm'])->middleware('guest')->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->middleware('Userlogin')->name('logout');

Route::middleware('Isadmin:admin')->group(function () {
    Route::resource('users', UserController::class)->only([
        'index',
    ]);
});


Route::middleware('guest')->group(function(){
    Route::resource('users', UserController::class)->only([
        'create',
    ]); });


Route::get('/productos/buscar',[ProductoController::class, 'buscar'])->name('productos.buscar');


Route::middleware('AutorizacionPerfil')->group(function () {
    Route::resource('users', UserController::class)->only([
        'show',
    ]);
});


Route::get('/carrito/index',[CarritoController::class, 'index'])->middleware('Userlogin')->name('carrito.index');

Route::post('/carrito', [CarritoController::class, 'store'])->middleware('Userlogin')->name('carrito.store');

Route::put('/carrito/{id}', [CarritoController::class, 'update'])->middleware('Userlogin')->name('carrito.update');

Route::delete('/carrito/{id}', [CarritoController::class, 'destroy'])->middleware('Userlogin')->name('carrito.destroy');

Route::get('/contactos/index' ,[ContactoController::class , 'index'])->middleware('Isadmin:administrador')->name('contactos.index');

Route::get('/contactos/create', [ContactoController::class, 'create'])->middleware('Userlogin')->name('contactos.create');

Route::post('/contactos/store',[ContactoController::class, 'store'])->middleware('Userlogin')->name('contactos.store');

Route::get('/contactos/{contacto}/edit',[ContactoController::class, 'edit'])->middleware('Isadmin:administrador')->name('contactos.edit');

Route::put('contactos/{contacto}/update',[ContactoController::class, 'update'])->middleware('Isadmin:administrador')->name('contactos.update');

Route::delete('contactos/{contacto}/delete',[ContactoController::class, 'destroy'])->middleware('Isadmin:administrador')->name('contactos.delete');

Route::get('contactos/{contacto}/mostrar', [ContactoController::class, 'show'])->name('contactos.mostrar');

Route::get('/ventas/confirmar-compra', [VentaController::class, 'confirmarCompra'])->middleware('Userlogin')->name('ventas.confirmarCompra');

Route::post('/ventas/finalizar-compra', [VentaController::class, 'finalizarCompra'])->middleware('Userlogin')->name('ventas.finalizarCompra');

Route::put('/productos/stock/{producto}',[ProductoController::class, 'incrementarStock'])->middleware('Isadmin:administrador')->name('producto.stock');

Route::get('/productos/editarstock/{producto}',[ProductoController::class, 'editarStock'])->middleware('Isadmin:administrador')->name('producto.editarstock');

Route::get('/ventas/index',[VentaController::class, 'index'])->middleware('Isadmin:administrador')->name('ventas.index');
