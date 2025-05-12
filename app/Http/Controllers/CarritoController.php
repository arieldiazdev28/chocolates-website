<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Producto;
use App\Models\Pedido;

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
                unset($carrito[$id]);
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

        $nombre = $request->input('nombre');
        $fecha = Carbon::parse($request->input('fecha'))->format('d/m/Y');
        $comentarios = $request->input('comentarios');
        $fechaActual = now()->format('d/m/Y H:i');

        $mensaje = "🍫 *¡Nuevo pedido desde la tienda en línea de Chocolates!* 🍫\n";
        $mensaje .= "📅 *Fecha del pedido:* {$fechaActual}\n";
        $mensaje .= "👤 *Cliente:* $nombre\n";
        $mensaje .= "📦 *Productos solicitados:*\n";

        foreach ($carrito as $item) {
            $mensaje .= "• {$item['nombre']} x{$item['cantidad']} — $" . number_format($item['precio'], 2) . "\n";
        }

        $mensaje .= "\n🚚 *Entrega para:* $fecha\n";
        $total = $this->calcularTotal($carrito);
        $mensaje .= "💰 *Total a pagar:* $" . number_format($total, 2) . "\n";

        if ($comentarios) {
            $mensaje .= "\n📝 *Comentarios del cliente:*\n$comentarios\n";
        }

        $numero = '50373244526';
        $url = "https://wa.me/{$numero}?text=" . rawurlencode($mensaje);

        return view('checkout.preview', [
            'mensaje' => $mensaje,
            'whatsapp_url' => $url,
            'nombre' => $nombre,
            'fecha' => $request->input('fecha'),
            'comentarios' => $comentarios
        ]);
    }

    public function checkoutConfirmar(Request $request)
    {
        $carrito = session('carrito', []);

        if (empty($carrito)) {
            return redirect()->route('carrito.index')->with('error', 'El carrito está vacío');
        }

        $request->validate([
            'nombre' => 'required|string|max:255',
            'fecha_entrega' => 'required|date',
            'comentarios' => 'nullable|string|max:500',
            'whatsapp_url' => 'required|url',
        ]);

        Pedido::create([
            'cliente' => $request->input('nombre'),
            'productos' => json_encode($carrito),
            'total' => $this->calcularTotal($carrito),
            'fecha_entrega' => $request->input('fecha_entrega'),
            'comentarios' => $request->input('comentarios'),
        ]);

        session()->forget('carrito');

        return redirect()->away($request->input('whatsapp_url'));
    }

    private function calcularTotal($carrito)
    {
        return array_reduce($carrito, fn($total, $item) =>
            $total + ($item['precio'] * $item['cantidad']), 0
        );
    }
}
