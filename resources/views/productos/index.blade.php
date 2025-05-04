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
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="py-6 font-quicksand font-[400] text-[2.4rem] text-center">
            En <span class="font-pacifico">Chocolates</span>, creamos experiencias irresistibles con los
            mejores ingredientes... ¡Descubre lo que tenemos para tí!
        </h2>

        <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
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
