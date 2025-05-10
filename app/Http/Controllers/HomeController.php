<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class HomeController extends Controller
{
    public function index()
    {
         $productosRandom = Producto::inRandomOrder()->get(); // todos en orden aleatorio
        return view('home.index', compact('productosRandom'));
    
    }
}
