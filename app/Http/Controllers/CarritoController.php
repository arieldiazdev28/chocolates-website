<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Producto;

class CarritoController extends Controller
{
    public function agregarAlCarrito(Request $request)
    {
        $producto = Producto::findOrFail($request->id);
        $carrito = session()->get('carrito', []);

        if (isset($carrito[$producto->id])) {
            $carrito[$producto->id]['cantidad']++;
        } else {
            $carrito[$producto->id] = [
                "id" => $producto->id,
                "nombre" => $producto->nombre,
                "cantidad" => 1,
                "precio" => $producto->precio,
            ];
        }

        session(['carrito' => $carrito]);
        return redirect()->back()->with('success', 'Producto agregado al carrito');
    }

    public function eliminarUnidadDelCarrito($id)
    {
        $carrito = session()->get('carrito', []);

        if (isset($carrito[$id])) {
            $carrito[$id]['cantidad']--;

            if ($carrito[$id]['cantidad'] <= 0) {
                unset($carrito[$id]); // Elimina el producto si ya no queda ninguno
            }

            session(['carrito' => $carrito]);
        }

        return redirect()->back()->with('success', 'Producto actualizado');
    }
	


    public function verCarrito()
    {
        $carrito = session('carrito', []);
        return view('carrito.index', ['carrito' => $carrito]);
    }

    public function checkoutForm()
    {
        return view('checkout.form');
    }

    public function checkoutEnviar(Request $request)
    {
        $carrito = session('carrito', []);

        if (empty($carrito)) {
            return redirect()->route('carrito.index')->with('error', 'El carrito está vacío');
        }

        $request->validate([
            'nombre' => 'required|string|max:255',
            'fecha' => 'required|date|after_or_equal:' . now()->addDay()->toDateString(),
            'comentarios' => 'nullable|string|max:500',
        ]);

        //Obteniendo los datos desde el form
        $nombre = $request->input('nombre');
        $fecha = Carbon::parse($request->input('fecha'))->format('d/m/Y');
        $comentarios = $request->input('comentarios');
        $fechaActual = now()->format('d/m/Y H:i');

        //Generando el mensaje de Whatsapp
        $mensaje = "🍫 *¡Nuevo pedido desde la tienda en linea de Chocolates!* 🍫\n";
        $mensaje .= "📅 *Fecha del pedido:* {$fechaActual}\n";
        $mensaje .= "👤 *Cliente:* $nombre\n";
        $mensaje .= "📦 *Productos solicitados:*\n";

        foreach ($carrito as $item) {
            $mensaje .= "• {$item['nombre']} x{$item['cantidad']} — $" . number_format($item['precio'], 2) . "\n";
        }
        $mensaje .= "\n🚚 *Entrega para:* $fecha\n";
        $total = array_reduce($carrito, fn($carry, $item) => $carry + ($item['precio'] * $item['cantidad']), 0);
        $mensaje .= "💰 *Total a pagar:* $" . number_format($total, 2) . "\n";

        if ($comentarios) {
            $mensaje .= "\n📝 *Comentarios del cliente:*\n$comentarios\n";
        }

        // URL de WhatsApp
        $numero = '50373244526';
        $url = "https://wa.me/{$numero}?text=" . rawurlencode($mensaje);


        return view('checkout.preview', ['mensaje' => $mensaje, 'whatsapp_url' => $url]);
    }

    public function checkoutPreview(Request $request)
    {
        $mensaje = $request->input('mensaje');

        return view('checkout.preview', ['mensaje' => $mensaje]);
    }

    public function checkoutConfirmar(Request $request)
    {
        // Vaciar carrito
        session()->forget('carrito');

        // Redirigir a WhatsApp usando la URL guardada en sesión
        if ($request->has('whatsapp_url')) {
            return redirect()->away($request->input('whatsapp_url'));
        }

        return redirect()->route('carrito.index')->with('error', 'No se pudo confirmar el pedido.');
    }
}
