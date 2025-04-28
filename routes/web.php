<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

Route::get('/', [ClienteController::class, 'index']);

//Inicio Cliente
Route::get('/', function () {
    return view('cliente.index');
});


Route::get('/cliente/catalogo', function () {
    return view('cliente.catalogo');
});

Route::get('/cliente/contacto', function () {
    return view('cliente.contacto');

});

Route::get('/cliente/FAQ', function () {
    return view('cliente.FAQ');
});

Route::get('/cliente/nosotros', function () {
    return view('cliente.nosotros');
});

Route::get('/cliente/carrito', function () {
    return view('cliente.carrito');
});

