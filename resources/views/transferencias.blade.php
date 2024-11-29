@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <div class="mb-6">
        <a href="{{ route('menu') }}" class="inline-flex items-center text-blue-700 font-semibold px-4 py-2 rounded-full hover:bg-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm-1-9H5.707l2.147-2.146a.5.5 0 00-.708-.708l-3 3a.5.5 0 000 .708l3 3a.5.5 0 00.708-.708L5.707 9H9a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5z" clip-rule="evenodd" />
            </svg>
            Menú Principal
        </a>
    </div>
    <h2 class="text-3xl font-bold text-blue-900 mb-8 text-center">Transferencias</h2>

    <!-- Simulación del Saldo -->
    <div class="bg-gray-100 text-gray-800 shadow-lg rounded-lg p-8 mb-6">
        <div class="flex justify-between items-center">
            <div>
                <h3 class="text-xl font-semibold mb-1">Saldo de Cuenta</h3>
                <p class="text-gray-600">Número de Cuenta: 1234-5678-9012-3456</p>
            </div>
            <p id="saldo" class="text-2xl font-bold text-gray-900">$5,000.00</p>
        </div>
    </div>

    <!-- Formulario de transferencia -->
    <div class="bg-white shadow-lg rounded-lg p-8 mb-6">
        <h3 class="text-xl font-semibold text-gray-800 mb-4">Transferencia a otra Cuenta</h3>
        <input type="text" id="cuenta-destino" placeholder="Número de cuenta destino" class="w-full p-2 rounded text-gray-700 mb-4">
        <input type="number" id="monto-transferencia" placeholder="Monto a transferir" class="w-full p-2 rounded text-gray-700 mb-4">
        <button onclick="realizarTransferencia()" class="bg-blue-600 text-white px-4 py-2 rounded-full hover:bg-blue-700">
            Transferir
        </button>
    </div>

    <!-- Historial de Transferencias -->
    <div class="bg-white shadow-lg rounded-lg p-8 mt-8">
        <h3 class="text-xl font-semibold text-gray-800 mb-4">Historial de Transferencias</h3>
        <ul id="historial-transferencias" class="list-none space-y-2 text-gray-700">
            <!-- Las transferencias aparecerán aquí -->
        </ul>
    </div>
</div>

<script>
    let saldo = 5000.00;

    function actualizarSaldo() {
        document.getElementById('saldo').textContent = `$${saldo.toFixed(2)}`;
    }

    function agregarHistorialTransferencia(cuenta, monto) {
        const historial = document.getElementById('historial-transferencias');
        const item = document.createElement('li');
        item.className = "border-b border-gray-300 py-2 flex justify-between";
        item.innerHTML = `<span>Transferencia a la cuenta ${cuenta}</span><span>-$${monto.toFixed(2)}</span>`;
        historial.prepend(item);
    }

    function realizarTransferencia() {
        const cuenta = document.getElementById('cuenta-destino').value;
        const monto = parseFloat(document.getElementById('monto-transferencia').value);

        if (cuenta && !isNaN(monto) && monto > 0) {
            if (monto <= saldo) {
                // Realizar la transferencia
                saldo -= monto;
                actualizarSaldo();
                agregarHistorialTransferencia(cuenta, monto);

                // Alerta de confirmación
                alert(`Has transferido $${monto.toFixed(2)} a la cuenta ${cuenta}.`);
                
                // Limpiar campos
                document.getElementById('cuenta-destino').value = '';
                document.getElementById('monto-transferencia').value = '';
            } else {
                alert("Saldo insuficiente para realizar la transferencia.");
            }
        } else {
            alert("Por favor, ingresa un número de cuenta y un monto válido.");
        }
    }

    actualizarSaldo();
</script>
@endsection
