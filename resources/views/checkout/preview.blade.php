<x-layout title="Previsualización del pedido" meta-description="Previsualiza tu pedido antes de enviarlo por WhatsApp. Asegúrate de que todo esté correcto.">
    <div class="max-w-2xl mx-auto p-6 bg-white rounded-xl shadow-md mt-10">
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
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                    Confirmar y enviar por WhatsApp 📲
                </button>
            </form>
        </div>
    </div>
</x-layout>
