<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Chocolates | {{ $title ?? 'Home' }}</title>
    {{-- Importar Tailwind --}}
    @vite('resources/css/app.css')
   
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />


    {{-- Importar el archivo de notificaciones personalizadas --}}
    @vite('resources/css/notifications.css')
    {{-- Importar Alpine.js --}}
    @vite('resources/js/app.js')
    {{-- Importar font-awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- Importar Boxicons --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    {{-- Importar Sweet Alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="min-h-screen flex flex-col text-gray-900">
    {{-- Encabezado de la página web --}}
    <header class="bg-grisClaro">
        <!-- Banner superior-->
        <div class="hidden md:flex items-center justify-between px-8 py-4">
            <!-- Iconos de redes sociales-->
            <x-social-media />
            <!-- Logo -->
            <img src="{{ asset('images/chocolates_logo.png') }}" alt="Logo de Chocolates" class="w-30 h-auto">
            <!-- Menú de búsqueda y carrito de compras-->
            <div class="hidden md:flex items-center gap-4">
                <!-- Formulario de búsqueda -->
                <x-form.search-input />
                <!-- Productos en el carrito -->
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
        <div class="max-w-7xl mx-auto px-4">
            {{ $slot }}
        </div>
    </main>

    <!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        new Swiper(".swiper", {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            breakpoints: {
                640: { slidesPerView: 2 },
                1024: { slidesPerView: 4 }
            },
            autoplay: {
                delay: 3000,
                disableOnInteraction: false
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            }
        });
    });
</script>


    {{-- Pie de página --}}
    <footer class="bg-lavanda text-center py-4">
        <a href="#">&copy; {{ date('Y') }} Chocolates. Todos los derechos reservados.</a>
    </footer>


</body>
</html>

