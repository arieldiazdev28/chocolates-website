<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        // Muestra todos los productos del catálogo
        $productos = Producto::orderBy('id', 'asc')->paginate(12);

        return view('productos.index', ['productos' => $productos]);
    }
}
