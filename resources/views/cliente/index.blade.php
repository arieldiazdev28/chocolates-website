<x-layout> 
<!-- Hero con fondo rosa y eslogan -->
<section class="w-full h-[500px] bg-[#f280ca] flex items-end justify-end px-8 py-6">
        <div class="text-white text-right">
            <h1 class="text-4xl sm:text-5xl font-extrabold">Más que chocolate,</h1>
            <p class="text-2xl italic mt-2">un detalle hecho con amor</p>
        </div>
    </section>

<!-- Sección de bienvenida -->
<section class="relative bg-[#dec9f2] px-6 py-20 text-center overflow-hidden flex items-center justify-center">
        <div class="relative z-10">
            <h2 class="text-pink-700 font-bold text-2xl mb-4">Hola 💗</h2>
            <p class="text-white text-lg font-semibold max-w-xl mx-auto">
                Nos encanta hacer chocolate y compartirlo contigo. ¿Listo para endulzar tu día?
            </p>
        </div>

    <!-- Pretzel decorativo pequeño -->
    <img src="{{ asset('images/pretzel.png') }}" alt="Pretzel decorativo" class="absolute right-4 top-1/2 transform -translate-y-1/2 w-20 opacity-90 hidden sm:block">
</section>


<section class="bg-[#f2f2f2] px-6 py-12 text-center">
    <p class="text-sm text-[#333] mb-6">En Chocolates, creamos experiencias irresistibles con los mejores ingredientes. Descubre nuestros productos...</p>
    




    <!-- Carrusel -->
    <div x-data="{ active: 0, images: [1, 2, 3, 4] }" x-init="setInterval(() => active = (active + 1) % images.length, 3000)" class="relative w-full max-w-4xl mx-auto">
        <div class="flex overflow-hidden rounded-lg justify-center">
            <template x-for="(image, index) in images" :key="index">
                <div x-show="active === index" class="w-full transition-all duration-700 flex justify-center">
                    <div class="bg-white border border-[#ccc] rounded-lg p-4 m-2 inline-block w-48">
                        <div class="bg-[#ffe0f0] h-32 mb-4 rounded"></div>
                        <p class="text-pink-600 font-semibold">PRODUCTO</p>
                    </div>
                </div>
            </template>
        </div>
    </div>

    <a href="{{ url('/cliente/catalogo') }}">
        <button class="mt-6 bg-pink-500 hover:bg-pink-600 text-white px-6 py-3 rounded-full font-semibold">
            Ver Catálogo
        </button>
    </a>
</section>
    


</x-layout>