<x-layout title="Previsualización del pedido" meta-description="Previsualiza tu pedido antes de enviarlo por WhatsApp. Asegúrate de que todo esté correcto.">
    <div class="max-w-2xl mx-auto pb-6 bg-white rounded-xl shadow-md mt-10 font-quicksand">
        <h1 class="text-2xl font-bold mb-4 text-center">Previsualiza tu pedido 📋</h1>

        <div class="bg-gray-100 p-4 rounded whitespace-pre-wrap font-mono text-sm">
            {{ $mensaje }}
        </div>

        <div class="mt-6 flex justify-between items-center">
            <a href="{{ route('carrito.index') }}" class="text-blue-600 hover:underline">
                ← Volver al carrito
            </a>

            <form action="{{ route('checkout.confirmar') }}" method="POST">
                @csrf
                <input type="hidden" name="whatsapp_url" value="{{ $whatsapp_url }}">
                <button type="submit" class="bg-rosa hover:bg-pink-500 text-white font-bold px-4 py-2 rounded-2xl">
                    Enviar <i class="fa-brands fa-whatsapp"></i>
                </button>
            </form>
        </div>
    </div>
</x-layout>
