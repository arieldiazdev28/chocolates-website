

<footer class="bg-pink-100 text-pink-800 py-10 px-6 mt-10">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-6">

        {{-- Logo o nombre del emprendimiento --}}
        <div>
            <img src="{{ asset('images/chocolates_logo.png') }}" alt="Logo de Chocolates" class="w-30 h-auto mb-4">
            <p class="text-sm">Chocolates artesanales hechos con amor y dedicación. Cada bocado es una experiencia única.</p>
        </div>

        {{-- Enlaces de navegación --}}
        <div>
            <h3 class="font-semibold mb-2 text-pink-500">Enlaces</h3>
            <ul class="space-y-1 text-sm">
                <li><a href="{{ route('home.index') }}" class="hover:text-pink-400">Inicio</a></li>
                <li><a href="{{ route('productos.index') }}" class="hover:text-pink-400">Catálogo</a></li>
                <li><a href="{{ route('nosotros.index') }}" class="hover:text-pink-400">Sobre nosotros</a></li>
                <li><a href="{{ route('faq.index') }}" class="hover:text-pink-400">Preguntas Frecuentes</a></li>
            </ul>
        </div>

        {{-- Redes sociales (plantilla personalizada) --}}
        <div>
            <h3 class="font-semibold mb-4 text-pink-500">Síguenos</h3>
            <div class="md:flex gap-5">
                <div class="contenedor-icono hover-icono">
                    <a href="#" target="_blank">
                        <i class="fa-brands fa-tiktok text-xl color-icono-banner"></i>
                    </a>
                </div>

                <div class="contenedor-icono hover-icono">
                    <a href="https://www.instagram.com/chocolates.sv_/?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw%3D%3D#" target="_blank">
                        <i class="fa-brands fa-instagram text-xl color-icono-banner"></i>
                    </a>
                </div>

                <div class="contenedor-icono hover-icono">
                    <a href="#" target="_blank">
                        <i class="fa-brands fa-facebook text-xl color-icono-banner"></i>
                    </a>
                </div>

                <div class="contenedor-icono hover-icono">
                    <a href="#" target="_blank">
                        <i class="fa-brands fa-whatsapp text-xl color-icono-banner"></i>
                    </a>
                </div>
            </div>
        </div>

        {{-- Datos de contacto --}}
        <div>
            <h3 class="font-semibold mb-2 text-pink-500">Contáctanos</h3>
            <p class="text-sm">📞 +503 1234 5678</p>
            <p class="text-sm">✉️ hola@chocolates.com</p>
            <p class="text-sm">📍 San Salvador</p>
        </div>

    </div>

    {{-- Créditos --}}
    <div class="text-center text-xs text-pink-600 mt-8">
        © 2025 Chocolates. Todos los derechos reservados.
    </div>
</footer>
