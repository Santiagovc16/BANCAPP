<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f3f4f6;
            font-family: 'Montserrat', sans-serif;
        }
        .navbar {
            background-color: #007BFF;
            padding: 15px;
        }
        .navbar-brand {
            color: white;
            font-weight: bold;
            display: flex;
            align-items: center;
        }
        .navbar-brand img {
            max-width: 40px;
            margin-right: 10px;
        }
        .nav-item a {
            color: white;
            font-weight: 500;
        }
        .nav-item a:hover {
            color: #d1e7ff;
        }
        .dashboard-container {
            padding-top: 40px;
        }
        .card {
            margin-top: 20px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            border: none;
            border-radius: 15px;
            transition: transform 0.2s;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card-body {
            text-align: center;
            padding: 40px 20px;
        }
        .card-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: #343a40;
            margin-bottom: 15px;
        }
        .btn-primary {
            background-color: #007BFF;
            border: none;
            border-radius: 25px;
            padding: 12px 24px;
            font-size: 1rem;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .footer {
            margin-top: 50px;
            padding: 20px 0;
            background-color: #f3f4f6;
            color: #6c757d;
            font-size: 0.9rem;
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logo.png') }}" alt="Logo"> ¡Hola, {{ $user->name }}!
        </a>
    </nav>

    <!-- Dashboard Content -->
    <div class="container dashboard-container">
        <div class="row justify-content-center">
            <!-- Menú Principal -->
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Menú BANCARIO</h5>
                        <p class="text-muted">Accede a todas las funcionalidades bancarias</p>
                        <a href="{{ route('menu') }}" class="btn btn-primary">Ir al Menú</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

            
