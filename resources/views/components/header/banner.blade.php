<!-- Banner superior-->
<div class="flex justify-around items-center pt-4 pb-3">
    <!-- Iconos de redes sociales-->
    <x-social-media/>

    <!-- Imagen central -->
    <img src="{{ asset('images/chocolates_logo.png')}} " alt="Logo de Chocolates" loading= "lazy" class="w-30 h-auto">

    <!-- Menu de busqueda y carrito de compras-->
    <div class="flex items-center gap-4">
        <x-form.search-input/>
        <i class="fa-solid fa-cart-shopping text-2xl text-rosa"></i>
    </div>
</div>