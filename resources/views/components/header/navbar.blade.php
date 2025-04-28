<!-- Menú de navegación -->
<nav class="bg-grisClaro pb-2">
    <ul class="flex justify-center items-center gap-3 text-sm font-bold">
        <li><a href="{{ url('/') }}" class="enlace-activo">HOME</a></li>
        <div class="bg-rosa h-2 w-2 rounded-full"></div>
        <li><a href="{{ url('/cliente/catalogo') }}">CATÁLOGO</a></li>
        <div class="bg-rosa h-2 w-2 rounded-full"></div>
        <li><a href="{{ url('/cliente/nosotros') }}">NOSOTROS</a></li>
        <div class="bg-rosa h-2 w-2 rounded-full"></div>
        <li><a href="{{ url('/cliente/faq') }}">FAQ</a></li>
        <div class="bg-rosa h-2 w-2 rounded-full"></div>
        <li><a href="{{ url('/cliente/contacto') }}">CONTACTO</a></li>
    </ul>
</nav>
