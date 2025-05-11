<!--Colorcito en rosa-->
<!--
.contenedor-icono {
    @apply p-2 bg-pink-200 rounded-full w-fit;
}

.hover-icono:hover {
    @apply bg-pink-300;
}

.color-icono-banner {
    @apply text-pink-600;
}
-->
<!-- Colorcito -->

<!-- Encabezado -->
<div class="hidden md:flex items-center justify-between px-8 py-4">

    <!-- Logo -->
    <div class="flex-shrink-0">
        <a href="{{ route('home.index') }}">
            <img src="{{ asset('images/chocolates_logo.png') }}" alt="Logo de Chocolates" class="w-30 h-auto">
        </a>
    </div>

    <!-- Menú de navegación -->
    <nav class="flex-grow">
        <ul class="flex justify-center items-center gap-3">
            <li><a href="{{ route('home.index') }}" class="enlace-activo">HOME</a></li>
            <div class="bg-rosa h-2 w-2 rounded-full hidden md:block"></div>
            <li><a href="{{ route('productos.index') }}">CATÁLOGO</a></li>
            <div class="bg-rosa h-2 w-2 rounded-full hidden md:block"></div>
            <li><a href="{{ route('nosotros.index') }}">NOSOTROS</a></li>
            <div class="bg-rosa h-2 w-2 rounded-full hidden md:block"></div>
            <li><a href="{{ route('faq.index') }}">FAQ</a></li>
            <div class="bg-rosa h-2 w-2 rounded-full hidden md:block"></div>
            <li><a href="{{ route('contacto.index') }}">CONTACTO</a></li>
        </ul>
    </nav>

    <!-- Menú de búsqueda y carrito de compras -->
    <div class="flex items-center gap-4">
        <!-- Formulario de búsqueda -->
        <x-form.search-input />

        <!-- Carrito -->
        <a href="{{ route('carrito.index') }}" class="relative inline-block">
            <i class="fa-solid fa-cart-shopping text-2xl text-rosa hover-icono hover:opacity-80"></i>
            @if($totalProductosCarrito > 0)
            <span class="absolute -top-2 -right-2 bg-pink-600 text-white font-quicksand text-xs font-bold rounded-full w-5 h-5 flex items-center justify-center">
                {{ $totalProductosCarrito }}
            </span>
            @endif
        </a>
    </div>

</div>
