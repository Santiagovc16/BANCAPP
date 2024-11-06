
@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <div class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-2xl font-semibold text-gray-800">Transacciones</h2>

        <!-- Botón para desplegar el menú -->
        <div x-data="{ open: false }" class="relative mt-4">
            <button @click="open = !open" class="bg-blue-600 text-white px-4 py-2 rounded-md focus:outline-none hover:bg-blue-700">
                Opciones de Transacciones
            </button>

            <!-- Menú desplegable -->
            <div x-show="open" @click.away="open = false" class="absolute mt-2 bg-white shadow-lg rounded-md w-48 py-2 z-20">
                <a href="{{ route('transactions.deposit') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">
                    Depósitos
                </a>
                <a href="{{ route('transactions.withdraw') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">
                    Retiros
                </a>
                <a href="{{ route('transactions.transfer') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">
                    Transferencias
                </a>
                <a href="{{ route('transactions.history') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">
                    Historial
                </a>
            </div>
        </div>

        <!-- Contenido de la sección de transacciones -->
        <div class="mt-6">
            <p class="text-gray-600">Selecciona una opción del menú para ver más detalles.</p>
            <!-- Aquí puedes agregar más contenido específico según cada opción seleccionada -->
        </div>
    </div>
</div>

<!-- Scripts de Alpine.js para manejar la funcionalidad del menú -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
@endsection
