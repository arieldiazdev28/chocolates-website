<footer class="bg-[#f9f9f9] py-10 text-sm text-[#333]">
    <div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center md:items-start mb-6 gap-6">
        <!-- Logo a la izquierda -->
        <div class="flex-shrink-0 mb-4 md:mb-0">
            <img src="{{ asset('images/chocolates_logo.png') }}" alt="ChocoLates" class="h-20">
        </div>

        <!-- Enlaces a la derecha en columnas -->
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 text-[#e75480] font-bold text-center sm:text-right">
            <div>TÉRMINOS Y CONDICIONES</div>
            <div>POLÍTICA DE PRIVACIDAD</div>
            <div>SERVICES<br>SUPPORT<br>SHOWCASE</div>
            <div>ABOUT US<br>CONTACT US<br>AFFILIATES<br>RESOURCES</div>
        </div>
    </div>

    <!-- Frase -->
    <p class="italic font-semibold text-center mb-6 text-black">“Endulza tu día con el mejor chocolate”</p>

    <!-- Íconos redes sociales -->
    <x-social-media />
</footer>
