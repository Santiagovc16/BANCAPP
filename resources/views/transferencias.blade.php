@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-3xl font-bold text-blue-900 mb-8 text-center">Transferencias</h2>

    <!-- Formulario de transferencia -->
    <div class="bg-white shadow-lg rounded-lg p-8 mb-6">
        <h3 class="text-xl font-semibold text-gray-800 mb-4">Transferencia a otra Cuenta</h3>
        <input type="text" id="cuenta-destino" placeholder="Número de cuenta destino" class="w-full p-2 rounded text-gray-700 mb-4">
        <input type="number" id="monto-transferencia" placeholder="Monto a transferir" class="w-full p-2 rounded text-gray-700 mb-4">
        <button onclick="realizarTransferencia()" class="bg-blue-600 text-white px-4 py-2 rounded-full hover:bg-blue-700">
            Transferir
        </button>
    </div>

    <!-- Botón Historial de Transferencias -->
    <div class="text-center mt-8">
        <a href="{{ route('historial_transferencias') }}" class="bg-gray-800 text-white px-6 py-2 rounded-full hover:bg-gray-900">
            Historial de Transferencias
        </a>
    </div>
</div>

<script>
    function realizarTransferencia() {
        const cuenta = document.getElementById('cuenta-destino').value;
        const monto = document.getElementById('monto-transferencia').value;

        if (cuenta && monto && monto > 0) {
            // Guardar la transferencia en el historial de sesión
            let historial = JSON.parse(sessionStorage.getItem('historialTransferencias')) || [];
            const nuevaTransferencia = {
                fecha: new Date().toLocaleString(),
                cuenta: cuenta,
                monto: monto
            };
            historial.push(nuevaTransferencia);
            sessionStorage.setItem('historialTransferencias', JSON.stringify(historial));

            alert(`Has transferido $${monto} a la cuenta ${cuenta}.`);
            document.getElementById('cuenta-destino').value = '';
            document.getElementById('monto-transferencia').value = '';
        } else {
            alert("Por favor, ingresa un número de cuenta y un monto válido.");
        }
    }
</script>
@endsection
