@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <div class="flex justify-between mb-6">
        <a href="{{ route('menu') }}" class="bg-gray-200 text-blue-700 font-semibold px-4 py-2 rounded-full hover:bg-gray-300">
            &larr; Menú Principal
        </a>
    </div>

    <h2 class="text-3xl font-semibold text-blue-900 mb-8 text-center">Tarjetas de Crédito</h2>

    <div class="bg-gradient-to-r from-blue-500 to-blue-800 shadow-lg rounded-lg p-8 mb-6 text-white">
        <h3 class="text-2xl font-semibold">Tarjeta de Crédito</h3>
        <p class="text-lg mt-4">Número de Tarjeta: **** **** **** 3456</p>
        <p id="limiteCredito" class="text-lg mt-2">Límite de Crédito: $10,000.00</p>
        <p id="saldoDisponible" class="text-lg mt-2">Saldo Disponible: $7,500.00</p>
    </div>

    <!-- Realizar un Pago -->
    <div class="bg-white shadow-lg rounded-lg p-8 mb-6">
        <h3 class="text-xl font-semibold text-gray-800 mb-4">Realizar Pago</h3>
        <input type="number" id="monto-pago" placeholder="Monto a pagar" class="w-full p-2 rounded text-gray-700 mb-4">
        <button onclick="pagarTarjeta()" class="bg-blue-600 text-white px-4 py-2 rounded-full hover:bg-blue-700">
            Pagar
        </button>
    </div>

    <!-- Realizar un Avance -->
    <div class="bg-white shadow-lg rounded-lg p-8">
        <h3 class="text-xl font-semibold text-gray-800 mb-4">Realizar Avance</h3>
        <input type="number" id="monto-avance" placeholder="Monto de avance" class="w-full p-2 rounded text-gray-700 mb-4">
        <button onclick="realizarAvance()" class="bg-red-600 text-white px-4 py-2 rounded-full hover:bg-red-700">
            Realizar Avance
        </button>
    </div>

    <!-- Historial de Transacciones -->
    <div class="bg-white shadow-lg rounded-lg p-8 mt-8">
        <h3 class="text-xl font-semibold text-gray-800 mb-4">Historial de Transacciones</h3>
        <ul id="historial-transacciones" class="list-none space-y-2 text-gray-700">
            <!-- Las transacciones aparecerán aquí -->
        </ul>
    </div>
</div>

<script>
    let saldoDisponible = 7500.00;
    let limiteCredito = 10000.00;

    function actualizarSaldoDisponible() {
        document.getElementById('saldoDisponible').textContent = `Saldo Disponible: $${saldoDisponible.toFixed(2)}`;
    }

    function agregarHistorial(tipo, monto) {
        const historial = document.getElementById('historial-transacciones');
        const item = document.createElement('li');
        item.className = "border-b border-gray-300 py-2 flex justify-between";
        item.innerHTML = `<span>${tipo}</span><span>$${monto.toFixed(2)}</span>`;
        historial.prepend(item);
    }

    function pagarTarjeta() {
        const monto = parseFloat(document.getElementById('monto-pago').value);
        if (!isNaN(monto) && monto > 0) {
            if (saldoDisponible + monto <= limiteCredito) {
                saldoDisponible += monto;
                actualizarSaldoDisponible();
                agregarHistorial('Pago', monto);
                alert(`Has pagado $${monto.toFixed(2)} a tu tarjeta de crédito.`);
                document.getElementById('monto-pago').value = '';
            } else {
                alert("El monto excede el límite de crédito disponible.");
            }
        } else {
            alert("Por favor, ingresa un monto válido.");
        }
    }

    function realizarAvance() {
        const monto = parseFloat(document.getElementById('monto-avance').value);
        if (!isNaN(monto) && monto > 0) {
            if (monto <= saldoDisponible) {
                saldoDisponible -= monto;
                actualizarSaldoDisponible();
                agregarHistorial('Avance', monto);
                alert(`Has realizado un avance de $${monto.toFixed(2)}.`);
                document.getElementById('monto-avance').value = '';
            } else {
                alert("Fondos insuficientes en el saldo disponible.");
            }
        } else {
            alert("Por favor, ingresa un monto válido.");
        }
    }

    actualizarSaldoDisponible();
</script>
@endsection
