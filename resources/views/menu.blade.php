@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-4xl font-bold text-blue-900 mb-8 text-center">Menú Principal del Banco</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Cuentas -->
        <div class="bg-gradient-to-r from-blue-500 to-blue-700 text-white rounded-xl p-6 shadow-lg transform hover:scale-105 transition duration-300 ease-in-out">
            <h3 class="text-2xl font-bold mb-4">Cuentas</h3>
            <p class="mb-6">Consulta y administra tus cuentas bancarias de manera fácil y segura.</p>
            <a href="#" class="bg-white text-blue-700 font-semibold px-5 py-2 rounded-full transition duration-300 ease-in-out hover:bg-blue-100">
                Ver Cuentas
            </a>
        </div>

        <!-- Préstamos -->
        <div class="bg-gradient-to-r from-green-500 to-green-700 text-white rounded-xl p-6 shadow-lg transform hover:scale-105 transition duration-300 ease-in-out">
            <h3 class="text-2xl font-bold mb-4">Préstamos</h3>
            <p class="mb-6">Revisa tus préstamos y aplica a nuevos con condiciones especiales.</p>
            <a href="#" class="bg-white text-green-700 font-semibold px-5 py-2 rounded-full transition duration-300 ease-in-out hover:bg-green-100">
                Ver Préstamos
            </a>
        </div>

        <!-- Tarjetas de Crédito -->
        <div class="bg-gradient-to-r from-purple-500 to-purple-700 text-white rounded-xl p-6 shadow-lg transform hover:scale-105 transition duration-300 ease-in-out">
            <h3 class="text-2xl font-bold mb-4">Tarjetas de Crédito</h3>
            <p class="mb-6">Consulta tus tarjetas y controla tu límite de crédito.</p>
            <a href="#" class="bg-white text-purple-700 font-semibold px-5 py-2 rounded-full transition duration-300 ease-in-out hover:bg-purple-100">
                Ver Tarjetas
            </a>
        </div>

        <!-- Pagos de Servicios -->
        <div class="bg-gradient-to-r from-yellow-500 to-yellow-600 text-white rounded-xl p-6 shadow-lg transform hover:scale-105 transition duration-300 ease-in-out">
            <h3 class="text-2xl font-bold mb-4">Pagos de Servicios</h3>
            <p class="mb-6">Paga tus servicios y facturas de manera cómoda y rápida.</p>
            <a href="#" class="bg-white text-yellow-700 font-semibold px-5 py-2 rounded-full transition duration-300 ease-in-out hover:bg-yellow-100">
                Pagar Servicios
            </a>
        </div>

        <!-- Transferencias -->
        <div class="bg-gradient-to-r from-red-500 to-red-700 text-white rounded-xl p-6 shadow-lg transform hover:scale-105 transition duration-300 ease-in-out">
            <h3 class="text-2xl font-bold mb-4">Transferencias</h3>
            <p class="mb-6">Envía dinero a otras cuentas de forma segura y sin complicaciones.</p>
            <a href="{{ route('transactions') }}" class="bg-white text-red-700 font-semibold px-5 py-2 rounded-full transition duration-300 ease-in-out hover:bg-red-100">
                Hacer Transferencia
            </a>
        </div>

        <!-- Asesoría -->
        <div class="bg-gradient-to-r from-teal-500 to-teal-700 text-white rounded-xl p-6 shadow-lg transform hover:scale-105 transition duration-300 ease-in-out">
            <h3 class="text-2xl font-bold mb-4">Asesoría</h3>
            <p class="mb-6">Obtén ayuda personalizada con tus productos financieros.</p>
            <a href="#" class="bg-white text-teal-700 font-semibold px-5 py-2 rounded-full transition duration-300 ease-in-out hover:bg-teal-100">
                Solicitar Asesoría
            </a>
        </div>
    </div>
</div>
@endsection
