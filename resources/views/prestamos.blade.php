@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <div class="flex justify-between mb-6">
        <a href="{{ route('menu') }}" class="bg-gray-200 text-blue-700 font-semibold px-4 py-2 rounded-full hover:bg-gray-300">
            &larr; Menú Principal
        </a>
    </div>

    <h2 class="text-3xl font-semibold text-blue-900 mb-8 text-center">Préstamos</h2>

    <div class="bg-white shadow-lg rounded-lg p-8 mb-6">
        <!-- Estado del Préstamo -->
        <h3 class="text-xl font-semibold text-gray-800">Préstamos Actuales</h3>
        <p class="text-gray-600">Monto: $50,000</p>
        <p class="text-gray-600">Interés: 8% anual</p>
        <p class="text-gray-600">Plazo: 24 meses</p>
    </div>

    <!-- Aplicar para un Nuevo Préstamo -->
    <div class="bg-white shadow-lg rounded-lg p-8">
        <h3 class="text-xl font-semibold text-gray-800 mb-4">Aplicar para un Nuevo Préstamo</h3>
        <input type="number" id="monto-prestamo" placeholder="Monto del préstamo" class="w-full p-2 rounded text-gray-700 mb-4">
        <button onclick="aplicarPrestamo()" class="bg-blue-600 text-white px-4 py-2 rounded-full hover:bg-blue-700">
            Aplicar
        </button>
    </div>
</div>

<script>
    function aplicarPrestamo() {
        const monto = document.getElementById('monto-prestamo').value;
        if (monto && monto > 0) {
            alert(`Has aplicado para un préstamo de $${monto}`);
        } else {
            alert("Por favor, ingresa un monto válido.");
        }
    }
</script>
@endsection
