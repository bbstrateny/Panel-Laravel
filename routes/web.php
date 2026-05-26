<?php

use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\ProductosController;

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('productos', [ProductosController::class, 'index'])->name('productos');
Route::get('producto/nuevo', [ProductosController::class, 'create'])->name('producto.nuevo');
Route::post('productos/guardar', [ProductosController::class, 'store'])->name('productos.guardar');
Route::delete('productos/eliminar/{id}', [ProductosController::class, 'delete'])->name('productos.eliminar');


