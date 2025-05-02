@props(['producto'])

<div class="bg-white rounded-2xl shadow p-4 flex flex-col justify-between">
    {{-- Categoría del producto --}}
    <div class="flex justify-end">
        <span class="bg-gray-200 text-xs font-medium px-2 py-1 rounded-full">Categoría</span>
    </div>



    {{-- Imagen del producto---}}
    <img src="{{ asset('images/chocolates_logo.png') }}" alt="Logo de Chocolates" loading="lazy" class="w-full h-40 object-contain my-3">

    {{-- Nombre del producto --}}
    <div class="flex flex-col gap-1">
        <h3 class="font-semibold text-base truncate">
            {{ $producto->nombre }}
        </h3>
        <p class="text-gray-600 text-sm">${{ number_format($producto->precio, 2)}}</p>
    </div>

    {{-- Botón de agregar al carrito --}}
    
    <form action="{{ route('carrito.agregar') }}" method="POST">
        @csrf
        <div class="flex justify-between mt-3 gap-2">
        <input type="hidden" name="id" value="{{ $producto->id }}">
        <button type="submit" class="w-1/2 bg-aqua text-sm py-2 rounded-lg hover:bg-gray-300">Agregar <i class="fa-solid fa-cart-shopping"></i></button>
        <button class="w-1/2 bg-rosa text-sm py-2 rounded-lg hover:bg-lavanda">Ver <i class="fa-solid fa-eye"></i></button>
        </div>
    </form>
        
        
    
</div>

