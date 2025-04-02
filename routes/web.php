<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/catalogo', function () {
    return view('cliente.catalogo');
});

Route::get('/nosotros', function () {
    return view('cliente.about_us');
});

Route::get('/faq', function () {
    return view('cliente.faq');
});

Route::get('/contacto', function () {
    return view('cliente.contacto');
});


Route::get('/carrito', function () {
    return view('cliente.carrito');
});

// Rutas de acceso al modo administrador
Route::get('/dashboard', function() {
    return view('admin.dashboard');
});
