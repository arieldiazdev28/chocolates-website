<!-- Banner superior horizontal -->
<div class="hidden md:flex items-center justify-between px-8 py-4 max-w-7xl mx-auto">
    <!-- Redes sociales a la izquierda -->
    <div class="flex items-center gap-4">
        <x-social-media />
    </div>

    <!-- Logo centrado -->
    <div class="flex justify-center">
        <img src="{{ asset('images/chocolates_logo.png') }}" alt="Logo de Chocolates" loading="lazy" class="h-20 w-auto">
    </div>

    <!-- Búsqueda y carrito a la derecha -->
    <div class="flex items-center gap-4">
        <x-form.search-input />
        <a href="{{ url('/cliente/carrito') }}">
            <i class="fa-solid fa-cart-shopping text-2xl text-rosa hover-icono hover:opacity-80"></i>
        </a>
    </div>
</div>


