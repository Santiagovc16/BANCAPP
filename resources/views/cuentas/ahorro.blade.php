@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <div class="mb-6">
        <a href="{{ route('menu') }}" class="inline-flex items-center text-blue-700 font-semibold px-4 py-2 rounded-full hover:bg-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm-1-9H5.707l2.147-2.146a.5.5 0 00-.708-.708l-3 3a.5.5 0 000 .708l3 3a.5.5 0 00.708-.708L5.707 9H9a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5z" clip-rule="evenodd" />
            </svg>
            Menú Principal
        </a>
    </div>
    <h2 class="text-xl font-semibold text-gray-800 mb-6 text-left">Saldo por Producto</h2>

    <!-- Simulación de Saldo -->
    <div class="bg-gray-100 text-gray-800 shadow-md rounded-lg p-6 mb-6">
        <div class="flex justify-between items-center">
            <div>
                <h3 class="text-base font-semibold mb-1">Cuentas de ahorros y corriente</h3>
                <p class="text-sm text-gray-600">Ahorros - 261-000031-47</p>
            </div>
            <p id="saldo" class="text-2xl font-bold text-gray-900">$0.00</p>
        </div>
    </div>

    <!-- Consulta de Pagos -->
    <div class="bg-gray-100 text-gray-800 shadow-md rounded-lg p-6 mb-6">
        <h3 class="text-base font-semibold mb-4">Consulta de pagos</h3>
        <div class="grid grid-cols-1 gap-4">
            <!-- Tarjetas de Crédito -->
            <div class="border-b border-gray-300 py-2">
                <h4 class="text-sm font-semibold">Tarjetas de crédito</h4>
                <button class="text-blue-600 text-sm">Ver fecha de sus próximos pagos</button>
            </div>
            <!-- Créditos -->
            <div class="border-b border-gray-300 py-2">
                <h4 class="text-sm font-semibold">Créditos</h4>
                <button class="text-blue-600 text-sm">Ver fecha de sus próximos pagos</button>
            </div>
        </div>
    </div>

    <!-- Simulación de Transacciones -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
        <!-- Depósito -->
        <div class="bg-white border border-gray-300 text-gray-800 rounded-lg p-4 shadow-md flex flex-col items-center">
            <h4 class="text-sm font-semibold mb-4">Depositar</h4>
            <input type="number" id="deposito" class="w-full p-2 rounded border border-gray-300 text-gray-800 text-sm mb-4 placeholder-gray-500" placeholder="Monto a depositar">
            <button onclick="depositar()" class="bg-blue-600 text-white font-semibold px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-200">Depositar</button>
        </div>

        <!-- Retiro -->
        <div class="bg-white border border-gray-300 text-gray-800 rounded-lg p-4 shadow-md flex flex-col items-center">
            <h4 class="text-sm font-semibold mb-4">Retirar</h4>
            <input type="number" id="retiro" class="w-full p-2 rounded border border-gray-300 text-gray-800 text-sm mb-4 placeholder-gray-500" placeholder="Monto a retirar">
            <button onclick="retirar()" class="bg-red-600 text-white font-semibold px-4 py-2 rounded-lg hover:bg-red-700 transition duration-200">Retirar</button>
        </div>
    </div>

    <!-- Historial de Transacciones -->
    <div class="bg-gray-100 text-gray-800 shadow-md rounded-lg p-6">
        <h3 class="text-base font-semibold mb-4">Historial de Transacciones</h3>
        <ul id="historial" class="list-none space-y-2 text-sm">
            <!-- Las transacciones aparecerán aquí -->
        </ul>
    </div>
</div>

<script>
    let saldo = 0;

    function actualizarSaldo() {
        document.getElementById('saldo').textContent = `$${saldo.toFixed(2)}`;
    }

    function agregarHistorial(tipo, monto) {
        const historial = document.getElementById('historial');
        const item = document.createElement('li');
        item.className = "border-b border-gray-300 py-2 flex justify-between";
        item.innerHTML = `<span>${tipo}</span><span>$${monto.toFixed(2)}</span>`;
        historial.prepend(item);
    }

    function depositar() {
        const monto = parseFloat(document.getElementById('deposito').value);
        if (!isNaN(monto) && monto > 0) {
            saldo += monto;
            actualizarSaldo();
            agregarHistorial('Depósito', monto);
            document.getElementById('deposito').value = '';
        } else {
            alert("Ingrese un monto válido para depositar.");
        }
    }

    function retirar() {
        const monto = parseFloat(document.getElementById('retiro').value);
        if (!isNaN(monto) && monto > 0) {
            if (monto <= saldo) {
                saldo -= monto;
                actualizarSaldo();
                agregarHistorial('Retiro', monto);
                document.getElementById('retiro').value = '';
            } else {
                alert("Fondos insuficientes.");
            }
        } else {
            alert("Ingrese un monto válido para retirar.");
        }
    }

    actualizarSaldo();
</script>
@endsection