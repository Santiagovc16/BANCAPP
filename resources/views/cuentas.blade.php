@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <!-- Botones de regreso -->
    <div class="flex justify-between mb-6">
        <a href="{{ route('menu') }}" class="bg-gray-200 text-blue-700 font-semibold px-4 py-2 rounded-full hover:bg-gray-300">
            &larr; Menú Principal
        </a>
        <a href="{{ route('dashboard') }}" class="bg-gray-200 text-blue-700 font-semibold px-4 py-2 rounded-full hover:bg-gray-300">
            &larr; Dashboard
        </a>
    </div>

    <h2 class="text-3xl font-semibold text-blue-900 mb-8 text-center">Cuenta Bancaria</h2>

    <!-- Saldo Disponible -->
    <div class="bg-white shadow-lg rounded-lg p-8 mb-6 text-center">
        <h3 class="text-xl font-semibold text-gray-800">Saldo Disponible</h3>
        <p id="saldo" class="text-4xl font-bold text-green-600 mt-4">$0</p>
    </div>

    <!-- Formulario de Transacciones -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
        <!-- Depositar -->
        <div class="bg-gradient-to-r from-green-500 to-green-700 text-white rounded-lg p-6 shadow-md text-center">
            <h4 class="text-xl font-semibold mb-4">Depositar</h4>
            <input type="number" id="monto-deposito" class="w-full p-2 rounded text-gray-700 mb-4" placeholder="Monto a depositar">
            <button onclick="depositar()" class="bg-white text-green-700 font-semibold px-4 py-2 rounded-full hover:bg-green-100">Depositar</button>
        </div>

        <!-- Retirar -->
        <div class="bg-gradient-to-r from-red-500 to-red-700 text-white rounded-lg p-6 shadow-md text-center">
            <h4 class="text-xl font-semibold mb-4">Retirar</h4>
            <input type="number" id="monto-retiro" class="w-full p-2 rounded text-gray-700 mb-4" placeholder="Monto a retirar">
            <button onclick="retirar()" class="bg-white text-red-700 font-semibold px-4 py-2 rounded-full hover:bg-red-100">Retirar</button>
        </div>
    </div>

    <!-- Historial de Transacciones -->
    <div class="bg-white shadow-lg rounded-lg p-8">
        <h3 class="text-xl font-semibold text-gray-800 mb-4">Historial de Transacciones</h3>
        <ul id="historial" class="list-disc pl-5 space-y-2">
            <!-- Las transacciones se agregarán aquí -->
        </ul>
    </div>
</div>

<script>
    // JavaScript para manejo de saldo
    let saldo = 0;

    function actualizarSaldo() {
        document.getElementById('saldo').innerText = `$${saldo.toFixed(2)}`;
    }

    function agregarHistorial(tipo, monto) {
        const historial = document.getElementById('historial');
        const transaccion = document.createElement('li');
        transaccion.innerText = `${tipo}: $${monto.toFixed(2)}`;
        historial.prepend(transaccion);
    }

    function depositar() {
        const monto = parseFloat(document.getElementById('monto-deposito').value);
        if (!isNaN(monto) && monto > 0) {
            saldo += monto;
            actualizarSaldo();
            agregarHistorial('Depósito', monto);
            document.getElementById('monto-deposito').value = '';
        } else {
            alert("Por favor, ingrese un monto válido para depositar.");
        }
    }

    function retirar() {
        const monto = parseFloat(document.getElementById('monto-retiro').value);
        if (!isNaN(monto) && monto > 0) {
            if (monto <= saldo) {
                saldo -= monto;
                actualizarSaldo();
                agregarHistorial('Retiro', monto);
                document.getElementById('monto-retiro').value = '';
            } else {
                alert("Fondos insuficientes para realizar el retiro.");
            }
        } else {
            alert("Por favor, ingrese un monto válido para retirar.");
        }
    }

    actualizarSaldo();
</script>
@endsection
