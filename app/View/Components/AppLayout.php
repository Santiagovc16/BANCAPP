<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Archivos CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex flex-col">
        <!-- Header o navegación -->
        @include('layouts.navigation')

        <!-- Contenido principal -->
        <main class="flex-grow">
            {{ $slot }}
        </main>

        <!-- Footer -->
        <footer class="bg-gray-200 text-center p-4">
            &copy; {{ date('Y') }} Mi Aplicación. Todos los derechos reservados.
        </footer>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @livewireScripts
</body>
</html>
