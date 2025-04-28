<!-- Ayuda a correr el carrusel>

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ClienteController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('cliente.index', compact('productos'));
    }
}
