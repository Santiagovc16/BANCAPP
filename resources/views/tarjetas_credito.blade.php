@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <div class="flex justify-between mb-6">
        <a href="{{ route('menu') }}" class="bg-gray-200 text-blue-700 font-semibold px-4 py-2 rounded-full hover:bg-gray-300">
            &larr; Menú Principal
        </a>
    </div>

    <h2 class="text-3xl font-semibold text-blue-900 mb-8 text-center">Tarjetas de Crédito</h2>

    <div class="bg-white shadow-lg rounded-lg p-8 mb-6">
        <h3 class="text-xl font-semibold text-gray-800">Tarjeta de Crédito</h3>
        <p class="text-gray-600">Número de Tarjeta: 1234 5678 9012 3456</p>
        <p class="text-gray-600">Límite de Crédito: $10,000</p>
        <p class="text-gray-600">Saldo Disponible: $7,500</p>
    </div>

    <!-- Realizar un Pago -->
    <div class="bg-white shadow-lg rounded-lg p-8">
        <h3 class="text-xl font-semibold text-gray-800 mb-4">Realizar Pago</h3>
        <input type="number" id="monto-pago" placeholder="Monto a pagar" class="w-full p-2 rounded text-gray-700 mb-4">
        <button onclick="pagarTarjeta()" class="bg-blue-600 text-white px-4 py-2 rounded-full hover:bg-blue-700">
            Pagar
        </button>
    </div>
</div>

<script>
    function pagarTarjeta() {
        const monto = document.getElementById('monto-pago').value;
        if (monto && monto > 0) {
            alert(`Has pagado $${monto} a tu tarjeta de crédito.`);
        } else {
            alert("Por favor, ingresa un monto válido.");
        }
    }
</script>
@endsection
