{{-- Encabezado de la página web --}}
    <header class="bg-grisClaro flex md:flex-col" x-data="{ open: false }">
        <!-- Banner superior-->
        <div class="flex items-center justify-evenly w-1/2 md:w-full pt-4 pb-3">
            <!-- Iconos de redes sociales-->
            <x-social-media />

            <!-- Logo -->
            <img src="{{ asset('images/chocolates_logo.png')}} " alt="Logo de Chocolates" loading="lazy" class="w-25 h-auto md:w-30">

            <!-- Menú de busqueda y carrito de compras-->
            <div class="hidden md:flex items-center gap-4">
                <x-form.search-input />
                <i class="fa-solid fa-cart-shopping text-2xl text-rosa hover:opacity-80 hover-icono"></i>
            </div>
        </div> <!-- Fin del banner superior-->

        <!-- Contenedor para manejar el estado del menú con Alpine.js -->
        <!-- Botón del menú para móviles -->
        <div class="flex items-center justify-center w-1/2 md:hidden">
            <button @click="open = !open" class="flex items-center">
                <i class="fa-solid fa-bars text-2xl"></i>
            </button>
        </div>

        <!-- Navbar -->
        <div :class="{'hidden': open, 'block': !open}" class="md:block">
            <!-- Menú de navegación -->
            <nav class="bg-grisClaro pb-2">
                <ul class="flex flex-col justify-center items-center gap-3 md:flex-row">
                    <li><a href="#" class="enlace-activo">HOME</a></li>
                    <div class="bg-rosa h-2 w-2 rounded-full hidden md:block"></div>
                    <li><a href="#">CATÁLOGO</a></li>
                    <div class="bg-rosa h-2 w-2 rounded-full hidden md:block"></div>
                    <li><a href="#">NOSOTROS</a></li>
                    <div class="bg-rosa h-2 w-2 rounded-full hidden md:block"></div>
                    <li><a href="#">FAQ</a></li>
                    <div class="bg-rosa h-2 w-2 rounded-full hidden md:block"></div>
                    <li><a href="#">CONTACTO</a></li>
                </ul>
            </nav>
        </div>
    </header> {{-- Fin del encabezado de la página web --}}