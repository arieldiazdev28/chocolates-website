<!-- Layout general que se usa en el frontend. Contendrá la estructura básica del sitio, 
como el encabezado (header), pie de página (footer), y el contenido principal. -->
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
</head>
<body>
    <!-- Encabezado de la página -->
    <header class="bg-grisClaro">
        <x-header.banner/>
        <x-header.navbar/>
    </header>
    <!-- Contenido dinámico de la página web-->
    <div class="contenidor-principal">
        {{ $slot }}
    </div>
    <!-- Pie de la página -->
    <footer>
    </footer>
</body>
</html>