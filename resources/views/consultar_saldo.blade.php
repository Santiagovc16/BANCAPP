@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-3xl font-semibold text-gray-800 mb-6">Consultar Saldo</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Saldo Cuenta de Ahorro -->
        <div class="bg-white shadow-md rounded-lg p-6 text-center">
            <h3 class="text-xl font-semibold mb-4">Saldo Cuenta de Ahorro</h3>
            <p class="text-gray-600 mb-4">Aquí puedes ver el saldo disponible en tu cuenta de ahorro.</p>
            <p class="text-2xl font-bold text-green-600">\$1,200,000</p> <!-- Cambia este valor dinámicamente si es necesario -->
        </div>

        <!-- Cupo Tarjeta de Crédito -->
        <div class="bg-white shadow-md rounded-lg p-6 text-center">
            <h3 class="text-xl font-semibold mb-4">Cupo Tarjeta de Crédito</h3>
            <p class="text-gray-600 mb-4">Consulta el cupo disponible en tu tarjeta de crédito.</p>
            <p class="text-2xl font-bold text-blue-600">\$5,000,000</p> <!-- Cambia este valor dinámicamente si es necesario -->
        </div>
    </div>
</div>
@endsection
