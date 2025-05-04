<!-- Vista para ver los productos seleccionados por el cliente antes de proceder al checkout. -->
<x-layout title="Carrito">
    <div class="max-w-4xl mx-auto px-4 py-8">

        <h1 class="text-4xl font-quicksand font-bold mb-6 text-center">Carrito de compras</h1>

        @if(empty($carrito))
        <div>
            <h3 class="text-center text-3xl text-gray-500 mb-3">
                No tienes ningún producto en tu carrito <i class="fa-solid fa-face-sad-tear"></i> <i class="fa-solid fa-heart-crack"></i>
            </h3>

            <div class="flex flex-col gap-4 items-center">
                <p class="text-center text-2xl text-gray-500">
                    ¡Encuentra deliciosos chocolates en nuestro catálogo!
                </p>
                <a href="{{ route('productos.index') }}" class="btn-carrito text-white text-xl px-2 py-2 bg-rosa hover:bg-white hover:text-rosa hover:border-2 border-rosa">¡Vamos!</a>
            </div>

        </div>
        @else
        <div class="overflow-hidden rounded-[20px]">
            <table class=" table-auto border-separate border-spacing-0 w-full bordes-tabla-carrito font-quicksand">
                <thead>
                    <tr class="bg-pink-100 font-semibold">
                        <th class="text-center p-2 bordes-tabla-carrito">Producto</th>
                        <th class="text-center p-2 bordes-tabla-carrito">Precio</th>
                        <th class="text-center p-2 bordes-tabla-carrito">Cantidad</th>
                        <th class="text-center p-2 bordes-tabla-carrito">Acciones</th>
                        <th class="text-center p-2 bordes-tabla-carrito">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @php $total = 0; @endphp
                    @foreach($carrito as $item)
                    @php
                    $subtotal = $item['precio'] * $item['cantidad'];
                    $total += $subtotal;
                    @endphp
                    <tr class="bordes-tabla-carrito font-xl">
                        <td class="p-2 bordes-tabla-carrito text-center">{{ $item['nombre'] }}</td>
                        <td class="p-2 bordes-tabla-carrito text-center">${{ number_format($item['precio'], 2) }}</td>
                        <td class="p-2 bordes-tabla-carrito text-center">{{ $item['cantidad'] }}</td>
                        <td class="p-2 bordes-tabla-carrito text-center">
                            <form action="{{ route('carrito.agregar') }}" method="POST" style="display:inline">
                                @csrf
                                <input type="hidden" name="id" value="{{ $item['id'] }}">
                                <button type="submit" class="btn-tabla-carrito">+</button>
                            </form>

                            <form action="{{ route('carrito.eliminarUnidad', $item['id']) }}" method="POST" style="display:inline">
                                @csrf
                                <button type="submit" class="btn-tabla-carrito">−</button>
                            </form>

                        </td>
                        <td class="p-2 text-center bordes-tabla-carrito">${{ number_format($subtotal, 2) }}</td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr class="bg-pink-100 font-semibold bordes-tabla-carrito">
                        <td colspan="4" class="p-2 text-right bordes-tabla-carrito">Total:</td>
                        <td class="p-2 text-center bordes-tabla-carrito">${{ number_format($total, 2) }}</td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div class="mt-6 text-right font-quicksand">
            <a href="{{ route('checkout.form') }}" class="bg-rosa hover:bg-pink-500 text-white font-bold px-4 py-2 rounded-2xl">
                Proceder al checkout
            </a>
        </div>
        @endif
    </div>
</x-layout>

