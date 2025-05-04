@props(['producto'])

<div class="bg-white rounded-3xl shadow p-4 flex flex-col justify-between border-15 border-lavanda">
    {{-- Categoría del producto --}}
    <div class="flex justify-end">
        <span class="bg-gray-200 text-xs font-medium px-2 py-1 rounded-full">Categoría</span>
    </div>



    {{-- Imagen del producto---}}
    <img src="{{ asset('images/chocolates_logo.png') }}" alt="Logo de Chocolates" loading="lazy" class="w-full h-40 object-contain my-3">

    {{-- Nombre del producto --}}
    <div class="flex flex-col gap-1">
        <h3 class="font-quicksand font-bold text-[20px]">
            {{ $producto->nombre }}
        </h3>
        <p class="text-blue-500 font-semibold text-[16px]">${{ number_format($producto->precio, 2)}}</p>
    </div>

    {{-- Botón de agregar al carrito --}}
    
    <form action="{{ route('carrito.agregar') }}" method="POST">
        @csrf
        <div class="flex justify-between mt-3 gap-2">
        <input type="hidden" name="id" value="{{ $producto->id }}">
        <button type="submit" class="btn-carrito w-1/2 bg-aqua hover:bg-lavanda">Agregar <i class="fa-solid fa-cart-shopping"></i></button>
        <a  href="{{ route('catalogo.show', $producto->id) }}" class="btn-carrito w-1/2 bg-rosa hover:bg-lavanda">Ver <i class="fa-solid fa-eye"></i></a>
        </div>
    </form>
</div>

