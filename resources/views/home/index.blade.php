<x-layout>
    <!-- Hero Section -->
    <section class="relative left-1/2 right-1/2 -ml-[50vw] -mr-[50vw] w-screen bg-rosa text-white text-center py-16 overflow-hidden">
        <div class="absolute top-4 left-4 text-white text-sm">🌸</div>
        <div class="absolute top-10 left-16 text-white text-4xl">🌸</div>
        <div class="absolute top-2 right-10 text-white text-3xl">🌺</div>
        <div class="absolute bottom-4 left-10 text-white text-4xl">🌸</div>

        <div class="max-w-7xl mx-auto flex justify-center items-center px-6">
            <div class="text-right">
                <h1 class="text-3xl md:text-4xl font-semibold">Más que chocolate, <br><span class="italic font-light">un detalle hecho con amor</span></h1>
            </div>
        </div>


        <img src="{{ asset('images/pretzel.png') }}" alt="Pretzel" class="absolute right-10 bottom-[-40px] w-44 md:w-56 z-10">
    </section>

    <!-- Bienvenida -->
    <section class="relative left-1/2 right-1/2 -ml-[50vw] -mr-[50vw] w-screen bg-lavanda text-center py-10 overflow-hidden">
        <div class="absolute top-3 left-3 text-yellow-300 text-4xl">🌸</div>
        <div class="absolute top-12 right-8 text-pink-400 text-3xl">🌸</div>
        <div class="absolute bottom-2 left-12 text-pink-300 text-4xl">🌺</div>

        <h2 class="text-5xl font-[400] text-rosa mb-4 font-pacifico">Hola <span>♥</span></h2>
        <p class="text-3xl mt-4 leading-snug text-white">Nos encanta hacer chocolate y compartirlo contigo. <br>¿Listo para endulzar tu día?</p>
    </section>

    <!-- Carrusel de Productos -->
    <section class="bg-white py-14 text-center relative">
        <p class="text-gray-700 mb-6 px-4 text-xl">
            En Chocolates, creamos experiencias irresistibles con los mejores ingredientes.
            Desliza y descubre nuestros productos...
        </p>

        <!-- Swiper -->
        <div class="swiper w-full px-8">
            <div class="swiper-wrapper">
                @for ($i = 1; $i <= 8; $i++) <div class="swiper-slide">
                    <div class="bg-lavanda rounded-lg p-6 shadow-md flex items-center justify-center text-lg font-semibold text-gray-700 min-h-[120px]">
                        Producto {{ $i }}
                    </div>
            </div>
            @endfor
        </div>

        <!-- Controles -->
        <div class="swiper-button-next text-gray-600 hover:text-black"></div>
        <div class="swiper-button-prev text-gray-600 hover:text-black"></div>
        <div class="swiper-pagination mt-4"></div>
        </div>

        <!-- Botón Catálogo -->

        <button class="mt-10 px-8 py-3 bg-rosa text-white rounded-full hover:bg-pink-500 transition">
            <a href="{{ route('productos.index') }}">
                Ver catálogo
            </a>
        </button>
    </section>
</x-layout>

