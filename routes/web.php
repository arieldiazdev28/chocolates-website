<?php

use App\Http\Controllers\CarritoController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
})->name('home.index');

Route::get('/catalogo', [ProductoController::class, 'index'])->name('productos.index');

Route::get('/nosotros', function () {
    return view('nosotros.index');
})->name('nosotros.index');

Route::get('/faq', function () {
    return view('faq.index');
})->name('faq.index');

Route::get('/contacto', function () {
    return view('contacto.index');
})->name('contacto.index');



//Rutas del carrito de compras
Route::get('/carrito', [CarritoController::class, 'verCarrito'])->name('carrito.index');

Route::post('/carrito/agregar', [CarritoController::class, 'agregarAlCarrito'])->name('carrito.agregar');

Route::post('/carrito/eliminar-unidad/{id}', [CarritoController::class, 'eliminarUnidadDelCarrito'])->name('carrito.eliminarUnidad');


Route::get('/checkout', [CarritoController::class, 'checkoutForm'])->name('checkout.form');

Route::post('/checkout/enviar', [CarritoController::class, 'checkoutEnviar'])->name('checkout.enviar');

Route::get('/checkout/preview', [CarritoController::class, 'checkoutPreview'])->name('checkout.preview');

Route::post('/checkout/confirmar', [CarritoController::class, 'checkoutConfirmar'])->name('checkout.confirmar');



//Ruta de prueba
Route::get('/ver-carrito', function() {
    return session('carrito');
});