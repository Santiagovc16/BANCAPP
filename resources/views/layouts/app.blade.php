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
        <!-- Barra de Navegación -->
        <nav class="bg-white shadow">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <!-- Cerrar Sesión -->
                        <div class="flex-shrink-0 flex items-center">
                            <a href="{{ route('logout') }}" class="text-lg font-semibold text-red-600"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Cerrar Sesión
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                @csrf
                            </form>
                        </div>

                        <!-- Enlaces del menú -->
                        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                            <a href="{{ route('cuentas.index') }}" class="text-gray-500 hover:text-gray-700 focus:outline-none focus:text-gray-700 transition duration-150 ease-in-out">
                                Cuentas
                            </a>
                            <!-- Puedes añadir más enlaces aquí -->
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Contenido principal -->
        <div>
            @yield('content')
        </div>
    </div>
</body>
</html>
