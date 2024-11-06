@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <div class="flex justify-between mb-6">
        <a href="{{ route('menu') }}" class="bg-gray-200 text-blue-700 font-semibold px-4 py-2 rounded-full hover:bg-gray-300">
            &larr; Menú Principal
        </a>
    </div>

    <h2 class="text-3xl font-semibold text-blue-900 mb-8 text-center">Transferencias</h2>

    <div class="bg-white shadow-lg rounded-lg p-8">
        <h3 class="text-xl font-semibold text-gray-800 mb-4">Transferencia a otra Cuenta</h3>
        <input type="text" id="cuenta-destino" placeholder="Número de cuenta destino" class="w-full p-2 rounded text-gray-700 mb-4">
        <input type="number" id="monto-transferencia" placeholder="Monto a transferir" class="w-full p-2 rounded text-gray-700 mb-4">
        <button onclick="realizarTransferencia()" class="bg-blue-600 text-white px-4 py-2 rounded-full hover:bg-blue-700">
            Transferir
        </button>
    </div>
</div>

<script>
    function realizarTransferencia() {
        const cuenta = document.getElementById('cuenta-destino').value;
        const monto = document.getElementById('monto-transferencia').value;
        if (cuenta && monto && monto > 0) {
            alert(`Has transferido $${monto} a la cuenta ${cuenta}.`);
        } else {
            alert("Por favor, ingresa un número de cuenta y un monto válido.");
        }
    }
</script>
@endsection
