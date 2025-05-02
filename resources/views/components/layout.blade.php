<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chocolates | {{ $title ?? 'Home' }}</title>
    {{-- Importar Tailwind --}}
    @vite('resources/css/app.css')
    {{-- Importar Alpine.js --}}
    @vite('resources/js/app.js')
    {{-- Importar font-awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- Importar Boxicons --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body class="min-h-screen flex flex-col text-gray-900">
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
                <a href="{{ route('carrito.index') }}"><i class="fa-solid fa-cart-shopping text-2xl text-rosa hover-icono hover:opacity-80 "></i></a>
                
            </div>
        </div>
        <!-- Menú de navegación -->
        <nav class="bg-grisClaro pb-2 hidden md:block">
            <ul class="flex flex-col justify-center items-center gap-3 md:flex-row">
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
    </header>

    {{-- Contenedor donde se muestra el contenido dinámico de la página web --}}
    <main class="flex-1">
        <div class="max-w-7xl mx-auto px-4 py-8">
            {{ $slot }}
        </div>
    </main>

    
    {{-- Pie de página --}}
    <footer class="bg-lavanda text-center py-4">
        <a href="#">&copy; {{ date('Y') }} Chocolates. Todos los derechos reservados.</a>
    </footer>
</body>
</html>

