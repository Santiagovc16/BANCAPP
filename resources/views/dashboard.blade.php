<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'BancApp') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e9ecef;
            font-family: 'Helvetica Neue', Arial, sans-serif; font-weight: 600;
        }
        .navbar {
            background-color: #002d72;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .navbar-brand {
            color: #ffffff;
            font-weight: 700;
            font-size: 0.85rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
        .navbar-brand img {
            max-width: 50px;
            margin-right: 15px;
        }
        .nav-item a {
            color: #ffffff;
            font-weight: 500;
            font-size: 0.875rem;
        }
        .nav-item a:hover {
            color: #b8daff;
        }
        .dashboard-container {
            padding-top: 60px;
        }
        .card {
            margin-top: 30px;
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
            border: none;
            border-radius: 15px;
            transition: transform 0.3s;
        }
        .card:hover {
            transform: translateY(-10px);
        }
        .card-body {
            text-align: center;
            padding: 40px 30px;
        }
        .card-title {
            font-size: 1rem;
            font-weight: 700;
            color: #002d72;
            margin-bottom: 20px;
        }
        .btn-primary {
            background-color: #002d72;
            border: none;
            border-radius: 30px;
            padding: 12px 30px;
            font-size: 0.75rem;
        }
        .btn-primary:hover {
            background-color: #001a4d;
        }
        .banner {
            background: linear-gradient(to right, #004a9f, #002d72);
            padding: 20px;
            color: #ffffff;
            border-radius: 15px;
            text-align: center;
            margin-bottom: 30px;
            font-size: 1rem;
            font-weight: 700;
        }
        .footer {
            margin-top: 60px;
            padding: 30px 0;
            background-color: #002d72;
            color: #ffffff;
            font-size: 1rem;
            text-align: center;
        }
        .countdown {
            font-size: 1rem;
            font-weight: 700;
            color: #ffc107;
            margin-top: 10px;
        }
        .loader {
            border: 16px solid #f3f3f3;
            border-top: 16px solid #004a9f;
            border-radius: 50%;
            width: 120px;
            height: 120px;
            position: relative;
            animation: spin 1.5s linear infinite;
            margin: 50px auto;
        }
        .loader::before, .loader::after {
            content: '';
            position: absolute;
            border-radius: 50%;
            background: #87ceeb;
            width: 20px;
            height: 20px;
            top: 50%;
            transform: translate(-50%, -50%);
            animation: bounce 1.5s ease-in-out infinite;
        }
        .loader::before {
            left: 20%;
            animation-delay: 0.3s;
        }
        .loader::after {
            right: 20%;
            animation-delay: 0.6s;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-15px); }
        }
    @keyframes gradientAnimation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logo.png') }}" alt="Logo"> ¡Hola, {{ auth()->user()->name }}!
        </a>
    </nav>

    <!-- Banner -->
    <div class="container">
        <div class="loader">
            
        </div>
        <div class="banner" style="margin-top: 50px; padding: 5px; font-size: 0.875rem; background: linear-gradient(90deg, #003366, #4fa3ff, #98fb98); background-size: 400% 400%; animation: gradientAnimation 6s ease infinite; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); width: fit-content; margin: auto;">
            <span style="font-style: italic;">Hola, Estamos creando algo maravilloso para ti   .</span>
            <div id="countdown" class="countdown" style="color: #0D4744;">6 segundos</div>
        </div>
    </div>

    <!-- Dashboard Content -->
    <div class="container dashboard-container">
        <div class="row justify-content-center">
            <!-- Menú Principal -->
        </div>
    </div>

    <!-- Redirección automática con contador -->
    <script>
        let countdownElement = document.getElementById('countdown');
        let countdownTime = 6;

        let countdownInterval = setInterval(function() {
            countdownTime--;
            countdownElement.textContent = countdownTime + ' segundos';
            if (countdownTime <= 0) {
                clearInterval(countdownInterval);
                window.location.href = "{{ route('menu') }}";
            }
        }, 100000);
    </script>

    <!-- Footer -->
    <footer class="footer" style="position: absolute; bottom: 0; width: 100%;">
        &copy; 2024 BancApp. Todos los derechos reservados.
    </footer>
</body>
</html>
