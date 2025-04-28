<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chocolates | {{ $title ?? 'Home'}}</title>
    {{-- Importar Tailwind --}}
    @vite('resources/css/app.css')
    {{-- Importar Alpine.js --}}
    @vite('resources/js/app.js')
    {{-- Importar font-awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- Importar Boxicons --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    {{-- Encabezado de la página web --}}
    <header class="bg-grisClaro">
        <!-- Banner superior-->
        <div class="hidden md:flex items-center justify-between px-8 py-4">
            <!-- Iconos de redes sociales-->
            <x-social-media />
            <!-- Logo -->
            <img src="{{ asset('images/chocolates_logo.png') }}" alt="Logo de Chocolates" loading="lazy" class="w-30 h-auto">
            <!-- Menú de búsqueda y carrito de compras-->
            <div class="hidden md:flex items-center gap-4">
                <x-form.search-input />
                <a href="/carrito"><i class="fa-solid fa-cart-shopping text-2xl text-rosa hover-icono hover:opacity-80 "></i></a>
                
            </div>
        </div>
        <!-- Menú de navegación -->
        <nav class="bg-grisClaro pb-2 hidden md:block">
            <ul class="flex flex-col justify-center items-center gap-3 md:flex-row">
                <li><a href="{{ url('/') }}" class="text-black hover:text-[#ff69b4]">HOME</a>
                <span class="text-[#ff69b4] mx-2">•</span></li>
                <div class="bg-rosa h-2 w-2 rounded-full hidden md:block"></div>
                <li><a href="{{ url('/cliente/catalogo') }}">CATÁLOGO</a></li>
                <div class="bg-rosa h-2 w-2 rounded-full hidden md:block"></div>
                <li><a href="{{ url('/cliente/nosotros') }}">NOSOTROS</a></li>
                <div class="bg-rosa h-2 w-2 rounded-full hidden md:block"></div>
                <li><a href="{{ url('/cliente/FAQ') }}">FAQ</a></li>
                <div class="bg-rosa h-2 w-2 rounded-full hidden md:block"></div>
                <li><a href="{{ url('/cliente/contacto') }}">CONTACTO</a></li>
            </ul>
        </nav>
        <!-- Fin del banner superior-->

        <!-- Menú de navegación para dispositivos móviles-->
        {{-- <nav x-data="{ open: false }" class="wrapper flex items-center justify-between px-6 py-4 md:py-0">
            <a href="#" class="w-[25%] max-w-[140px] md:hidden">
                <img src="{{ asset('images/chocolates_logo.png') }}" alt="Logo de Chocolates" loading="lazy" class="w-full">
            </a>

            <!-- Botón del menú hamburguesa -->
            <button @click="open = !open" class="md:hidden text-3xl focus:outline-none">
                <i class="fa-solid fa-bars" x-show="!open"></i>
                <i class="fa-solid fa-times" x-show="open"></i>
            </button>

            <!-- Menú de navegación -->
            <ul x-show="open" @click.away="open = false" class="absolute top-16 left-0 w-full bg-white shadow-lg md:static" x-transition>
                <li><a href="#" class="block py-3 px-6 hover:bg-rosa md:hover:bg-transparent">HOME</a></li>
                <li><a href="#" class="block py-3 px-6 hover:bg-rosa md:hover:bg-transparent">CATÁLOGO</a></li>
                <li><a href="#" class="block py-3 px-6 hover:bg-rosa md:hover:bg-transparent">NOSOTROS</a></li>
                <li><a href="#" class="block py-3 px-6 hover:bg-rosa md:hover:bg-transparent">FAQ</a></li>
                <li><a href="#" class="block py-3 px-6 hover:bg-rosa md:hover:bg-transparent">CONTACTO</a></li>
            </ul>
        </nav> --}}
    </header>

    {{-- Contenedor donde se muestra el contenido dinámico de la página web --}}
    <main class="container">
        {{ $slot }}
    </main>


    {{-- FOOTER actualizado --}}
    <x-footer.footer />


</body>
</html>


