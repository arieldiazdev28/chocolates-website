<!-- La página principal donde los clientes pueden ver el catálogo de productos.-->
<x-layout title="Catálogo">
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
