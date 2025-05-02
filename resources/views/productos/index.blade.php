<!-- La página principal donde los clientes pueden ver el catálogo de productos.-->
<x-layout title="Catálogo"> 
@if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative text-center" role="alert">
        <strong class="font-bold">¡Éxito!</strong>
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>
@endif
<div class="max-w-7xl mx-auto px-4 py-6">
    <h2 class="text-2xl text-center font-bold mb-6">
        Catálogo de Productos
    </h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach($productos as $producto)
            <x-producto-card :producto="$producto" />
        @endforeach
    </div>
</div>

<!-- Paginación -->
    <div class="m-4">
        {{ $productos->links() }}
    </div>
</x-layout>