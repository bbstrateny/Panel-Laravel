<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\AlmacenController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('productos', [ProductosController::class, 'index'])->name('productos');
    Route::get('producto/nuevo', [ProductosController::class, 'create'])->name('producto.nuevo');
    Route::post('productos/guardar', [ProductosController::class, 'store'])->name('productos.guardar');
    Route::get('producto/editar/{id}', [ProductosController::class, 'edit'])->name('producto.editar');
    Route::delete('productos/eliminar/{id}', [ProductosController::class, 'delete'])->name('producto.eliminar');

    //////
    Route::get('almacenes', [AlmacenController::class, 'index'])->name('almacenes');
    Route::get('almacen/nuevo', [AlmacenController::class, 'create'])->name('almacen.nuevo');
    Route::post('almacenes/guardar', [AlmacenController::class, 'store'])->name('almacenes.guardar');
    Route::get('almacen/editar/{id}', [AlmacenController::class, 'edit'])->name('almacen.editar');
    Route::delete('almacenes/eliminar/{id}', [AlmacenController::class, 'delete'])->name('almacen.eliminar');
});



