@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <div class="flex justify-between mb-6">
        <a href="{{ route('menu') }}" class="bg-gray-200 text-blue-700 font-semibold px-4 py-2 rounded-full hover:bg-gray-300">
            &larr; Menú Principal
        </a>
    </div>

    <h2 class="text-3xl font-semibold text-blue-900 mb-8 text-center">Pago de Servicios</h2>

    <!-- Saldo Actual -->
    <div class="bg-gray-100 text-gray-800 shadow-lg rounded-lg p-8 mb-6">
        <div class="flex justify-between items-center">
            <div>
                <h3 class="text-xl font-semibold mb-1">Saldo de Cuenta</h3>
                <p class="text-gray-600">Número de Cuenta: 1234-5678-9012-3456</p>
            </div>
            <p id="saldo" class="text-2xl font-bold text-gray-900">$5,000.00</p>
        </div>
    </div>

    <!-- Formulario de Pago de Servicios -->
    <div class="bg-white shadow-lg rounded-lg p-8">
        <h3 class="text-xl font-semibold text-gray-800 mb-4">Selecciona un Servicio</h3>
        <select id="servicio" class="w-full p-2 rounded text-gray-700 mb-4">
            <option value="Luz">Luz</option>
            <option value="Agua">Agua</option>
            <option value="Gas">Gas</option>
        </select>
        <input type="number" id="monto-servicio" placeholder="Monto a pagar" class="w-full p-2 rounded text-gray-700 mb-4">
        <button onclick="pagarServicio()" class="bg-blue-600 text-white px-4 py-2 rounded-full hover:bg-blue-700">
            Pagar Servicio
        </button>
    </div>

    <!-- Historial de Pagos de Servicios -->
    <div class="bg-white shadow-lg rounded-lg p-8 mt-8">
        <h3 class="text-xl font-semibold text-gray-800 mb-4">Historial de Pagos de Servicios</h3>
        <ul id="historial-pagos" class="list-none space-y-2 text-gray-700">
            <!-- Los pagos aparecerán aquí -->
        </ul>
    </div>
</div>

<script>
    let saldo = 5000.00;

    function actualizarSaldo() {
        document.getElementById('saldo').textContent = `$${saldo.toFixed(2)}`;
    }

    function agregarHistorialPago(servicio, monto) {
        const historial = document.getElementById('historial-pagos');
        const item = document.createElement('li');
        item.className = "border-b border-gray-300 py-2 flex justify-between";
        item.innerHTML = `<span>Pago de ${servicio}</span><span>-$${monto.toFixed(2)}</span>`;
        historial.prepend(item);
    }

    function pagarServicio() {
        const servicio = document.getElementById('servicio').value;
        const monto = parseFloat(document.getElementById('monto-servicio').value);

        if (!isNaN(monto) && monto > 0) {
            if (monto <= saldo) {
                // Realizar el pago del servicio
                saldo -= monto;
                actualizarSaldo();
                agregarHistorialPago(servicio, monto);

                // Alerta de confirmación
                alert(`Has pagado $${monto.toFixed(2)} por el servicio de ${servicio}.`);
                
                // Limpiar campos
                document.getElementById('monto-servicio').value = '';
            } else {
                alert("Saldo insuficiente para realizar el pago del servicio.");
            }
        } else {
            alert("Por favor, ingresa un monto válido.");
        }
    }

    actualizarSaldo();
</script>
@endsection
