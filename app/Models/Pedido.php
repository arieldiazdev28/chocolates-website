<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    //
    protected $fillable = ['cliente', 'productos', 'total', 'fecha_entrega', 'comentarios', 'estado',];
}
