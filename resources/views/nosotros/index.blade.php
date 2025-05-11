<x-layout title="¡Conócenos!">
    <div class="min-h-screen bg-gradient-to-br from-pink-100 via-blue-100 to-pink-100 py-12 px-6">
        <div class="max-w-6xl mx-auto space-y-10">
            <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Quicksand:wght@400;600&display=swap" rel="stylesheet">

            <!-- Título -->
<style>
    .font-quicksand {
        font-family: 'Quicksand', sans-serif;
    }

    .font-pacifico {
        font-family: 'Pacifico', cursive;
    }
</style>

<div class="text-center mb-12 font-quicksand">
    <h1 class="text-5xl md:text-6xl font-semibold text-pink-600 drop-shadow-lg">
        <span class="inline-block px-4 py-2 bg-pink-100 rounded-xl border-2 border-pink-300 shadow-md">
            Bienvenido a <span class="font-pacifico text-pink-500 text-6xl">Chocolates</span>
        </span>
    </h1>
    <p class="mt-6 text-gray-700 text-lg md:text-xl max-w-3xl mx-auto">
        En <span class="font-pacifico text-pink-500">Chocolates</span>, convertimos momentos en dulces recuerdos con cada bocado artesanal.
        <br class="hidden md:block" />
        ¡Ven y déjate sorprender por nuestra pasión por el cacao!
    </p>
</div>


<!-- Secciones -->
<div class="space-y-10 mt-12 font-quicksand">
    @php
        $sections = [
            [
                'title' => 'Nuestra Historia',
                'icon' => '📜',
                'color' => 'pink',
                'content' => 'Chocolates SV nació en el corazón de El Salvador en 2025, como un sueño familiar de compartir 
                la riqueza del cacao salvadoreño con el mundo. Desde nuestros inicios, 
                nos hemos enfocado en ofrecer productos artesanales elaborados con pasión, cuidado y creatividad.'
            ],
            [
                'title' => '¿Qué hacemos?',
                'icon' => '🍫',
                'color' => 'blue',
                'content' => 'Nos especializamos en la creación de chocolates artesanales utilizando ingredientes locales, 
                especialmente cacao orgánico. Creamos desde tabletas clásicas hasta bombones rellenos, y ediciones especiales para celebraciones, eventos corporativos o regalos personalizados.'
            ],
            [
                'title' => 'Nuestra Visión y Valores',
                'icon' => '✨',
                'color' => 'rose',
                'content' => '
                    <ul class="list-disc list-inside space-y-1">
                        <li><strong>Calidad:</strong> Seleccionamos cuidadosamente cada ingrediente.</li>
                        <li><strong>Artesanal:</strong> Cada chocolate es hecho a mano con dedicación.</li>
                        <li><strong>Sostenibilidad:</strong> Apoyamos a productores locales y prácticas responsables.</li>
                        <li><strong>Innovación:</strong> Mezclamos tradición con nuevas experiencias de sabor.</li>
                    </ul>'
            ],
            [
                'title' => 'Gracias por apoyarnos',
                'icon' => '🤍',
                'color' => 'purple',
                'content' => 'Gracias a tu apoyo, hemos logrado crecer, aprender y soñar en grande. Chocolates SV no es solo 
                una marca, es una comunidad que valora lo hecho con amor. ¡Seguimos trabajando para llevar un 
                pedacito de El Salvador a cada bocado!'
            ]
        ];
    @endphp

    @foreach ($sections as $section)
        <div class="bg-white bg-opacity-70 backdrop-blur-md rounded-2xl shadow-xl border-l-8 border-{{ $section['color'] }}-300 p-8 md:p-10 hover:scale-[1.01] transition-all duration-300">
            <div class="flex items-center gap-4 mb-4">
                <div class="text-3xl">{{ $section['icon'] }}</div>
                <h2 class="text-2xl font-semibold text-{{ $section['color'] }}-700">{{ $section['title'] }}</h2>
            </div>
            <div class="text-gray-700 text-justify leading-relaxed">
                {!! $section['content'] !!}
            </div>
        </div>
    @endforeach
</div>
</x-layout>

