<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'BancApp') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <!-- Menú de Navegación Principal con Funcionalidades -->
        <header class="bg-white shadow p-4">
            <div class="container mx-auto flex items-center">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-10 mr-4">
                <h1 class="text-xl font-bold text-left">BancApp</h1>
                <p class="text-sm text-gray-600 ml-4">Entorno Virtual Personas</p>
                <div class="text-right text-xs text-gray-600 ml-auto">
                    <p class="mb-1">Su última visita fue: Lunes 18 de Noviembre de 2024 7:50:48 PM</p>
                    <p>Fecha y hora actual: Martes 19 de Noviembre de 2024 8:43:55 PM</p>
                </div>
            </div>
        </header>

        <!-- Menú de Navegación Principal -->
        <nav class="bg-gradient-to-r from-blue-800 to-blue-900 text-white py-4 rounded-lg shadow-xl flex justify-between items-center px-8 mt-4">
            <ul class="flex flex-wrap items-center font-medium tracking-wide text-xs space-x-4">
                <li class="pr-4"><a href="{{ route('cuentas.index') }}" class="hover:underline hover:text-blue-300 transition duration-200 ease-in-out">Cuentas</a></li>
                <li class="border-r border-gray-400 pr-4"><a href="{{ route('prestamos') }}" class="hover:underline hover:text-blue-300 transition duration-200 ease-in-out">créditos</a></li>
                <li class="pr-4"><a href="{{ route('transferencias') }}" class="hover:underline hover:text-blue-300 transition duration-200 ease-in-out">Transferencias</a></li>
                <li class="border-r border-gray-400 pr-4"><a href="{{ route('pago_servicios') }}" class="hover:underline hover:text-blue-300 transition duration-200 ease-in-out">Pagos</a></li>
                <li class="pr-4"><a href="{{ route('tarjetas_credito') }}" class="hover:underline hover:text-blue-300 transition duration-200 ease-in-out">Tarjetas de Crédito</a></li>
                <li class="border-r border-gray-400 pr-4"><a href="#" class="hover:underline hover:text-blue-300 transition duration-200 ease-in-out">Asesoría</a></li>
            </ul>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="bg-red-500 text-white font-medium text-xs px-3 py-1.5 rounded-lg transition duration-300 ease-in-out hover:bg-red-600 ml-4">Cerrar sesión</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </nav>

        <!-- Contenido principal -->
        <div>
            @yield('content')
        </div>
    </div>
</body>
</html>

