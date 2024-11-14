@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6 bg-blue-900">
    <h2 class="text-4xl font-bold text-white mb-8 text-center">Menú Principal BANCAPP</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Cuentas -->
        <div class="bg-white text-gray-800 rounded-xl p-6 shadow-lg transform hover:scale-105 transition duration-300 ease-in-out border border-blue-100">
            <div class="flex items-center mb-4">
                <div class="w-12 h-12 rounded-full bg-blue-500 flex items-center justify-center mr-4">
                    <i class="fas fa-wallet text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold">Cuentas</h3>
            </div>
            <p class="mb-6">Consulta y administra tus cuentas bancarias de manera fácil y segura.</p>
            <a href="{{ route('cuentas.index') }}" class="w-full inline-block text-center bg-blue-500 text-white font-semibold px-5 py-3 rounded-lg transition duration-300 ease-in-out hover:bg-blue-600">
                Ver Cuentas
            </a>
        </div>

        <!-- Préstamos -->
        <div class="bg-white text-gray-800 rounded-xl p-6 shadow-lg transform hover:scale-105 transition duration-300 ease-in-out border border-green-100">
            <div class="flex items-center mb-4">
                <div class="w-12 h-12 rounded-full bg-green-500 flex items-center justify-center mr-4">
                    <i class="fas fa-hand-holding-usd text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold">Préstamos</h3>
            </div>
            <p class="mb-6">Revisa tus préstamos y aplica a nuevos con condiciones especiales.</p>
            <a href="{{ route('prestamos') }}" class="w-full inline-block text-center bg-green-500 text-white font-semibold px-5 py-3 rounded-lg transition duration-300 ease-in-out hover:bg-green-600">
                Ver Préstamos
            </a>
        </div>

        <!-- Tarjetas de Crédito -->
        <div class="bg-white text-gray-800 rounded-xl p-6 shadow-lg transform hover:scale-105 transition duration-300 ease-in-out border border-purple-100">
            <div class="flex items-center mb-4">
                <div class="w-12 h-12 rounded-full bg-purple-500 flex items-center justify-center mr-4">
                    <i class="fas fa-credit-card text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold">Tarjetas de Crédito</h3>
            </div>
            <p class="mb-6">Consulta tus tarjetas y controla tu límite de crédito.</p>
            <a href="{{ route('tarjetas_credito') }}" class="w-full inline-block text-center bg-purple-500 text-white font-semibold px-5 py-3 rounded-lg transition duration-300 ease-in-out hover:bg-purple-600">
                Ver Tarjetas
            </a>
        </div>

        <!-- Pagos de Servicios -->
        <div class="bg-white text-gray-800 rounded-xl p-6 shadow-lg transform hover:scale-105 transition duration-300 ease-in-out border border-yellow-100">
            <div class="flex items-center mb-4">
                <div class="w-12 h-12 rounded-full bg-yellow-500 flex items-center justify-center mr-4">
                    <i class="fas fa-file-invoice-dollar text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold">Pagos de Servicios</h3>
            </div>
            <p class="mb-6">Paga tus servicios y facturas de manera cómoda y rápida.</p>
            <a href="{{ route('pago_servicios') }}" class="w-full inline-block text-center bg-yellow-500 text-white font-semibold px-5 py-3 rounded-lg transition duration-300 ease-in-out hover:bg-yellow-600">
                Pagar Servicios
            </a>
        </div>

        <!-- Transferencias -->
        <div class="bg-white text-gray-800 rounded-xl p-6 shadow-lg transform hover:scale-105 transition duration-300 ease-in-out border border-red-100">
            <div class="flex items-center mb-4">
                <div class="w-12 h-12 rounded-full bg-red-500 flex items-center justify-center mr-4">
                    <i class="fas fa-exchange-alt text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold">Transferencias</h3>
            </div>
            <p class="mb-6">Envía dinero a otras cuentas de forma segura y sin complicaciones.</p>
            <a href="{{ route('transferencias') }}" class="w-full inline-block text-center bg-red-500 text-white font-semibold px-5 py-3 rounded-lg transition duration-300 ease-in-out hover:bg-red-600">
                Hacer Transferencia
            </a>
        </div>

        <!-- Asesoría -->
        <div class="bg-white text-gray-800 rounded-xl p-6 shadow-lg transform hover:scale-105 transition duration-300 ease-in-out border border-teal-100">
            <div class="flex items-center mb-4">
                <div class="w-12 h-12 rounded-full bg-teal-500 flex items-center justify-center mr-4">
                    <i class="fas fa-user-headset text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold">Asesoría</h3>
            </div>
            <p class="mb-6">Obtén ayuda personalizada con tus productos financieros.</p>
            <a href="#" class="w-full inline-block text-center bg-teal-500 text-white font-semibold px-5 py-3 rounded-lg transition duration-300 ease-in-out hover:bg-teal-600">
                Solicitar Asesoría
            </a>
        </div>
    </div>
</div>
@endsection
