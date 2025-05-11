<x-layout title="Preguntas Frecuentes">
    <div class="w-full max-w-4xl mx-auto px-4 py-8">
        <h2 class="text-3xl font-bold text-center text-purple-800 mb-8">Preguntas Frecuentes</h2>

        <div class="space-y-4">
            @foreach([
                ['pregunta' => '¿Cuál es el tiempo de entrega?', 'respuesta' => 'Nuestro periodo de entrega es a partir de <strong>3 días hábiles</strong> desde el momento del pedido.'],
                ['pregunta' => '¿Cuáles son las opciones de pago?', 'respuesta' => 'En nuestro sitio usted realiza únicamente el pedido, <strong>el pago se realiza al momento de la entrega</strong>.'],
                ['pregunta' => '¿Dónde se encuentran ubicados?', 'respuesta' => 'Nos encontramos en <strong>San Salvador, El Salvador</strong>.'],
                ['pregunta' => '¿Qué ingredientes pueden causar alergias?', 'respuesta' => '<ul class="list-disc pl-5"><li>Leche</li><li>Soja</li><li>Frutos secos (nueces, almendras, avellanas)</li><li>Gluten</li><li>Huevo</li></ul>'],
                ['pregunta' => '¿Hacen entregas a domicilio?', 'respuesta' => 'Sí, realizamos entregas a domicilio dentro del área metropolitana de San Salvador.'],
                ['pregunta' => '¿Puedo personalizar los chocolates?', 'respuesta' => '¡Claro! Contamos con opciones de personalización para ocasiones especiales como cumpleaños, aniversarios o eventos corporativos.'],
                ['pregunta' => '¿Tienen opciones veganas o sin azúcar?', 'respuesta' => 'Sí, ofrecemos una selección limitada de chocolates <strong>veganos</strong> y <strong>sin azúcar</strong> bajo pedido.'],
                ['pregunta' => 'Contenido', 'respuesta' => '<strong>Contenido</strong>'],
            ] as $faq)
                <div x-data="{ open: false }" class="border border-lavanda rounded-lg">
                    <!-- Buton contiene el color del texto de la pregunta, 
                    el color de fondo, y el color de fondo al colocar el cursor -->
                    <button 
                        @click="open = !open" 
                        class="w-full text-left px-6 py-4 font-semibold text-gray-500 flex justify-between items-center bg-lavanda/20 hover:bg-purple-100 transition"
                    >
                        {{ $faq['pregunta'] }}
                        <svg :class="{ 'rotate-180': open }" class="w-5 h-5 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <!-- Aquí esta el color del texto y de fondo del contenedor expandido -->
                    <div x-show="open" x-collapse class="px-6 pb-4 text-gray-700 text-sm bg-lavanda/50">
                        {!! $faq['respuesta'] !!}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
