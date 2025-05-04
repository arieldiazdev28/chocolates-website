<x-layout title="Delicioso {{ $producto->nombre }}">
@if(session('success'))
        <script>
            const Toast = Swal.mixin({
                toast: true, 
                position: 'middle', 
                showConfirmButton: false, 
                iconColor: 'success', 
                timer: 2000, 
                timerProgressBar: true
            })
            Toast.fire({
                icon: 'success', 
                title: '{{ session('success') }}'
            })

        </script>
        @endif
 <div class="max-w-4xl mx-auto p-6 bg-white rounded-xl shadow-md mt-8">
    <div class="flex flex-col md:flex-row gap-6">
        <!-- Imagen del producto -->
        <div class="md:w-1/2">
            <img src="{{ asset('images/chocolates_logo.png') }}" alt="{{ $producto->nombre }}" class="w-full h-auto rounded-lg shadow">
        </div>

        <!-- Detalles del producto -->
        <div class="md:w-1/2 flex flex-col justify-between">
            <div>
                <h1 class="text-2xl font-bold text-gray-800 mb-2">{{ $producto->nombre }}</h1>
                <p class="text-gray-600 mb-4">{{ $producto->descripcion }}</p>
                <p class="text-xl font-semibold text-emerald-600 mb-4">${{ number_format($producto->precio, 2) }}</p>
            </div>

            <!-- Botones de acción -->
            <div class="flex gap-4 mt-4">
                <a href="{{ route('productos.index') }}" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400 transition">
                    Volver
                </a>

                <form action="{{ route('carrito.agregar') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $producto->id }}">
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">
                        Agregar al carrito
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
</x-layout>