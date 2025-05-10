<x-layout> 
    <!-- Hero Section -->
    <section class="relative left-1/2 right-1/2 -ml-[50vw] -mr-[50vw] w-screen bg-rosa text-white text-center py-16 overflow-hidden">
        <div class="absolute top-4 left-4 text-white text-sm">🌸</div>
        <div class="absolute top-10 left-16 text-white text-4xl">🌸</div>
        <div class="absolute top-2 right-10 text-white text-3xl">🌺</div>
         <div class="absolute bottom-4 left-10 text-white text-4xl">🌸</div>

         <div class="max-w-7xl mx-auto flex justify-end items-center px-6">
        <div class="text-right">
        <h1 class="text-3xl md:text-4xl font-semibold">Más que chocolate, <br><span class="italic font-light">un detalle hecho con amor</span></h1>
        </div>
        </div>


        <img src="{{ asset('images/pretzel.png') }}" alt="Pretzel" 
         class="absolute right-10 bottom-[-40px] w-44 md:w-56 z-10"> 
    </section>

    <!-- Bienvenida -->
    <section class="relative left-1/2 right-1/2 -ml-[50vw] -mr-[50vw] w-screen bg-lavanda text-center py-10 overflow-hidden">
        <div class="absolute top-3 left-3 text-yellow-300 text-4xl">🌸</div>
        <div class="absolute top-12 right-8 text-pink-400 text-3xl">🌸</div>
        <div class="absolute bottom-2 left-12 text-pink-300 text-4xl">🌺</div>
        
        <h2 class="text-5xl font-bold text-rosa mb-4">Hola <span>♥</span></h2>
        <p class="text-3xl mt-4 leading-snug text-white">Nos encanta hacer chocolate y compartirlo contigo. <br>¿Listo para endulzar tu día?</p>
    </section>

    <!-- Productos -->
    <section class="bg-white py-10 text-center">
        <div class="max-w-6xl mx-auto">
            <p class="text-gray-700 mb-6 px-4">En Chocolates, creamos experiencias irresistibles con los mejores ingredientes. Descubre nuestros productos...</p>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 px-4">
                @for ($i = 0; $i < 4; $i++)
                    <div class="bg-lavanda rounded-lg p-4 shadow">
                        <div class="h-32 bg-yellow-300 flex items-center justify-center mb-2">PRODUCTO</div>
                    </div>
                @endfor
            </div>
        </div>
    </section>

</x-layout>
