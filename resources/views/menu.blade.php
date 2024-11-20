@extends('layouts.app')

@section('content')
<!-- Banner Principal -->
<div class="container mx-auto p-6 bg-gray-100 rounded-lg shadow-md mb-6">
    <h2 class="text-3xl font-bold text-gray-800 mb-4">Sucursal Virtual Personas - BANCAPP</h2>
    <div class="flex justify-between items-center">
        <p class="text-gray-600">Su última visita fue: Lunes 18 de Noviembre de 2024 7:50:48 PM</p>
        <p class="text-gray-600">Fecha y hora actual: Martes 19 de Noviembre de 2024 8:43:55 PM</p>
    </div>
</div>

<!-- Menú de Navegación Principal con Funcionalidades -->
<nav class="bg-gray-800 text-white py-4 mb-6">
    <div class="container mx-auto px-6">
        <ul class="flex space-x-6">
            <li><a href="{{ route('cuentas.index') }}" class="hover:underline">Cuentas</a></li>
            <li><a href="{{ route('prestamos') }}" class="hover:underline">Préstamos</a></li>
            <li><a href="{{ route('transferencias') }}" class="hover:underline">Transferencias</a></li>
            <li><a href="{{ route('pago_servicios') }}" class="hover:underline">Pagos</a></li>
            <li><a href="{{ route('tarjetas_credito') }}" class="hover:underline">Tarjetas de Crédito</a></li>
            <li><a href="#" class="hover:underline">Créditos</a></li>
            <li><a href="#" class="hover:underline">Asesoría</a></li>
        </ul>
    </div>
</nav>

<div class="container mx-auto p-6 bg-gray-100 rounded-lg shadow-md">
    <!-- Sección Saldos por Producto -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
        <h3 class="text-2xl font-bold text-gray-800 mb-4">Saldos por producto</h3>
        <table class="w-full text-left table-auto border-collapse">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2 border">Tipo</th>
                    <th class="px-4 py-2 border">Número</th>
                    <th class="px-4 py-2 border">Saldo Disponible</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="px-4 py-2 border">Cuentas de ahorros y corriente</td>
                    <td class="px-4 py-2 border">261-000031-47</td>
                    <td class="px-4 py-2 border">$ 44.51</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
