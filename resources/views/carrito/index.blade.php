<!-- Vista para ver los productos seleccionados por el cliente antes de proceder al checkout. -->
<x-layout title="Carrito">
    <div class="max-w-4xl mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-6">Carrito de compras</h1>

        @if(empty($carrito))
        <p class="text-gray-600">Tu carrito está vacío</p>
        @else
        <div class="overflow-x-auto">
            <table class="w-full border-collapse">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="text-left p-2 border-b">Producto</th>
                        <th class="text-left p-2 border-b">Precio</th>
                        <th class="text-left p-2 border-b">Cantidad</th>
                        <th class="text-left p-2 border-b">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @php $total = 0; @endphp
                    @foreach($carrito as $item)
                        @php
                            $subtotal = $item['precio'] * $item['cantidad'];
                            $total += $subtotal;
                        @endphp
                        <tr class="border-b">
                            <td class="p-2">{{ $item['nombre'] }}</td>
                            <td class="p-2">${{ number_format($item['precio'], 2) }}</td>
                            <td class="p-2">{{ $item['cantidad'] }}</td>
                            <td class="p-2">${{ number_format($subtotal, 2) }}</td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr class="bg-gray-100 font-semibold">
                        <td colspan="3" class="p-2 text-right">Total:</td>
                        <td class="p-2">${{ number_format($total, 2) }}</td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div class="mt-6 text-right">
            <a href="{{ route('checkout.form') }}" class="bg-green-700 text-white px-4 py-2 rounded">
                Proceder al checkout
            </a>
        </div>
        @endif
    </div>
</x-layout>
