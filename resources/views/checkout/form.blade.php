<x-layout title="¡Completa la información!">
    <div class="max-w-xl mx-auto px-4 py-8 font-quicksand">
        <h1 class="text-4xl text-center font-bold mb-6">
            Completa tu información personal
        </h1>

        @if(session('error'))
        <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
            {{ session('error') }}
        </div>
        @endif

        <form method="POST" action="{{ route('checkout.enviar') }}">
            @csrf
            <div class="mb-4">
                <label class="block text-lg font-semibold mb-1">Nombre completo:</label>
                <input type="text" name="nombre" class="w-full border-3 border-lavanda px-3 py-2 rounded-2xl font-normal" value="{{ old('nombre') }}" required>
            </div>
            @php
                $minDate = \Carbon\Carbon::now()->addDay()->format('Y-m-d');
            @endphp
            <div class="mb-4">
                <label class="block text-lg font-semibold mb-1">Fecha para entrega del pedido:</label>
                <input type="date" name="fecha" class="w-full border-3 border-lavanda px-3 py-2 rounded-2xl" min="{{ $minDate }}" value="{{ old('nombre') }}" required>
            </div>

            <div class="mb-4">
                <label class="block text-lg font-semibold mb-1">Comentarios adicionales:</label>
                <textarea name="comentarios" class="w-full border-3 border-lavanda px-3 py-2 rounded-2xl" value="{{ old('nombre') }}"></textarea>
            </div>

            <div class="text-right">
                <button type="submit" class="bg-rosa hover:bg-pink-500 text-white font-bold px-4 py-2 rounded-2xl">
                    Generar orden de pedido
                </button>
            </div>

        </form>
    </div>

</x-layout>
