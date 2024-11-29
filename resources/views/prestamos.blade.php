@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <div class="flex justify-between mb-6">
        <a href="{{ route('menu') }}" class="bg-gray-200 text-blue-700 font-semibold px-4 py-2 rounded-full hover:bg-gray-300">
            &larr; Menú Principal
        </a>
    </div>

    <h2 class="text-3xl font-semibold text-blue-900 mb-8 text-center">Créditos</h2>

    <!-- Estado del Saldo -->
    <div class="bg-gray-100 text-gray-800 shadow-lg rounded-lg p-8 mb-6">
        <div class="flex justify-between items-center">
            <div>
                <h3 class="text-xl font-semibold mb-1">Saldo de Cuenta</h3>
                <p class="text-gray-600">Número de Cuenta: 1234-5678-9012-3456</p>
            </div>
            <p id="saldo" class="text-2xl font-bold text-gray-900">$5,000.00</p>
        </div>
    </div>

    <!-- Estado del Crédito -->
    <div class="bg-white shadow-lg rounded-lg p-8 mb-6">
        <h3 class="text-xl font-semibold text-gray-800">Créditos Actuales</h3>
        <p class="text-gray-600">Monto: $50,000</p>
        <p class="text-gray-600">Interés: 8% anual</p>
        <p class="text-gray-600">Plazo: 24 meses</p>
    </div>

    <!-- Aplicar para un Nuevo Crédito -->
    <div class="bg-white shadow-lg rounded-lg p-8 mb-6">
        <h3 class="text-xl font-semibold text-gray-800 mb-4">Aplicar para un Nuevo Crédito</h3>
        <input type="number" id="monto-credito" placeholder="Monto del crédito" class="w-full p-2 rounded text-gray-700 mb-4">
        <button onclick="aplicarCredito()" class="bg-blue-600 text-white px-4 py-2 rounded-full hover:bg-blue-700">
            Aplicar
        </button>
    </div>

    <!-- Historial de Créditos -->
    <div class="bg-white shadow-lg rounded-lg p-8 mt-8">
        <h3 class="text-xl font-semibold text-gray-800 mb-4">Historial de Créditos</h3>
        <ul id="historial-creditos" class="list-none space-y-2 text-gray-700">
            <!-- Los créditos aparecerán aquí -->
        </ul>
    </div>
</div>

<script>
    let saldo = 5000.00;

    function actualizarSaldo() {
        document.getElementById('saldo').textContent = `$${saldo.toFixed(2)}`;
    }

    function agregarHistorialCredito(monto) {
        const historial = document.getElementById('historial-creditos');
        const item = document.createElement('li');
        item.className = "border-b border-gray-300 py-2 flex justify-between";
        item.innerHTML = `<span>Nuevo Crédito Aplicado</span><span>+$${monto.toFixed(2)}</span>`;
        historial.prepend(item);
    }

    function aplicarCredito() {
        const monto = parseFloat(document.getElementById('monto-credito').value);

        if (!isNaN(monto) && monto > 0) {
            // Verificar que el crédito no exceda una cantidad razonable para el usuario
            if (monto <= 50000) {
                saldo += monto;
                actualizarSaldo();
                agregarHistorialCredito(monto);

                // Alerta de confirmación
                alert(`Has aplicado para un crédito de $${monto.toFixed(2)}.`);
                
                // Limpiar campo
                document.getElementById('monto-credito').value = '';
            } else {
                alert("El monto solicitado excede el límite permitido para un crédito.");
            }
        } else {
            alert("Por favor, ingresa un monto válido.");
        }
    }

    actualizarSaldo();
</script>
@endsection
