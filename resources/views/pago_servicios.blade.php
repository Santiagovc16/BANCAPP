@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <div class="flex justify-between mb-6">
        <a href="{{ route('menu') }}" class="bg-gray-200 text-blue-700 font-semibold px-4 py-2 rounded-full hover:bg-gray-300">
            &larr; Menú Principal
        </a>
    </div>

    <h2 class="text-3xl font-semibold text-blue-900 mb-8 text-center">Pago de Servicios</h2>

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
</div>

<script>
    function pagarServicio() {
        const servicio = document.getElementById('servicio').value;
        const monto = document.getElementById('monto-servici
